<!doctype html>
<html class="light" lang="id" style="">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Create Account</title>
        <meta name="description" content="Pendaftaran akun SHELTER — IT Helpdesk Otban Wilayah V." />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                            'primary-fixed-dim': '#a7c8ff',
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
                        fontSize: {
                            'display-lg': ['32px', { lineHeight: '40px', letterSpacing: '-0.02em', fontWeight: '700' }],
                            'body-md': ['14px', { lineHeight: '20px', fontWeight: '400' }],
                            'label-sm': ['11px', { lineHeight: '14px', fontWeight: '500' }],
                            'label-md': ['12px', { lineHeight: '16px', letterSpacing: '0.05em', fontWeight: '600' }],
                            'headline-sm': ['20px', { lineHeight: '28px', fontWeight: '600' }],
                            'display-lg-mobile': ['24px', { lineHeight: '32px', fontWeight: '700' }],
                            'headline-md': ['24px', { lineHeight: '32px', fontWeight: '600' }],
                            'body-lg': ['16px', { lineHeight: '24px', fontWeight: '400' }],
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
            .input-focus-ring:focus {
                outline: none;
                border-color: #2dbcfe;
                box-shadow: 0 0 0 2px rgba(45, 188, 254, 0.2);
            }
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                vertical-align: middle;
            }
        </style>
    </head>
    <body class="p-gutter flex min-h-screen items-center justify-center">
        <!-- Background Pattern -->
        <div class="pointer-events-none fixed inset-0 z-0 overflow-hidden">
            <div class="bg-primary-fixed absolute -top-[10%] -left-[5%] h-[40%] w-[40%] rounded-full opacity-10 blur-[120px]"></div>
            <div class="bg-secondary-fixed absolute -right-[5%] -bottom-[10%] h-[40%] w-[40%] rounded-full opacity-10 blur-[120px]"></div>
        </div>
        
        <!-- Main Container -->
        <main class="relative z-10 w-full max-w-[520px] my-8">
            <!-- Header / Logo -->
            <div class="mb-stack-lg animate-fade-in flex flex-col items-center">
                <div class="mb-stack-md flex h-16 w-16 items-center justify-center overflow-hidden rounded-xl bg-primary shadow-lg">
                    <div class="text-on-primary flex h-full w-full items-center justify-center">
                        <span class="material-symbols-outlined !text-[40px]" data-icon="shield">shield</span>
                    </div>
                </div>
                <h1 class="font-display-lg text-display-lg tracking-tight text-primary">SHELTER</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-[320px] text-center">
                    Sistem Helpdesk Terintegrasi Otban Wilayah V
                </p>
            </div>
            
            <!-- Registration Card -->
            <div class="glass-card p-stack-lg relative overflow-hidden rounded-xl">
                <header class="mb-stack-lg">
                    <h2 class="font-headline-md text-headline-md text-on-surface">Buat Akun Baru</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Lengkapi informasi di bawah untuk mendaftar ke sistem bantuan IT.
                    </p>
                </header>
                
                <form action="{{ route('sign-up.submit') }}" class="space-y-stack-md" id="signupForm" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <ul class="list-inside list-disc space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <!-- NIP Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="nip">
                            <span class="material-symbols-outlined !text-[16px]" data-icon="badge">badge</span>
                            NIP 
                        </label>
                        <input
                            class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                            id="nip" maxlength="18" name="nip" placeholder="Contoh: 198501012010121001" required="" type="text" value="{{ old('nip') }}"
                        />
                    </div>
                    
                    <!-- Nama Lengkap Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="nama">
                            <span class="material-symbols-outlined !text-[16px]" data-icon="person">person</span>
                            NAMA LENGKAP
                        </label>
                        <input
                            class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                            id="nama" name="nama" placeholder="Masukkan nama lengkap" required="" type="text" value="{{ old('nama') }}"
                        />
                    </div>
                    
                    <!-- Email Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="email">
                            <span class="material-symbols-outlined !text-[16px]" data-icon="mail">mail</span>
                            ALAMAT EMAIL
                        </label>
                        <input
                            class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                            id="email" name="email" placeholder="Contoh: nama@domain.go.id" required="" type="email" value="{{ old('email') }}"
                        />
                        <span id="emailError" class="text-xs text-red-500 hidden font-medium">Format email tidak valid (contoh: nama@domain.com).</span>
                    </div>
                    
                    <!-- Departemen Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="departemen">
                            <span class="material-symbols-outlined !text-[16px]" data-icon="domain">domain</span>
                            DEPARTEMEN
                        </label>
                        <input
                            class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                            id="departemen" name="departemen" placeholder="Masukkan nama departemen" required="" type="text" value="{{ old('departemen') }}"
                        />
                    </div>
                    
                    <!-- Password Row -->
                    <div class="gap-gutter grid grid-cols-1 md:grid-cols-2">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="password">
                                <span class="material-symbols-outlined !text-[16px]" data-icon="lock">lock</span>
                                PASSWORD
                            </label>
                            <input
                                class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                                id="password" name="password" placeholder="8 - 64 karakter" required="" type="password" maxlength="64"
                            />
                            <span id="passwordError" class="text-xs text-red-500 hidden font-medium">Min. 8 dan Maks. 64 karakter.</span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-on-surface-variant flex items-center gap-2" for="password_confirmation">
                                <span class="material-symbols-outlined !text-[16px]" data-icon="verified_user">verified_user</span>
                                KONFIRMASI
                            </label>
                            <input
                                class="px-stack-md bg-surface border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring w-full rounded-lg border py-[12px] transition-all"
                                id="password_confirmation" name="password_confirmation" placeholder="Ulangi password" required="" type="password" maxlength="64"
                            />
                            <span id="confirmError" class="text-xs text-red-500 hidden font-medium">Password tidak cocok.</span>
                        </div>
                    </div>
                    
                    <!-- Terms & Conditions -->
                    <div class="flex items-start gap-2 py-2">
                        <!-- DITAMBAHKAN ATRIBUT 'disabled' AGAR SINKRON DENGAN LOGIKA JS -->
                        <input
                            class="focus:ring-primary-container border-outline-variant mt-1 rounded text-primary disabled:opacity-50 disabled:cursor-not-allowed"
                            id="terms" required="" type="checkbox"
                        />
                        <label class="font-body-md text-label-sm text-on-surface-variant leading-tight" for="terms">
                            Saya setuju dengan
                            <a class="font-semibold text-secondary hover:underline" href="{{ route('ketentuan-layanan') }}" rel="noopener" id="link-terms">Ketentuan Layanan</a>
                            dan
                            <a class="font-semibold text-secondary hover:underline" href="{{ route('kebijakan-privasi') }}" rel="noopener" id="link-privacy">Kebijakan Privasi</a>
                            SHELTER OBU Wilayah V.
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <button
                        class="bg-primary-container text-on-primary font-label-md text-body-md flex h-[44px] w-full items-center justify-center gap-2 rounded-lg shadow-md transition-all hover:bg-primary active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-primary-container disabled:active:scale-100"
                        id="submitBtn" disabled type="submit"
                    >
                        Daftar Sekarang
                        <span class="material-symbols-outlined !text-[18px]" data-icon="arrow_forward">arrow_forward</span>
                    </button>
                </form>
                
                <footer class="mt-stack-lg pt-stack-md border-outline-variant border-t text-center">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Sudah punya akun?
                        <a class="font-semibold text-secondary decoration-secondary/30 transition-all hover:underline" href="{{ route('sign-in') }}">Masuk</a>
                    </p>
                </footer>
            </div>
        </main>
        

        <script>
            const signupForm = document.getElementById('signupForm');
            const submitBtn = document.getElementById('submitBtn');
            const nipInput = document.getElementById('nip');
            const namaInput = document.getElementById('nama');
            const emailInput = document.getElementById('email');
            const departemenInput = document.getElementById('departemen');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const termsCheckbox = document.getElementById('terms');

            // Micro-interaction: hanya izinkan angka untuk NIP
            nipInput.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });

            // Fungsi bantuan untuk menampilkan/menyembunyikan pesan error real-time
            function toggleError(elementId, showCondition, message = '') {
                const errorEl = document.getElementById(elementId);
                if (!errorEl) return;
                if (showCondition) {
                    errorEl.textContent = message;
                    errorEl.classList.remove('hidden');
                } else {
                    errorEl.classList.add('hidden');
                }
            }

            // --- LOGIKA VALIDASI FORM REAL-TIME ---
            function checkFormValidity() {
                const nipVal = nipInput.value.trim();
                const namaVal = namaInput.value.trim();
                const emailVal = emailInput.value.trim();
                const deptVal = departemenInput.value.trim();
                const passVal = passwordInput.value;
                const confirmVal = confirmPasswordInput.value;

                // 1. Validasi NIP
                const isNipValid = nipVal.length >= 0 && nipVal.length <= 18;
                // 2. Validasi Email (Regex standar RFC)
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const isEmailValid = emailRegex.test(emailVal);
                toggleError('emailError', !isEmailValid && emailVal.length > 0, 'Format email tidak valid (contoh: nama@domain.go.id).');

                // 3. Validasi Rentang Password (Min 8, Max 64 karakter)
                const isPasswordRangeValid = passVal.length >= 8 && passVal.length <= 64;
                toggleError('passwordError', !isPasswordRangeValid && passVal.length > 0, 'Password harus antara 8 - 64 karakter.');

                // 4. Validasi Konfirmasi Password
                const isPasswordMatch = passVal === confirmVal && confirmVal.length > 0;
                toggleError('confirmError', !isPasswordMatch && confirmVal.length > 0, 'Konfirmasi password tidak cocok.');

                const isNamaValid = namaVal !== '';
                const isDepartemenValid = deptVal !== '';
                const isTermsChecked = termsCheckbox.checked;

                // Aktifkan tombol HANYA jika semua syarat terpenuhi
                if (
                    isNipValid &&
                    isNamaValid &&
                    isEmailValid &&
                    isDepartemenValid &&
                    isPasswordRangeValid &&
                    isPasswordMatch &&
                    isTermsChecked
                ) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
            }

            // Dengarkan perubahan pada semua input form (input, change, dan keyup)
            const formInputs = [nipInput, namaInput, emailInput, departemenInput, passwordInput, confirmPasswordInput, termsCheckbox];
            formInputs.forEach(input => {
                input.addEventListener('input', checkFormValidity);
                input.addEventListener('change', checkFormValidity);
                input.addEventListener('keyup', checkFormValidity);
            });


            // Card entry animation & Inisialisasi awal
            document.addEventListener('DOMContentLoaded', () => {
                const card = document.querySelector('.glass-card');
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);

                // Restore form data jika kembali dari halaman terms/privacy
                restoreFormData();
                // Centang otomatis jika user sudah membuka kedua halaman (Ketentuan Layanan & Kebijakan Privasi)
                autoCheckTermsIfBothVisited();
                checkFormValidity();
            });

            // --- SIMPAN & RESTORE DATA FORM SAAT NAVIGASI KE TERMS/PRIVACY ---
            // Saat user klik link terms/privacy, simpan data form agar tidak hilang saat kembali
            const linkTerms = document.getElementById('link-terms');
            const linkPrivacy = document.getElementById('link-privacy');

            function saveFormData() {
                const formData = {
                    nip: nipInput.value,
                    nama: namaInput.value,
                    email: emailInput.value,
                    departemen: departemenInput.value,
                    password: passwordInput.value,
                    password_confirmation: confirmPasswordInput.value,
                    terms_checked: termsCheckbox.checked
                };
                sessionStorage.setItem('shelter_signup_form', JSON.stringify(formData));
            }

            function restoreFormData() {
                const savedData = sessionStorage.getItem('shelter_signup_form');
                if (savedData) {
                    try {
                        const formData = JSON.parse(savedData);
                        nipInput.value = formData.nip || '';
                        namaInput.value = formData.nama || '';
                        emailInput.value = formData.email || '';
                        departemenInput.value = formData.departemen || '';
                        passwordInput.value = formData.password || '';
                        confirmPasswordInput.value = formData.password_confirmation || '';
                        termsCheckbox.checked = formData.terms_checked || false;
                        
                        // Hapus sessionStorage setelah restore
                        sessionStorage.removeItem('shelter_signup_form');
                        
                        // Jalankan validasi ulang
                        checkFormValidity();
                    } catch (e) {
                        console.error('Gagal merestore data form:', e);
                    }
                }
            }

            // Simpan data form + tandai bahwa halaman terkait sudah dibuka, saat link terms/privacy diklik
            linkTerms.addEventListener('click', () => {
                sessionStorage.setItem('shelter_visited_terms', 'true');
                saveFormData();
            });
            linkPrivacy.addEventListener('click', () => {
                sessionStorage.setItem('shelter_visited_privacy', 'true');
                saveFormData();
            });

            // --- AUTO-CENTANG CHECKBOX JIKA KEDUA HALAMAN SUDAH DIBUKA ---
            function autoCheckTermsIfBothVisited() {
                const visitedTerms = sessionStorage.getItem('shelter_visited_terms') === 'true';
                const visitedPrivacy = sessionStorage.getItem('shelter_visited_privacy') === 'true';

                if (visitedTerms && visitedPrivacy) {
                    termsCheckbox.checked = true;
                }
            }
            
            // Hapus sessionStorage flags ketika user uncheck checkbox manual
            termsCheckbox.addEventListener('change', () => {
                if (!termsCheckbox.checked) {
                    sessionStorage.removeItem('shelter_visited_terms');
                    sessionStorage.removeItem('shelter_visited_privacy');
                }
                checkFormValidity();
            });
        </script>
    </body>
</html>