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
    <!-- qrcodejs for generating a scannable QR code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
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
    <main class="flex-1 w-full min-h-screen flex flex-col bg-background pt-[80px] lg:pt-4 lg:ml-[280px]">
        <!-- Page Header -->
        <div class="px-container-padding flex flex-col md:flex-row md:items-end justify-between gap-4 py-stack-md">
<div>
                <h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-1">
                    Riwayat Helpdesk (Selesai)
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Total {{ $riwayatHelpdesks->total() }} laporan selesai
                </p>
            </div>
        </div>
        <!-- Filter & Table Wrapper -->
        <div class="px-container-padding pb-stack-lg flex flex-col gap-6 flex-1">
            <!-- Filter Section (Glassmorphism/Clean Card) -->
            <form
                method="GET"
                action="{{ route('admin.riwayat-helpdesk') }}"
                class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-4">
                <div class="flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface">
                        Filter Pencarian
                    </h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Dari Tanggal</label>
                        <input
                            name="tanggal_awal"
                            value="{{ request('tanggal_awal') }}"
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            type="date" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Sampai Tanggal</label>
                        <input
                            name="tanggal_akhir"
                            value="{{ request('tanggal_akhir') }}"
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            type="date" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-sm text-label-sm text-on-surface-variant">Nama / NIP Pelapor</label>
                        <input
                            name="cari"
                            value="{{ request('cari') }}"
                            class="border border-outline-variant rounded-md p-2 font-body-md text-body-md bg-transparent focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors text-on-surface"
                            placeholder="Cari nama atau NIP pelapor" type="text" />
                    </div>
                    <div class="flex items-end gap-2">
                        <a
                            href="{{ route('admin.riwayat-helpdesk') }}"
                            class="h-[40px] flex-1 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface font-label-md text-label-md flex items-center justify-center gap-2 hover:bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-lg">restart_alt</span>
                            Reset
                        </a>
                        <button
                            type="submit"
                            class="h-[40px] flex-1 px-4 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-sm">
<span class="material-symbols-outlined text-lg">search</span>
                            Terapkan
                        </button>
                    </div>
                </div>
            </form>
<!-- Data Table Section -->
            <div
                class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden flex-1 flex flex-col">
                <!-- Mobile Card List -->
                <div class="divide-y divide-outline-variant/50 lg:hidden">
                    @forelse ($riwayatHelpdesks as $item)
                        @php
                            $persetujuanM = $item->persetujuanDigital->first();
                            $riwayatPertamaM = $item->riwayat->first();
                            $waktuSelesaiM = $persetujuanM?->waktu_persetujuan
                                ?? $riwayatPertamaM?->waktu_diselesaikan;
                            $statusValidasiM = $persetujuanM?->status_dokumen;
                            $namaAdminM = $riwayatPertamaM?->pelapor?->nama_lengkap
                                ?? $riwayatPertamaM?->pelapor?->name
                                ?? $persetujuanM?->penyetuju?->nama_lengkap
                                ?? $persetujuanM?->penyetuju?->name
                                ?? '';
                        @endphp
                        <div class="p-4">
                            <div class="mb-1 flex items-start justify-between gap-2">
                                <div class="min-w-0">
                                    <p class="font-medium text-on-surface">{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}</p>
                                    <p class="text-on-surface-variant text-xs">{{ $item->pelapor?->nip ?? '-' }}</p>
                                </div>
                                <span class="text-on-surface-variant text-xs whitespace-nowrap">{{ $waktuSelesaiM ? \Carbon\Carbon::parse($waktuSelesaiM)->translatedFormat('d M Y') : '-' }}</span>
                            </div>
                            <h3 class="font-body-md text-body-md text-on-surface mb-3 font-semibold leading-snug">{{ $item->judul_masalah }}</h3>
                            <div class="mb-3 flex flex-wrap items-center gap-2">
                                @if ($statusValidasiM === 'Valid')
                                    <button type="button" onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Valid', '{{ url('/verifikasi') }}')" class="bg-secondary-container/20 text-secondary inline-flex h-9 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-secondary-container/40">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                    </button>
                                @elseif ($statusValidasiM === 'Invalid')
                                    <button type="button" onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Invalid', '{{ url('/verifikasi') }}')" class="bg-error-container text-on-error-container inline-flex h-9 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-error-container/70">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Invalid</span>
                                    </button>
                                @else
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-surface-container text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">help</span>
                                        <span class="font-label-sm text-label-sm font-bold">Belum Validasi</span>
                                    </div>
                                @endif
                                @if ($statusValidasiM === 'Valid')
                                    <button type="button" onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Valid', '{{ url('/verifikasi-admin') }}', '{{ $namaAdminM }}')" class="bg-secondary-container/20 text-secondary inline-flex h-9 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-secondary-container/40">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Admin Valid</span>
                                    </button>
                                @elseif ($statusValidasiM === 'Invalid')
                                    <button type="button" onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Invalid', '{{ url('/verifikasi-admin') }}', '{{ $namaAdminM }}')" class="bg-error-container text-on-error-container inline-flex h-9 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-error-container/70">
                                        <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
                                        <span class="font-label-sm text-label-sm font-bold">Admin Invalid</span>
                                    </button>
                                @else
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-surface-container text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">help</span>
                                        <span class="font-label-sm text-label-sm font-bold">Admin Belum Validasi</span>
                                    </div>
                                @endif
                            </div>
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.riwayat-helpdesk.detail', $item->id_helpdesk) }}" class="flex-1 px-3 py-2 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors inline-flex items-center justify-center">
                                    Detail
                                </a>
                                @if ($statusValidasiM === 'Valid')
                                    <a href="{{ route('admin.riwayat-helpdesk.download', $item->id_helpdesk) }}" class="flex-1 px-3 py-2 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors inline-flex items-center justify-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px]">download</span>
                                        Unduh Laporan
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="flex flex-col items-center gap-2 px-4 py-12 text-center text-on-surface-variant">
                            <span class="material-symbols-outlined text-[48px]">history</span>
                            <p class="font-medium">Tidak ada riwayat helpdesk</p>
                            <p class="text-sm">Belum ada laporan helpdesk yang selesai.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Desktop Table -->
                <div class="hidden overflow-x-auto flex-1 lg:block">
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
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant whitespace-nowrap">
                                    Status Validasi
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant whitespace-nowrap">
                                    Status Validasi admin
                                </th>
                                <th class="py-3 px-4 font-label-md text-label-md text-on-surface-variant text-right whitespace-nowrap">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/50">
                            @forelse ($riwayatHelpdesks as $item)
@php
                                    $persetujuan = $item->persetujuanDigital->first();
                                    $tindakan = $item->tindakanPerbaikan->first();
                                    $riwayatPertama = $item->riwayat->first();
                                    $waktuSelesai = $persetujuan?->waktu_persetujuan
                                        ?? $riwayatPertama?->waktu_diselesaikan;
                                    $statusValidasi = $persetujuan?->status_dokumen;
                                    $namaAdmin = $riwayatPertama?->pelapor?->nama_lengkap
                                        ?? $riwayatPertama?->pelapor?->name
                                        ?? $persetujuan?->penyetuju?->nama_lengkap
                                        ?? $persetujuan?->penyetuju?->name
                                        ?? '';
                                @endphp
                                <tr class="hover:bg-surface-container-low transition-colors group cursor-default">
                                    <td class="py-3 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-body-md text-body-md text-on-surface">{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}</span>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">{{ $item->pelapor?->nip ?? '-' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 font-body-md text-body-md text-on-surface">
                                        {{ $waktuSelesai ? \Carbon\Carbon::parse($waktuSelesai)->translatedFormat('d M Y, H:i') : '-' }}
                                    </td>
                                    <td class="py-3 px-4 max-w-xs">
                                        <p class="font-body-md text-body-md text-on-surface font-medium truncate">{{ $item->judul_masalah }}</p>
                                    </td>
                                    <td class="py-3 px-4" id="verifikasi-pegawai">
                                        @if ($statusValidasi === 'Valid')
                                            <button
                                                type="button"
                                                onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Valid', '{{ url('/verifikasi') }}')"
                                                class="bg-secondary-container/20 text-secondary inline-flex h-11 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-secondary-container/40"
                                                title="Tampilkan QR Validasi Pegawai"
                                            >
                                                <span class="material-symbols-outlined">qr_code_scanner</span>
                                                <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                            </button>
                                        @elseif ($statusValidasi === 'Invalid')
                                            <button
                                                type="button"
                                                onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Invalid', '{{ url('/verifikasi') }}')"
                                                class="bg-error-container text-on-error-container inline-flex h-11 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-error-container/70"
                                                title="Tampilkan QR Validasi Pegawai"
                                            >
                                                <span class="material-symbols-outlined">qr_code_scanner</span>
                                                <span class="font-label-sm text-label-sm font-bold">Invalid</span>
                                            </button>
                                        @else
                                            <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-surface-container text-on-surface-variant">
                                                <span class="material-symbols-outlined text-[16px]">help</span>
                                                <span class="font-label-sm text-label-sm font-bold">Belum Validasi</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4" id="verikasi-admin">
                                        @if ($statusValidasi === 'Valid')
                                            <button
                                                type="button"
                                                onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Valid', '{{ url('/verifikasi-admin') }}', '{{ $namaAdmin }}')"
                                                class="bg-secondary-container/20 text-secondary inline-flex h-11 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-secondary-container/40"
                                                title="Tampilkan QR Validasi Admin"
                                            >
                                                <span class="material-symbols-outlined">qr_code_scanner</span>
                                                <span class="font-label-sm text-label-sm font-bold">Valid</span>
                                            </button>
                                        @elseif ($statusValidasi === 'Invalid')
                                            <button
                                                type="button"
                                                onclick="openQrModal('{{ $item->nomor_Helpdesk }}', '{{ $item->pelapor?->nama_lengkap ?? 'Tidak Diketahui' }}', '{{ $item->judul_masalah }}', '{{ $item->id_helpdesk }}', 'Invalid', '{{ url('/verifikasi-admin') }}', '{{ $namaAdmin }}')"
                                                class="bg-error-container text-on-error-container inline-flex h-11 items-center gap-1.5 rounded-full px-3 transition-colors hover:bg-error-container/70"
                                                title="Tampilkan QR Validasi Admin"
                                            >
                                                <span class="material-symbols-outlined">qr_code_scanner</span>
                                                <span class="font-label-sm text-label-sm font-bold">Invalid</span>
                                            </button>
                                        @else
                                            <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-surface-container text-on-surface-variant">
                                                <span class="material-symbols-outlined text-[16px]">help</span>
                                                <span class="font-label-sm text-label-sm font-bold">Belum Validasi</span>
                                            </div>
                                        @endif
                                    </td>
<td class="py-3 px-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a
                                                href="{{ route('admin.riwayat-helpdesk.detail', $item->id_helpdesk) }}"
                                                class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors inline-block">
                                                Detail
                                            </a>
                                            @if ($statusValidasi === 'Valid')
                                                <a
                                                    href="{{ route('admin.riwayat-helpdesk.download', $item->id_helpdesk) }}"
                                                    class="px-3 py-1.5 rounded border border-outline-variant bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container-low transition-colors inline-flex items-center gap-1.5">
                                                    <span class="material-symbols-outlined text-[16px]">download</span>
                                                    Unduh Laporan
                                                </a>
                                            @endif
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-12 text-center">
                                        <div class="flex flex-col items-center gap-2 text-on-surface-variant">
                                            <span class="material-symbols-outlined text-[48px]">history</span>
                                            <p class="font-medium">Tidak ada riwayat helpdesk</p>
                                            <p class="text-sm">Belum ada laporan helpdesk yang selesai.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($riwayatHelpdesks->hasPages())
                    <div class="px-4 py-3 border-t border-outline-variant/50">
                        {{ $riwayatHelpdesks->links() }}
                    </div>
                @endif
            </div>
</div>
    </main>

    <!-- QR Code Modal -->
    <div
        aria-hidden="true"
        class="fixed inset-0 z-[100] hidden items-center justify-center p-gutter"
        id="qr-modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="qr-modal-title"
    >
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-primary/50 backdrop-blur-sm" id="qr-modal-backdrop"></div>
        <!-- Dialog Card -->
        <div class="bg-surface-container-lowest relative w-full max-w-md overflow-hidden rounded-2xl shadow-2xl">
            <!-- Top accent bar -->
            <div class="from-secondary-container h-1.5 w-full bg-gradient-to-r to-primary"></div>
            <div class="p-6">
                <!-- Header -->
                <div class="flex items-start justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-secondary-container/20 flex h-11 w-11 items-center justify-center rounded-full text-secondary">
                            <span class="material-symbols-outlined">qr_code_scanner</span>
                        </div>
                        <div>
                            <h2 id="qr-modal-title" class="font-headline-sm text-headline-sm text-primary">QR Validasi</h2>
                            <p id="qr-modal-report" class="font-label-md text-label-md text-on-surface-variant mt-0.5"></p>
                        </div>
                    </div>
                    <button
                        type="button"
                        onclick="closeQrModal()"
                        class="text-on-surface-variant hover:text-on-surface flex h-8 w-8 items-center justify-center rounded-full transition-colors hover:bg-surface-container-low"
                        aria-label="Tutup"
                    >
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <!-- QR Content -->
                <div class="mt-6 flex flex-col items-center text-center">
                    <div id="qr-code-box" class="border-outline-variant rounded-xl border bg-white p-4 shadow-sm"></div>
                    <p id="qr-modal-title-text" class="font-body-md text-body-md mt-4 font-semibold text-primary"></p>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1 text-sm">
                        Scan QR untuk melihat status validasi
                        langsung dari database.
                    </p>
<button
                        type="button"
                        id="qr-status-toggle"
                        onclick="toggleQrStatus()"
                        class="border-outline-variant/50 mt-4 flex w-full cursor-pointer items-center justify-center gap-2 rounded-lg border bg-surface-container-low px-3 py-2 transition-colors"
                        title="Klik untuk mengubah status validasi"
                    >
                        <span class="material-symbols-outlined text-secondary text-[16px]" id="qr-status-icon">verified</span>
                        <span class="font-label-md text-label-md text-secondary" id="qr-status-text">Status: Valid</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
let currentQrCode = null;
        let currentNomor = null;
        let currentIdHelpdesk = null;
        let currentStatus = 'Valid';

        function setStatusUi(status) {
            const statusText = document.getElementById('qr-status-text');
            const statusIcon = document.getElementById('qr-status-icon');
            const statusBtn = document.getElementById('qr-status-toggle');

            if (status === 'Invalid') {
                statusText.textContent = 'Status: Invalid';
                statusIcon.textContent = 'cancel';
                statusBtn.classList.remove('bg-surface-container-low');
                statusBtn.classList.add('bg-error-container');
                statusText.classList.remove('text-secondary');
                statusText.classList.add('text-on-error-container');
                statusIcon.classList.remove('text-secondary');
                statusIcon.classList.add('text-on-error-container');
            } else {
                statusText.textContent = 'Status: Valid';
                statusIcon.textContent = 'verified';
                statusBtn.classList.remove('bg-error-container');
                statusBtn.classList.add('bg-surface-container-low');
                statusText.classList.remove('text-on-error-container');
                statusText.classList.add('text-secondary');
                statusIcon.classList.remove('text-on-error-container');
                statusIcon.classList.add('text-secondary');
            }
        }

function openQrModal(nomor, nama, judul, idHelpdesk, status, baseUrl, adminNama) {
            const modal = document.getElementById('qr-modal');
            const qrBox = document.getElementById('qr-code-box');
            const reportEl = document.getElementById('qr-modal-report');
            const titleEl = document.getElementById('qr-modal-title-text');

// Store current context
            currentNomor = nomor;
            currentIdHelpdesk = idHelpdesk;

            // Clear previous QR
            if (currentQrCode) {
                currentQrCode.clear();
                currentQrCode = null;
            }
            qrBox.innerHTML = '';

// Set metadata
            reportEl.textContent = nomor;
            // Tampilkan nama admin (penyetuju) bila disediakan, selain itu judul masalah
            titleEl.textContent = adminNama ? ('Admin: ' + adminNama) : judul;

            // Set status toggle sesuai status saat ini
            currentStatus = status === 'Invalid' ? 'Invalid' : 'Valid';
            setStatusUi(currentStatus);

            // Verification URL (live status from database)
            // Default ke halaman verifikasi TTD; untuk kolom admin gunakan /verifikasi-admin
            const base = baseUrl || '{{ url('/verifikasi') }}';
            const url = base + '/' + encodeURIComponent(nomor);

            if (typeof QRCode !== 'undefined') {
                currentQrCode = new QRCode(qrBox, {
                    text: url,
                    width: 180,
                    height: 180,
                    colorDark: '#001e40',
                    colorLight: '#ffffff',
                    correctLevel: QRCode.CorrectLevel.M,
                });
            }

            // Show modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modal.setAttribute('aria-hidden', 'false');
        }

function toggleQrStatus() {
            const btn = document.getElementById('qr-status-toggle');
            const icon = document.getElementById('qr-status-icon');
            const text = document.getElementById('qr-status-text');

            const newStatus = currentStatus === 'Valid' ? 'Invalid' : 'Valid';

            // Ubah UI dulu
            currentStatus = newStatus;
            setStatusUi(newStatus);

// Simpan ke database via AJAX
            const url = '{{ url('/admin/riwayat-helpdesk') }}/' + currentIdHelpdesk + '/status-validasi';

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ status: newStatus }),
            })
            .then(async response => {
                const data = await response.json();
                if (!response.ok) {
                    alert(data.message || 'Gagal memperbarui status validasi.');
                    // revert UI
                    currentStatus = newStatus === 'Valid' ? 'Invalid' : 'Valid';
                    setStatusUi(currentStatus);
                } else {
                    window.location.reload();
                }
            })
            .catch(() => {
                alert('Terjadi kesalahan jaringan. Silakan coba lagi.');
                currentStatus = newStatus === 'Valid' ? 'Invalid' : 'Valid';
                setStatusUi(currentStatus);
            });
        }

        function closeQrModal() {
            const modal = document.getElementById('qr-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            modal.setAttribute('aria-hidden', 'true');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('qr-modal');
            const backdrop = document.getElementById('qr-modal-backdrop');

            backdrop.addEventListener('click', closeQrModal);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeQrModal();
                }
            });
        });
    </script>
</body>

</html>
