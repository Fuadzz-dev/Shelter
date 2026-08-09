<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        @include('component.text_scale')
        <title>Validasi Penyelesaian Tiket - SHELTER</title>
        <!-- Google Fonts: Inter -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
            crossorigin=""
            href="https://fonts.gstatic.com"
            rel="preconnect"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" 
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
        <!-- Tailwind Theme Configuration -->
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
                            'display-lg-mobile': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '700' },
                            ],
                            'body-md': [
                                '14px',
                                { lineHeight: '20px', fontWeight: '400' },
                            ],
                            'headline-md': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '600' },
                            ],
                            'label-sm': [
                                '11px',
                                { lineHeight: '14px', fontWeight: '500' },
                            ],
                            'headline-sm': [
                                '20px',
                                { lineHeight: '28px', fontWeight: '600' },
                            ],
                            'body-lg': [
                                '16px',
                                { lineHeight: '24px', fontWeight: '400' },
                            ],
                            'display-lg': [
                                '32px',
                                {
                                    lineHeight: '40px',
                                    letterSpacing: '-0.02em',
                                    fontWeight: '700',
                                },
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
            .material-symbols-outlined {
                font-variation-settings:
                    'FILL' 0,
                    'wght' 400,
                    'GRAD' 0,
                    'opsz' 24;
            }
            .icon-filled {
                font-variation-settings:
                    'FILL' 1,
                    'wght' 400,
                    'GRAD' 0,
                    'opsz' 24;
            }
            /* Custom Checkbox Animation */
            .check-anim:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body
        class="text-on-background font-body-md flex min-h-screen flex-col bg-background antialiased selection:bg-primary/20"
    >
        <!-- Transactional Minimal Header (Suppressed Main Nav) -->
        <header
            class="bg-surface-container-lowest border-outline-variant px-gutter sticky top-0 z-50 flex h-16 items-center border-b shadow-sm"
        >
            <div
                class="mx-auto flex w-full max-w-5xl items-center justify-between"
            >
                <a href="{{ route('pegawai.dashboard') }}"
                    class="text-on-surface-variant group flex items-center gap-2 transition-colors hover:text-primary"
                >
                    <span
                        class="material-symbols-outlined text-lg transition-transform group-hover:-translate-x-1"
                        >arrow_back</span
                    >
                    <span class="font-label-md text-label-md"
                        >Kembali&nbsp;</span
                    ></a
                >
            </div>
        </header>
        <!-- Main Canvas -->
        <main class="px-gutter py-stack-lg mx-auto w-full max-w-5xl flex-grow">
            <!-- Page Header -->
            <div class="mb-stack-lg">
                <div class="mb-2 flex items-center gap-3">
                    <span
                        class="bg-secondary-container/20 text-on-secondary-container font-label-md text-label-sm rounded px-2 py-1 tracking-wider uppercase"
                        >{{ $laporan->nomor_Helpdesk }}</span
                    >
                    <span
                        class="bg-secondary-fixed/50 text-secondary font-label-md text-label-sm flex items-center gap-1 rounded px-2 py-1 tracking-wider uppercase"
                    >
                        <span class="material-symbols-outlined text-[14px]"
                            >hourglass_top</span
                        >
                        Waiting Approval
                    </span>
                </div>
                <h1
                    class="font-display-lg text-display-lg-mobile md:text-display-lg mb-2 text-primary"
                >
                    Persetujuan Digital &amp; Validasi
                </h1>
                <p
                    class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl"
                >
                    Laporan kerusakan perangkat Anda telah ditangani. Silakan
                    tinjau ringkasan tindakan teknis di bawah ini dan berikan
                    persetujuan akhir.
                </p>
            </div>
            <!-- Content Grid (Bento Style) -->
            <div
                class="gap-stack-md grid grid-cols-1 items-start lg:grid-cols-12"
            >
                <!-- Left Column: Summary of Actions -->
                <div class="gap-stack-md flex flex-col lg:col-span-12">
                    <!-- Info Card -->
                    <div
                        class="bg-surface-container-lowest border-outline-variant p-container-padding rounded-xl border shadow-sm"
                    >
                        <div
                            class="gap-stack-md border-surface-variant/50 mb-6 flex flex-wrap justify-between border-b pb-6"
                        >
                            <div class="flex items-center gap-3">
                                <div
                                    class="bg-secondary-container/20 flex h-10 w-10 items-center justify-center rounded-full text-secondary"
                                >
                                    <span class="material-symbols-outlined"
                                        >calendar_today</span
                                    >
                                </div>
                                <div>
                                    <p
                                        class="font-label-md text-on-surface-variant text-[11px] tracking-wider uppercase"
                                    >
                                        Tanggal Laporan
                                    </p>
                                    <p
                                        class="text-body-md text-on-surface font-semibold"
                                    >
                                        {{ $laporan->tanggal_lapor ? $laporan->tanggal_lapor->format('d M Y, H:i') : '-' }} WIB
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="bg-secondary-container/20 flex h-10 w-10 items-center justify-center rounded-full text-secondary"
                                >
                                    <span class="material-symbols-outlined"
                                        >badge</span
                                    >
                                </div>
                                <div>
                                    <p
                                        class="font-label-md text-on-surface-variant text-[11px] tracking-wider uppercase"
                                    >
                                        Pelapor
                                    </p>
                                    <p
                                        class="text-body-md text-on-surface font-semibold"
                                    >
                                        {{ $laporan->pelapor->nama_lengkap ?? $laporan->pelapor->name ?? '-' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h2
                            class="font-headline-md text-headline-sm mb-stack-md flex items-center gap-2 text-primary"
                        >
                            <span
                                class="material-symbols-outlined icon-filled text-secondary"
                                >summarize</span
                            >
                            Ringkasan Tindakan Teknis
                        </h2>
                        <div
                            class="bg-surface-container-low border-surface-variant mb-6 rounded-lg border p-4"
                        >
                            <h3
                                class="font-label-md text-label-md text-on-surface-variant mb-1 uppercase"
                            >
                                Judul Masalah
                            </h3>
                            <p
                                class="font-body-lg text-body-lg font-semibold text-primary"
                            >
                                {{ $laporan->judul_masalah }}
                            </p>
                        </div>
                        <div
                            class="divide-surface-variant border-surface-variant grid grid-cols-1 divide-y overflow-hidden rounded-lg border"
                        >
                            <!-- Complaint Section -->
                            <div class="flex flex-col">
                                <div
                                    class="bg-surface-container-low border-surface-variant border-b p-4"
                                >
                                    <h3
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                    >
                                        Keluhan
                                    </h3>
                                </div>
                                <div class="bg-surface flex-grow p-6">
                                    <p
                                        class="font-body-lg text-body-lg text-on-surface mb-6 whitespace-pre-line"
                                    >
                                        {{ $laporan->deskripsi_keluhan }}
                                    </p>
                                    @if($laporan->foto_helpdesk && count($laporan->foto_helpdesk) > 0)
                                    <div
                                        class="border-surface-variant/50 border-t pt-4"
                                    >
                                        <h4
                                            class="font-label-md text-on-surface-variant mb-3 text-[11px] tracking-widest uppercase"
                                        >
                                            Foto Lampiran Keluhan
                                        </h4>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($laporan->foto_helpdesk as $foto)
                                            <div
                                                class="group border-outline-variant relative h-16 w-16 cursor-pointer overflow-hidden rounded border transition-colors hover:border-primary"
                                            >
                                                <img
                                                    alt="Lampiran Keluhan"
                                                    class="h-full w-full object-cover"
                                                    src="{{ asset($foto) }}"
                                                />
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity group-hover:opacity-100"
                                                >
                                                    <span
                                                        class="material-symbols-outlined text-sm text-white"
                                                        >zoom_in</span
                                                    >
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Repair Action Section -->
                            <div class="flex flex-col">
                                <div
                                    class="bg-surface-container-low border-surface-variant border-b p-4"
                                >
                                    <h3
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                    >
                                        Tindakan Perbaikan
                                    </h3>
                                </div>
                                <div class="bg-surface flex-grow p-6">
                                    @if($laporan->tindakanPerbaikan && $laporan->tindakanPerbaikan->count() > 0)
                                    <div class="space-y-4">
                                        @foreach($laporan->tindakanPerbaikan as $tindakan)
                                        <div class="border-surface-variant/50 rounded-lg border bg-surface-container-lowest p-4">
                                            <ul class="font-body-md text-body-md text-on-surface list-disc space-y-3 pl-5">
                                                <li class="">{{ $tindakan->deskripsi_tindakan ?? $tindakan->keterangan }}</li>
                                            </ul>
                                            @if($tindakan->foto_tindakan && count($tindakan->foto_tindakan) > 0)
                                            <div class="border-surface-variant/50 mt-4 border-t pt-4">
                                                <h4 class="font-label-md text-on-surface-variant mb-3 text-[11px] tracking-widest uppercase">
                                                    Foto Lampiran Tindakan
                                                </h4>
                                                <div class="flex flex-wrap gap-2">
                                                    @foreach($tindakan->foto_tindakan as $foto)
                                                    @php
                                                        $isVideo = preg_match('/\.(mp4|mov|avi|webm|mkv)$/i', $foto);
                                                    @endphp
                                                    @if($isVideo)
                                                    <div class="group border-outline-variant relative w-64 overflow-hidden rounded border bg-surface-container-lowest shadow-sm">
                                                        <video
                                                            src="{{ asset($foto) }}"
                                                            controls
                                                            preload="metadata"
                                                            class="h-auto max-h-64 w-full bg-black object-contain"
                                                            style="cursor: pointer;"
                                                        >
                                                            Browser tidak mendukung pemutaran video.
                                                        </video>
                                                    </div>
                                                    @else
                                                    <div
                                                        class="group border-outline-variant relative h-16 w-16 cursor-pointer overflow-hidden rounded border transition-colors hover:border-primary"
                                                        onclick="window.open(this.firstElementChild.src, '_blank')"
                                                    >
                                                        <img
                                                            alt="Foto Lampiran Tindakan"
                                                            class="h-full w-full object-cover"
                                                            src="{{ asset($foto) }}"
                                                            style="cursor: pointer;"
                                                        />
                                                        <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity group-hover:opacity-100">
                                                            <span class="material-symbols-outlined text-sm text-white">zoom_in</span>
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
                                    <p class="font-body-md text-body-md text-on-surface-variant">Belum ada catatan tindakan perbaikan.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Approval Card -->
                    <form action="{{ route('pegawai.laporan-helpdesk.validasi-selesai', $laporan->id_helpdesk) }}" method="POST" id="form-setujui">
                        @csrf
                    <div
                        class="bg-surface-container-lowest p-container-padding relative flex flex-col overflow-hidden rounded-xl border border-primary/20 shadow-[0_4px_12px_rgba(0,51,102,0.08)]"
                    >
                        <div
                            class="absolute top-0 left-0 h-1 w-full bg-primary"
                        ></div>
                        <h2
                            class="font-headline-md text-headline-sm mb-2 text-primary"
                        >
                            Validasi Penerimaan
                        </h2>
                        <p
                            class="font-body-md text-body-md text-on-surface-variant mb-6 text-sm"
                        >
                            Mohon konfirmasi bahwa perangkat telah berfungsi
                            sesuai harapan sebelum tiket ditutup secara sistem.
                        </p>
                        <label
                            class="bg-surface-container hover:bg-surface-variant hover:border-outline-variant group mb-6 flex cursor-pointer items-start gap-3 rounded-lg border border-transparent p-4 transition-colors"
                        >
                            <div class="mt-0.5 flex h-5 items-center">
                                <input
                                    class="border-outline bg-surface-container-lowest check-anim h-5 w-5 cursor-pointer rounded text-primary transition-all focus:ring-2 focus:ring-primary focus:ring-offset-2"
                                    id="approval-checkbox"
                                    type="checkbox"
                                    placeholder="on"
                                    value=""
                                    required
                                />
                            </div>
                            <span
                                class="font-body-md text-body-md text-on-surface transition-colors select-none group-hover:text-primary"
                            >
                                Saya menyatakan perangkat telah berfungsi dengan
                                baik dan perbaikan telah diselesaikan.
                            </span>
                        </label>
                        <button type="submit"
                            class="font-label-md text-label-md bg-surface-variant text-on-surface-variant relative mb-4 flex h-[44px] w-full cursor-not-allowed items-center justify-center gap-2 overflow-hidden rounded-lg transition-all duration-300"
                            id="btn-approve"
                            disabled=""
                        >
                            <span class="" id="btn-text"
                                >Setujui &amp; Selesaikan</span
                            >
                            <span
                                class="material-symbols-outlined hidden text-sm"
                                id="btn-icon"
                                >check_circle</span
                            >
                            <svg
                                class="absolute hidden h-5 w-5 animate-spin text-white"
                                fill="none"
                                id="btn-spinner"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4"
                                ></circle>
                                <path
                                    class="opacity-75"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="text-on-surface-variant bg-surface-container-low flex items-start gap-2 rounded-md p-3"
                        >
                            <span
                                class="material-symbols-outlined icon-filled mt-0.5 text-[16px] text-secondary"
                                >info</span
                            >
                            <p class="font-label-md text-[11px] leading-tight">
                                Persetujuan ini menggantikan tanda tangan basah
                                dan diakui sebagai bukti penyelesaian pekerjaan
                                yang sah dalam sistem Otoritas Bandar Udara
                                Wilayah V.
                            </p>
                        </div>
                    </div>
                    <!-- Digital Stamp Area -->
                    <div
                        class="bg-surface-container-lowest border-outline-variant flex min-h-[200px] flex-col items-center justify-center rounded-xl border border-dashed p-6 opacity-60 transition-all duration-500"
                        id="qr-container"
                    >
                        <div
                            class="flex flex-col items-center gap-2 text-center"
                            id="qr-placeholder"
                        >
                            <div
                                class="bg-surface-container-high mb-2 flex h-16 w-16 items-center justify-center rounded-full"
                            >
                                <span
                                    class="material-symbols-outlined text-on-surface-variant text-3xl"
                                    >qr_code_scanner</span
                                >
                            </div>
                            <h3
                                class="font-label-md text-label-md text-on-surface-variant"
                            >
                                Stempel Digital Menunggu
                            </h3>
                            <p
                                class="font-body-md text-outline max-w-[200px] text-[12px]"
                            >
                                QR Code validasi akan diterbitkan di sini
                                setelah persetujuan Anda berikan.
                            </p>
                        </div>
                        <div
                            class="hidden w-full flex-col items-center gap-3 text-center"
                            id="qr-revealed"
                        >
                            <div
                                class="text-secondary-container bg-secondary-fixed/20 mb-2 flex items-center gap-1 rounded-full px-3 py-1"
                            >
                                <span
                                    class="material-symbols-outlined icon-filled text-[14px]"
                                    >verified</span
                                >
                                <span
                                    class="font-label-md text-label-sm text-secondary"
                                    >Tervalidasi Digital</span
                                >
                            </div>
                            <div
                                class="border-outline-variant relative h-32 w-32 rounded border bg-white p-2 shadow-sm"
                            >
                                <div
                                    class="grid h-full w-full grid-cols-5 grid-rows-5 gap-0.5 bg-primary p-1"
                                >
                                    <div
                                        class="col-span-2 row-span-2 rounded-sm border-2 border-primary bg-white"
                                    ></div>
                                    <div class="bg-primary"></div>
                                    <div
                                        class="col-span-2 row-span-2 rounded-sm border-2 border-primary bg-white"
                                    ></div>
                                    <div
                                        class="col-span-5 h-1 bg-primary"
                                    ></div>
                                    <div class="bg-white"></div>
                                    <div class="bg-primary"></div>
                                    <div class="bg-white"></div>
                                    <div class="bg-primary"></div>
                                    <div class="bg-white"></div>
                                    <div
                                        class="col-span-2 row-span-2 rounded-sm border-2 border-primary bg-white"
                                    ></div>
                                    <div class="bg-primary"></div>
                                    <div
                                        class="col-span-2 row-span-2 flex items-center justify-center bg-white"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[10px] text-primary"
                                            >flight_takeoff</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p
                                    class="font-label-md text-label-md text-primary"
                                >
                                    ID: VAL-8821-X9
                                </p>
                                <p
                                    class="font-body-md text-on-surface-variant text-[11px]"
                                >
                                    Disetujui: Hari ini, 12:05 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                    </form>
<!-- Belum Selesai Action -->
                    <form
                        action="{{ route('pegawai.laporan-helpdesk.belum-selesai', $laporan->id_helpdesk) }}"
                        method="POST"
                        id="form-belum-selesai"
                        class="mt-4"
                    >
                        @csrf
                        <button
                            type="button"
                            id="btn-belum-selesai"
                            class="font-label-md text-label-md border-error text-error bg-surface-container-lowest hover:bg-error-container/40 flex h-[44px] w-full items-center justify-center gap-2 rounded-lg border font-semibold transition-all duration-300 active:scale-95"
                        >
                            <span class="material-symbols-outlined text-[18px]"
                                >replay</span
                            >
                            Belum Selesai
                        </button>
                    </form>
                </div>
                <!-- Right Column: Approval Action Panel -->
            </div>
        </main>

        <!-- Confirmation Modal: Belum Selesai -->
        <div
            aria-hidden="true"
            class="fixed inset-0 z-[100] hidden items-center justify-center p-gutter"
            id="modal-belum-selesai"
            role="dialog"
            aria-labelledby="modal-belum-selesai-title"
            aria-describedby="modal-belum-selesai-desc"
        >
            <!-- Backdrop -->
            <div
                class="absolute inset-0 bg-primary/50 backdrop-blur-sm"
                id="modal-belum-selesai-backdrop"
            ></div>
            <!-- Dialog Card -->
            <div
                class="bg-surface-container-lowest relative w-full max-w-md overflow-hidden rounded-2xl shadow-2xl"
                role="document"
            >
                <!-- Top accent bar -->
                <div
                    class="bg-error absolute top-0 left-0 h-1.5 w-full"
                ></div>
                <div class="p-6 pt-8">
                    <!-- Icon -->
                    <div
                        class="bg-error-container/60 flex h-16 w-16 items-center justify-center rounded-full"
                    >
                        <span
                            class="material-symbols-outlined icon-filled text-on-error-container text-3xl"
                            >error</span
                        >
                    </div>
                    <h2
                        class="font-headline-md text-headline-sm mt-5 text-primary"
                        id="modal-belum-selesai-title"
                    >
                        Kembalikan ke Perbaikan?
                    </h2>
                    <p
                        class="font-body-md text-body-md text-on-surface-variant mt-2"
                        id="modal-belum-selesai-desc"
                    >
                        Apakah Anda yakin laporan ini belum selesai? Status
                        akan dikembalikan ke tahap perbaikan.
                    </p>
                </div>
                <!-- Actions -->
                <div
                    class="bg-surface-container-low border-surface-variant gap-3 border-t px-6 py-4"
                >
                    <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                        <button
                            type="button"
                            class="font-label-md text-label-md border-outline-variant text-on-surface-variant hover:bg-surface-variant/60 flex h-[40px] flex-1 items-center justify-center gap-2 rounded-lg border transition-colors sm:flex-none sm:px-5"
                            id="modal-belum-selesai-batal"
                        >
                            Batal
                        </button>
                        <button
                            type="button"
                            class="font-label-md text-label-md bg-error text-on-error hover:bg-error/90 focus:ring-error/30 flex h-[40px] flex-1 items-center justify-center gap-2 rounded-lg font-semibold shadow-sm transition-all duration-200 focus:ring-2 focus:ring-offset-2 sm:flex-none sm:px-5"
                            id="modal-belum-selesai-konfirmasi"
                        >
                            <span class="material-symbols-outlined text-[18px]"
                                >restart_alt</span
                            >
                            Ya, Kembalikan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const checkbox = document.getElementById('approval-checkbox');
                const btnApprove = document.getElementById('btn-approve');
                const btnText = document.getElementById('btn-text');
                const btnIcon = document.getElementById('btn-icon');
                const btnSpinner = document.getElementById('btn-spinner');

                const qrContainer = document.getElementById('qr-container');
                const qrPlaceholder = document.getElementById('qr-placeholder');
                const qrRevealed = document.getElementById('qr-revealed');

                // Handle Checkbox Logic
                checkbox.addEventListener('change', (e) => {
                    if (e.target.checked) {
                        btnApprove.disabled = false;
                        btnApprove.classList.remove(
                            'bg-surface-variant',
                            'text-on-surface-variant',
                            'cursor-not-allowed',
                        );
                        btnApprove.classList.add(
                            'bg-primary',
                            'text-on-primary',
                            'hover:bg-primary-container',
                            'hover:shadow-md',
                            'shadow-sm',
                            'cursor-pointer',
                        );
                    } else {
                        btnApprove.disabled = true;
                        btnApprove.classList.add(
                            'bg-surface-variant',
                            'text-on-surface-variant',
                            'cursor-not-allowed',
                        );
                        btnApprove.classList.remove(
                            'bg-primary',
                            'text-on-primary',
                            'hover:bg-primary-container',
                            'hover:shadow-md',
                            'shadow-sm',
                            'cursor-pointer',
                        );
                    }
                });

// ===== Belum Selesai Confirmation Modal =====
                const modalBelumSelesai = document.getElementById('modal-belum-selesai');
                const btnBelumSelesai = document.getElementById('btn-belum-selesai');
                const modalBatal = document.getElementById('modal-belum-selesai-batal');
                const modalKonfirmasi = document.getElementById('modal-belum-selesai-konfirmasi');
                const modalBackdrop = document.getElementById('modal-belum-selesai-backdrop');
                const formBelumSelesai = document.getElementById('form-belum-selesai');

                const openModal = () => {
                    modalBelumSelesai.classList.remove('hidden');
                    modalBelumSelesai.classList.add('flex', 'animate-modal-in');
                    modalBelumSelesai.setAttribute('aria-hidden', 'false');
                    btnBelumSelesai.focus();
                };

                const closeModal = () => {
                    modalBelumSelesai.classList.add('hidden');
                    modalBelumSelesai.classList.remove('flex', 'animate-modal-in');
                    modalBelumSelesai.setAttribute('aria-hidden', 'true');
                };

                btnBelumSelesai.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal();
                });

                modalBatal.addEventListener('click', closeModal);
                modalBackdrop.addEventListener('click', closeModal);

                modalKonfirmasi.addEventListener('click', () => {
                    formBelumSelesai.submit();
                });

                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && !modalBelumSelesai.classList.contains('hidden')) {
                        closeModal();
                    }
                });

                // Handle Submit Interaction (real submit via fetch, then redirect to dashboard)
                const formSetujui = document.getElementById('form-setujui');

                btnApprove.addEventListener('click', (e) => {
                    if (btnApprove.disabled) return;

                    e.preventDefault();

                    // 1. Loading State
                    btnApprove.disabled = true;
                    btnText.classList.add('invisible');
                    btnSpinner.classList.remove('hidden');

                    // Submit the form via fetch
                    const formData = new FormData(formSetujui);

                    fetch(formSetujui.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json',
                        },
                        body: formData,
                    })
                    .then(response => {
                        if (response.redirected) {
                            // Redirected to dashboard -> success
                            window.location.href = response.url;
                        } else if (response.ok) {
                            window.location.href = '{{ route('pegawai.dashboard') }}';
                        } else {
                            // Error: restore button state
                            btnApprove.disabled = false;
                            btnSpinner.classList.add('hidden');
                            btnText.classList.remove('invisible');
                            alert('Gagal menyimpan persetujuan. Silakan coba lagi.');
                        }
                    })
                    .catch(() => {
                        btnApprove.disabled = false;
                        btnSpinner.classList.add('hidden');
                        btnText.classList.remove('invisible');
                        alert('Terjadi kesalahan jaringan. Silakan coba lagi.');
                    });
                });
            });
        </script>
<style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .animate-fade-in {
                animation: fadeIn 0.5s ease-out forwards;
            }
            @keyframes modalIn {
                from {
                    opacity: 0;
                    transform: translateY(16px) scale(0.96);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }
            .animate-modal-in {
                animation: modalIn 0.25s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
            }
        </style>
    </body>
</html>
