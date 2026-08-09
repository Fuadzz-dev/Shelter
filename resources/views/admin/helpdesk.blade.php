<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Admin Panel</title>
        <!-- Google Fonts: Inter -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
            rel="stylesheet"
        />
        <!-- Material Symbols -->
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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
    <body class="text-on-surface font-body-md text-body-md min-h-screen bg-background flex">
        <!-- Sidebar Admin -->
        @include('component.sidebar_admin')

<!-- Main Content -->
        <main class="lg:ml-[280px] min-h-screen flex-1 pt-[80px] lg:pt-4">
            <div class="px-container-padding pb-container-padding mx-auto max-w-[1630px] pt-2.7">

                <!-- Page Header -->
                <div class="mb-stack-lg flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-2">
                            Laporan Helpdesk Aktif
                        </h2>
                        <p class="text-on-surface-variant text-sm">
                            Total {{ $helpdesks->total() }} laporan aktif
                        </p>
                    </div>
                </div>

                <!-- Filters & Actions Bar -->
                <form
                    method="GET"
                    action="{{ route('admin.helpdesk') }}"
                    class="bg-surface-container-lowest border-outline-variant p-unit mb-stack-md flex flex-wrap items-center justify-between gap-4 rounded-lg border shadow-sm"
                >
                    <div class="flex w-full flex-col items-stretch gap-2 sm:w-auto sm:flex-row sm:flex-wrap sm:items-center">
                        <!-- Search Input -->
                        <div class="relative w-full sm:w-64">
                            <span
                                class="material-symbols-outlined text-on-surface-variant absolute top-1/2 left-3 -translate-y-1/2 text-[20px]"
                            >search</span>
                            <input
                                id="search"
                                name="search"
                                value="{{ request('search') }}"
                                class="bg-surface border-outline-variant font-body-md text-body-md text-on-surface h-[40px] w-full rounded-md border pr-4 pl-10 transition-colors focus:border-secondary focus:ring-1 focus:ring-secondary focus:outline-none"
                                placeholder="Cari nomor tiket atau subjek..."
                                type="text"
                            />
                        </div>
                        <!-- Status Filter -->
                        <div class="relative w-full sm:w-auto">
                            <select
                                id="status"
                                name="status"
                                onchange="this.form.submit()"
                                class="bg-surface border-outline-variant font-body-md text-body-md text-on-surface h-[40px] w-full cursor-pointer appearance-none rounded-md border pl-3 pr-10 transition-colors focus:border-secondary focus:ring-1 focus:ring-secondary focus:outline-none sm:w-auto sm:min-w-[170px]"
                            >
                                <option value="">Semua Status</option>
                                <option value="In Progress" {{ request('status') === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="in repair" {{ request('status') === 'in repair' ? 'selected' : '' }}>In Repair</option>
                                <option value="Waiting Approval" {{ request('status') === 'Waiting Approval' ? 'selected' : '' }}>Waiting Approval</option>
                            </select>
                        </div>
                    </div>
                </form>

                <!-- Data Table Container -->
                <div class="bg-surface-container-lowest border-outline-variant overflow-hidden rounded-lg border shadow-sm">
                    <!-- Mobile Card List -->
                    <div class="divide-outline-variant divide-y lg:hidden">
                        @forelse ($helpdesks as $helpdesk)
                            @php
                                $statusClassM = match(strtolower($helpdesk->status_Helpdesk)) {
                                    'waiting approval' => 'bg-primary-fixed text-on-primary-fixed',
                                    'in repair'        => 'bg-secondary-fixed text-on-secondary-fixed',
                                    'in progress'      => 'bg-tertiary-fixed text-on-tertiary-fixed',
                                    default            => 'bg-surface-container text-on-surface-variant',
                                };
                            @endphp
                            <a href="{{ route('admin.helpdesk.detail', $helpdesk->id_helpdesk) }}" class="block p-4 transition-colors hover:bg-surface-container-low active:bg-surface-container-low">
                                <div class="mb-1 flex items-center justify-between gap-2">
                                    <span class="font-mono text-xs text-on-surface-variant">{{ $helpdesk->nomor_Helpdesk }}</span>
                                    <span class="font-label-sm text-label-sm {{ $statusClassM }} inline-flex items-center rounded-full px-2.5 py-0.5">{{ $helpdesk->status_Helpdesk }}</span>
                                </div>
                                <h3 class="font-body-md text-body-md text-on-surface mb-1 font-semibold">{{ $helpdesk->judul_masalah }}</h3>
                                <div class="flex items-center justify-between gap-2">
                                    <div class="min-w-0">
                                        <p class="text-on-surface text-sm font-medium">{{ $helpdesk->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}</p>
                                        <p class="text-on-surface-variant text-xs">{{ $helpdesk->pelapor?->jabatan_departemen ?? '-' }}</p>
                                    </div>
                                    <span class="text-on-surface-variant text-xs whitespace-nowrap">{{ \Carbon\Carbon::parse($helpdesk->tanggal_lapor)->translatedFormat('d M Y') }}</span>
                                </div>
                            </a>
                        @empty
                            <div class="flex flex-col items-center gap-2 px-4 py-12 text-on-surface-variant text-center">
                                <span class="material-symbols-outlined text-[48px]">inbox</span>
                                <p class="font-medium">Tidak ada laporan aktif</p>
                                <p class="text-sm">{{ request('search') || request('status') ? 'Coba ubah filter pencarian Anda.' : 'Belum ada laporan helpdesk yang masuk.' }}</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Desktop Table -->
                    <div class="hidden overflow-x-auto lg:block">
                        <table class="w-full border-collapse text-left">
                            <thead>
                                <tr class="bg-surface border-outline-variant font-label-md text-label-md text-on-surface-variant border-b tracking-wider uppercase">
                                    <th class="px-4 py-3">No. Tiket</th>
                                    <th class="px-4 py-3">Pelapor</th>
                                    <th class="w-1/3 px-4 py-3">Judul Masalah</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Tanggal Lapor</th>
                                    <th class="px-4 py-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-md text-body-md text-on-surface divide-surface-variant divide-y">
                                @forelse ($helpdesks as $helpdesk)
                                    <tr class="hover:bg-surface-container-low group transition-colors">
                                        <td class="px-4 py-4">
                                            <span class="font-mono text-xs text-on-surface-variant">
                                                {{ $helpdesk->nomor_Helpdesk }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="flex items-center gap-3">
                                                <div>
                                                    <p class="font-medium">
                                                        {{ $helpdesk->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}
                                                    </p>
                                                    <p class="text-on-surface-variant text-xs">
                                                        {{ $helpdesk->pelapor?->jabatan_departemen ?? '-' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <p class="text-on-surface max-w-md truncate font-medium">
                                                {{ $helpdesk->judul_masalah }}
                                            </p>
                                        </td>
                                        <td class="px-4 py-4">
                                            @php
                                                $statusClass = match(strtolower($helpdesk->status_Helpdesk)) {
                                                    'waiting approval' => 'bg-primary-fixed text-on-primary-fixed',
                                                    'in repair'        => 'bg-secondary-fixed text-on-secondary-fixed',
                                                    'in progress'      => 'bg-tertiary-fixed text-on-tertiary-fixed',
                                                    default            => 'bg-surface-container text-on-surface-variant',
                                                };
                                            @endphp
                                            <span class="font-label-sm text-label-sm {{ $statusClass }} inline-flex items-center rounded-full px-2.5 py-0.5">
                                                {{ $helpdesk->status_Helpdesk }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-on-surface-variant text-xs">
                                                {{ \Carbon\Carbon::parse($helpdesk->tanggal_lapor)->translatedFormat('d M Y') }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 text-right">
                                            <a
                                                href="{{ route('admin.helpdesk.detail', $helpdesk->id_helpdesk) }}"
                                                class="font-label-md text-label-md hover:bg-surface-container-low inline-flex h-[36px] items-center justify-center rounded-md border border-secondary px-4 text-secondary transition-colors"
                                            >
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-12 text-center">
                                            <div class="flex flex-col items-center gap-2 text-on-surface-variant">
                                                <span class="material-symbols-outlined text-[48px]">inbox</span>
                                                <p class="font-medium">Tidak ada laporan aktif</p>
                                                <p class="text-sm">
                                                    {{ request('search') || request('status') ? 'Coba ubah filter pencarian Anda.' : 'Belum ada laporan helpdesk yang masuk.' }}
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </main>
    </body>
</html>
