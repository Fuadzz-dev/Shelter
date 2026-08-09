<!-- ========================================================================= -->
<!-- START: NAV LINKS PEGAWAI (dipakai ulang di sidebar desktop & drawer mobile) -->
<!-- ========================================================================= -->
@php
    // Helper aktifitas untuk menandai menu yang sedang aktif
    $pegawaiMenuActive = function ($patterns) {
        foreach ($patterns as $pattern) {
            if (request()->routeIs($pattern)) {
                return true;
            }
        }
        return false;
    };
@endphp

<!-- Tab 1: Dashboard -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $pegawaiMenuActive(['pegawai.dashboard']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('pegawai.dashboard') }}"
>
    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">dashboard</span>
    <span>Dashboard</span>
</a>

<!-- Tab 2: Laporan Helpdesk -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $pegawaiMenuActive(['pegawai.laporan-helpdesk', 'pegawai.laporan-helpdesk.*']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('pegawai.laporan-helpdesk') }}"
>
    <span
        class="material-symbols-outlined"
        style="font-variation-settings: 'FILL' 1"
        >support_agent</span
    >
    <span>Laporan Helpdesk</span>
</a>

<!-- Tab 3: Profil Saya -->
<a
    class="font-label-md text-label-md mx-2 my-1 flex items-center gap-3 rounded-lg px-3 py-2 transition-colors duration-200 {{ $pegawaiMenuActive(['pegawai.profil']) ? 'bg-secondary-container text-on-secondary-container shadow-sm' : 'text-on-primary/70 hover:bg-white/10 hover:text-white' }}"
    href="{{ route('pegawai.profil') }}"
>
    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">person</span>
    <span>Profil Saya</span>
</a>
<!-- ========================================================================= -->
<!-- END: NAV LINKS PEGAWAI -->
<!-- ========================================================================= -->
