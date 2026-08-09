 <!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Pegawai - SHELTER</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed": "#c6e7ff",
                        "on-surface-variant": "#43474f",
                        "on-primary-container": "#799dd6",
                        surface: "#f7f9fb",
                        tertiary: "#10202d",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#82cfff",
                        "tertiary-container": "#253543",
                        "surface-container-highest": "#e0e3e5",
                        background: "#f7f9fb",
                        "tertiary-fixed": "#d4e4f6",
                        "surface-container-high": "#e6e8ea",
                        "outline-variant": "#c3c6d1",
                        "on-error-container": "#93000a",
                        secondary: "#00658d",
                        "primary-container": "#003366",
                        "inverse-primary": "#a7c8ff",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed-variant": "#394857",
                        "on-primary-fixed-variant": "#1f477b",
                        "surface-dim": "#d8dadc",
                        "on-tertiary-fixed": "#0d1d2a",
                        "error-container": "#ffdad6",
                        "on-background": "#191c1e",
                        "surface-variant": "#e0e3e5",
                        error: "#ba1a1a",
                        "on-secondary-fixed-variant": "#004c6b",
                        "secondary-container": "#2dbcfe",
                        primary: "#001e40",
                        "primary-fixed": "#d5e3ff",
                        "surface-container-low": "#f2f4f6",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "surface-container": "#eceef0",
                        "primary-fixed-dim": "#a7c8ff",
                        outline: "#737780",
                        "tertiary-fixed-dim": "#b8c8da",
                        "surface-bright": "#f7f9fb",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary-container": "#8d9eae",
                        "on-secondary-fixed": "#001e2d",
                        "on-primary-fixed": "#001b3c",
                        "on-surface": "#191c1e",
                        "on-secondary-container": "#004866",
                        "on-primary": "#ffffff",
                        "surface-tint": "#3a5f94",
                        "inverse-surface": "#2d3133",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px",
                    },
                    spacing: {
                        "stack-md": "16px",
                        "stack-lg": "32px",
                        gutter: "16px",
                        "stack-sm": "8px",
                        "container-padding": "24px",
                        unit: "8px",
                    },
                    fontFamily: {
                        "display-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-md": ["Inter"],
                    },
                    fontSize: {
                        "display-lg-mobile": [
                            "24px",
                            { lineHeight: "32px", fontWeight: "700" },
                        ],
                        "body-md": [
                            "14px",
                            { lineHeight: "20px", fontWeight: "400" },
                        ],
                        "headline-md": [
                            "24px",
                            { lineHeight: "32px", fontWeight: "600" },
                        ],
                        "label-sm": [
                            "11px",
                            { lineHeight: "14px", fontWeight: "500" },
                        ],
                        "headline-sm": [
                            "20px",
                            { lineHeight: "28px", fontWeight: "600" },
                        ],
                        "body-lg": [
                            "16px",
                            { lineHeight: "24px", fontWeight: "400" },
                        ],
                        "display-lg": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700",
                            },
                        ],
                        "label-md": [
                            "12px",
                            {
                                lineHeight: "16px",
                                letterSpacing: "0.05em",
                                fontWeight: "600",
                            },
                        ],
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen font-body-md text-body-md flex">
    <!-- Sidebar Pegawai -->
    @include('component.sidebar_pegawai')

    <!-- Main Content Area -->
    <main class="w-full min-h-screen flex flex-col lg:ml-[280px]">
<!-- Page Content -->
        <div class="p-container-padding flex-1 bg-surface-bright flex flex-col gap-stack-lg pt-[80px] lg:pt-0 mt-0 lg:mt-6">
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg font-bold text-on-surface mb-6 uppercase tracking-tight">
                Dashboard
            </h1>

             <!-- Notifikasi Laporan Membutuhkan Validasi -->
            @if($pendingApprovalLaporan)
            <div class="bg-secondary-fixed/20 border border-secondary/30 rounded-xl p-4 md:p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary flex-shrink-0">
                        <span class="material-symbols-outlined">hourglass_empty</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1 font-semibold">
                            Laporan Membutuhkan Validasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            <span class="font-bold text-primary">{{ $pendingApprovalLaporan->nomor_Helpdesk }}</span> telah diselesaikan oleh teknisi. Silakan lakukan validasi digital.
                        </p>
                    </div>
                </div>
                <a href="{{ route('pegawai.laporan-helpdesk.validasi-digital', $pendingApprovalLaporan->id_helpdesk) }}"
                    class="inline-flex items-center justify-center gap-2 bg-secondary text-on-secondary px-5 py-2.5 rounded-lg font-label-md text-label-md font-semibold hover:bg-secondary/90 transition-all shadow-sm active:scale-95 duration-150 whitespace-nowrap w-full sm:w-auto">
                    <span>Validasi &amp; Selesai</span>
                </a>
            </div>
            @endif

            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- My Reports -->
                <div class="flex flex-col gap-6 lg:col-span-3">
                    <div class="bg-surface-container-lowest rounded-xl border border-outline-variant p-6 shadow-[0px_4px_12px_rgba(0,51,102,0.04)] h-full flex flex-col">
                        <div class="flex items-center justify-between mb-6 border-b border-surface-variant pb-4">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">list_alt</span>
                                <h2 class="font-headline-md text-headline-md text-on-surface">
                                    Laporan Saya
                                </h2>
                            </div>
                            <a href="{{ route('pegawai.laporan-helpdesk') }}" class="text-secondary font-label-md text-label-md hover:underline font-semibold">
                                Lihat Semua
                            </a>
                        </div>
                        <div class="flex flex-col gap-3 flex-1 overflow-y-auto">
                            @forelse($laporans as $laporan)
                                @php
                                    $statusColors = [
                                        'In Progress' => 'bg-secondary-container/70',
                                        'in repair' => 'bg-amber-500',
                                        'Waiting Approval' => 'bg-slate-400',
                                        'Completed' => 'bg-emerald-500',
                                    ];
                                    $statusBgColors = [
                                        'In Progress' => 'bg-secondary-container/10 text-secondary-container',
                                        'in repair' => 'bg-amber-500/10 text-amber-600',
                                        'Waiting Approval' => 'bg-secondary-fixed/50 text-secondary',
                                        'Completed' => 'bg-emerald-500/10 text-emerald-600',
                                    ];
                                    $barColor = $statusColors[$laporan->status_Helpdesk] ?? 'bg-amber-500';
                                    $statusBg = $statusBgColors[$laporan->status_Helpdesk] ?? 'bg-amber-500/10 text-amber-600';
                                @endphp
                                <div class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                    <div class="absolute left-0 top-0 bottom-0 w-[3px] {{ $barColor }}"></div>
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 pl-2">
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center gap-2 mb-1 flex-wrap">
                                                <span class="font-label-sm text-label-sm text-outline">{{ $laporan->nomor_Helpdesk }}</span>
                                                <span class="px-2 py-0.5 rounded {{ $statusBg }} font-label-sm text-[10px] uppercase font-bold">{{ $laporan->status_Helpdesk }}</span>
                                            </div>
                                            <a href="{{ route('pegawai.laporan-helpdesk.detail', $laporan->id_helpdesk) }}" class="font-headline-sm text-[16px] text-on-surface font-semibold hover:text-primary transition-colors block line-clamp-1">
                                                {{ $laporan->judul_masalah }}
                                            </a>
                                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1 mt-0.5">
                                                {{ $laporan->deskripsi_keluhan }}
                                            </p>
                                        </div>
                                        <div class="flex flex-wrap sm:flex-col items-start sm:items-end justify-between w-full sm:w-auto gap-2 flex-shrink-0 border-t sm:border-t-0 pt-2 sm:pt-0 border-outline-variant/40">
                                            <span class="font-label-sm text-label-sm text-outline">{{ $laporan->tanggal_lapor ? $laporan->tanggal_lapor->format('d M Y') : '-' }}</span>
                                            <div class="flex items-center gap-2">
                                                @if($laporan->status_Helpdesk === 'Waiting Approval')
                                                <a href="{{ route('pegawai.laporan-helpdesk.validasi-digital', $laporan->id_helpdesk) }}"
                                                    class="inline-flex items-center gap-1.5 bg-secondary text-on-secondary px-3.5 py-1.5 rounded-lg font-label-md text-label-md font-semibold hover:bg-secondary/90 transition-colors shadow-sm active:scale-95 duration-150 whitespace-nowrap">
                                                    <span>Validasi &amp; Selesai</span>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-4xl mb-2">inbox</span>
                                    <p>Belum ada laporan.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>
