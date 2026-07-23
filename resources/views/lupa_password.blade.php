<!doctype html>
<html lang="id" class="light">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>SHELTER System - Pemulihan Kata Sandi</title>

        <!-- Fonts & Icons -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
            rel="stylesheet"
        />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

        <!-- Tailwind Theme Configuration -->
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            primary: '#001e40',
                            'primary-container': '#003366',
                            secondary: '#00658d',
                            'secondary-container': '#2dbcfe',
                            'surface-container-lowest': '#ffffff',
                            'surface-container-low': '#f2f4f6',
                            'surface-variant': '#e0e3e5',
                            outline: '#737780',
                            'outline-variant': '#c3c6d1',
                            'on-surface': '#191c1e',
                            'on-surface-variant': '#43474f',
                            'on-primary': '#ffffff',
                            error: '#ba1a1a',
                            background: '#f7f9fb',
                        },
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                    },
                },
            };
        </script>
        <style>
            body {
                background: linear-gradient(135deg, #f7f9fb 0%, #eceef0 100%);
                font-family: 'Inter', sans-serif;
            }
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>
    <body
        class="text-on-surface flex min-h-screen items-center justify-center p-4 antialiased"
    >
        <!-- Card Container -->
        <div
            class="bg-surface-container-lowest border-outline-variant/50 w-full max-w-[440px] rounded-xl border p-8 shadow-[0px_12px_24px_rgba(0,51,102,0.06)] transition-all duration-300 sm:p-10"
        >
            <!-- Alert Notifikasi Error / Sukses Laravel -->
            @if (session('status'))
            <div
                class="mb-6 flex items-center gap-2 rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700"
            >
                <span class="material-symbols-outlined text-lg"
                    >check_circle</span
                >
                <span>{{ session('status') }}</span>
            </div>
            @endif
            @if ($errors->any())
            <div
                class="mb-6 flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700"
            >
                <span class="material-symbols-outlined text-lg">error</span>
                <span>{{ $errors->first() }}</span>
            </div>
            @endif

            <!-- ==========================================
             LANGKAH 1: IDENTIFIKASI NIP / NAMA LENGKAP
             ========================================== -->
            <div
                @if (isset($step) && $step !== 1)
                    style="display: none;"
                @endif
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0"
            >
                <div class="mb-6 text-center">
                    <h2 class="text-on-surface mb-2 text-xl font-semibold">
                        Lupa Password?
                    </h2>
                    <p class="text-on-surface-variant text-sm">
                        Masukkan NIP atau Nama Lengkap Anda untuk memulai tahap
                        verifikasi akun
                    </p>
                </div>

                <form action="{{ route('lupa-password.lookup') }}" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <div>
                        <label
                            for="username"
                            class="text-on-surface-variant mb-1.5 block text-xs font-semibold tracking-wider uppercase"
                        >
                            NIP / Nama Lengkap
                        </label>
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <span
                                    class="material-symbols-outlined text-outline"
                                    >person</span
                                >
                            </div>
                            <input
                                type="text"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                required
                                class="border-outline bg-surface-container-lowest text-on-surface placeholder:text-outline/60 block h-11 w-full rounded-lg border pr-3 pl-10 text-sm transition-all outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20"
                                placeholder="Masukkan NIP atau Nama Lengkap"
                            />
                        </div>
                        @error('username')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="hover:bg-primary-container text-on-primary flex h-11 w-full items-center justify-center gap-2 rounded-lg bg-primary text-sm font-semibold shadow-sm transition-colors"
                    >
                        <span>Lanjutkan</span>
                        <span class="material-symbols-outlined text-[18px]"
                            >arrow_forward</span
                        >
                    </button>
                </form>
            </div>

            <!-- ==========================================
             LANGKAH 2: INPUT & VERIFIKASI EMAIL
             ========================================== -->
            <div
                @if (!isset($step) || $step !== 2)
                    style="display: none;"
                @endif
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0"
            >
                <div class="mb-6 text-center">
                    <h2 class="text-on-surface mb-2 text-xl font-semibold">
                        Verifikasi Email
                    </h2>
                    <p class="text-on-surface-variant text-sm">
                        Masukkan alamat email yang terhubung dengan akun
                        <strong class="text-on-surface">
                            {{ $nama_lengkap ?? '' }}
                        </strong>
                    </p>
                </div>

                <form action="{{ route('lupa-password.send-otp') }}" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <div>
                        <label
                            for="email"
                            class="text-on-surface-variant mb-1.5 block text-xs font-semibold tracking-wider uppercase"
                        >
                            Email Terdaftar
                        </label>
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <span
                                    class="material-symbols-outlined text-outline"
                                    >mail</span
                                >
                            </div>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="border-outline bg-surface-container-lowest text-on-surface placeholder:text-outline/60 block h-11 w-full rounded-lg border pr-3 pl-10 text-sm transition-all outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20"
                                placeholder="nama@email.com"
                            />
                        </div>
                    </div>

                    <div class="flex gap-2 pt-2">
                        <a
                            href="{{ route('lupa-password') }}"
                            class="border-outline-variant hover:bg-surface-container-low text-on-surface inline-flex h-11 items-center justify-center rounded-lg border px-4 text-sm font-medium transition-colors"
                        >
                            Kembali
                        </a>
                        <button
                            type="submit"
                            class="hover:bg-primary-container text-on-primary flex h-11 flex-1 items-center justify-center gap-2 rounded-lg bg-primary text-sm font-semibold shadow-sm transition-colors"
                        >
                            <span>Kirim Kode OTP</span>
                            <span
                                class="material-symbols-outlined text-[18px]"
                                >send</span
                            >
                        </button>
                    </div>
                </form>
            </div>

            <!-- ==========================================
             LANGKAH 3: INPUT KODE VERIFIKASI (OTP)
             ========================================== -->
            <div
                @if (!isset($step) || $step !== 3)
                    style="display: none;"
                @endif
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0"
            >
                <div class="mb-6 text-center">
                    <h2 class="text-on-surface mb-2 text-xl font-semibold">
                        Masukkan Kode OTP
                    </h2>
                    <p class="text-on-surface-variant text-sm">
                        Kode 6-digit telah dikirim ke
                        <span class="text-on-surface font-semibold">
                            {{ $maskedEmail ?? 'email Anda' }}
                        </span>.
                    </p>
                </div>

                <form action="{{ route('lupa-password.verify-otp.submit') }}" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <div>
                        <label
                            for="otp"
                            class="text-on-surface-variant mb-1.5 block text-center text-xs font-semibold tracking-wider uppercase"
                        >
                            Kode Verifikasi
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="otp"
                                name="otp"
                                maxlength="6"
                                required
                                placeholder="• • • • • •"
                                value="{{ old('otp') }}"
                                class="border-outline bg-surface-container-lowest text-on-surface block h-12 w-full rounded-lg border px-3 text-center text-xl font-bold tracking-[0.5em] transition-all outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 @error('otp') border-red-400 focus:border-red-500 focus:ring-red-200 @enderror"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            />
                        </div>
                    </div>

                    <div class="flex gap-2 pt-2">
                        <a
                            href="{{ route('lupa-password.verify-email') }}"
                            class="border-outline-variant hover:bg-surface-container-low text-on-surface inline-flex h-11 items-center justify-center rounded-lg border px-4 text-sm font-medium transition-colors"
                        >
                            Ganti Email
                        </a>
                        <button
                            type="submit"
                            class="hover:bg-primary-container text-on-primary flex h-11 flex-1 items-center justify-center gap-2 rounded-lg bg-primary text-sm font-semibold shadow-sm transition-colors"
                        >
                            <span>Verifikasi Kode</span>
                            <span class="material-symbols-outlined text-[18px]"
                                >check_circle</span
                            >
                        </button>
                    </div>
                </form>

                <!-- Kirim Ulang OTP (dipisah dari form utama untuk menghindari nested form) -->
                <div class="mt-4 text-center text-xs">
                    <span class="text-on-surface-variant"
                        >Belum menerima kode?</span
                    >
                    <form action="{{ route('lupa-password.resend-otp') }}" method="POST" class="inline">
                        @csrf
                        <button
                            type="submit"
                            class="font-semibold text-secondary hover:underline cursor-pointer"
                        >
                            Kirim Ulang
                        </button>
                    </form>
                </div>
            </div>

            <!-- ==========================================
             LANGKAH 4: ATUR ULANG KATA SANDI
             ========================================== -->
            <div
                @if (!isset($step) || $step !== 4)
                    style="display: none;"
                @endif
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-4"
                x-transition:enter-end="opacity-100 translate-x-0"
            >
                <div class="mb-6 text-center">
                    <h2 class="text-on-surface mb-2 text-xl font-semibold">
                        Atur Ulang Kata Sandi
                    </h2>
                    <p class="text-on-surface-variant text-sm">
                        Verifikasi berhasil. Silakan buat kata sandi baru untuk
                        akun Anda.
                    </p>
                </div>

                <!-- Form Submit Utama ke Laravel -->
                <form
                    action="{{ route('lupa-password.reset.submit') }}"
                    method="POST"
                    class="flex flex-col gap-5"
                    x-data="{ password: '', confirmPassword: '' }"
                >
                    @csrf

                    <!-- Kata Sandi Baru -->
                    <div>
                        <label
                            for="new_password"
                            class="text-on-surface mb-1.5 block text-xs font-semibold"
                            >Kata Sandi Baru</label
                        >
                        <div class="relative" x-data="{ show: false }">
                            <input
                                :type="show ? 'text' : 'password'"
                                id="new_password"
                                name="password"
                                x-model="password"
                                required
                                minlength="8"
                                class="border-outline bg-surface-container-lowest text-on-surface placeholder:text-outline/50 h-11 w-full rounded-lg border px-3 text-sm transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                :class="{ 'border-red-400 focus:border-red-500 focus:ring-red-200': password.length > 0 && password.length < 8 }"
                                placeholder="••••••••"
                            />
                            <button
                                type="button"
                                @click="show = !show"
                                class="text-outline hover:text-on-surface absolute inset-y-0 right-0 flex items-center pr-3 transition-colors"
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    x-text="show ? 'visibility' : 'visibility_off'"
                                    >visibility_off</span
                                >
                            </button>
                        </div>
                        <!-- Peringatan jika password kurang dari 8 karakter -->
                        <div
                            x-show="password.length > 0 && password.length < 8"
                            x-cloak
                            class="mt-1 flex items-center gap-1 text-xs text-red-600"
                        >
                            <span class="material-symbols-outlined text-[14px]">error</span>
                            <span>Password minimal 8 karakter (saat ini <span x-text="password.length"></span> karakter)</span>
                        </div>
                        @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Konfirmasi Kata Sandi Baru -->
                    <div>
                        <label
                            for="confirm_password"
                            class="text-on-surface mb-1.5 block text-xs font-semibold"
                            >Konfirmasi Kata Sandi Baru</label
                        >
                        <div class="relative" x-data="{ show: false }">
                            <input
                                :type="show ? 'text' : 'password'"
                                id="confirm_password"
                                name="password_confirmation"
                                x-model="confirmPassword"
                                required
                                minlength="8"
                                class="border-outline bg-surface-container-lowest text-on-surface placeholder:text-outline/50 h-11 w-full rounded-lg border px-3 text-sm transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                :class="{ 'border-red-400 focus:border-red-500 focus:ring-red-200': confirmPassword.length > 0 && confirmPassword !== password }"
                                placeholder="••••••••"
                            />
                            <button
                                type="button"
                                @click="show = !show"
                                class="text-outline hover:text-on-surface absolute inset-y-0 right-0 flex items-center pr-3 transition-colors"
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    x-text="show ? 'visibility' : 'visibility_off'"
                                    >visibility_off</span
                                >
                            </button>
                        </div>
                        <!-- Peringatan jika konfirmasi password tidak sama -->
                        <div
                            x-show="confirmPassword.length > 0 && confirmPassword !== password"
                            x-cloak
                            class="mt-1 flex items-center gap-1 text-xs text-red-600"
                        >
                            <span class="material-symbols-outlined text-[14px]">error</span>
                            <span>Konfirmasi kata sandi tidak sama dengan kata sandi baru</span>
                        </div>
                        @error('password_confirmation')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Action Button -->
                    <button
                        type="submit"
                        class="text-on-primary hover:bg-primary-container mt-2 flex h-11 w-full items-center justify-center gap-2 rounded-lg bg-primary text-sm font-semibold shadow-sm transition-colors"
                    >
                        <span>Simpan Kata Sandi Baru</span>
                        <span class="material-symbols-outlined text-[18px]"
                            >check_circle</span
                        >
                    </button>
                </form>
            </div>

            <!-- Back to Login Link -->
            <div
                class="border-surface-variant/60 mt-8 border-t pt-6 text-center"
            >
                <a
                    href="{{ route('sign-in') }}"
                    class="inline-flex items-center gap-1 text-xs font-semibold text-secondary transition-colors hover:text-primary hover:underline"
                >
                    <span class="material-symbols-outlined text-[16px]"
                        >arrow_back</span
                    >
                    Kembali ke Login
                </a>
            </div>
        </div>

        <!-- Alpine.js for password visibility toggle only -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </body>
</html>

