<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SHELTER - Otban Wilayah V Login</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
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
                display: inline-block;
                vertical-align: middle;
            }
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f7f9fb;
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.96);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid #e2e8f0;
            }
            .input-focus-ring:focus {
                outline: none;
                border-color: #2dbcfe;
                box-shadow: 0 0 0 3px rgba(45, 188, 254, 0.25);
            }
        </style>
    </head>
    <body
        class="relative flex min-h-[100dvh] w-full items-center justify-center overflow-x-hidden bg-[#f7f9fb] p-4 py-6 sm:p-6 sm:py-12"
    >
        <!-- Background Ambient Blur Elements -->
        <div class="pointer-events-none fixed inset-0 z-0 overflow-hidden">
            <div
                class="bg-primary-container absolute -top-[10%] -right-[10%] h-[45vh] w-[45vh] max-w-[500px] max-h-[500px] rounded-full opacity-10 blur-[100px] sm:blur-[120px]"
            ></div>
            <div
                class="bg-secondary-container absolute -bottom-[10%] -left-[10%] h-[45vh] w-[45vh] max-w-[500px] max-h-[500px] rounded-full opacity-10 blur-[100px] sm:blur-[120px]"
            ></div>
        </div>

        <!-- Login Container -->
        <main class="relative z-10 w-full max-w-[440px] mx-auto">
            <div
                class="glass-card rounded-2xl shadow-xl shadow-slate-200/60 p-5 sm:p-8 transition-all duration-500"
            >
                <!-- Branding Header -->
                <div class="mb-6 sm:mb-8 flex flex-col items-center text-center">
                    <div
                        class="mb-3 sm:mb-4 flex h-16 w-16 items-center justify-center rounded-2xl border-4 border-white bg-gradient-to-br from-[#003366] to-[#001e40] shadow-md shadow-blue-950/20 sm:h-20 sm:w-20"
                    >
                        <span
                            class="material-symbols-outlined !text-3xl sm:!text-4xl text-white"
                            data-icon="shield"
                            >shield</span
                        >
                    </div>
                    <h1
                        class="text-2xl sm:text-3xl font-extrabold tracking-tight text-primary"
                    >
                        SHELTER
                    </h1>
                    <p
                        class="mt-1 text-xs sm:text-sm font-medium text-on-surface-variant"
                    >
                        Otban Wilayah V IT Helpdesk
                    </p>
                </div>

                <!-- Session & Error Notifications -->
                @if ($errors->any())
                    <div class="mb-5 flex items-start gap-2.5 rounded-xl border border-red-200 bg-red-50/90 p-3.5 text-xs sm:text-sm text-red-700 shadow-sm">
                        <span class="material-symbols-outlined shrink-0 !text-xl text-red-600">error</span>
                        <div class="flex-1 font-medium leading-relaxed">
                            {{ $errors->first() }}
                        </div>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-5 flex items-start gap-2.5 rounded-xl border border-green-200 bg-green-50/90 p-3.5 text-xs sm:text-sm text-green-700 shadow-sm">
                        <span class="material-symbols-outlined shrink-0 !text-xl text-green-600">check_circle</span>
                        <div class="flex-1 font-medium leading-relaxed">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif

                <!-- Login Form -->
                <form
                    action="{{ route('sign-in.submit') }}"
                    class="space-y-4 sm:space-y-5"
                    method="POST"
                >
                    @csrf
                    <!-- Username/NIP -->
                    <div class="space-y-1.5">
                        <label
                            class="block text-xs font-semibold uppercase tracking-wider text-on-surface-variant"
                            for="username"
                            >NIP / Nama Lengkap</label
                        >
                        <div class="group relative">
                            <span
                                class="material-symbols-outlined text-outline group-focus-within:text-secondary-container absolute top-1/2 left-3.5 -translate-y-1/2 !text-xl transition-colors pointer-events-none"
                                data-icon="person"
                                >person</span
                            >
                            <input
                                class="border-outline-variant text-on-surface input-focus-ring placeholder:text-slate-400 h-11 sm:h-12 w-full rounded-xl border bg-white pr-4 pl-11 text-sm sm:text-base transition-all @error('username') border-red-400 @enderror"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan NIP atau Nama Lengkap"
                                required
                                type="text"
                                autocomplete="username"
                            />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between gap-2">
                            <label
                                class="block text-xs font-semibold uppercase tracking-wider text-on-surface-variant"
                                for="password"
                                >Password</label
                            >
                            <a
                                class="text-xs font-semibold text-secondary hover:underline transition-colors shrink-0"
                                href="{{ route('lupa-password') }}"
                                >Lupa Password?</a
                            >
                        </div>
                        <div class="group relative">
                            <span
                                class="material-symbols-outlined text-outline group-focus-within:text-secondary-container absolute top-1/2 left-3.5 -translate-y-1/2 !text-xl transition-colors pointer-events-none"
                                data-icon="lock"
                                >lock</span
                            >
                            <input
                                class="border-outline-variant text-on-surface input-focus-ring placeholder:text-slate-400 h-11 sm:h-12 w-full rounded-xl border bg-white pr-11 pl-11 text-sm sm:text-base transition-all"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required
                                type="password"
                                autocomplete="current-password"
                            />
                            <button
                                class="text-outline hover:text-on-surface absolute top-1/2 right-2.5 -translate-y-1/2 p-1.5 text-slate-400 hover:text-slate-700 transition-colors focus:outline-none"
                                onclick="togglePassword()"
                                type="button"
                                aria-label="Tampilkan atau sembunyikan password"
                            >
                                <span
                                    class="material-symbols-outlined block !text-xl"
                                    data-icon="visibility"
                                    id="pass-icon"
                                    >visibility</span
                                >
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center space-x-2.5 py-1">
                        <input
                            class="border-outline-variant focus:ring-secondary-container h-4 w-4 cursor-pointer rounded text-primary accent-[#003366]"
                            id="remember"
                            name="remember"
                            type="checkbox"
                        />
                        <label
                            class="cursor-pointer text-xs sm:text-sm font-medium text-on-surface-variant select-none"
                            for="remember"
                            >Ingat Saya</label
                        >
                    </div>

                    <!-- Action Button -->
                    <button
                        class="mt-2 flex h-11 sm:h-12 w-full items-center justify-center gap-2 rounded-xl bg-primary-container font-semibold text-white shadow-md shadow-blue-950/20 text-sm sm:text-base transition-all hover:bg-primary hover:shadow-lg active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-secondary-container focus:ring-offset-2"
                        type="submit"
                    >
                        <span>Masuk</span>
                        <span
                            class="material-symbols-outlined !text-xl"
                            data-icon="login"
                            >login</span
                        >
                    </button>
                </form>

                <!-- Footer Link -->
                <div
                    class="mt-6 sm:mt-8 border-t border-slate-200/80 pt-4 sm:pt-6 text-center"
                >
                    <p
                        class="text-xs sm:text-sm text-on-surface-variant"
                    >
                        Belum memiliki akses?
                        <a
                            class="ml-1 font-semibold text-secondary hover:underline"
                            href="{{ route('sign-up') }}"
                            >Daftar Akun Baru</a
                        >
                    </p>
                </div>
            </div>
        </main>

        <script>
            function togglePassword() {
                const input = document.getElementById('password');
                const icon = document.getElementById('pass-icon');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility_off';
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility';
                }
            }
        </script>
    </body>
</html>

