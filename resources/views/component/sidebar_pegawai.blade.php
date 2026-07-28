<!-- ========================================================================= -->
<!-- START: KOMPONEN SIDEBAR PEGAWAI -->
<!-- ========================================================================= -->
<nav
    class="text-on-primary border-outline-variant py-stack-md fixed top-0 left-0 z-20 flex h-full w-[280px] flex-col border-r bg-primary shadow-sm"
>
    <!-- Brand Header -->
    <div
        class="px-container-padding mb-stack-lg flex items-center gap-3"
    >
        <div
            class="bg-primary-fixed flex h-[55px] w-[55px] shrink-0 items-center justify-center rounded-full"
        >
            <img
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="Profile"
                class="h-full w-full rounded-full object-cover"
            />
        </div>
        <div>
            <h1
                class="font-headline-md text-headline-md font-bold tracking-tight text-white"
            >
                SHELTER
            </h1>
        </div>
    </div>

    <!-- Primary CTA Button -->
    <div class="px-gutter mb-stack-md">
        <a href="{{ route('pegawai.laporan-helpdesk.create') }}"
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
        <!-- Tab 1: Dashboard -->
        <a
            class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ request()->routeIs('pegawai.dashboard') ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
            href="{{ route('pegawai.dashboard') }}"
        >
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">dashboard</span>
            <span>Dashboard</span>
        </a>

        <!-- Tab 2: Laporan Helpdesk -->
        <a
            class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ request()->routeIs('pegawai.laporan-helpdesk*') ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
            href="{{ route('pegawai.laporan-helpdesk') }}"
        >
            <span
                class="material-symbols-outlined"
                style="font-variation-settings: 'FILL' 1"
                >support_agent</span
            >
            <span>Laporan Helpdesk</span>
        </a>

        <!-- Tab 3: Profil Saya (Inactive) -->
        <a
            class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 text-on-primary/70 hover:bg-white/10 hover:text-white"
            href="#"
        >
            <span class="material-symbols-outlined">person</span>
            <span>Profil Saya</span>
        </a>
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
<!-- ========================================================================= -->
<!-- END: KOMPONEN SIDEBAR PEGAWAI -->
<!-- ========================================================================= -->
