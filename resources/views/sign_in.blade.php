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
                            'display-lg': [
                                '32px',
                                {
                                    lineHeight: '40px',
                                    letterSpacing: '-0.02em',
                                    fontWeight: '700',
                                },
                            ],
                            'body-md': [
                                '14px',
                                { lineHeight: '20px', fontWeight: '400' },
                            ],
                            'label-sm': [
                                '11px',
                                { lineHeight: '14px', fontWeight: '500' },
                            ],
                            'label-md': [
                                '12px',
                                {
                                    lineHeight: '16px',
                                    letterSpacing: '0.05em',
                                    fontWeight: '600',
                                },
                            ],
                            'headline-sm': [
                                '20px',
                                { lineHeight: '28px', fontWeight: '600' },
                            ],
                            'display-lg-mobile': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '700' },
                            ],
                            'headline-md': [
                                '24px',
                                { lineHeight: '32px', fontWeight: '600' },
                            ],
                            'body-lg': [
                                '16px',
                                { lineHeight: '24px', fontWeight: '400' },
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
                display: inline-block;
                vertical-align: middle;
            }
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f7f9fb;
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border: 1px solid #e2e8f0;
            }
            .input-focus-ring:focus {
                outline: none;
                border-color: #2dbcfe;
                box-shadow: 0 0 0 2px rgba(45, 188, 254, 0.2);
            }
        </style>
    </head>
    <body
        class="relative flex min-h-screen items-center justify-center overflow-hidden p-4"
    >
        <!-- Background Architectural Element -->
        <div class="pointer-events-none absolute inset-0 z-0 opacity-10">
            <div
                class="bg-primary-container absolute top-[-10%] right-[-10%] h-1/2 w-1/2 rounded-full blur-[120px]"
            ></div>
            <div
                class="bg-secondary-container absolute bottom-[-10%] left-[-10%] h-1/2 w-1/2 rounded-full blur-[120px]"
            ></div>
        </div>
        <!-- Login Container -->
        <main class="z-10 w-full max-w-[440px]">
            <div
                class="glass-card p-stack-lg animate-in rounded-xl shadow-xl duration-700 fade-in slide-in-from-bottom-4"
            >
                <!-- Branding Header -->
                <div class="mb-stack-lg flex flex-col items-center">
                    <div
                        class="mb-stack-md flex h-20 w-20 items-center justify-center rounded-full border-4 border-white bg-primary shadow-lg"
                    >
                        <span
                            class="material-symbols-outlined !text-4xl text-white"
                            data-icon="shield"
                            >shield</span
                        >
                    </div>
                    <h1
                        class="font-display-lg text-display-lg text-center text-primary"
                    >
                        SHELTER
                    </h1>
                    <p
                        class="font-body-md text-body-md text-on-surface-variant mt-1"
                    >
                        Otban Wilayah V IT Helpdesk
                    </p>
                </div>
                <div class="mb-stack-lg">
                    <h2
                        class="font-headline-sm text-headline-sm text-on-surface mb-1"
                    ></h2>
                </div>
                <!-- Login Form -->
                @if ($errors->any())
                    <div class="mb-stack-md rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif
                @if (session('status'))
                    <div class="mb-stack-md rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('status') }}
                    </div>
                @endif
                <form
                    action="{{ route('sign-in.submit') }}"
                    class="space-y-stack-md"
                    method="POST"
                >
                    @csrf
                    <!-- Username/NIP -->
                    <div class="space-y-unit">
                        <label
                            class="font-label-md text-label-md text-on-surface-variant block tracking-wider uppercase"
                            for="username"
                            >NIP / Nama Lengkap</label
                        >
                        <div class="group relative">
                            <span
                                class="material-symbols-outlined text-outline group-focus-within:text-secondary-container absolute top-1/2 left-3 -translate-y-1/2 transition-colors"
                                data-icon="person"
                                >person</span
                            >
                            <input
                                class="border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring placeholder:text-outline h-[44px] w-full rounded-lg border bg-white pr-4 pl-10 transition-all @error('username') border-red-400 @enderror"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan NIP atau Nama Lengkap"
                                required=""
                                type="text"
                            />
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="space-y-unit">
                        <div class="flex items-center justify-between">
                            <label
                                class="font-label-md text-label-md text-on-surface-variant block tracking-wider uppercase"
                                for="password"
                                >Password</label
                            >
                            <a
                                class="font-label-md text-label-md text-secondary hover:underline"
                                href="{{ route('lupa-password') }}"
                                >Lupa Password?</a
                            >
                        </div>
                        <div class="group relative">
                            <span
                                class="material-symbols-outlined text-outline group-focus-within:text-secondary-container absolute top-1/2 left-3 -translate-y-1/2 transition-colors"
                                data-icon="lock"
                                >lock</span
                            >
                            <input
                                class="border-outline-variant font-body-md text-body-md text-on-surface input-focus-ring placeholder:text-outline h-[44px] w-full rounded-lg border bg-white pr-12 pl-10 transition-all"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required=""
                                type="password"
                            />
                            <button
                                class="text-outline hover:text-on-surface absolute top-1/2 right-3 -translate-y-1/2 transition-colors"
                                onclick="togglePassword()"
                                type="button"
                            >
                                <span
                                    class="material-symbols-outlined"
                                    data-icon="visibility"
                                    id="pass-icon"
                                    >visibility</span
                                >
                            </button>
                        </div>
                    </div>
                    <!-- Remember Me -->
                    <div class="flex items-center space-x-2 py-1">
                        <input
                            class="border-outline-variant focus:ring-secondary-container h-4 w-4 cursor-pointer rounded text-primary"
                            id="remember"
                            name="remember"
                            type="checkbox"
                        />
                        <label
                            class="font-body-md text-body-md text-on-surface-variant cursor-pointer select-none"
                            for="remember"
                            >Remember Me</label
                        >
                    </div>
                    <!-- Action Button -->
                    <button
                        class="bg-primary-container text-on-primary font-label-md text-label-md mt-stack-md flex h-[44px] w-full items-center justify-center gap-2 rounded-lg shadow-md transition-all hover:bg-primary hover:shadow-lg active:scale-[0.98]"
                        type="submit"
                    >
                        Masuk
                        <span
                            class="material-symbols-outlined"
                            data-icon="login"
                            >login</span
                        >
                    </button>
                </form>
                <!-- Footer Link -->
                <div
                    class="mt-stack-lg pt-stack-md border-outline-variant border-t text-center"
                >
                    <p
                        class="font-body-md text-body-md text-on-surface-variant"
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
            <!-- System Status Footer -->
        </main>
        <!-- Side Illustration (Desktop Only Decor) -->
        <div class="fixed bottom-12 left-12 hidden max-w-[300px] lg:block">
            <div class="space-y-4"></div>
        </div>
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

            // Simple enter animation trigger
            document.addEventListener('DOMContentLoaded', () => {
                const card = document.querySelector('.glass-card');
                card.classList.add('opacity-100');
            });
        </script>
    </body>
</html>
