<!-- ========================================================================= -->
<!-- START: KOMPONEN SIDEBAR PEGAWAI (Responsif: Desktop + Mobile Drawer) -->
<!-- ========================================================================= -->
@include('component.text_scale')

@php
    $sidebarUser = auth()->user();
    $sidebarPhoto = null;

    if ($sidebarUser && filled($sidebarUser->foto_profil)) {
        $foto = $sidebarUser->foto_profil;

        // Jika sudah berupa URL lengkap
        if (is_string($foto) && preg_match('/^https?:\/\//i', $foto)) {
            $sidebarPhoto = $foto;
        }
        // Jika berupa data biner (BLOB) — deteksi via getimagesizefromstring
        elseif (is_string($foto) && @getimagesizefromstring($foto) !== false) {
            $mime = getimagesizefromstring($foto)['mime'] ?? 'image/jpeg';
            $sidebarPhoto = 'data:'.$mime.';base64,'.base64_encode($foto);
        }
        // Selain itu anggap sebagai path file
        elseif (is_string($foto)) {
            $sidebarPhoto = asset($foto);
        }
    }

    $pegawaiNavCtaRoute = route('pegawai.laporan-helpdesk.create');
@endphp

<!-- ============================================================ -->
<!-- TOP BAR MOBILE (hanya tampil di layar kecil / tablet) -->
<!-- ============================================================ -->
<header
    class="text-on-primary bg-primary border-outline-variant fixed top-0 left-0 z-30 flex h-16 w-full items-center justify-between border-b px-4 shadow-sm lg:hidden"
>
    <!-- Hamburger -->
    <button
        type="button"
        id="mobile-menu-btn"
        class="flex h-10 w-10 items-center justify-center rounded-lg text-white transition-colors hover:bg-white/10"
        aria-label="Buka menu"
    >
        <span class="material-symbols-outlined">menu</span>
    </button>

    <!-- Brand -->
    <div class="flex items-center gap-2">
        <span class="font-headline-sm text-headline-sm line-clamp-1 font-bold text-white">
            {{ $sidebarUser?->nama_lengkap ?: 'SHELTER' }}
        </span>
    </div>

    <!-- Foto Profil (Sebelah Kanan) -->
    <a href="{{ route('pegawai.profil') }}" class="bg-primary-fixed flex h-9 w-9 shrink-0 items-center justify-center rounded-full overflow-hidden border border-white/20 shadow-sm">
        <img
            src="{{ $sidebarPhoto ?: asset('images/default_profil.jpg') }}"
            alt="Profile"
            class="h-full w-full rounded-full object-cover"
        />
    </a>
</header>

<!-- ============================================================ -->
<!-- SIDEBAR DESKTOP (hidden di layar kecil) -->
<!-- ============================================================ -->
<nav
    class="text-on-primary border-outline-variant py-stack-md fixed top-0 left-0 z-20 hidden h-full w-[280px] flex-col border-r bg-primary shadow-sm lg:flex"
>
    <!-- Brand Header -->
    <div
        class="px-container-padding mb-stack-lg flex items-center gap-3"
    >
        <div
            class="bg-primary-fixed flex h-[55px] w-[55px] shrink-0 items-center justify-center rounded-full overflow-hidden"
        >
            <img
                src="{{ $sidebarPhoto ?: asset('images/default_profil.jpg') }}"
                alt="Profile"
                class="h-full w-full rounded-full object-cover"
            />
        </div>
        <div class="min-w-0">
            <h1
                class="font-headline-md  line-clamp-2 font-bold leading-tight tracking-tight text-white"
            >
                {{ $sidebarUser?->nama_lengkap ?: 'SHELTER' }}
            </h1>
        </div>
    </div>

    <!-- Primary CTA Button -->
    <div class="px-gutter mb-stack-md">
        <a href="{{ $pegawaiNavCtaRoute }}"
            class="text-on-secondary flex h-[44px] w-full items-center justify-center gap-2 rounded-lg bg-secondary py-2 shadow-sm transition-colors hover:bg-secondary/90"
        >
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1"
                >add</span
            >
            <span class="font-label-md text-label-md"
                >Buat Laporan Baru</span
            >
        </a>
    </div>

    <!-- Navigation Tabs -->
    <div class="flex flex-1 flex-col gap-1 overflow-y-auto">
        @include('component.nav_links_pegawai')
    </div>

    <!-- Footer Tabs (Logout) -->
    <div
        class="border-outline-variant/30 pt-stack-sm mt-auto flex flex-col gap-1 border-t"
    >
        <form method="POST" action="{{ route('logout') }}" class="mx-2 my-1">
            @csrf
            <button
                type="submit"
                class="font-label-md text-label-md flex w-full items-center gap-3 rounded-lg px-3 py-2 text-error-container transition-colors duration-200 hover:bg-white/10 hover:text-white"
            >
                <span class="material-symbols-outlined text-error">logout</span>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</nav>

<!-- ============================================================ -->
<!-- DRAWER MOBILE (slide-in dari kiri) -->
<!-- ============================================================ -->
<!-- Backdrop -->
<div
    class="fixed inset-0 z-40 hidden bg-primary/50 backdrop-blur-sm"
    id="mobile-menu-backdrop"
></div>

<!-- Drawer -->
<aside
    id="mobile-menu-drawer"
    class="text-on-primary bg-primary fixed top-0 left-0 z-50 flex h-full w-[280px] -translate-x-full flex-col shadow-2xl transition-transform duration-300 ease-in-out lg:hidden"
>
    <!-- Drawer Header -->
    <div class="border-outline-variant/30 flex items-center justify-between border-b px-4 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-primary-fixed flex h-9 w-9 shrink-0 items-center justify-center rounded-full overflow-hidden border border-white/20">
                <img
                    src="{{ $sidebarPhoto ?: asset('images/.jpg') }}"
                    alt="Profile"
                    class="h-full w-full rounded-full object-cover"
                />
            </div>
            <h1 class="font-headline-sm line-clamp-1 font-bold text-white">
                {{ $sidebarUser?->nama_lengkap ?: 'SHELTER' }}
            </h1>
        </div>
        <div class="flex items-center gap-2">
            
            <button
                type="button"
                id="mobile-menu-close"
                class="flex h-10 w-10 items-center justify-center rounded-lg text-white transition-colors hover:bg-white/10"
                aria-label="Tutup menu"
            >
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    </div>

    <!-- Primary CTA Button -->
    <div class="px-gutter my-4">
        <a
            href="{{ $pegawaiNavCtaRoute }}"
            class="text-on-secondary flex h-[44px] w-full items-center justify-center gap-2 rounded-lg bg-secondary py-2 shadow-sm transition-colors hover:bg-secondary/90"
        >
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1"
                >add</span
            >
            <span class="font-label-md text-label-md"
                >Buat Laporan Baru</span
            >
        </a>
    </div>

    <!-- Navigation -->
    <div class="flex flex-1 flex-col gap-1 overflow-y-auto">
        @include('component.nav_links_pegawai')
    </div>

    <!-- Footer Logout -->
    <div class="border-outline-variant/30 pt-stack-sm mt-auto flex flex-col gap-1 border-t">
        <form method="POST" action="{{ route('logout') }}" class="mx-2 my-1">
            @csrf
            <button
                type="submit"
                class="font-label-md text-label-md flex w-full items-center gap-3 rounded-lg px-3 py-2 text-error-container transition-colors duration-200 hover:bg-white/10 hover:text-white"
            >
                <span class="material-symbols-outlined text-error">logout</span>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</aside>

<!-- Script: Toggle Mobile Drawer -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const openBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('mobile-menu-close');
        const backdrop = document.getElementById('mobile-menu-backdrop');
        const drawer = document.getElementById('mobile-menu-drawer');

        if (!openBtn || !closeBtn || !backdrop || !drawer) return;

        function openMobileMenu() {
            drawer.classList.remove('-translate-x-full');
            backdrop.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            drawer.classList.add('-translate-x-full');
            backdrop.classList.add('hidden');
            document.body.style.overflow = '';
        }

        openBtn.addEventListener('click', openMobileMenu);
        closeBtn.addEventListener('click', closeMobileMenu);
        backdrop.addEventListener('click', closeMobileMenu);

        // Tutup saat mengklik link navigasi
        drawer.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMobileMenu);
        });

        // Tutup saat menekan Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    });
</script>
<!-- ========================================================================= -->
<!-- END: KOMPONEN SIDEBAR PEGAWAI -->
<!-- ========================================================================= -->
