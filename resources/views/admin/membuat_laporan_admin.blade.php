<!doctype html>
<html lang="id">
    <head>
<meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        @include('component.text_scale')
        <title>Buat Laporan Baru - SHELTER</title>
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

            /* Custom file input styling */
            .file-input-wrapper input[type="file"]::file-selector-button {
                display: none;
            }
            .file-input-wrapper input[type="file"] {
                cursor: pointer;
            }
        </style>
    </head>
    <body
        class="text-on-background font-body-md flex min-h-screen flex-col bg-background antialiased selection:bg-primary/20"
    >
        <!-- Transactional Minimal Header -->
        <header
            class="bg-surface-container-lowest border-outline-variant px-gutter sticky top-0 z-50 flex h-16 items-center border-b shadow-sm"
        >
            <div
                class="mx-auto flex w-full max-w-5xl items-center justify-between"
            >
                <a
                    href="{{ route('admin.helpdesk') }}"
                    class="text-on-surface-variant group flex items-center gap-2 transition-colors hover:text-primary"
                >
                    <span
                        class="material-symbols-outlined text-lg transition-transform group-hover:-translate-x-1"
                        >arrow_back</span
                    >
                    <span class="font-label-md text-label-md"
                        >Kembali&nbsp;</span
                    >
                </a>
            </div>
        </header>

        <!-- Main Canvas -->
        <main class="px-gutter py-stack-lg mx-auto w-full max-w-5xl flex-grow">
            <!-- Page Header -->
            <div class="mb-stack-lg flex flex-col items-start justify-between gap-4 sm:flex-row sm:flex-wrap sm:items-start">
                <div>
                    <h1
                        class="font-display-lg text-display-lg-mobile md:text-display-lg mb-2 text-primary"
                    >
                        Buat Laporan Baru
                    </h1>
                    <p
                        class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl"
                    >
                        Isi formulir di bawah untuk membuat laporan atas nama pegawai.
                    </p>
                </div>

                <!-- Searchable "Atas Nama" User Selector -->
                <div
                    id="user-select-wrapper"
                    class="bg-surface-container-lowest border-outline-variant relative mt-1 w-full flex-shrink-0 rounded-lg border shadow-sm sm:w-80"
                >
                    <label
                        class="font-label-md text-label-md text-on-surface-variant block px-4 pt-2 uppercase tracking-wider"
                    >
                        Laporan Atas Nama <span class="text-error">*</span>
                    </label>
                    <button
                        type="button"
                        id="user-select-btn"
                        class="flex w-full items-center gap-2 px-4 py-2 text-left"
                    >
                        <div class="bg-primary-fixed-dim/20 text-primary flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full">
                            <span class="material-symbols-outlined text-lg">person</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p id="user-select-name" class="text-on-surface font-label-md text-label-md truncate font-semibold">
                                Pilih Pegawai
                            </p>
                            <p id="user-select-dept" class="text-on-surface-variant font-label-sm text-label-sm truncate">
                                Cari & pilih nama pegawai...
                            </p>
                        </div>
                        <span id="user-select-arrow" class="text-on-surface-variant material-symbols-outlined text-lg">expand_more</span>
                    </button>

                    <!-- Dropdown Panel -->
                    <div
                        id="user-dropdown"
                        class="border-outline-variant bg-surface-container-lowest absolute right-0 top-full z-50 mt-2 hidden w-full overflow-hidden rounded-lg border shadow-xl"
                    >
                        <!-- Search Input -->
                        <div class="border-outline-variant relative border-b p-2">
                            <span class="text-on-surface-variant material-symbols-outlined absolute top-1/2 left-4 -translate-y-1/2 text-[18px]">search</span>
                            <input
                                type="text"
                                id="user-search"
                                placeholder="Cari nama pegawai..."
                                class="bg-surface-container-low border-outline-variant text-on-surface font-body-md text-body-md h-[38px] w-full rounded-md border py-2 pr-3 pl-9 focus:border-secondary focus:ring-secondary/30 focus:outline-none focus:ring-2"
                            />
                        </div>
                        <!-- User List -->
                        <ul id="user-list" class="max-h-64 overflow-y-auto">
                            @forelse ($users as $pegawai)
                                <li>
                                    <button
                                        type="button"
                                        class="user-option hover:bg-surface-container-low flex w-full items-center gap-3 px-3 py-2.5 text-left transition-colors"
                                        data-user-id="{{ $pegawai->user_id }}"
                                        data-user-name="{{ $pegawai->nama_lengkap }}"
                                        data-user-dept="{{ $pegawai->jabatan_departemen ?? 'Pegawai' }}"
                                    >
                                        <div class="bg-primary-fixed-dim/20 text-primary flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full">
                                            <span class="material-symbols-outlined text-lg">person</span>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="text-on-surface font-label-md text-label-md truncate font-semibold">{{ $pegawai->nama_lengkap }}</p>
                                            <p class="text-on-surface-variant font-label-sm text-label-sm truncate">{{ $pegawai->jabatan_departemen ?? 'Pegawai' }}</p>
                                        </div>
                                        <span class="text-secondary material-symbols-outlined check-ico hidden text-lg">check</span>
                                    </button>
                                </li>
                            @empty
                                <li>
                                    <div class="text-on-surface-variant flex flex-col items-center gap-1 px-4 py-8 text-center">
                                        <span class="material-symbols-outlined text-2xl">person_off</span>
                                        <p class="font-label-md text-label-md">Tidak ada pegawai terdaftar</p>
                                    </div>
                                </li>
                            @endforelse
                        </ul>
                        <!-- Empty search result -->
                        <p id="user-empty" class="text-on-surface-variant font-label-md text-label-md hidden px-4 py-6 text-center">
                            Tidak ada pegawai yang cocok
                        </p>
                    </div>

                    @error('id_pelapor')
                        <p class="text-error font-label-md mt-1 px-4 pb-2 text-[11px]">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Form Section -->
            <div class="gap-stack-md grid grid-cols-1 items-start lg:grid-cols-12">
                <div class="gap-stack-md flex flex-col lg:col-span-12">
                    <form action="{{ route('admin.laporan-helpdesk.store') }}" method="POST" enctype="multipart/form-data" class="gap-stack-md flex flex-col">
                        @csrf

                        <!-- Atas Nama (Pegawai) — hidden field must be inside the form to be submitted -->
                        <input type="hidden" name="id_pelapor" id="id_pelapor" value="{{ old('id_pelapor') }}" />

                        <!-- Judul Masalah -->
                        <div
                            class="bg-surface-container-lowest border-outline-variant p-container-padding rounded-xl border shadow-sm"
                        >
                            <div class="mb-6">
                                <h2
                                    class="font-headline-md text-headline-sm mb-stack-md flex items-center gap-2 text-primary"
                                >
                                    <span
                                        class="material-symbols-outlined icon-filled text-secondary"
                                        >error_outline</span
                                    >
                                    Detail Masalah
                                </h2>
                            </div>

                            <!-- Judul Masalah -->
                            <div class="mb-5">
                                <label
                                    for="judul_masalah"
                                    class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider"
                                >
                                    Judul Masalah <span class="text-error">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="judul_masalah"
                                    name="judul_masalah"
                                    value="{{ old('judul_masalah') }}"
                                    required
                                    placeholder="Contoh: Gangguan Koneksi Jaringan di Terminal 2"
                                    class="border-outline-variant bg-surface-container-low text-on-surface font-body-md text-body-md focus:border-primary focus:ring-primary/30 block w-full rounded-lg border px-4 py-3 transition-colors focus:outline-none focus:ring-2"
                                />
                                @error('judul_masalah')
                                    <p class="text-error font-label-md mt-1 text-[11px]">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Deskripsi Keluhan -->
                            <div class="mb-5">
                                <label
                                    for="deskripsi_keluhan"
                                    class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider"
                                >
                                    Deskripsi Keluhan <span class="text-error">*</span>
                                </label>
                                <textarea
                                    id="deskripsi_keluhan"
                                    name="deskripsi_keluhan"
                                    required
                                    rows="5"
                                    placeholder="Jelaskan secara detail masalah yang Anda alami..."
                                    class="border-outline-variant bg-surface-container-low text-on-surface font-body-md text-body-md focus:border-primary focus:ring-primary/30 block w-full rounded-lg border px-4 py-3 transition-colors focus:outline-none focus:ring-2 resize-y"
                                >{{ old('deskripsi_keluhan') }}</textarea>
                                @error('deskripsi_keluhan')
                                    <p class="text-error font-label-md mt-1 text-[11px]">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Lampiran Foto -->
                            <div>
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant mb-1.5 block uppercase tracking-wider"
                                >
                                    Foto Lampiran
                                </label>
                                <!-- Hidden file input for adding more photos -->
                                <input
                                    type="file"
                                    id="foto_helpdesk"
                                    name="foto_helpdesk[]"
                                    multiple
                                    accept="image/*,video/*"
                                    class="hidden"
                                />
                                <div
                                    class="border-outline-variant bg-surface-container-low relative flex min-h-[170px] flex-wrap items-center gap-3 rounded-lg border-2 border-dashed p-4 transition-colors"
                                    id="dropzone"
                                >
                                    <!-- Initial upload placeholder -->
                                    <div id="upload-placeholder" class="flex flex-col items-center justify-center gap-2 text-center w-full py-12">
                                        <div
                                            class="bg-surface-container-high mb-1 flex h-20 w-20 items-center justify-center rounded-full"
                                        >
                                            <span
                                                class="material-symbols-outlined text-on-surface-variant text-2xl"
                                                >cloud_upload</span
                                            >
                                        </div>
                                        <p
                                            class="font-label-md text-label-md text-on-surface-variant"
                                        >
                                            Klik untuk menambahkan foto/video
                                        </p>
                                        <p
                                            class="font-body-md text-outline text-[12px]"
                                        >
                                            Format: JPG, PNG, MP4, MOV (maks. 50MB per file)
                                        </p>
                                    </div>

                                    <!-- Photo thumbs + Add button row (hidden initially) -->
                                    <div id="photo-area" class="hidden flex flex-wrap items-start gap-3 w-full">
                                        <div id="photo-thumbs" class="flex flex-wrap items-start gap-3"></div>
                                        <button type="button" id="btn-add-more" class="h-40 w-40 flex flex-col items-center justify-center gap-1 flex-shrink-0 rounded-lg border-2 border-dashed border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-secondary hover:text-secondary transition-colors">
                                            <span class="material-symbols-outlined text-2xl">add</span>
                                            <span class="font-label-md text-[10px]">Tambah</span>
                                        </button>
                                    </div>
                                </div>
                                @error('foto_helpdesk.*')
                                    <p class="text-error font-label-md mt-1 text-[11px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div
                            class="bg-surface-container-lowest p-container-padding relative flex flex-col overflow-hidden rounded-xl border border-primary/20 shadow-[0_4px_12px_rgba(0,51,102,0.08)]"
                        >
                            <button
                                type="submit"
                                class="font-label-md text-label-md bg-surface-variant text-on-surface-variant relative flex h-[44px] w-full cursor-not-allowed items-center justify-center gap-2 overflow-hidden rounded-lg transition-all duration-300"
                                id="btn-submit"
                                disabled
                            >
                                <span id="btn-text">Kirim Laporan</span>
                                <span
                                    class="material-symbols-outlined hidden text-sm"
                                    id="btn-icon"
                                    >send</span
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

                        </div>
                    </form>
                </div>
            </div>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const btnSubmit = document.getElementById('btn-submit');
                const btnText = document.getElementById('btn-text');
                const btnSpinner = document.getElementById('btn-spinner');

                // Enable submit button by default
                btnSubmit.disabled = false;
                btnSubmit.classList.remove(
                    'bg-surface-variant',
                    'text-on-surface-variant',
                    'cursor-not-allowed',
                );
                btnSubmit.classList.add(
                    'bg-primary',
                    'text-on-primary',
                    'hover:bg-primary-container',
                    'hover:shadow-md',
                    'shadow-sm',
                    'cursor-pointer',
                );

                /* ============================================================
                 * Searchable "Atas Nama" User Selector
                 * ============================================================ */
                const selectWrapper = document.getElementById('user-select-wrapper');
                const selectBtn = document.getElementById('user-select-btn');
                const dropdown = document.getElementById('user-dropdown');
                const searchInput = document.getElementById('user-search');
                const userList = document.getElementById('user-list');
                const emptyMsg = document.getElementById('user-empty');
                const idPelapor = document.getElementById('id_pelapor');
                const selectName = document.getElementById('user-select-name');
                const selectDept = document.getElementById('user-select-dept');
                const selectArrow = document.getElementById('user-select-arrow');
                const options = Array.from(document.querySelectorAll('.user-option'));

                // Preselect from old() value if present (after validation error)
                function preselectUser() {
                    if (!idPelapor.value) return;
                    const selected = options.find(o => o.dataset.userId === idPelapor.value);
                    if (selected) {
                        selectName.textContent = selected.dataset.userName;
                        selectDept.textContent = selected.dataset.userDept;
                        options.forEach(o => o.querySelector('.check-ico').classList.add('hidden'));
                        selected.querySelector('.check-ico').classList.remove('hidden');
                    }
                }

                function openDropdown() {
                    dropdown.classList.remove('hidden');
                    searchInput.value = '';
                    filterUsers();
                    selectArrow.textContent = 'expand_less';
                    searchInput.focus();
                }

                function closeDropdown() {
                    dropdown.classList.add('hidden');
                    selectArrow.textContent = 'expand_more';
                }

                function filterUsers() {
                    const q = searchInput.value.toLowerCase().trim();
                    let visibleCount = 0;
                    options.forEach(opt => {
                        const name = (opt.dataset.userName || '').toLowerCase();
                        const dept = (opt.dataset.userDept || '').toLowerCase();
                        const matches = !q || name.includes(q) || dept.includes(q);
                        opt.closest('li').classList.toggle('hidden', !matches);
                        if (matches) visibleCount++;
                    });
                    emptyMsg.classList.toggle('hidden', visibleCount > 0 || options.length === 0);
                }

                selectBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (dropdown.classList.contains('hidden')) {
                        openDropdown();
                    } else {
                        closeDropdown();
                    }
                });

                searchInput.addEventListener('input', filterUsers);

                searchInput.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') closeDropdown();
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const firstVisible = options.find(o => !o.closest('li').classList.contains('hidden'));
                        if (firstVisible) firstVisible.click();
                    }
                });

                options.forEach(opt => {
                    opt.addEventListener('click', () => {
                        idPelapor.value = opt.dataset.userId;
                        selectName.textContent = opt.dataset.userName;
                        selectDept.textContent = opt.dataset.userDept;
                        options.forEach(o => o.querySelector('.check-ico').classList.add('hidden'));
                        opt.querySelector('.check-ico').classList.remove('hidden');
                        closeDropdown();
                    });
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('#user-select-wrapper')) {
                        closeDropdown();
                    }
                });

                preselectUser();

                // Photo upload — in-box preview with delete + add more
                const fileInput = document.getElementById('foto_helpdesk');
                const dropzone = document.getElementById('dropzone');
                const placeholder = document.getElementById('upload-placeholder');
                const thumbsContainer = document.getElementById('photo-thumbs');
                const btnAddMore = document.getElementById('btn-add-more');

                // Internal array to track File objects
                let photoFiles = [];
                const photoArea = document.getElementById('photo-area');

                // Sync file input with photoFiles array
                function syncFileInput() {
                    const dt = new DataTransfer();
                    photoFiles.forEach(f => dt.items.add(f));
                    fileInput.files = dt.files;
                }

                // Render all thumbnails & video previews using object URLs
                function renderThumbs() {
                    // Revoke old object URLs to free memory
                    if (window._objectUrls) {
                        window._objectUrls.forEach(url => URL.revokeObjectURL(url));
                    }
                    window._objectUrls = [];

                    thumbsContainer.innerHTML = '';

                    photoFiles.forEach((file, index) => {
                        const isVideo = file.type.startsWith('video/');

                        const thumb = document.createElement('div');
                        thumb.className = 'group relative h-40 w-40 flex-shrink-0 overflow-hidden rounded-lg border border-outline-variant bg-surface-container-lowest shadow-sm';

                        if (isVideo) {
                            // Video preview: gradient + play icon (NO video metadata loading)
                            const gradientBg = document.createElement('div');
                            gradientBg.className = 'h-full w-full bg-gradient-to-br from-slate-700 to-slate-900 flex items-center justify-center';
                            gradientBg.innerHTML = '<span class="material-symbols-outlined text-white" style="font-size: 56px;">play_circle</span>';

                            const fileName = document.createElement('span');
                            fileName.className = 'absolute bottom-1 left-1 right-1 text-[9px] text-white bg-black/60 rounded px-1 py-0.5 truncate text-center';
                            fileName.textContent = file.name;

                            // File size indicator
                            const fileSize = document.createElement('span');
                            fileSize.className = 'absolute top-1 right-1 text-[8px] text-white bg-black/60 rounded px-1 py-0.5';
                            fileSize.textContent = (file.size / (1024 * 1024)).toFixed(1) + 'MB';

                            thumb.appendChild(gradientBg);
                            thumb.appendChild(fileName);
                            thumb.appendChild(fileSize);
                        } else {
                            // Image thumbnail: use canvas to resize for performance
                            const canvas = document.createElement('canvas');
                            canvas.className = 'h-full w-full object-cover';
                            const ctx = canvas.getContext('2d');
                            const img = new Image();
                            const objectUrl = URL.createObjectURL(file);
                            window._objectUrls.push(objectUrl);

                            img.onload = function() {
                                // Scale to thumbnail size (160x160) for performance
                                const size = 160;
                                canvas.width = size;
                                canvas.height = size;
                                const scale = Math.min(size / img.width, size / img.height);
                                const x = (size - img.width * scale) / 2;
                                const y = (size - img.height * scale) / 2;
                                ctx.fillStyle = '#f2f4f6';
                                ctx.fillRect(0, 0, size, size);
                                ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
                            };
                            img.src = objectUrl;

                            thumb.appendChild(canvas);
                        }

                        // Delete overlay — appears on hover (same for both)
                        const delOverlay = document.createElement('div');
                        delOverlay.className = 'absolute inset-0 flex items-center justify-center bg-black/50 opacity-0 transition-opacity group-hover:opacity-100 cursor-pointer';
                        delOverlay.addEventListener('click', (e) => {
                            e.stopPropagation();
                            e.preventDefault();
                            removePhoto(index);
                        });

                        const delIcon = document.createElement('span');
                        delIcon.className = 'material-symbols-outlined text-white text-lg';
                        delIcon.textContent = 'delete';

                        delOverlay.appendChild(delIcon);
                        thumb.appendChild(delOverlay);
                        thumbsContainer.appendChild(thumb);
                    });

                    updateUI();
                }

                // Remove photo by index, then rebuild
                function removePhoto(index) {
                    photoFiles.splice(index, 1);
                    syncFileInput();
                    renderThumbs();
                }

                // Update placeholder / photo-area visibility
                function updateUI() {
                    if (photoFiles.length === 0) {
                        placeholder.classList.remove('hidden');
                        photoArea.classList.add('hidden');
                    } else {
                        placeholder.classList.add('hidden');
                        photoArea.classList.remove('hidden');
                    }
                }

                // When files are selected via input
                fileInput.addEventListener('change', (e) => {
                    const newFiles = Array.from(e.target.files || []);

                    // Append new files (avoid duplicates by name+size+lastModified)
                    newFiles.forEach(nf => {
                        const exists = photoFiles.some(
                            pf => pf.name === nf.name && pf.size === nf.size && pf.lastModified === nf.lastModified
                        );
                        if (!exists) {
                            photoFiles.push(nf);
                        }
                    });

                    syncFileInput();
                    renderThumbs();
                });

                // Click placeholder or add-more to trigger file input
                placeholder.addEventListener('click', () => fileInput.click());
                btnAddMore.addEventListener('click', (e) => {
                    e.stopPropagation();
                    fileInput.click();
                });

                // Also clicking the dropzone background triggers input when empty
                dropzone.addEventListener('click', (e) => {
                    const target = e.target;
                    if (target === dropzone || target.closest('#upload-placeholder') || target.closest('#btn-add-more')) {
                        fileInput.click();
                    }
                });

                // Form submit loading state + "Atas Nama" validation
                const form = document.querySelector('form');
                form.addEventListener('submit', (e) => {
                    if (!idPelapor.value) {
                        e.preventDefault();
                        openDropdown();
                        return;
                    }

                    if (btnSubmit.disabled) {
                        e.preventDefault();
                        return;
                    }

                    btnSubmit.disabled = true;
                    btnText.textContent = 'Mengirim...';
                    btnText.classList.add('invisible');
                    btnSpinner.classList.remove('hidden');
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
        </style>
    </body>
</html>

