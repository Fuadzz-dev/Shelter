<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Detail Riwayat - SHELTER</title>
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'secondary-fixed': '#c6e7ff',
                            'on-surface-variant': '#43474f',
                            'on-primary-container': '#799dd6',
                            surface: '#f7f9fb',
                            tertiary: '#10202d',
                            'surface-container-lowest': '#ffffff',
                            'secondary-fixed-dim': '#82cfff',
                            'tertiary-container': '#253543',
                            'surface-container-highest': '#e0e3e5',
                            background: '#f7f9fb',
                            'tertiary-fixed': '#d4e4f6',
                            'surface-container-high': '#e6e8ea',
                            'outline-variant': '#c3c6d1',
                            'on-error-container': '#93000a',
                            secondary: '#00658d',
                            'primary-container': '#003366',
                            'inverse-primary': '#a7c8ff',
                            'on-tertiary': '#ffffff',
                            'on-tertiary-fixed-variant': '#394857',
                            'on-primary-fixed-variant': '#1f477b',
                            'surface-dim': '#d8dadc',
                            'on-tertiary-fixed': '#0d1d2a',
                            'error-container': '#ffdad6',
                            'on-background': '#191c1e',
                            'surface-variant': '#e0e3e5',
                            error: '#ba1a1a',
                            'on-secondary-fixed-variant': '#004c6b',
                            'secondary-container': '#2dbcfe',
                            primary: '#001e40',
                            'primary-fixed': '#d5e3ff',
                            'surface-container-low': '#f2f4f6',
                            'on-error': '#ffffff',
                            'on-secondary': '#ffffff',
                            'surface-container': '#eceef0',
                            'primary-fixed-dim': '#a7c8ff',
                            outline: '#737780',
                            'tertiary-fixed-dim': '#b8c8da',
                            'surface-bright': '#f7f9fb',
                            'inverse-on-surface': '#eff1f3',
                            'on-tertiary-container': '#8d9eae',
                            'on-secondary-fixed': '#001e2d',
                            'on-primary-fixed': '#001b3c',
                            'on-surface': '#191c1e',
                            'on-secondary-container': '#004866',
                            'on-primary': '#ffffff',
                            'surface-tint': '#3a5f94',
                            'inverse-surface': '#2d3133',
                        },
                        borderRadius: {
                            DEFAULT: '0.25rem',
                            lg: '0.5rem',
                            xl: '0.75rem',
                            full: '9999px',
                        },
                        spacing: {
                            'stack-md': '16px',
                            'stack-lg': '32px',
                            gutter: '16px',
                            'stack-sm': '8px',
                            'container-padding': '24px',
                            unit: '8px',
                        },
                        fontFamily: {
                            'display-lg-mobile': ['Inter'],
                            'body-md': ['Inter'],
                            'headline-md': ['Inter'],
                            'label-sm': ['Inter'],
                            'headline-sm': ['Inter'],
                            'body-lg': ['Inter'],
                            'display-lg': ['Inter'],
                            'label-md': ['Inter'],
                        },
                        fontSize: {
                            'display-lg-mobile': ['24px', { lineHeight: '32px', fontWeight: '700' }],
                            'body-md': ['14px', { lineHeight: '20px', fontWeight: '400' }],
                            'headline-md': ['24px', { lineHeight: '32px', fontWeight: '600' }],
                            'label-sm': ['11px', { lineHeight: '14px', fontWeight: '500' }],
                            'headline-sm': ['20px', { lineHeight: '28px', fontWeight: '600' }],
                            'body-lg': ['16px', { lineHeight: '24px', fontWeight: '400' }],
                            'display-lg': ['32px', { lineHeight: '40px', letterSpacing: '-0.02em', fontWeight: '700' }],
                            'label-md': ['12px', { lineHeight: '16px', letterSpacing: '0.05em', fontWeight: '600' }],
                        },
                    },
                },
            };
        </script>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            .icon-filled {
                font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="text-on-background font-body-md flex min-h-screen flex-col bg-background antialiased selection:bg-primary/20">
        <!-- Header -->
        <header class="bg-surface-container-lowest border-outline-variant px-gutter sticky top-0 z-50 flex h-16 items-center border-b shadow-sm">
            <div class="mx-auto flex w-full max-w-5xl items-center justify-between">
                <a
                    href="{{ route('admin.riwayat-helpdesk') }}"
                    class="text-on-surface-variant group flex items-center gap-2 transition-colors hover:text-primary"
                >
                    <span class="material-symbols-outlined text-lg transition-transform group-hover:-translate-x-1">arrow_back</span>
                    <span class="font-label-md text-label-md">Kembali&nbsp;</span>
                </a>
            </div>
        </header>

        <!-- Main Canvas -->
        <main class="px-gutter py-stack-lg mx-auto w-full max-w-5xl flex-grow">
            <!-- Page Header -->
            <div class="mb-[15px] flex items-center justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="bg-secondary-container/20 text-on-secondary-container font-label-md text-label-sm rounded px-3 py-1 tracking-wider uppercase">
                            {{ $helpdesk->nomor_Helpdesk }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-[11px] font-bold tracking-tighter uppercase
                            @if($helpdesk->status_Helpdesk === 'In Progress') bg-amber-500/10 text-amber-600
                            @elseif($helpdesk->status_Helpdesk === 'in repair') bg-amber-500/10 text-amber-600
                            @elseif($helpdesk->status_Helpdesk === 'Waiting Approval') bg-secondary-fixed/50 text-secondary
                            @elseif($helpdesk->status_Helpdesk === 'Completed') bg-emerald-500/10 text-emerald-600
                            @else bg-surface-variant text-on-surface-variant @endif">
                            <span class="h-1.5 w-1.5 rounded-full
                                @if($helpdesk->status_Helpdesk === 'In Progress') bg-amber-500
                                @elseif($helpdesk->status_Helpdesk === 'in repair') bg-amber-500
                                @elseif($helpdesk->status_Helpdesk === 'Waiting Approval') bg-slate-400
                                @elseif($helpdesk->status_Helpdesk === 'Completed') bg-emerald-500
                                @else bg-outline @endif">
                            </span>
                            {{ $helpdesk->status_Helpdesk }}
                        </span>
                    </div>
                    <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-2 text-primary">
                        Detail Riwayat
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                        Informasi lengkap laporan helpdesk yang telah diselesaikan.
                    </p>
                </div>
                <div class="flex items-center gap-2 bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-2.5 shadow-sm flex-shrink-0 mt-1">
                    <div class="w-8 h-8 rounded-full bg-primary-fixed-dim/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-lg">person</span>
                    </div>
                    <div class="text-right">
                        <p class="text-body-md text-on-surface font-semibold text-start">{{ $helpdesk->pelapor->nama_lengkap ?? '-' }}</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant text-start">{{ $helpdesk->pelapor->jabatan_departemen ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="gap-stack-md grid grid-cols-1 items-start lg:grid-cols-12">
                <div class="gap-stack-md flex flex-col lg:col-span-12">
                    <!-- Detail Card -->
                    <div class="bg-surface-container-lowest border-outline-variant p-container-padding rounded-xl border shadow-sm">
                        <div class="gap-stack-md border-surface-variant/50 mb-6 flex flex-wrap justify-between border-b pb-6">
                            <div class="flex items-center gap-3">
                                <div class="bg-secondary-container/20 flex h-10 w-10 items-center justify-center rounded-full text-secondary">
                                    <span class="material-symbols-outlined">calendar_today</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-on-surface-variant text-[11px] tracking-wider uppercase">Tanggal Laporan</p>
                                    <p class="text-body-md text-on-surface font-semibold">
                                        {{ $helpdesk->tanggal_lapor ? $helpdesk->tanggal_lapor->format('d M Y, H:i') : '-' }} WIB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h2 class="font-headline-md text-headline-sm mb-stack-md flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined icon-filled text-secondary">error_outline</span>
                            Detail Masalah
                        </h2>

                        <!-- Judul Masalah -->
                        <div class="mb-5">
                            <label class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider">
                                Judul Masalah
                            </label>
                            <div class="bg-surface-container-low border-outline-variant text-on-surface font-body-md text-body-md rounded-lg border px-4 py-3">
                                {{ $helpdesk->judul_masalah }}
                            </div>
                        </div>

                        <!-- Deskripsi Keluhan -->
                        <div class="mb-5">
                            <label class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider">
                                Deskripsi Keluhan
                            </label>
                            <div class="bg-surface-container-low border-outline-variant text-on-surface font-body-md text-body-md rounded-lg border px-4 py-3 min-h-[100px] whitespace-pre-line text-left">{{ $helpdesk->deskripsi_keluhan }}</div>
                        </div>

                        <!-- Foto Lampiran -->
                        <div>
                            <label class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider">
                                Foto Lampiran
                            </label>
                            @if($helpdesk->foto_helpdesk && count($helpdesk->foto_helpdesk) > 0)
                                <div class="flex flex-wrap gap-3">
                                    @foreach($helpdesk->foto_helpdesk as $foto)
                                        @php
                                            $isVideo = preg_match('/\.(mp4|mov|avi|webm|mkv)$/i', $foto);
                                        @endphp
                                        @if($isVideo)
                                            <div class="group border-outline-variant relative w-80 overflow-hidden rounded-lg border bg-surface-container-lowest shadow-sm">
                                                <video
                                                    src="{{ asset($foto) }}"
                                                    controls
                                                    preload="metadata"
                                                    class="w-full h-auto max-h-80 object-contain bg-black"
                                                    style="cursor: pointer;"
                                                >
                                                    Browser tidak mendukung pemutaran video.
                                                </video>
                                            </div>
                                        @else
                                            <div class="group border-outline-variant relative h-40 w-40 overflow-hidden rounded-lg border bg-surface-container-lowest shadow-sm">
                                                <img
                                                    src="{{ asset($foto) }}"
                                                    alt="Lampiran Foto"
                                                    class="h-full w-full object-cover"
                                                    onclick="window.open(this.src, '_blank')"
                                                    style="cursor: pointer;"
                                                />
                                                <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity group-hover:opacity-100 cursor-pointer"
                                                     onclick="window.open(this.src, '_blank')">
                                                    <span class="material-symbols-outlined text-white text-lg">zoom_in</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <div class="bg-surface-container-low border-outline-variant flex items-center justify-center rounded-lg border border-dashed px-4 py-8 text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-2">image</span>
                                    Tidak ada lampiran foto
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Log Tindakan Teknis -->
                    <div
                        class="bg-surface-container-lowest border-outline-variant p-container-padding relative overflow-hidden rounded-xl border shadow-sm"
                    >
                        <!-- Decorative background accent -->
                        <div
                            class="to-secondary-container absolute top-0 left-0 h-1 w-full bg-gradient-to-r from-secondary"
                        ></div>
                        <h3
                            class="font-headline-sm text-headline-sm mb-stack-md flex items-center gap-2 text-primary"
                        >
                            <span class="material-symbols-outlined"
                                >build</span
                            >
                            Log Tindakan Teknis
                        </h3>

                        @if($helpdesk->tindakanPerbaikan && $helpdesk->tindakanPerbaikan->count() > 0)
                            <div class="space-y-stack-md">
                                @foreach($helpdesk->tindakanPerbaikan as $tindakan)
                                    <div
                                        class="bg-surface-container-low border-outline-variant/50 rounded-lg border p-stack-md"
                                    >
                                        <div class="mb-2 flex flex-wrap items-center justify-between gap-2">
                                            <p
                                                class="font-label-md text-label-md text-secondary flex items-center gap-1.5"
                                            >
                                                <span class="material-symbols-outlined text-[16px]">handyman</span>
                                                Tindakan Teknis
                                            </p>
                                            <p
                                                class="font-label-sm text-label-sm text-on-surface-variant"
                                            >
                                                {{ $tindakan->waktu_tindakan ? \Carbon\Carbon::parse($tindakan->waktu_tindakan)->translatedFormat('d M Y, H:i') : '-' }} WIB
                                            </p>
                                        </div>
                                        <p
                                            class="font-body-md text-body-md text-on-surface leading-relaxed whitespace-pre-line"
                                        >
                                            {{ $tindakan->deskripsi_tindakan }}
                                        </p>

                                        @if($tindakan->foto_tindakan && count($tindakan->foto_tindakan) > 0)
                                            <div class="mt-stack-md">
                                                <p
                                                    class="font-label-sm text-label-sm text-on-surface-variant mb-stack-sm tracking-wider uppercase"
                                                >
                                                    Lampiran Tindakan
                                                </p>
                                                <div class="flex flex-wrap gap-3">
                                                    @foreach($tindakan->foto_tindakan as $foto)
                                                        @php
                                                            $isVideo = preg_match('/\.(mp4|mov|avi|webm|mkv)$/i', $foto);
                                                        @endphp
                                                        @if($isVideo)
                                                            <div class="group border-outline-variant relative w-80 overflow-hidden rounded-lg border bg-surface-container-lowest shadow-sm">
                                                                <video
                                                                    src="{{ asset($foto) }}"
                                                                    controls
                                                                    preload="metadata"
                                                                    class="w-full h-auto max-h-80 object-contain bg-black"
                                                                    style="cursor: pointer;"
                                                                >
                                                                    Browser tidak mendukung pemutaran video.
                                                                </video>
                                                            </div>
                                                        @else
                                                            <div class="group border-outline-variant relative h-40 w-40 overflow-hidden rounded-lg border bg-surface-container-lowest shadow-sm">
                                                                <img
                                                                    src="{{ asset($foto) }}"
                                                                    alt="Lampiran Tindakan"
                                                                    class="h-full w-full object-cover"
                                                                    onclick="window.open(this.src, '_blank')"
                                                                    style="cursor: pointer;"
                                                                />
                                                                <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity group-hover:opacity-100 cursor-pointer"
                                                                     onclick="window.open(this.src, '_blank')">
                                                                    <span class="material-symbols-outlined text-white text-lg">zoom_in</span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="bg-surface-container-low border-outline-variant flex items-center justify-center rounded-lg border border-dashed px-4 py-8 text-on-surface-variant">
                                <span class="material-symbols-outlined mr-2">build</span>
                                Belum ada tindakan teknis yang dicatat.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

