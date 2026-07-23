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
    <main class="w-full min-h-screen flex flex-col ml-[280px]">
        <!-- TopNavBar -->

        <!-- Page Content -->
        <div class="p-container-padding flex-1 bg-surface-bright flex flex-col gap-stack-lg mt-6">
            <!-- Notification Banner (Waiting Approval) -->
            <h1 class="text-[32px] font-bold text-on-surface mb-6 uppercase tracking-tight">
                Dashboard
            </h1>
            <div
                class="bg-secondary-fixed/20 border border-secondary/30 rounded-xl p-4 flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-4">
                    <div
                        class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined">hourglass_empty</span>
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                            Laporan Membutuhkan Validasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Tiket #TK-2023-089 (Masalah Jaringan) telah diselesaikan oleh teknisi. Silakan validasi.
                        </p>
                    </div>
                </div>
                <button
                    class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-label-md text-label-md font-semibold hover:bg-secondary/90 transition-colors shadow-sm active:scale-95 duration-150">
                    Validasi &amp; Selesai
                </button>
            </div>
            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column: Report Form -->

                <!-- Right Column: My Reports -->
                <div class="flex flex-col gap-6 lg:col-span-3">
                    <div
                        class="bg-surface-container-lowest rounded-xl border border-outline-variant p-6 shadow-[0px_4px_12px_rgba(0,51,102,0.04)] h-full flex flex-col">
                        <div class="flex items-center justify-between mb-6 border-b border-surface-variant pb-4">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">list_alt</span>
                                <h2 class="font-headline-md text-headline-md text-on-surface">
                                    Laporan Saya
                                </h2>
                            </div>
                            <button class="text-secondary font-label-md text-label-md hover:underline">
                                Lihat Semua
                            </button>
                        </div>
                        <div class="flex flex-col gap-3 flex-1 overflow-y-auto">
                            <!-- Report Item 1 -->
                            <div
                                class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-amber-500"></div>
                                <div class="flex justify-between items-start pl-2">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-label-sm text-label-sm text-outline">#TK-2023-091</span>
                                            <span
                                                class="px-2 py-0.5 rounded bg-amber-500/10 text-amber-600 font-label-sm text-[10px] uppercase font-bold">In
                                                Progress</span>
                                        </div>
                                        <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold">
                                            Printer Ruang Rapat Offline
                                        </h4>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1">
                                            Printer tidak terdeteksi di jaringan lokal, butuh perbaikan segera.
                                        </p>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-outline">Hari ini, 10:30</span>
                                </div>
                            </div>
                            <!-- Report Item 2 -->
                            <div
                                class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-slate-400"></div>
                                <div class="flex justify-between items-start pl-2">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-label-sm text-label-sm text-outline">#TK-2023-089</span>
                                            <span
                                                class="px-2 py-0.5 rounded bg-secondary-fixed/50 text-secondary font-label-sm text-[10px] uppercase font-bold">Waiting
                                                Approval</span>
                                        </div>
                                        <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold">
                                            Masalah Koneksi WiFi Lantai 2
                                        </h4>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1">
                                            Sinyal sangat lemah di area sayap timur.
                                        </p>
                                    </div>
                                    <div class="flex flex-col items-end gap-2">
                                        <span class="font-label-sm text-label-sm text-outline">Kemarin, 14:15</span>
                                        <button
                                            class="bg-secondary text-on-secondary px-4 py-1.5 rounded-lg font-label-md text-label-md font-semibold hover:bg-secondary/90 transition-colors shadow-sm active:scale-95 duration-150 mt-1">
                                            Validasi &amp; Selesai
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Report Item 3 -->
                            <div
                                class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-emerald-500"></div>
                                <div class="flex justify-between items-start pl-2">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-label-sm text-label-sm text-outline">#TK-2023-085</span>
                                            <span
                                                class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-600 font-label-sm text-[10px] uppercase font-bold">Completed</span>
                                        </div>
                                        <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold">
                                            Request Install Software Baru
                                        </h4>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1">
                                            Butuh instalasi aplikasi desain grafis untuk tim publikasi.
                                        </p>
                                        <div class="mt-1 flex items-center gap-1">
                                            <span class="font-label-sm text-label-sm text-outline">Tanggal
                                                Selesai:</span>
                                            <span class="font-label-sm text-label-sm text-outline">12 Okt 2023</span>
                                        </div>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-outline">12 Okt 2023</span>
                                </div>
                            </div>
                            <!-- Report Item 9 -->
                            <div
                                class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-emerald-500"></div>
                                <div class="flex justify-between items-start pl-2">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-label-sm text-label-sm text-outline">#TK-2023-065</span>
                                            <span
                                                class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-600 font-label-sm text-[10px] uppercase font-bold">Completed</span>
                                        </div>
                                        <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold">
                                            Update Antivirus Workstation
                                        </h4>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1">
                                            Pembaruan database antivirus pada 15 unit komputer di divisi keuangan.
                                        </p>
                                        <div class="mt-1 flex items-center gap-1">
                                            <span class="font-label-sm text-label-sm text-outline">Tanggal
                                                Selesai:</span>
                                            <span class="font-label-sm text-label-sm text-outline">25 Sep 2023</span>
                                        </div>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-outline">25 Sep 2023</span>
                                </div>
                            </div>
                            <!-- Report Item 10 -->
                            <div
                                class="border border-outline-variant rounded-lg p-4 flex flex-col gap-3 hover:bg-surface-container-low transition-colors group relative overflow-hidden">
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-amber-500"></div>
                                <div class="flex justify-between items-start pl-2">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-label-sm text-label-sm text-outline">#TK-2023-062</span>
                                            <span
                                                class="px-2 py-0.5 rounded bg-amber-500/10 text-amber-600 font-label-sm text-[10px] uppercase font-bold">In
                                                Progress</span>
                                        </div>
                                        <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold">
                                            Troubleshoot Scanner HRD
                                        </h4>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-1">
                                            Scanner sering macet saat memproses dokumen lebih dari 5 lembar.
                                        </p>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-outline">20 Sep 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>