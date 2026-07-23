<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Admin Panel</title>
        <!-- Google Fonts: Inter -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
            crossorigin=""
            href="https://fonts.gstatic.com"
            rel="preconnect"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Material Symbols -->
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'surface-tint': '#3a5f94',
                            background: '#f7f9fb',
                            'surface-container-low': '#f2f4f6',
                            'secondary-fixed': '#c6e7ff',
                            'on-tertiary-container': '#8d9eae',
                            'surface-dim': '#d8dadc',
                            'on-primary-container': '#799dd6',
                            'tertiary-fixed': '#d4e4f6',
                            tertiary: '#10202d',
                            'primary-container': '#003366',
                            'on-tertiary-fixed-variant': '#394857',
                            'tertiary-fixed-dim': '#b8c8da',
                            surface: '#f7f9fb',
                            'on-secondary-container': '#004866',
                            'surface-container-high': '#e6e8ea',
                            'on-secondary-fixed': '#001e2d',
                            'surface-variant': '#e0e3e5',
                            'tertiary-container': '#253543',
                            outline: '#737780',
                            'on-primary-fixed-variant': '#1f477b',
                            'inverse-primary': '#a7c8ff',
                            'surface-container-highest': '#e0e3e5',
                            'on-error-container': '#93000a',
                            'surface-container': '#eceef0',
                            'on-primary-fixed': '#001b3c',
                            'secondary-container': '#2dbcfe',
                            secondary: '#00658d',
                            'outline-variant': '#c3c6d1',
                            'on-secondary-fixed-variant': '#004c6b',
                            'primary-fixed-dim': '#a7c8ff',
                            'secondary-fixed-dim': '#82cfff',
                            'error-container': '#ffdad6',
                            primary: '#001e40',
                            'primary-fixed': '#d5e3ff',
                            'inverse-surface': '#2d3133',
                            'surface-bright': '#f7f9fb',
                            'inverse-on-surface': '#eff1f3',
                            'on-tertiary-fixed': '#0d1d2a',
                            'on-surface-variant': '#43474f',
                            'on-secondary': '#ffffff',
                            'surface-container-lowest': '#ffffff',
                            'on-surface': '#191c1e',
                            'on-error': '#ffffff',
                            'on-background': '#191c1e',
                            'on-primary': '#ffffff',
                            error: '#ba1a1a',
                            'on-tertiary': '#ffffff',
                        },
                        borderRadius: {
                            DEFAULT: '0.25rem',
                            lg: '0.5rem',
                            xl: '0.75rem',
                            full: '9999px',
                        },
                        spacing: {
                            gutter: '16px',
                            unit: '8px',
                            'stack-sm': '8px',
                            'container-padding': '24px',
                            'stack-md': '16px',
                            'stack-lg': '32px',
                        },
                        fontFamily: {
                            'display-lg-mobile': ['Inter'],
                            'display-lg': ['Inter'],
                            'label-sm': ['Inter'],
                            'headline-md': ['Inter'],
                            'body-md': ['Inter'],
                            'body-lg': ['Inter'],
                            'headline-sm': ['Inter'],
                            'label-md': ['Inter'],
                        },
                        fontSize: {
                            'display-lg-mobile': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '700' },
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
                            'headline-md': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '600' },
                            ],
                            'body-md': [
                                '14px',
                                { lineHeight: '20px', fontWeight: '400' },
                            ],
                            'body-lg': [
                                '16px',
                                { lineHeight: '24px', fontWeight: '400' },
                            ],
                            'headline-sm': [
                                '20px',
                                { lineHeight: '28px', fontWeight: '600' },
                            ],
                            'label-md': [
                                '12px',
                                {
                                    lineHeight: '16px',
                                    letterSpacing: '0.05em',
                                    fontWeight: '600',
                                },
                            ],
                        },
                    },
                },
            };
        </script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body
        class="text-on-surface font-body-md text-body-md min-h-screen bg-background flex"
    >
        <!-- Sidebar Admin -->
        @include('component.sidebar_admin')

        <!-- Main Content -->
        <main class="ml-[280px] min-h-screen flex-1 pt-4">
            <div
                class="px-container-padding pb-container-padding mx-auto max-w-[1630px] pt-2.7"
            >
                <!-- Page Header -->
                <div
                    class="mb-stack-lg flex flex-col justify-between gap-4 sm:flex-row sm:items-end"
                >
                    <div>
                        <h2
                            class="font-display-lg text-display-lg text-on-surface mb-2"
                        >
                            Laporan Helpdesk Aktif
                        </h2>
                    </div>
                </div>
                <!-- Filters & Actions Bar -->
                <div
                    class="bg-surface-container-lowest border-outline-variant p-unit mb-stack-md flex flex-wrap items-center justify-between gap-4 rounded-lg border shadow-sm"
                >
                    <div class="flex flex-wrap items-center gap-2">
                        <!-- Search Input (Local to table) -->
                        <div class="relative w-full sm:w-64">
                            <span
                                class="material-symbols-outlined text-on-surface-variant absolute top-1/2 left-3 -translate-y-1/2 text-[20px]"
                                >search</span
                            >
                            <input
                                class="bg-surface border-outline-variant font-body-md text-body-md text-on-surface h-[40px] w-full rounded-md border pr-4 pl-10 transition-colors focus:border-secondary focus:ring-1 focus:ring-secondary focus:outline-none"
                                placeholder="Cari ID Tiket atau Subjek..."
                                type="text"
                            />
                        </div>
                        <!-- Status Filter -->
                        <select
                            class="bg-surface border-outline-variant font-body-md text-body-md text-on-surface relative h-[40px] appearance-none rounded-md border px-3 pr-8 transition-colors focus:border-secondary focus:outline-none"
                        >
                            <option value="" class="">Semua Status</option>
                            <option value="in_progress" class="">
                                In Progress
                            </option>
                            <option value="in_repair" class="">
                                In Repair
                            </option>
                            <option value="waiting_approval" class="">
                                Waiting Approval
                            </option>
                        </select>
                        <!-- Department Filter -->
                    </div>
                </div>
                <!-- Data Table Container -->
                <div
                    class="bg-surface-container-lowest border-outline-variant overflow-hidden rounded-lg border shadow-sm"
                >
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse text-left">
                            <thead>
                                <tr
                                    class="bg-surface border-outline-variant font-label-md text-label-md text-on-surface-variant border-b tracking-wider uppercase"
                                >
                                    <!-- Priority Color Bar Column -->

                                    <th class="px-4 py-3">Pelapor</th>
                                    <th class="w-1/3 px-4 py-3">
                                        Judul Masalah
                                    </th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody
                                class="font-body-md text-body-md text-on-surface divide-surface-variant divide-y"
                            >
                                <!-- Row 1: High Priority, New -->
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Ahmad Budi
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Divisi Operasional
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Koneksi internet terputus di Gedung
                                            Utama Lt. 2
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >Waiting Approval</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 2: Medium Priority, In Progress -->
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Siti Dewi
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Keuangan
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Permintaan instalasi software
                                            akuntansi versi terbaru
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >In Repair</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 3: Medium Priority, Pending Approval -->
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Rudianto Y.
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    SDM
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Pengadaan monitor tambahan untuk
                                            staf baru
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >Waiting Approval</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 4: High Priority, In Progress -->
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    System Alert
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Otomatis
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Peringatan Kapasitas Server Utama
                                            &gt; 90%
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >In Repair</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Bambang S.
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Keamanan
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Kerusakan CCTV di area parkir timur
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >In Repair</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Dewi Lestari
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Humas
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Update konten website pengumuman
                                            layanan
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >Waiting Approval</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Eko Prasetyo
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    IT Support
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Penggantian toner printer lantai 3
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >In Repair</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Farida Utami
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Keuangan
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Masalah login aplikasi e-budgeting
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >Waiting Approval</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Guntur W.
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Logistik
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Permintaan akses VPN untuk kerja
                                            remote
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >Waiting Approval</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="hover:bg-surface-container-low group transition-colors"
                                >
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-medium">
                                                    Hendra K.
                                                </p>
                                                <p
                                                    class="text-on-surface-variant text-xs"
                                                >
                                                    Umum
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <p
                                            class="text-on-surface max-w-md truncate font-medium"
                                        >
                                            Perbaikan AC ruang rapat Cendrawasih
                                        </p>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="font-label-sm text-label-sm bg-secondary-fixed text-on-secondary-fixed inline-flex items-center rounded-full px-2.5 py-0.5"
                                            >In Repair</span
                                        >
                                    </td>
                                    <td class="px-4 py-4 text-right">
                                        <button
                                            class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                        >
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div
                        class="bg-surface border-outline-variant flex items-center justify-between border-t px-4 py-3"
                    >
                        <div
                            class="font-body-md text-body-md text-on-surface-variant"
                        >
                            Menampilkan 1 hingga 10 dari 24 laporan
                        </div>
                        <div class="flex items-center gap-1">
                            <button
                                class="hover:bg-surface-container-low text-on-surface-variant flex h-8 w-8 items-center justify-center rounded disabled:opacity-50"
                                disabled=""
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    >chevron_left</span
                                >
                            </button>
                            <button
                                class="bg-primary-container text-on-primary-container font-label-md text-label-md flex h-8 w-8 items-center justify-center rounded"
                            >
                                1
                            </button>
                            <button
                                class="hover:bg-surface-container-low text-on-surface font-label-md text-label-md flex h-8 w-8 items-center justify-center rounded"
                            >
                                2
                            </button>
                            <button
                                class="hover:bg-surface-container-low text-on-surface font-label-md text-label-md flex h-8 w-8 items-center justify-center rounded"
                            >
                                3
                            </button>
                            <button
                                class="hover:bg-surface-container-low text-on-surface-variant flex h-8 w-8 items-center justify-center rounded"
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    >chevron_right</span
                                >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
