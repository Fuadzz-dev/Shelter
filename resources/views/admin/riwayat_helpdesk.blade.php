<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Riwayat Helpdesk - Otoritas Bandar Udara Wilayah V</title>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-tint": "#3a5f94",
                        background: "#f7f9fb",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#c6e7ff",
                        "on-tertiary-container": "#8d9eae",
                        "surface-dim": "#d8dadc",
                        "on-primary-container": "#799dd6",
                        "tertiary-fixed": "#d4e4f6",
                        tertiary: "#10202d",
                        "primary-container": "#003366",
                        "on-tertiary-fixed-variant": "#394857",
                        "tertiary-fixed-dim": "#b8c8da",
                        surface: "#f7f9fb",
                        "on-secondary-container": "#004866",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary-fixed": "#001e2d",
                        "surface-variant": "#e0e3e5",
                        "tertiary-container": "#253543",
                        outline: "#737780",
                        "on-primary-fixed-variant": "#1f477b",
                        "inverse-primary": "#a7c8ff",
                        "surface-container-highest": "#e0e3e5",
                        "on-error-container": "#93000a",
                        "surface-container": "#eceef0",
                        "on-primary-fixed": "#001b3c",
                        "secondary-container": "#2dbcfe",
                        secondary: "#00658d",
                        "outline-variant": "#c3c6d1",
                        "on-secondary-fixed-variant": "#004c6b",
                        "primary-fixed-dim": "#a7c8ff",
                        "secondary-fixed-dim": "#82cfff",
                        "error-container": "#ffdad6",
                        primary: "#001e40",
                        "primary-fixed": "#d5e3ff",
                        "inverse-surface": "#2d3133",
                        "surface-bright": "#f7f9fb",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary-fixed": "#0d1d2a",
                        "on-surface-variant": "#43474f",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#191c1e",
                        "on-error": "#ffffff",
                        "on-background": "#191c1e",
                        "on-primary": "#ffffff",
                        error: "#ba1a1a",
                        "on-tertiary": "#ffffff",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px",
                    },
                    spacing: {
                        gutter: "16px",
                        unit: "8px",
                        "stack-sm": "8px",
                        "container-padding": "24px",
                        "stack-md": "16px",
                        "stack-lg": "32px",
                    },
                    fontFamily: {
                        "display-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "label-md": ["Inter"],
                    },
                    fontSize: {
                        "display-lg-mobile": [
                            "24px",
                            { lineHeight: "32px", fontWeight: "700" },
                        ],
                        "display-lg": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700",
                            },
                        ],
                        "label-sm": [
                            "11px",
                            { lineHeight: "14px", fontWeight: "500" },
                        ],
                        "headline-md": [
                            "24px",
                            { lineHeight: "32px", fontWeight: "600" },
                        ],
                        "body-md": [
                            "14px",
                            { lineHeight: "20px", fontWeight: "400" },
                        ],
                        "body-lg": [
                            "16px",
                            { lineHeight: "24px", fontWeight: "400" },
                        ],
                        "headline-sm": [
                            "20px",
                            { lineHeight: "28px", fontWeight: "600" },
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
            background-color: #f7f9fb;
        }
    </style>
</head>

<body class="font-body-md text-body-md text-on-background bg-background antialiased flex">
    <!-- Sidebar Admin -->
    @include('component.sidebar_admin')

    <!-- Main Content Canvas -->
    <main class="flex-1 w-full min-h-screen flex flex-col bg-background pt-4 ml-[280px]">
        <!-- Page Header -->
        <div class="px-container-padding flex flex-col md:flex-row md:items-end justify-between gap-4 py-stack-md">
            <div>
                <h2 class="font-display-lg text-display-lg text-primary mb-1">
                    Riwayat Helpdesk (Selesai)
                </h2>
            </div>
            <div class="flex gap-3">
                <button
                    class="h-[44px] px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface font-label-md text-label-md flex items-center gap-2 hover:bg-surface-container-low transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-lg">download</span>
                    Unduh CSV
                </button>
                <button
                    class="h-[44px] px-4 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center gap-2 hover:bg-primary/90 transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-lg">print</span>
                    Cetak Laporan
                </button>
            </div>
        </div>
        <!-- Filter & Table Wrapper -->
        <div class="px-container-padding pb-stack-lg flex flex-col gap-6 flex-1">
            <!-- Filter Section (Glassmorphism/Clean Card) -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-4">
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface">
                        Filter Pencarian
                    </h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Tanggal Awal</label>
                        <input
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            type="date" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Tanggal Akhir</label>
                        <input
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            type="date" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Nama Pelapor</label>
                        <input
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            placeholder="Masukkan Nama" type="text" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">NIP Pelapor</label>
                        <input
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            placeholder="Masukkan NIP" type="text" />
                    </div>
                </div>
            </div>
            <!-- Data Table Section -->
            <div
                class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden flex-1 flex flex-col">
                <div class="overflow-x-auto flex-1">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant">
                                    Pelapor
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant">
                                    Tgl. Selesai
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant">
                                    Judul Masalah
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant text-right">
                                    Status Validasi
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant text-right">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/50">
                            <!-- Row 1 -->
                            <tr class="hover:bg-surface-container-low transition-colors group cursor-default">
                                <td class="py-3 px-4">
                                    <div class="flex flex-col">
                                        <span class="font-body-md text-body-md text-on-surface">Budi Santoso</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">NIP:
                                            198001012005011002</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 font-body-md text-body-md text-on-surface">
                                    12 Nov 2023, 14:30
                                </td>
                                <td
                                    class="py-3 px-4 font-body-md text-body-md text-on-surface-variant max-w-xs truncate">
                                    Perbaikan konfigurasi jaringan LAN di
                                    Ruang Rapat Utama. Kabel diganti dan
                                    switch di-restart.
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <div
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <button
                                        class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-surface-container-low transition-colors group cursor-default">
                                <td class="py-3 px-4">
                                    <div class="flex flex-col">
                                        <span class="font-body-md text-body-md text-on-surface">Siti Aminah</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">NIP:
                                            198502152010122001</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 font-body-md text-body-md text-on-surface">
                                    10 Nov 2023, 09:15
                                </td>
                                <td
                                    class="py-3 px-4 font-body-md text-body-md text-on-surface-variant max-w-xs truncate">
                                    Instalasi ulang OS pada PC aset
                                    IT-PC-045 karena error sistem operasi.
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <div
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <button
                                        class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-surface-container-low transition-colors group cursor-default">
                                <td class="py-3 px-4">
                                    <div class="flex flex-col">
                                        <span class="font-body-md text-body-md text-on-surface">Andi Wijaya</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">NIP:
                                            199003202015031004</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 font-body-md text-body-md text-on-surface">
                                    08 Nov 2023, 16:45
                                </td>
                                <td
                                    class="py-3 px-4 font-body-md text-body-md text-on-surface-variant max-w-xs truncate">
                                    Penggantian toner printer di ruang
                                    administrasi dan pembersihan head
                                    printer.
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <div
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <button
                                        class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-surface-container-low transition-colors group cursor-default">
                                <td class="py-3 px-4">
                                    <div class="flex flex-col">
                                        <span class="font-body-md text-body-md text-on-surface">Rina Mulyani</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">NIP:
                                            198807122012122003</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 font-body-md text-body-md text-on-surface">
                                    05 Nov 2023, 11:20
                                </td>
                                <td
                                    class="py-3 px-4 font-body-md text-body-md text-on-surface-variant max-w-xs truncate">
                                    Reset password akun SIPEG dan
                                    sinkronisasi data user.
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <div
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <button
                                        class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div
                    class="border-t border-outline-variant p-4 flex items-center justify-between bg-surface-container-lowest">
                    <span class="font-body-md text-body-md text-on-surface-variant">Menampilkan 1-4 dari 128
                        riwayat</span>
                    <div class="flex gap-2">
                        <button
                            class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-sm">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 rounded bg-primary text-on-primary flex items-center justify-center font-label-md text-label-md">
                            1
                        </button>
                        <button
                            class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-colors font-label-md text-label-md">
                            2
                        </button>
                        <button
                            class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-colors font-label-md text-label-md">
                            3
                        </button>
                        <span class="w-8 h-8 flex items-center justify-center text-on-surface-variant">...</span>
                        <button
                            class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>