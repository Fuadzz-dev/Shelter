<!doctype html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Edit Profil - OBU Wilayah V IT Helpdesk</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.js"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
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
                background-color: #f7f9fb;
            }
            .material-symbols-outlined {
                font-variation-settings:
                    'FILL' 0,
                    'wght' 400,
                    'GRAD' 0,
                    'opsz' 24;
            }
            .paperless-card {
                background-color: #ffffff;
                border: 1px solid #e0e3e5;
                box-shadow:
                    0 1px 3px 0 rgba(0, 0, 0, 0.1),
                    0 1px 2px 0 rgba(0, 0, 0, 0.06);
                transition: box-shadow 0.3s ease;
            }
            .paperless-card:hover {
                box-shadow:
                    0 4px 6px -1px rgba(0, 0, 0, 0.1),
                    0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
            .profile-input:focus {
                outline: none;
                border-color: #003366;
                box-shadow: 0 0 0 2px rgba(0, 51, 102, 0.1);
            }
        </style>
    </head>
    <body class="text-on-surface bg-background">
        @php
            $profilUser = $user ?? auth()->user();
            $profilFoto = null;

            if ($profilUser && filled($profilUser->foto_profil)) {
                $foto = $profilUser->foto_profil;

                // Jika sudah berupa URL lengkap
                if (is_string($foto) && preg_match('/^https?:\/\//i', $foto)) {
                    $profilFoto = $foto;
                }
                // Jika berupa data biner (BLOB) — deteksi via getimagesizefromstring
                elseif (is_string($foto) && @getimagesizefromstring($foto) !== false) {
                    $mime = getimagesizefromstring($foto)['mime'] ?? 'image/jpeg';
                    $profilFoto = 'data:'.$mime.';base64,'.base64_encode($foto);
                }
                // Selain itu anggap sebagai path file
                elseif (is_string($foto)) {
                    $profilFoto = asset($foto);
                }
            }
        @endphp

        <!-- Sidebar Admin -->
        @include('component.sidebar_admin')

        <div class="flex min-h-screen">
            <!-- Main Content Area -->
            <main class="lg:ml-[280px] flex-1">
<div class="p-container-padding mx-auto pt-[80px] lg:pt-12 lg:py-12">
                    <!-- Flash Messages -->
                    @if (session('success'))
                        <div class="border-green-200 bg-green-50 mb-6 flex items-center gap-3 rounded-lg border px-4 py-3 text-green-700">
                            <span class="material-symbols-outlined text-[20px]">check_circle</span>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="border-red-200 bg-red-50 mb-6 rounded-lg border px-4 py-3 text-red-700">
                            <ul class="space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[18px]">error</span>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

<form
                        id="profileForm"
                        method="POST"
                        action="{{ route('admin.profil.update') }}"
                        enctype="multipart/form-data"
                        class="flex flex-col gap-[20px]"
                    >
                        @csrf
                        <!-- Page Header -->
                        <div class="mb-stack-md text-center">
                            <h2
                                class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-1 text-primary"
                            >
                                PROFIL
                            </h2>
                        </div>
<!-- Profile Layout : Foto Profil (kiri) + Info & Keamanan (kanan) -->
                        <div
                            class="grid grid-cols-1 gap-[20px] lg:grid-cols-[300px_1fr]"
                        >
                            <!-- Left Column : Foto Profil -->
                            <aside
                                class="paperless-card flex flex-col items-center justify-center gap-6 self-stretch rounded-xl p-10 text-center lg:sticky lg:top-6"
                            >
                                <div class="group relative">
                                    <img
                                        id="profileImagePreview"
                                        class="border-surface-container h-40 w-40 rounded-full border-4 object-cover shadow-sm"
                                        alt="Foto Profil"
                                        src="{{ $profilFoto ?: asset('images/default_profil.jpg') }}"
                                    />
                                    <label
                                        for="foto_profil"
                                        class="absolute right-2 bottom-2 flex cursor-pointer items-center justify-center rounded-full bg-primary p-2.5 text-white shadow-lg transition-all hover:scale-105 active:scale-95"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[20px]"
                                            >photo_camera</span
                                        >
                                    </label>
                                    <input
                                        id="foto_profil"
                                        name="foto_profil"
                                        type="file"
                                        accept="image/jpeg,image/png,image/webp"
                                        class="hidden"
                                    />
                                </div>
                                <p
                                    class="font-label-sm text-label-sm text-outline text-center"
                                >
                                    Klik ikon kamera untuk mengubah foto profil
                                    (JPG, PNG, WEBP — maks 2MB)
                                </p>
                            </aside>

                            <!-- Right Column : Personal Info + Security -->
                            <div class="flex flex-col gap-[20px]">
                                <!-- Personal Info Section -->
                                <section class="paperless-card p-stack-lg rounded-xl">
                            <div
                                class="border-outline-variant mb-8 flex items-center gap-3 border-b pb-4"
                            >
                                <span
                                    class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1"
                                    >person</span
                                >
                                <h4
                                    class="font-headline-sm text-headline-sm text-primary"
                                >
                                    Informasi Pribadi
                                </h4>
                            </div>
                            <div
                                class="gap-x-gutter gap-y-stack-md grid grid-cols-1 md:grid-cols-2"
                            >
                                <div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Nama Lengkap</label
                                    >
                                    <input
                                        class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 transition-all outline-none"
                                        type="text"
                                        name="nama_lengkap"
                                        value="{{ old('nama_lengkap', $profilUser->nama_lengkap) }}"
                                        required
                                    />
                                </div>
<div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Nomor Induk Pegawai (NIP)</label
                                    >
                                    <input
                                        class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 transition-all outline-none"
                                        type="text"
                                        name="nip"
                                        value="{{ old('nip', $profilUser->nip) }}"
                                    />
                                </div>
                                <div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Jabatan</label
                                    >
                                    <input
                                        class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 transition-all outline-none"
                                        type="text"
                                        name="jabatan_departemen"
                                        value="{{ old('jabatan_departemen', $profilUser->jabatan_departemen) }}"
                                    />
                                </div>
                                <div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Alamat Email</label
                                    >
                                    <input
                                        class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 transition-all outline-none"
                                        type="email"
                                        name="email"
                                        value="{{ old('email', $profilUser->email) }}"
                                    />
                                </div>
                            </div>
                        </section>
                        <!-- Security Section -->
                        <section class="paperless-card p-stack-lg rounded-xl">
                            <div
                                class="border-outline-variant mb-8 flex items-center gap-3 border-b pb-4"
                            >
                                <span
                                    class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1"
                                    >lock</span
                                >
                                <h4
                                    class="font-headline-sm text-headline-sm text-primary"
                                >
                                    Keamanan &amp; Password
                                </h4>
                            </div>
                            <div
                                class="gap-x-gutter gap-y-stack-md grid grid-cols-1 md:grid-cols-2"
                            >
                                <div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Kata Sandi Baru</label
                                    >
                                    <div class="relative">
                                        <input
                                            class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 pr-12 transition-all outline-none"
                                            placeholder="Masukkan password baru"
                                            type="password"
                                            name="password"
                                            autocomplete="new-password"
                                        />
                                        <button
                                            class="text-outline absolute top-1/2 right-3 -translate-y-1/2 transition-colors hover:text-primary"
                                            type="button"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                >visibility</span
                                            >
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-1.5">
                                    <label
                                        class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase"
                                        >Konfirmasi Kata Sandi Baru</label
                                    >
                                    <div class="relative">
                                        <input
                                            class="profile-input bg-surface-container-lowest border-outline-variant font-body-md text-body-md text-on-surface w-full rounded-lg border px-4 py-3 pr-12 transition-all outline-none"
                                            placeholder="Ulangi password baru"
                                            type="password"
                                            name="password_confirmation"
                                            autocomplete="new-password"
                                        />
                                        <button
                                            class="text-outline absolute top-1/2 right-3 -translate-y-1/2 transition-colors hover:text-primary"
                                            type="button"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                >visibility</span
                                            >
                                        </button>
                                    </div>
                                </div>
</div>
                        </section>
                            </div>
                        </div>
<!-- Form Actions -->
                        <div class="mt-4 flex justify-end gap-4">
                            <a
                                href="{{ route('admin.profil') }}"
                                class="border-outline text-on-surface-variant font-label-md text-label-md hover:bg-surface-container rounded-lg border px-8 py-3 transition-all active:scale-95"
                            >
                                Batal
                            </a>
                            <button
                                type="submit"
                                class="font-label-md text-label-md rounded-lg bg-primary px-10 py-3 text-white shadow-md transition-all hover:brightness-125 active:scale-95"
                            >
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </main>
</div>

        <!-- Crop Photo Modal -->
        <div
            id="cropModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4"
        >
            <div
                class="paperless-card w-full max-w-lg rounded-2xl p-6"
            >
                <div class="mb-4 flex items-center justify-between">
                    <h3
                        class="font-headline-sm text-headline-sm text-primary"
                    >
                        Sesuaikan Foto
                    </h3>
                    <button
                        id="cropCloseBtn"
                        type="button"
                        class="text-outline hover:bg-surface-container flex h-9 w-9 items-center justify-center rounded-full transition-colors"
                    >
                        <span class="material-symbols-outlined text-[22px]"
                            >close</span
                        >
                    </button>
                </div>
                <div
                    class="bg-surface-container-high relative h-72 w-full overflow-hidden rounded-xl"
                >
                    <img
                        id="cropImage"
                        class="block h-full w-full"
                        alt="Foto untuk dipotong"
                    />
                </div>
                <div
                    class="mt-6 flex flex-wrap items-center justify-end gap-3"
                >
                    <button
                        id="cropChangeBtn"
                        type="button"
                        class="border-outline text-on-surface-variant font-label-md text-label-md hover:bg-surface-container rounded-lg border px-5 py-2.5 transition-all active:scale-95"
                    >
                        Ganti Foto
                    </button>
                    <button
                        id="cropApplyBtn"
                        type="button"
                        class="font-label-md text-label-md rounded-lg bg-primary px-6 py-2.5 text-white shadow-md transition-all hover:brightness-125 active:scale-95"
                    >
                        Terapkan
                    </button>
                </div>
            </div>
        </div>

        <script>
            // Crop Photo Logic
            const profileImageInput = document.getElementById('foto_profil');
            const profileImagePreview = document.getElementById('profileImagePreview');
            const cropModal = document.getElementById('cropModal');
            const cropImage = document.getElementById('cropImage');
            const cropApplyBtn = document.getElementById('cropApplyBtn');
            const cropChangeBtn = document.getElementById('cropChangeBtn');
            const cropCloseBtn = document.getElementById('cropCloseBtn');

            let cropper = null;
            let cropFile = null;

            function openCropModal(src, file) {
                cropFile = file;
                cropModal.classList.remove('hidden');
                cropModal.classList.add('flex');
                cropImage.src = src;
                if (cropper) {
                    cropper.destroy();
                }
                cropper = new Cropper(cropImage, {
                    aspectRatio: 1,
                    viewMode: 1,
                    autoCropArea: 1,
                    responsive: true,
                    background: false,
                });
            }

            function closeCropModal() {
                cropModal.classList.add('hidden');
                cropModal.classList.remove('flex');
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
                cropFile = null;
                profileImageInput.value = '';
            }

            if (profileImageInput && profileImagePreview) {
                profileImageInput.addEventListener('change', function () {
                    const file = this.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        openCropModal(e.target.result, file);
                    };
                    reader.readAsDataURL(file);
                });
            }

            cropApplyBtn.addEventListener('click', function () {
                if (!cropper) return;
                const canvas = cropper.getCroppedCanvas({
                    width: 400,
                    height: 400,
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high',
                });
                const dataUrl = canvas.toDataURL('image/jpeg', 0.9);
                profileImagePreview.src = dataUrl;
                // Update the file input with the cropped image
                canvas.toBlob(function (blob) {
                    const newFile = new File([blob], 'profil.jpg', {
                        type: 'image/jpeg',
                    });
                    const dt = new DataTransfer();
                    dt.items.add(newFile);
                    profileImageInput.files = dt.files;
                }, 'image/jpeg', 0.9);
                closeCropModal();
            });

            cropCloseBtn.addEventListener('click', closeCropModal);

            cropChangeBtn.addEventListener('click', function () {
                closeCropModal();
                setTimeout(function () {
                    profileImageInput.click();
                }, 50);
            });

            // Close modal when clicking outside
            cropModal.addEventListener('click', function (e) {
                if (e.target === cropModal) {
                    closeCropModal();
                }
            });

            // Foto Profil Preview (preview update on apply)
            // Password Visibility Toggle Logic
            document.querySelectorAll('.relative button').forEach((button) => {
                button.addEventListener('click', function () {
                    const input = this.parentElement.querySelector('input');
                    const icon = this.querySelector(
                        '.material-symbols-outlined',
                    );
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.textContent = 'visibility_off';
                    } else {
                        input.type = 'password';
                        icon.textContent = 'visibility';
                    }
                });
            });

            // Password change confirmation dialog
            const profileForm = document.getElementById('profileForm');
            profileForm.addEventListener('submit', function (e) {
                const passwordInput = document.querySelector(
                    'input[name="password"]',
                );
                if (passwordInput && passwordInput.value.trim() !== '') {
                    const confirmed = confirm(
                        'Anda akan mengubah kata sandi. Apakah Anda yakin ingin melanjutkan?',
                    );
                    if (!confirmed) {
                        e.preventDefault();
                    }
                }
            });
        </script>
    </body>
</html>
