<!doctype html>
<html class="light" lang="id" style="">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Ketentuan Layanan</title>
        <meta name="description" content="Ketentuan Layanan Penggunaan SHELTER — IT Helpdesk Otban Wilayah V." />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'surface-tint': '#3a5f94',
                            'secondary-container': '#2dbcfe',
                            'on-primary-container': '#799dd6',
                            'surface-container-highest': '#e0e3e5',
                            'inverse-surface': '#2d3133',
                            'error-container': '#ffdad6',
                            'on-tertiary-container': '#8d9eae',
                            'tertiary-fixed-dim': '#b8c8da',
                            'on-secondary-container': '#004866',
                            'on-tertiary-fixed': '#0d1d2a',
                            'surface-container-low': '#f2f4f6',
                            'on-surface': '#191c1e',
                            'inverse-primary': '#a7c8ff',
                            secondary: '#00658d',
                            'on-secondary-fixed': '#001e2d',
                            error: '#ba1a1a',
                            'tertiary-container': '#253543',
                            'on-primary': '#ffffff',
                            'primary-fixed': '#d5e3ff',
                            'on-error-container': '#93000a',
                            'on-secondary-fixed-variant': '#004c6b',
                            tertiary: '#10202d',
                            'primary-container': '#003366',
                            'on-tertiary': '#ffffff',
                            'surface-container-high': '#e6e8ea',
                            'on-tertiary-fixed-variant': '#394857',
                            'on-background': '#191c1e',
                            background: '#f7f9fb',
                            'surface-container-lowest': '#ffffff',
                            'on-primary-fixed': '#001b3c',
                            'surface-variant': '#e0e3e5',
                            'on-primary-fixed-variant': '#1f477b',
                            'tertiary-fixed': '#d4e4f6',
                            'on-surface-variant': '#43474f',
                            'outline-variant': '#c3c6d1',
                            'inverse-on-surface': '#eff1f3',
                            'surface-container': '#eceef0',
                            'secondary-fixed': '#c6e7ff',
                            primary: '#001e40',
                            outline: '#737780',
                            'surface-dim': '#d8dadc',
                            'secondary-fixed-dim': '#82cfff',
                            'on-error': '#ffffff',
                            surface: '#f7f9fb',
                            'on-secondary': '#ffffff',
                            'surface-bright': '#f7f9fb',
                        },
                        borderRadius: {
                            DEFAULT: '0.25rem',
                            lg: '0.5rem',
                            xl: '0.75rem',
                            full: '9999px',
                        },
                        spacing: {
                            'container-padding': '24px',
                            'stack-lg': '32px',
                            'stack-sm': '8px',
                            'stack-md': '16px',
                            gutter: '16px',
                            unit: '8px',
                        },
                        fontFamily: {
                            'display-lg': ['Inter'],
                            'body-md': ['Inter'],
                            'label-sm': ['Inter'],
                            'label-md': ['Inter'],
                            'headline-sm': ['Inter'],
                            'display-lg-mobile': ['Inter'],
                            'headline-md': ['Inter'],
                            'body-lg': ['Inter'],
                        },
                    },
                },
            };
        </script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f7f9fb;
                background-image:
                    radial-gradient(at 0% 0%, rgba(0, 51, 102, 0.03) 0px, transparent 50%),
                    radial-gradient(at 100% 100%, rgba(0, 51, 102, 0.05) 0px, transparent 50%);
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border: 1px solid #e2e8f0;
                box-shadow: 0px 4px 12px rgba(0, 51, 102, 0.04);
            }
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                vertical-align: middle;
            }
            /* Custom Slim Scrollbar untuk Material Design 3 */
            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: transparent;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #c3c6d1;
                border-radius: 9999px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #8d9eae;
            }
        </style>
    </head>
    <!-- 1. Kunci tinggi layar (h-screen) dan hilangkan scroll layar utama (overflow-hidden) -->
    <body class="p-gutter flex h-screen w-full items-center justify-center overflow-hidden">
        <div class="pointer-events-none fixed inset-0 z-0 overflow-hidden">
            <div class="bg-primary-fixed absolute -top-[10%] -left-[5%] h-[40%] w-[40%] rounded-full opacity-10 blur-[120px]"></div>
            <div class="bg-secondary-fixed absolute -right-[5%] -bottom-[10%] h-[40%] w-[40%] rounded-full opacity-10 blur-[120px]"></div>
        </div>

        <!-- 2. Batasi tinggi maksimal kontainer utama agar tidak melebihi viewport -->
        <main class="relative z-10 flex h-full max-h-[92vh] w-full max-w-[768px] flex-col justify-center">
            
            <!-- Header / Logo (shrink-0 agar ukurannya tidak tertekan) -->
            <div class="mb-4 animate-fade-in flex flex-col items-center shrink-0">
                <div class="mb-2 flex h-12 w-12 items-center justify-center overflow-hidden rounded-xl bg-primary shadow-lg">
                    <div class="text-on-primary flex h-full w-full items-center justify-center">
                        <span class="material-symbols-outlined !text-[28px]" data-icon="shield">shield</span>
                    </div>
                </div>
                <h1 class="font-display-lg text-[22px] font-bold tracking-tight text-primary">SHELTER</h1>
                <p class="font-body-md text-label-sm text-on-surface-variant mt-0.5 text-center">
                    Sistem Helpdesk Terintegrasi OBU Wilayah V
                </p>
            </div>

            <!-- 3. Kartu dibuat Flex Column dengan overflow-hidden dan mengisi sisa ruang (flex-1 min-h-0) -->
            <div class="glass-card p-6 md:p-stack-lg relative flex flex-1 flex-col overflow-hidden rounded-xl min-h-0 shadow-xl">
                
                <!-- Card Header (shrink-0 agar tetap diam di atas) -->
                <header class="mb-4 border-outline-variant border-b pb-3 shrink-0">
                    <div class="flex items-center gap-2 text-secondary font-label-md mb-1">
                        <span class="material-symbols-outlined !text-[18px]" data-icon="gavel">gavel</span>
                        <span>KETENTUAN LAYANAN</span>
                    </div>
                </header>

                <!-- 4. KONTEN YANG DIGULIR: overflow-y-auto, flex-1, dan custom-scrollbar -->
                <div class="custom-scrollbar space-y-stack-md font-body-md text-on-surface-variant flex-1 overflow-y-auto pr-3 leading-relaxed min-h-0">
                    <section class="space-y-2">
                        <h3 class="font-headline-sm text-lg font-semibold text-on-surface flex items-center gap-2">
                            1. Ketentuan Umum
                        </h3>
                        <p>
                            Sistem Helpdesk Terintegrasi (SHELTER) adalah fasilitas layanan dukungan teknologi informasi internal yang disediakan oleh Kantor Otoritas Bandar Udara (OBU) Wilayah V. Dengan mengakses dan mendaftar pada sistem ini, Anda menyatakan setuju untuk tunduk pada seluruh ketentuan yang tertulis dalam dokumen ini.
                        </p>
                    </section>

                    <section class="space-y-2">
                        <h3 class="font-headline-sm text-lg font-semibold text-on-surface flex items-center gap-2">
                            2. Hak dan Kewajiban Pengguna
                        </h3>
                        <ul class="list-disc list-outside ml-5 space-y-1">
                            <li><strong>Identitas Asli:</strong> Pengguna wajib mendaftarkan diri menggunakan Nomor Induk Pegawai (NIP) 18 digit yang sah dan nama lengkap sesuai data kepegawaian resmi.</li>
                            <li><strong>Keamanan Akun:</strong> Pengguna bertanggung jawab penuh atas kerahasiaan kata sandi <em>(password)</em> dan seluruh aktivitas yang dilakukan di bawah akun dinas masing-masing.</li>
                            <li><strong>Larangan Penyalahgunaan:</strong> Dilarang keras menggunakan sistem SHELTER untuk menyebarkan perangkat lunak berbahaya, spam, atau melakukan pelaporan fiktif yang dapat mengganggu operasional layanan IT.</li>
                        </ul>
                    </section>

                    <section class="space-y-2">
                        <h3 class="font-headline-sm text-lg font-semibold text-on-surface flex items-center gap-2">
                            3. Penggunaan Layanan IT Helpdesk
                        </h3>
                        <p>
                            SHELTER diperuntukkan bagi penanganan kendala perangkat keras, jaringan, perangkat lunak dinas, dan pengajuan hak akses sistem di lingkungan kerja OBU Wilayah V. Setiap tiket yang masuk akan diproses berdasarkan tingkat prioritas (SLA) yang ditetapkan oleh Tim IT Helpdesk.
                        </p>
                    </section>

                    <section class="space-y-2">
                        <h3 class="font-headline-sm text-lg font-semibold text-on-surface flex items-center gap-2">
                            4. Pembatasan Tanggung Jawab
                        </h3>
                        <p>
                            Pengelola SHELTER berhak sewaktu-waktu membekukan atau mencabut hak akses pengguna apabila ditemukan pelanggaran terhadap kebijakan keamanan informasi lingkungan Kementerian Perhubungan atau penyalahgunaan fasilitas sistem.
                        </p>
                    </section>
                </div>

                <!-- Card Footer (shrink-0 agar tetap diam di bawah) -->
                <footer class="mt-4 pt-3 border-outline-variant border-t flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 shrink-0">
                    <p class="font-body-md text-label-sm text-on-surface-variant">
                        &copy; {{ date('Y') }} IT Helpdesk Otban Wilayah V. Hak Cipta Dilindungi.
                    </p>
                    <a href="{{ route('sign-up') }}" class="bg-surface-container-high text-on-surface font-label-md text-body-md inline-flex h-[38px] items-center justify-center gap-2 rounded-lg px-5 transition-all hover:bg-outline-variant/30 active:scale-[0.98]">
                        <span class="material-symbols-outlined !text-[18px]" data-icon="arrow_back">arrow_back</span>
                        Kembali
                    </a>
                </footer>
            </div>
        </main>
    </body>
</html>