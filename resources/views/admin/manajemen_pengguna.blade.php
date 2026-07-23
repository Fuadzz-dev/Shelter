<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Manajemen Pengguna - SHELTER</title>
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
                background-color: #f7f9fb;
            }
        </style>
    </head>

    <body
        class="text-on-background font-body-md text-body-md min-h-screen bg-background antialiased flex"
    >
        <!-- Sidebar Admin -->
        @include('component.sidebar_admin')

        <!-- Main Content Canvas -->
        <main class="md:px-container-padding ml-[280px] pt-8 w-full">
            <div class="mx-auto">
            <!-- Page Header -->
            <div
                class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center"
            >
                <div>
                    <h2
                        class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-1 text-primary"
                    >
                        Manajemen Pengguna
                    </h2>
                </div>
                <button
                    type="button"
                    onclick="openAddModal()"
                    class="text-on-primary font-label-md text-label-md flex h-11 items-center gap-2 self-start rounded-lg bg-primary px-6 whitespace-nowrap shadow-sm transition-colors hover:bg-primary/90 sm:self-auto"
                >
                    <span
                        class="material-symbols-outlined"
                        style="font-variation-settings: 'FILL' 0"
                        >person_add</span
                    >
                    Add New User
                </button>
            </div>
            <!-- Filters & Search Bar (Content Level) -->
            <div
                class="bg-surface-container-lowest border-outline-variant/50 mb-6 flex flex-col items-center justify-between gap-4 rounded-xl border p-4 shadow-sm sm:flex-row"
            >
                <div class="relative w-full sm:w-96">
                    <span
                        class="material-symbols-outlined text-outline absolute top-1/2 left-3 -translate-y-1/2"
                        style="font-variation-settings: 'FILL' 0"
                        >search</span
                    >
                    <input
                        class="border-outline-variant font-body-md text-body-md w-full rounded-lg border py-2.5 pr-4 pl-10 transition-all focus:border-secondary focus:ring-1 focus:ring-secondary focus:outline-none"
                        placeholder="Cari berdasarkan Nama atau NIP..."
                        type="text"
                    />
                </div>
                <div class="flex w-full gap-2 sm:w-auto">
                    <select
                        class="border-outline-variant font-body-md text-body-md flex-1 rounded-lg border bg-white px-4 py-2.5 pr-[30px] focus:border-secondary focus:outline-none sm:flex-none"
                    >
                        <option value="">Semua Departemen</option>
                        <option value="it">Teknologi Informasi</option>
                        <option value="hr">SDM</option>
                        <option value="ops">Operasional</option>
                    </select>
                </div>
            </div>
            <!-- Data Table (Glassmorphism inspired clean look) -->
            <div
                class="bg-surface-container-lowest border-outline-variant/30 overflow-hidden rounded-xl border shadow-[0_4px_12px_rgba(0,51,102,0.04)]"
            >
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left">
                        <thead>
                            <tr
                                class="bg-surface-container-low border-outline-variant/50 border-b"
                            >
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    NIP
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    Name
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    Department
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    Access Level
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    Last Login
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 tracking-wider uppercase"
                                >
                                    Status
                                </th>
                                <th
                                    class="font-label-md text-label-md text-on-surface-variant px-6 py-4 text-right tracking-wider uppercase"
                                >
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            id="userTableBody"
                            class="font-body-md text-body-md text-on-surface divide-outline-variant/30 divide-y"
                        >
                            <!-- Row 1 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19850312 201012 1 002"
                                data-name="Budi Santoso"
                                data-department="it"
                                data-role="admin"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19850312 201012 1 002
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Budi Santoso
                                </td>
                                <td class="px-6 py-4">Teknologi Informasi</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-primary-container/10 text-primary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    1;
                                            "
                                            >shield_person</span
                                        >
                                        Admin
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    2 Hari yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19901124 201503 2 005"
                                data-name="Siti Aminah"
                                data-department="hr"
                                data-role="user"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19901124 201503 2 005
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Siti Aminah
                                </td>
                                <td class="px-6 py-4">Sumber Daya Manusia</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    Hari ini, 08:30
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19880715 201210 1 001"
                                data-name="Agus Pratama"
                                data-department="ops"
                                data-role="user"
                                data-status="inactive"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19880715 201210 1 001
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Agus Pratama
                                </td>
                                <td class="px-6 py-4">Operasional</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    1 Bulan yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold"
                                        >Inactive</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19920415 201801 2 003"
                                data-name="Dewi Lestari"
                                data-department="finance"
                                data-role="user"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19920415 201801 2 003
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Dewi Lestari
                                </td>
                                <td class="px-6 py-4">Keuangan</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    Kemarin, 14:20
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 5 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19871102 201112 1 008"
                                data-name="Rian Hidayat"
                                data-department="ops"
                                data-role="user"
                                data-status="inactive"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19871102 201112 1 008
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Rian Hidayat
                                </td>
                                <td class="px-6 py-4">Operasional</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    3 Hari yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold"
                                        >Inactive</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 6 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19950820 202001 2 012"
                                data-name="Siska Putri"
                                data-department="it"
                                data-role="user"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19950820 202001 2 012
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Siska Putri
                                </td>
                                <td class="px-6 py-4">Teknologi Informasi</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    Hari ini, 10:15
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 7 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19820130 200512 1 001"
                                data-name="Bambang Wijaya"
                                data-department="security"
                                data-role="admin"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19820130 200512 1 001
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Bambang Wijaya
                                </td>
                                <td class="px-6 py-4">Keamanan</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-primary-container/10 text-primary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    1;
                                            "
                                            >shield_person</span
                                        >
                                        Admin
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    5 Hari yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 8 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19940612 201903 2 009"
                                data-name="Indah Permata"
                                data-department="finance"
                                data-role="user"
                                data-status="inactive"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19940612 201903 2 009
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Indah Permata
                                </td>
                                <td class="px-6 py-4">Keuangan</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    2 Minggu yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold"
                                        >Inactive</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 9 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19890925 201310 1 004"
                                data-name="Fajar Ramadhan"
                                data-department="ops"
                                data-role="user"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19890925 201310 1 004
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Fajar Ramadhan
                                </td>
                                <td class="px-6 py-4">Operasional</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    Hari ini, 07:45
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 10 -->
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-nip="19911205 201603 2 007"
                                data-name="Maya Sari"
                                data-department="security"
                                data-role="user"
                                data-status="active"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    19911205 201603 2 007
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    Maya Sari
                                </td>
                                <td class="px-6 py-4">Keamanan</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[14px]"
                                            style="
                                                font-variation-settings: 'FILL'
                                                    0;
                                            "
                                            >person</span
                                        >
                                        User
                                    </span>
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    1 Hari yang lalu
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]"
                                        >Active</span
                                    >
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100"
                                    >
                                        <button
                                            type="button"
                                            onclick="openEditModal(this)"
                                            class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary"
                                            title="Edit User"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >edit</span
                                            >
                                        </button>
                                        <button
                                            class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors"
                                            title="Reset Password"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[20px]"
                                                style="
                                                    font-variation-settings: 'FILL'
                                                        0;
                                                "
                                                >lock_reset</span
                                            >
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination Footer -->
                <div
                    class="bg-surface-container-lowest border-outline-variant/30 flex items-center justify-between border-t px-6 py-4"
                >
                    <span
                        id="userCountText"
                        class="font-body-md text-body-md text-on-surface-variant"
                        >Menampilkan 1-10 dari 45 pengguna</span
                    >
                    <div class="flex items-center gap-2">
                        <button
                            class="border-outline-variant text-on-surface-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-colors disabled:opacity-50"
                            disabled=""
                        >
                            <span
                                class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 0"
                                >chevron_left</span
                            >
                        </button>
                        <button
                            class="bg-primary-container text-on-primary font-label-md flex h-8 w-8 items-center justify-center rounded"
                        >
                            1
                        </button>
                        <button
                            class="border-outline-variant text-on-surface-variant hover:bg-surface-container-low font-label-md flex h-8 w-8 items-center justify-center rounded border transition-colors"
                        >
                            2
                        </button>
                        <button
                            class="border-outline-variant text-on-surface-variant hover:bg-surface-container-low font-label-md flex h-8 w-8 items-center justify-center rounded border transition-colors"
                        >
                            3
                        </button>
                        <button
                            class="border-outline-variant text-on-surface-variant hover:bg-surface-container-low flex h-8 w-8 items-center justify-center rounded border transition-colors"
                        >
                            <span
                                class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 0"
                                >chevron_right</span
                            >
                        </button>
                    </div>
                </div>
            </div>
            </div>
        </main>

        <!-- ============================================= -->
        <!-- Modal: Add New User (digabung dari tambah_pengguna.html) -->
        <!-- ============================================= -->
        <div
            id="addUserModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-[#10202d]/50 p-4"
        >
            <div
                class="bg-surface-container-lowest border-outline-variant max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-xl border"
                style="box-shadow: 0px 8px 24px rgba(0, 51, 102, 0.16)"
            >
                <div
                    class="p-container-padding border-outline-variant bg-surface-bright flex items-center justify-between border-b"
                >
                    <h3
                        class="text-headline-sm font-headline-sm gap-stack-sm flex items-center text-primary"
                    >
                        <span
                            class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1"
                            >person_add</span
                        >
                        Add New User
                    </h3>
                    <button
                        type="button"
                        onclick="closeAddModal()"
                        class="text-outline hover:bg-surface-container-high hover:text-on-surface rounded-lg p-1.5 transition-colors"
                        aria-label="Close"
                    >
                        <span
                            class="material-symbols-outlined text-[22px]"
                            style="font-variation-settings: 'FILL' 0"
                            >close</span
                        >
                    </button>
                </div>

                <form
                    id="addUserForm"
                    class="p-container-padding gap-stack-lg grid grid-cols-1 md:grid-cols-2"
                    onsubmit="return submitAddUser(event);"
                >
                    <!-- NIP -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="addNip"
                        >
                            NIP (Employee ID) <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="addNip"
                            name="nip"
                            placeholder="Enter 18-digit NIP"
                            type="text"
                            required
                        />
                        <span
                            class="text-label-sm font-label-sm text-on-surface-variant"
                            >Must be a valid 18-digit employee identification
                            number.</span
                        >
                    </div>

                    <!-- Full Name -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="addFullName"
                        >
                            Full Name <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="addFullName"
                            name="fullName"
                            placeholder="e.g. Budi Santoso"
                            type="text"
                            required
                        />
                    </div>

                    <!-- Department -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="addDepartment"
                        >
                            Department <span class="text-error">*</span>
                        </label>
                        <div class="relative">
                            <select
                                class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md w-full appearance-none rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                id="addDepartment"
                                name="department"
                                required
                            >
                                <option disabled selected value="">
                                    Select Department
                                </option>
                                <option value="it">Teknologi Informasi</option>
                                <option value="hr">Sumber Daya Manusia</option>
                                <option value="ops">Operasional</option>
                                <option value="security">Keamanan</option>
                                <option value="finance">Keuangan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="addRole"
                        >
                            System Role <span class="text-error">*</span>
                        </label>
                        <div class="relative">
                            <select
                                class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md w-full appearance-none rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                id="addRole"
                                name="role"
                                required
                            >
                                <option disabled selected value="">
                                    Select Role
                                </option>
                                <option value="admin">Administrator</option>
                                <option value="technician">Technician</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>

                    <!-- Full Width Actions -->
                    <div
                        class="gap-stack-md pt-stack-md border-outline-variant mt-stack-sm flex justify-end border-t md:col-span-2"
                    >
                        <button
                            type="button"
                            onclick="closeAddModal()"
                            class="px-container-padding text-body-md font-label-md border-outline-variant hover:bg-surface-container-high flex h-[44px] items-center justify-center rounded-lg border font-semibold text-primary transition-colors"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            class="px-container-padding text-body-md font-label-md text-on-primary flex h-[44px] items-center justify-center gap-2 rounded-lg bg-primary font-semibold transition-colors hover:bg-primary/90"
                        >
                            <span
                                class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 1"
                                >save</span
                            >
                            Save User
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ============================================= -->
        <!-- Modal: Edit User (digabung dari edit_pengguna.html) -->
        <!-- ============================================= -->
        <div
            id="editUserModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-[#10202d]/50 p-4"
        >
            <div
                class="bg-surface-container-lowest border-outline-variant max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-xl border"
                style="box-shadow: 0px 8px 24px rgba(0, 51, 102, 0.16)"
            >
                <div
                    class="border-outline-variant bg-surface-container-lowest flex items-center justify-between border-b px-6 py-4"
                >
                    <h3
                        class="font-headline-sm text-headline-sm gap-stack-sm flex items-center text-primary"
                    >
                        <span
                            class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1"
                            >edit</span
                        >
                        Edit User
                    </h3>
                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="text-outline hover:bg-surface-container-high hover:text-on-surface rounded-lg p-1.5 transition-colors"
                        aria-label="Tutup"
                    >
                        <span
                            class="material-symbols-outlined text-[22px]"
                            style="font-variation-settings: 'FILL' 0"
                            >close</span
                        >
                    </button>
                </div>

                <form
                    id="editUserForm"
                    class="p-container-padding gap-stack-lg grid grid-cols-1 md:grid-cols-2"
                    onsubmit="return submitEditUser(event);"
                >
                    <!-- NIP -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="editNip"
                        >
                            NIP (ID Pegawai) <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-low border-outline text-body-md font-body-md cursor-not-allowed rounded-lg border py-3 opacity-70 focus:outline-none"
                            id="editNip"
                            name="nip"
                            readonly
                            type="text"
                        />
                        <span
                            class="text-label-sm font-label-sm text-on-surface-variant"
                            >Harus berupa 18 digit nomor induk pegawai yang
                            valid.</span
                        >
                        <p class="text-outline mt-1 text-[10px]">
                            NIP tidak dapat diubah.
                        </p>
                    </div>

                    <!-- Full Name -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="editFullName"
                        >
                            Nama Lengkap <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="editFullName"
                            name="fullName"
                            type="text"
                            required
                        />
                    </div>

                    <!-- Department -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="editDepartment"
                        >
                            Departemen <span class="text-error">*</span>
                        </label>
                        <div class="relative">
                            <select
                                class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md w-full appearance-none rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                id="editDepartment"
                                name="department"
                                required
                            >
                                <option value="it">Teknologi Informasi</option>
                                <option value="hr">Sumber Daya Manusia</option>
                                <option value="ops">Operasional</option>
                                <option value="security">Keamanan</option>
                                <option value="finance">Keuangan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="editRole"
                        >
                            Peran Sistem <span class="text-error">*</span>
                        </label>
                        <div class="relative">
                            <select
                                class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md w-full appearance-none rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                                id="editRole"
                                name="role"
                                required
                            >
                                <option value="admin">Administrator</option>
                                <option value="technician">Technician</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                </form>

                <!-- Footer / Action Buttons -->
                <div
                    class="border-outline-variant bg-surface-container-low flex items-center justify-end gap-3 border-t px-6 py-4"
                >
                    <!-- Account Status Toggle -->
                    <div class="mr-auto flex items-center gap-3">
                        <span
                            class="text-label-md font-label-md text-on-surface"
                            >Status Akun</span
                        >
                        <label
                            class="relative inline-flex cursor-pointer items-center"
                        >
                            <input
                                type="checkbox"
                                id="editStatusToggle"
                                class="peer sr-only"
                                checked
                            />
                            <div
                                class="bg-error peer h-6 w-11 rounded-full peer-checked:bg-primary peer-focus:ring-2 peer-focus:ring-secondary/20 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white"
                            ></div>
                            <span
                                class="text-body-md font-label-md ml-3 hidden font-semibold text-primary peer-checked:block"
                                >Aktif</span
                            >
                            <span
                                class="text-body-md font-label-md text-error ml-3 block font-semibold peer-checked:hidden"
                                >Suspended</span
                            >
                        </label>
                    </div>

                    <!-- Cancel Button -->
                    <button
                        type="button"
                        onclick="closeEditModal()"
                        class="px-container-padding text-body-md font-label-md border-outline-variant hover:bg-surface-container-high flex h-[44px] items-center justify-center rounded-lg border font-semibold text-primary transition-colors"
                    >
                        Batal
                    </button>

                    <!-- Save Button -->
                    <button
                        type="submit"
                        form="editUserForm"
                        class="px-container-padding text-body-md font-label-md text-on-primary flex h-[44px] items-center justify-center gap-2 rounded-lg bg-primary font-semibold shadow-sm transition-colors hover:bg-primary/90"
                    >
                        <span
                            class="material-symbols-outlined text-[18px]"
                            style="font-variation-settings: 'FILL' 1"
                            >save</span
                        >
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>

        <!-- ============================================= -->
        <!-- Script: Logika buka/tutup modal + sinkronisasi data tabel -->
        <!-- ============================================= -->
        <script>
            let editingRow = null;
            let totalUsers = 45;

            // Label & badge yang dipakai untuk menulis ulang isi baris tabel
            const departmentLabels = {
                it: 'Teknologi Informasi',
                hr: 'Sumber Daya Manusia',
                ops: 'Operasional',
                security: 'Keamanan',
                finance: 'Keuangan',
            };

            const roleBadges = {
                admin: '<span class="bg-primary-container/10 text-primary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"><span class="material-symbols-outlined text-[14px]" style="font-variation-settings: \'FILL\' 1">shield_person</span>Admin</span>',
                technician:
                    '<span class="bg-secondary-container/20 text-secondary inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"><span class="material-symbols-outlined text-[14px]" style="font-variation-settings: \'FILL\' 0">build</span>Technician</span>',
                user: '<span class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"><span class="material-symbols-outlined text-[14px]" style="font-variation-settings: \'FILL\' 0">person</span>User</span>',
            };

            const statusBadges = {
                active: '<span class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]">Active</span>',
                inactive:
                    '<span class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold">Inactive</span>',
            };

            // ---------- Modal: Add New User ----------
            function openAddModal() {
                document.getElementById('addUserForm').reset();
                const modal = document.getElementById('addUserModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeAddModal() {
                const modal = document.getElementById('addUserModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function submitAddUser(event) {
                event.preventDefault();

                const nip = document.getElementById('addNip').value.trim();
                const fullName = document
                    .getElementById('addFullName')
                    .value.trim();
                const department =
                    document.getElementById('addDepartment').value;
                const role = document.getElementById('addRole').value;

                if (!nip || !fullName || !department || !role) {
                    alert('Mohon lengkapi semua kolom yang wajib diisi.');
                    return false;
                }

                const tr = document.createElement('tr');
                tr.className = 'group transition-colors hover:bg-[#F1F5F9]';
                tr.dataset.nip = nip;
                tr.dataset.name = fullName;
                tr.dataset.department = department;
                tr.dataset.role = role;
                tr.dataset.status = 'active';

                tr.innerHTML = `
                <td class="text-on-surface-variant px-6 py-4">${nip}</td>
                <td class="px-6 py-4 font-medium text-primary">${fullName}</td>
                <td class="px-6 py-4">${departmentLabels[department] || department}</td>
                <td class="px-6 py-4">${roleBadges[role] || ''}</td>
                <td class="text-on-surface-variant px-6 py-4">Baru saja</td>
                <td class="px-6 py-4">${statusBadges.active}</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100">
                        <button type="button" onclick="openEditModal(this)" class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary" title="Edit User">
                            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">edit</span>
                        </button>
                        <button type="button" class="text-outline hover:text-error hover:bg-error-container/50 rounded-lg p-2 transition-colors" title="Reset Password">
                            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">lock_reset</span>
                        </button>
                    </div>
                </td>
            `;

                document.getElementById('userTableBody').appendChild(tr);

                totalUsers++;
                document.getElementById('userCountText').textContent =
                    `Menampilkan 1-10 dari ${totalUsers} pengguna`;

                closeAddModal();
                return false;
            }

            // ---------- Modal: Edit User ----------
            function openEditModal(button) {
                const row = button.closest('tr');
                editingRow = row;

                document.getElementById('editNip').value =
                    row.dataset.nip || '';
                document.getElementById('editFullName').value =
                    row.dataset.name || '';
                document.getElementById('editDepartment').value =
                    row.dataset.department || '';
                document.getElementById('editRole').value =
                    row.dataset.role || '';
                document.getElementById('editStatusToggle').checked =
                    row.dataset.status === 'active';

                const modal = document.getElementById('editUserModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeEditModal() {
                editingRow = null;
                const modal = document.getElementById('editUserModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function submitEditUser(event) {
                event.preventDefault();
                if (!editingRow) return false;

                const fullName = document
                    .getElementById('editFullName')
                    .value.trim();
                const department =
                    document.getElementById('editDepartment').value;
                const role = document.getElementById('editRole').value;
                const status = document.getElementById('editStatusToggle')
                    .checked
                    ? 'active'
                    : 'inactive';

                if (!fullName) {
                    alert('Nama lengkap tidak boleh kosong.');
                    return false;
                }

                editingRow.dataset.name = fullName;
                editingRow.dataset.department = department;
                editingRow.dataset.role = role;
                editingRow.dataset.status = status;

                const cells = editingRow.children;
                cells[1].textContent = fullName;
                cells[2].textContent =
                    departmentLabels[department] || department;
                cells[3].innerHTML = roleBadges[role] || '';
                cells[5].innerHTML = statusBadges[status];

                closeEditModal();
                return false;
            }

            // ---------- Perilaku umum modal ----------
            document
                .getElementById('addUserModal')
                .addEventListener('click', function (e) {
                    if (e.target === e.currentTarget) closeAddModal();
                });
            document
                .getElementById('editUserModal')
                .addEventListener('click', function (e) {
                    if (e.target === e.currentTarget) closeEditModal();
                });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeAddModal();
                    closeEditModal();
                }
            });
        </script>
    </body>
</html>