<!-- ========================================================================= -->
<!-- START: NAV LINKS ADMIN (dipakai ulang di sidebar desktop & drawer mobile) -->
<!-- ========================================================================= -->
@php
    // Helper aktifitas untuk menandai menu yang sedang aktif
    $adminMenuActive = function ($patterns) {
        foreach ($patterns as $pattern) {
            if (request()->routeIs($pattern)) {
                return true;
            }
        }
        return false;
    };
@endphp

<!-- Tab 0: Laporan Helpdesk -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $adminMenuActive(['admin.helpdesk']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('admin.helpdesk') }}"
>
    <span class="material-symbols-outlined">support_agent</span>
    <span>Laporan Helpdesk</span>
</a>

<!-- Tab 1: Riwayat Helpdesk -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $adminMenuActive(['admin.riwayat-helpdesk']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('admin.riwayat-helpdesk') }}"
>
    <span
        class="material-symbols-outlined"
        style="font-variation-settings: 'FILL' 1"
        >history</span
    >
    <span>Riwayat Helpdesk</span>
</a>

<!-- Tab 2: User Management -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $adminMenuActive(['admin.manajemen-pengguna']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('admin.manajemen-pengguna') }}"
>
    <span class="material-symbols-outlined">group</span>
    <span>User Management</span>
</a>

<!-- Tab 3: Profil Saya -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $adminMenuActive(['admin.profil']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('admin.profil') }}"
>
    <span class="material-symbols-outlined">person</span>
    <span>Profil Saya</span>
</a>
<!-- ========================================================================= -->
<!-- END: NAV LINKS ADMIN -->
<!-- ========================================================================= -->
