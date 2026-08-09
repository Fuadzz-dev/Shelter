<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Verifikasi Keabsahan Dokumen</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
            rel="stylesheet"
        />
<link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <!-- qrcodejs for generating a scannable QR code -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    </head>
    <body class="text-on-background font-body-md bg-background">
        <!-- Main Content Canvas -->
        <main
            class="p-container-padding flex flex-1 flex-col items-center md:mt-8"
        >
            <!-- Document Verification Card -->
            <div
                class="bg-surface-container-lowest border-outline-variant relative w-full max-w-3xl overflow-hidden rounded-xl border shadow-[0px_4px_12px_rgba(0,51,102,0.08)]"
            >
                <!-- Top Accent Bar -->
                <div
                    class="from-secondary-container h-2 w-full bg-gradient-to-r to-primary"
                ></div>
                <!-- Verification Status Header -->
                <div
                    class="border-surface-variant relative flex flex-col items-center overflow-hidden border-b px-6 pt-6 pb-6 text-center"
                >
                    <!-- Decorative background elements -->
                    <div
                        class="bg-secondary-fixed pointer-events-none absolute -top-24 -right-24 h-64 w-64 rounded-full opacity-10 blur-3xl"
                    ></div>
                    <div
                        class="pointer-events-none absolute -bottom-12 -left-12 h-48 w-48 rounded-full bg-primary opacity-5 blur-2xl"
                    ></div>
                    <div
                        class="relative z-10 mb-4 flex h-20 w-20 items-center justify-center rounded-full border-4 border-green-100 bg-green-50 text-green-600 shadow-sm"
                    >
                        <span
                            class="material-symbols-outlined text-[48px]"
                            style="font-variation-settings: 'FILL' 1"
                            >check_circle</span
                        >
                    </div>
                    <h2
                        class="text-display-lg font-display-lg relative z-10 mb-2 text-primary"
                    >
                        Document Verified
                    </h2>
                    <p
                        class="text-body-lg font-body-lg text-on-surface-variant relative z-10 max-w-md"
                    >
                        Dokumen ini telah diverifikasi sebagai autentik dan
                        resmi diterbitkan oleh sistem SHELTER.
                    </p>
                </div>
                <!-- Content Grid -->
                <div class="gap-stack-lg grid grid-cols-1 p-6 md:grid-cols-2">
                    <!-- Informasi Dokumen -->
                    <div
                        class="bg-surface border-surface-variant rounded-lg border p-6"
                    >
                        <div
                            class="border-outline-variant/30 mb-6 flex items-center gap-2 border-b pb-3"
                        >
                            <span
                                class="material-symbols-outlined text-secondary-container"
                                >description</span
                            >
                            <h3
                                class="text-headline-sm font-headline-sm text-on-surface"
                            >
                                Informasi Dokumen
                            </h3>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <p
                                    class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                >
                                    Nama Pelapor
                                </p>
                                <p
                                    class="text-body-lg font-body-lg text-on-surface font-semibold"
                                >
                                    {{ $laporan->pelapor->nama_lengkap ?? $laporan->pelapor->name ?? '-' }}
                                </p>
                            </div>
                            <div>
                                <p
                                    class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                >
                                    Departemen
                                </p>
                                <p
                                    class="text-body-lg font-body-lg text-on-surface font-semibold"
                                >
                                    {{ $laporan->pelapor->jabatan_departemen ?? '-' }}
                                </p>
                            </div>
                            <div>
                                <p
                                    class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                >
                                    Report ID
                                </p>
                                <p
                                    class="text-body-lg font-body-lg bg-surface-container inline-block rounded px-2 py-1 font-mono font-semibold text-primary"
                                >
                                    {{ $laporan->nomor_Helpdesk }}
                                </p>
                            </div>
                            <div>
                                <p
                                    class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                >
                                    Report Date
                                </p>
                                <p
                                    class="text-body-md font-body-md text-on-surface"
                                >
                                    {{ $laporan->tanggal_lapor ? $laporan->tanggal_lapor->format('d F Y, H:i') : '-' }} WIB
                                </p>
                            </div>
                            <div>
                                <p
                                    class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                >
                                    Issue Title
                                </p>
                                <p
                                    class="text-body-md font-body-md text-on-surface"
                                >
                                    {{ $laporan->judul_masalah }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Status Verifikasi -->
                    <div
                        class="bg-surface border-surface-variant flex flex-col justify-between rounded-lg border p-6"
                    >
                        <div>
                            <div
                                class="border-outline-variant/30 mb-6 flex items-center gap-2 border-b pb-3"
                            >
                                <span
                                    class="material-symbols-outlined text-secondary-container"
                                    >verified</span
                                >
                                <h3
                                    class="text-headline-sm font-headline-sm text-on-surface"
                                >
                                    Status Verifikasi
                                </h3>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div>
                                    <p
                                        class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                    >
                                        Status Dokumen
                                    </p>
                                    <p
                                        class="bg-green-50 text-green-700 inline-flex items-center gap-1 rounded-full px-3 py-1 text-sm font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[16px]"
                                            style="font-variation-settings: 'FILL' 1"
                                            >verified</span
                                        >
                                        Valid
                                    </p>
                                </div>
                                <div>
                                    <p
                                        class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                    >
                                        Waktu Verifikasi
                                    </p>
                                    <p
                                        class="text-body-md font-body-md text-on-surface"
                                    >
                                        {{ $laporan->persetujuanDigital->first()->waktu_persetujuan ? \Carbon\Carbon::parse($laporan->persetujuanDigital->first()->waktu_persetujuan)->format('d F Y, H:i') : '-' }} WIB
                                    </p>
                                </div>
                                <div>
                                    <p
                                        class="text-label-sm font-label-sm text-outline mb-1 tracking-wider uppercase"
                                    >
                                        Token Validasi
                                    </p>
                                    <p
                                        class="text-body-md font-body-md bg-surface-container inline-block rounded px-2 py-1 font-mono text-on-surface"
                                    >
                                        {{ $laporan->persetujuanDigital->first()->token_validasi ?? '-' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Authentication Stamp Area -->
                <div
                    class="bg-surface-container-low border-outline-variant flex flex-col items-center justify-between gap-6 border-t p-8 md:flex-row"
                >
                    <div class="flex items-center gap-6">
<div
                            class="bg-surface-container-lowest border-outline-variant h-28 w-28 flex-shrink-0 overflow-hidden rounded-lg border p-2"
                        >
                            <div
                                id="qrcode"
                                class="flex h-full w-full items-center justify-center"
                            ></div>
                        </div>
                        <div>
                            <p
                                class="text-label-md font-label-md text-on-surface-variant mb-1 flex items-center gap-1"
                            >
                                <span
                                    class="material-symbols-outlined text-[16px]"
                                    >lock</span
                                >
                                Digitally Signed by SHELTER
                            </p>
                            <p
                                class="text-label-sm font-label-sm text-outline font-mono"
                            >
                                Token: {{ $laporan->persetujuanDigital->first()->token_validasi ?? '-' }}
                            </p>
                            <p
                                class="text-label-sm font-label-sm text-outline mt-2"
                            >
                                Scan QR code to view live verification status.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="mb-2 h-16 w-16 opacity-30 mix-blend-multiply"
                        >
                            <!-- Simulated Digital Stamp Graphic -->
                            <img
                                alt="Official Stamp"
                                class="h-full w-full object-contain"
                                data-alt="A circular, red digital stamp design with the text 'OBU WILAYAH V - VERIFIED' encircling an emblem of an airplane and a shield. It looks like a modern digital version of an official government rubber stamp."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlrXQK420D1w4JvKyVOVK2kBPpi9GDu5oe9C2y17ZoYb4nz04hjAEGT1NG42wR9QH24UcEJMNJMXY23N98D5KgsbpfD_tfFK-N9jKXB9fP9oh-BoFaOVE4ue5na8vu7MvS0Zyr40fd8YP1W2ABE8zQ6zyk9k6JtStUx6FxKdOEIpB8ahikmSU4sW-hZJMDSGOsYvUY8ABocfXwVlvSCu41_LlavVKTIVcA3lqki_o_UfKrkSgsFBQ"
                            />
                        </div>
                        <span
                            class="text-label-sm font-label-sm font-bold tracking-widest text-primary uppercase"
                            >OBU Wilayah V</span
                        >
                    </div>
</div>
            </div>

            <!-- Verification URL (hidden, used to generate QR) -->
            <input type="hidden" id="verification-url" value="{{ url('/verifikasi/'.$laporan->nomor_Helpdesk) }}" />
            <input type="hidden" id="verification-token" value="{{ $laporan->persetujuanDigital->first()->token_validasi ?? '' }}" />
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const qrEl = document.getElementById('qrcode');
                const url = document.getElementById('verification-url').value;

                if (qrEl && url && typeof QRCode !== 'undefined') {
                    new QRCode(qrEl, {
                        text: url,
                        width: 96,
                        height: 96,
                        colorDark: '#001e40',
                        colorLight: '#ffffff',
                        correctLevel: QRCode.CorrectLevel.M,
                    });
                }
            });
        </script>
    </body>
</html>
