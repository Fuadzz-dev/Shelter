<!doctype html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Laporan Helpdesk</title>

        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
            rel="stylesheet"
        />

        <script id="tailwind-config">
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'on-surface': '#191c1e',
                            'surface-container': '#eceef0',
                            error: '#ba1a1a',
                            background: '#f7f9fb',
                            'outline-variant': '#c3c6d1',
                            tertiary: '#10202d',
                            'on-error-container': '#93000a',
                            'on-tertiary-container': '#8d9eae',
                            'inverse-on-surface': '#eff1f3',
                            'on-secondary-fixed': '#001e2d',
                            'on-secondary': '#ffffff',
                            'tertiary-fixed': '#d4e4f6',
                            'on-primary-container': '#799dd6',
                            'tertiary-fixed-dim': '#b8c8da',
                            'surface-dim': '#d8dadc',
                            secondary: '#00658d',
                            'on-error': '#ffffff',
                            'surface-container-high': '#e6e8ea',
                            'primary-container': '#003366',
                            'primary-fixed': '#d5e3ff',
                            'surface-tint': '#3a5f94',
                            'primary-fixed-dim': '#a7c8ff',
                            'error-container': '#ffdad6',
                            'secondary-container': '#2dbcfe',
                            primary: '#001e40',
                            'secondary-fixed': '#c6e7ff',
                            'surface-container-low': '#f2f4f6',
                            'surface-bright': '#f7f9fb',
                            'on-secondary-container': '#004866',
                            'on-primary-fixed': '#001b3c',
                            'secondary-fixed-dim': '#82cfff',
                            'on-primary-fixed-variant': '#1f477b',
                            'on-primary': '#ffffff',
                            'inverse-surface': '#2d3133',
                            'inverse-primary': '#a7c8ff',
                            'on-tertiary-fixed': '#0d1d2a',
                            'on-secondary-fixed-variant': '#004c6b',
                            outline: '#737780',
                            'tertiary-container': '#253543',
                            'on-surface-variant': '#43474f',
                            'on-background': '#191c1e',
                            'surface-container-lowest': '#ffffff',
                            surface: '#f7f9fb',
                            'surface-container-highest': '#e0e3e5',
                            'on-tertiary-fixed-variant': '#394857',
                            'on-tertiary': '#ffffff',
                            'surface-variant': '#e0e3e5',
                        },
                        borderRadius: {
                            DEFAULT: '0.25rem',
                            lg: '0.5rem',
                            xl: '0.75rem',
                            full: '9999px',
                        },
                        spacing: {
                            'stack-md': '16px',
                            unit: '8px',
                            'stack-sm': '8px',
                            'container-padding': '24px',
                            gutter: '16px',
                            'stack-lg': '32px',
                        },
                        fontFamily: {
                            'body-md': ['Inter'],
                            'headline-sm': ['Inter'],
                            'display-lg-mobile': ['Inter'],
                            'label-md': ['Inter'],
                            'body-lg': ['Inter'],
                            'headline-md': ['Inter'],
                            'display-lg': ['Inter'],
                            'label-sm': ['Inter'],
                        },
                        fontSize: {
                            'body-md': [
                                '14px',
                                { lineHeight: '20px', fontWeight: '400' },
                            ],
                            'headline-sm': [
                                '20px',
                                { lineHeight: '28px', fontWeight: '600' },
                            ],
                            'display-lg-mobile': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '700' },
                            ],
                            'label-md': [
                                '12px',
                                {
                                    lineHeight: '16px',
                                    letterSpacing: '0.05em',
                                    fontWeight: '600',
                                },
                            ],
                            'body-lg': [
                                '16px',
                                { lineHeight: '24px', fontWeight: '400' },
                            ],
                            'headline-md': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '600' },
                            ],
                            'display-lg': [
                                '32px',
                                {
                                    lineHeight: '40px',
                                    letterSpacing: '-0.02em',
                                    fontWeight: '700',
                                },
                            ],
                            'label-sm': [
                                '11px',
                                { lineHeight: '14px', fontWeight: '500' },
                            ],
                        },
                    },
                },
            };
        </script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f7f9fb;
            }
            .material-symbols-outlined {
                font-variation-settings:
                    'FILL' 0,
                    'wght' 400,
                    'GRAD' 0,
                    'opsz' 24;
                vertical-align: middle;
            }
            /* Custom scrollbar for clean UI */
            ::-webkit-scrollbar {
                width: 6px;
                height: 6px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f5f9;
            }
            ::-webkit-scrollbar-thumb {
                background: #cbd5e1;
                border-radius: 10px;
            }
        </style>
    </head>
    <body class="text-on-surface">
        <!-- Sidebar Pegawai -->
        @include('component.sidebar_pegawai')

        <!-- Main Content Canvas -->
        <main class="ml-[280px] min-h-screen px-4 py-8 md:px-8">
            <div class="mx-auto max-w-[1600px]">
                <!-- Page Header Section -->
                <div
                    class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end"
                >
                    <div>
                        <h2
                            class="font-display-lg text-display-lg text-primary-container"
                        >
                            Laporan Helpdesk
                        </h2>
                    </div>
                    <button
                        class="bg-primary-container flex items-center justify-center gap-2 rounded-lg px-6 py-3 font-semibold text-white shadow-sm transition-all hover:bg-primary hover:shadow-md active:scale-95"
                    >
                        <span class="material-symbols-outlined"
                            >add_circle</span
                        >
                        <span>Buat Laporan Baru</span>
                    </button>
                </div>

                <!-- Data Table Section -->
                <div
                    class="border-outline-variant overflow-hidden rounded-xl border bg-white shadow-sm"
                >
                    <div
                        class="border-outline-variant bg-surface-container-lowest flex flex-col justify-between gap-4 border-b px-6 py-4 sm:flex-row sm:items-center"
                    >
                        <h3
                            class="font-headline-sm text-headline-sm text-primary"
                        >
                            Daftar Laporan
                        </h3>
                        <div
                            class="flex items-center gap-3 self-end sm:self-auto"
                        >
                            <div
                                class="border-outline-variant flex overflow-hidden rounded-lg border"
                            >
                                <button
                                    class="bg-surface-container-high border-outline-variant border-r px-3 py-1.5 text-xs font-bold"
                                >
                                    Semua
                                </button>
                                <button
                                    class="hover:bg-surface-container-low border-outline-variant border-r px-3 py-1.5 text-xs font-medium"
                                >
                                    Aktif
                                </button>
                                <button
                                    class="hover:bg-surface-container-low px-3 py-1.5 text-xs font-medium"
                                >
                                    Arsip
                                </button>
                            </div>
                            <button
                                class="border-outline-variant hover:bg-surface-container-low text-on-surface-variant flex items-center justify-center rounded-lg border p-2"
                                title="Filter"
                            >
                                <span class="material-symbols-outlined text-sm"
                                    >filter_list</span
                                >
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse text-left">
                            <thead>
                                <tr
                                    class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md tracking-wider uppercase"
                                >
                                    <th class="px-6 py-4 font-semibold">
                                        Tanggal Laporan
                                    </th>
                                    <th class="px-6 py-4 font-semibold">
                                        Judul Masalah
                                    </th>
                                    <th class="px-6 py-4 font-semibold">
                                        Tanggal Selesai
                                    </th>
                                    <th class="px-6 py-4 font-semibold">
                                        Status
                                    </th>
                                    <th
                                        class="px-6 py-4 text-right font-semibold"
                                    >
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody
                                class="divide-outline-variant font-body-md text-body-md divide-y"
                            >
                                <!-- Row 1 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        12 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Gangguan koneksi radio HT area runway
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 rounded-full bg-amber-500/10 px-2.5 py-1 text-[11px] font-bold tracking-tighter text-amber-700 uppercase"
                                        >
                                            <span
                                                class="h-1.5 w-1.5 rounded-full bg-amber-500"
                                            ></span
                                            >In Repair
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group border-l-error border-l-4 transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        13 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        CCTV Gate 4 tidak merespon/blank screen
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-secondary-container/20 text-on-secondary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-secondary-container h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >In Progress
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        13 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Permintaan installasi software e-Office
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-surface-variant text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-outline h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >Waiting Approval
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        14 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Printer logistik macet total
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 rounded-full bg-amber-500/10 px-2.5 py-1 text-[11px] font-bold tracking-tighter text-amber-700 uppercase"
                                        >
                                            <span
                                                class="h-1.5 w-1.5 rounded-full bg-amber-500"
                                            ></span
                                            >In Repair
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 5 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        14 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Sistem ticketing parkir error berkala
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-secondary-container/20 text-on-secondary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-secondary-container h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >In Progress
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 6 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group border-l-error border-l-4 transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        15 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Terdeteksi aktivitas mencurigakan di
                                        server
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-secondary-container/20 text-on-secondary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-secondary-container h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >In Progress
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 7 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        15 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Update konten website pengumuman
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-surface-variant text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-outline h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >Waiting Approval
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 8 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        16 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Lupa password akun aplikasi SIMAK
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-secondary-container/20 text-on-secondary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-bold tracking-tighter uppercase"
                                        >
                                            <span
                                                class="bg-secondary-container h-1.5 w-1.5 rounded-full"
                                            ></span
                                            >In Progress
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 9 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group border-l-4 border-l-slate-400 transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        16 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Scanner dokumen tidak terdeteksi oleh PC
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 rounded-full bg-amber-500/10 px-2.5 py-1 text-[11px] font-bold tracking-tighter text-amber-700 uppercase"
                                        >
                                            <span
                                                class="h-1.5 w-1.5 rounded-full bg-amber-500"
                                            ></span
                                            >In Repair
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 10 -->
                                <tr
                                    class="hover:bg-surface-container-lowest group transition-colors"
                                >
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        17 Okt 2023
                                    </td>
                                    <td
                                        class="text-on-surface px-6 py-4 font-medium"
                                    >
                                        Layar FIDS Terminal 2 mati mendadak
                                    </td>
                                    <td
                                        class="text-on-surface-variant px-6 py-4"
                                    >
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 rounded-full bg-amber-500/10 px-2.5 py-1 text-[11px] font-bold tracking-tighter text-amber-700 uppercase"
                                        >
                                            <span
                                                class="h-1.5 w-1.5 rounded-full bg-amber-500"
                                            ></span
                                            >In Repair
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="font-bold text-secondary hover:underline"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Footer -->
                    <div
                        class="bg-surface-container-lowest border-outline-variant font-label-md text-label-md flex flex-col items-center justify-between gap-4 border-t px-6 py-4 sm:flex-row"
                    >
                        <p class="text-on-surface-variant">
                            Menampilkan 1 - 10 dari 124 laporan
                        </p>
                        <div class="flex items-center gap-1.5">
                            <button
                                class="border-outline-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-all"
                            >
                                <span class="material-symbols-outlined text-sm"
                                    >chevron_left</span
                                >
                            </button>
                            <button
                                class="flex h-8 w-8 items-center justify-center rounded bg-primary text-white"
                            >
                                1
                            </button>
                            <button
                                class="border-outline-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-all"
                            >
                                2
                            </button>
                            <button
                                class="border-outline-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-all"
                            >
                                3
                            </button>
                            <span class="text-on-surface-variant px-1"
                                >...</span
                            >
                            <button
                                class="border-outline-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-all"
                            >
                                13
                            </button>
                            <button
                                class="border-outline-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-all"
                            >
                                <span class="material-symbols-outlined text-sm"
                                    >chevron_right</span
                                >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                console.log('SHELTER Helpdesk Report UI Initialized');

                // Micro-interaction untuk tombol Detail di dalam tabel
                const detailButtons = document.querySelectorAll('tbody button');
                detailButtons.forEach((btn) => {
                    btn.addEventListener('click', (e) => {
                        const row = e.target.closest('tr');
                        const title =
                            row.querySelector('td:nth-child(2)').innerText;
                        console.log(`Membuka detail untuk masalah: "${title}"`);
                    });
                });
            });
        </script>
    </body>
</html>
