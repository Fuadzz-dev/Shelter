<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Manajemen Pengguna - SHELTER</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <main class="px-container-padding lg:ml-[280px] pt-[80px] lg:pt-8 w-full">
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
                    class="text-on-primary font-label-md text-label-md flex h-11 w-full items-center justify-center gap-2 self-start rounded-lg bg-primary px-6 shadow-sm transition-colors hover:bg-primary/90 sm:w-auto sm:justify-start sm:self-auto sm:whitespace-nowrap"
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
                        id="searchInput"
                        class="border-outline-variant font-body-md text-body-md w-full rounded-lg border py-2.5 pr-4 pl-10 transition-all focus:border-secondary focus:ring-1 focus:ring-secondary focus:outline-none"
                        placeholder="Cari berdasarkan Nama atau NIP..."
                        type="text"
                    />
                </div>
            </div>
            <!-- Data Table (Glassmorphism inspired clean look) -->
            <div
                class="bg-surface-container-lowest border-outline-variant/30 overflow-hidden rounded-xl border shadow-[0_4px_12px_rgba(0,51,102,0.04)]"
            >
                <!-- Mobile Card List -->
                <div id="userCardList" class="divide-outline-variant/30 divide-y lg:hidden">
                    @forelse($pengguna as $user)
                    <div
                        class="p-4 transition-colors hover:bg-[#F1F5F9]"
                        data-user-id="{{ $user->user_id }}"
                        data-nip="{{ $user->nip }}"
                        data-name="{{ $user->nama_lengkap }}"
                        data-department="{{ $user->jabatan_departemen }}"
                        data-role="{{ $user->role }}"
                        data-status="{{ $user->status ?? 'active' }}"
                        data-email="{{ $user->email }}"
                    >
                        <div class="mb-1 flex items-start justify-between gap-2">
                            <div class="min-w-0">
                                <p class="font-medium text-primary">{{ $user->nama_lengkap }}</p>
                                <p class="text-on-surface-variant text-xs">{{ $user->nip }}</p>
                            </div>
                            @if(($user->status ?? 'active') === 'active')
                            <span class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[11px] font-semibold text-[#047857]">Active</span>
                            @else
                            <span class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[11px] font-semibold">Inactive</span>
                            @endif
                        </div>
                        <p class="text-on-surface-variant mb-2 text-sm">{{ $user->jabatan_departemen }}</p>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                @if($user->role === 'admin')
                                <span class="bg-primary-container/10 text-primary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold">
                                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1">shield_person</span>
                                    Admin
                                </span>
                                @else
                                <span class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold">
                                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 0">person</span>
                                    User
                                </span>
                                @endif
                            </div>
                            <div class="flex items-center gap-1">
                                <button type="button" onclick="openEditModal(this)" class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary" title="Edit User">
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">edit</span>
                                </button>
                                <button type="button" onclick="resetPassword(this)" class="text-outline hover:bg-error/10 rounded-lg p-2 transition-colors hover:text-error" title="Reset Password">
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">lock_reset</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-on-surface-variant px-6 py-12 text-center">
                        <span class="material-symbols-outlined text-4xl mb-4 block" style="font-variation-settings: 'FILL' 0">group_off</span>
                        Belum ada pengguna terdaftar.
                    </div>
                    @endforelse
                </div>

                <!-- Desktop Table -->
                <div class="hidden overflow-x-auto lg:block">
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
                            @forelse($pengguna as $user)
                            <tr
                                class="group transition-colors hover:bg-[#F1F5F9]"
                                data-user-id="{{ $user->user_id }}"
                                data-nip="{{ $user->nip }}"
                                data-name="{{ $user->nama_lengkap }}"
                                data-department="{{ $user->jabatan_departemen }}"
                                data-role="{{ $user->role }}"
                                data-status="{{ $user->status ?? 'active' }}"
                                data-email="{{ $user->email }}"
                            >
                                <td class="text-on-surface-variant px-6 py-4">
                                    {{ $user->nip }}
                                </td>
                                <td class="px-6 py-4 font-medium text-primary">
                                    {{ $user->nama_lengkap }}
                                </td>
                                <td class="px-6 py-4">{{ $user->jabatan_departemen }}</td>
                                <td class="px-6 py-4">
                                    @if($user->role === 'admin')
                                    <span class="bg-primary-container/10 text-primary-container inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold">
                                        <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1">shield_person</span>
                                        Admin
                                    </span>
                                    @else
                                    <span class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold">
                                        <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 0">person</span>
                                        User
                                    </span>
                                    @endif
                                </td>
                                <td class="text-on-surface-variant px-6 py-4">
                                    {{ $user->updated_at ? $user->updated_at->diffForHumans() : '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    @if(($user->status ?? 'active') === 'active')
                                    <span class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]">Active</span>
                                    @else
                                    <span class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold">Inactive</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2 opacity-0 transition-opacity group-hover:opacity-100">
                                        <button type="button" onclick="openEditModal(this)" class="text-outline hover:bg-secondary-container/20 rounded-lg p-2 transition-colors hover:text-secondary" title="Edit User">
                                            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">edit</span>
                                        </button>
<button type="button" onclick="resetPassword(this)" class="text-outline hover:bg-error/10 rounded-lg p-2 transition-colors hover:text-error" title="Reset Password">
                                            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0">lock_reset</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-on-surface-variant px-6 py-12 text-center">
                                    <span class="material-symbols-outlined text-4xl mb-4 block" style="font-variation-settings: 'FILL' 0">group_off</span>
                                    Belum ada pengguna terdaftar.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
                    <div id="addFormError" class="hidden col-span-1 md:col-span-2 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"></div>
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

                    <!-- Email -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="addEmail"
                        >
                            Email Address <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="addEmail"
                            name="email"
                            placeholder="e.g. budi.santoso@example.com"
                            type="email"
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
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="addDepartment"
                            name="department"
                            placeholder="e.g. Teknologi Informasi"
                            type="text"
                            required
                        />
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
                    <div id="editFormError" class="hidden col-span-1 md:col-span-2 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"></div>
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

                    <!-- Email -->
                    <div class="gap-stack-sm flex flex-col">
                        <label
                            class="text-label-md font-label-md text-on-surface"
                            for="editEmail"
                        >
                            Email Address <span class="text-error">*</span>
                        </label>
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="editEmail"
                            name="email"
                            placeholder="e.g. budi.santoso@example.com"
                            type="email"
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
                        <input
                            class="px-gutter bg-surface-container-lowest border-outline text-body-md font-body-md placeholder:text-outline/70 rounded-lg border py-3 transition-all focus:border-secondary focus:ring-2 focus:ring-secondary/20 focus:outline-none"
                            id="editDepartment"
                            name="department"
                            placeholder="e.g. Teknologi Informasi"
                            type="text"
                            required
                        />
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
        <!-- Modal: Konfirmasi Reset Password -->
        <!-- ============================================= -->
        <div
            id="resetConfirmModal"
            class="fixed inset-0 z-[60] hidden items-center justify-center bg-[#10202d]/60 p-4 backdrop-blur-[2px]"
        >
            <div
                class="bg-surface-container-lowest border-outline-variant w-full max-w-md animate-modal-pop overflow-hidden rounded-2xl border shadow-[0_24px_64px_rgba(0,51,102,0.28)]"
            >
                <!-- Header accent -->
                <div class="bg-error/10 flex items-center justify-center px-6 pt-8 pb-2">
                    <div
                        class="bg-error-container text-on-error-container flex h-16 w-16 -rotate-6 items-center justify-center rounded-2xl shadow-lg ring-8 ring-error/10"
                    >
                        <span
                            class="material-symbols-outlined text-[32px]"
                            style="font-variation-settings: 'FILL' 1"
                            >lock_reset</span
                        >
                    </div>
                </div>

                <div class="px-7 py-6 text-center">
                    <h3
                        class="text-headline-sm font-headline-sm text-on-surface mb-1"
                    >
                        Reset Password?
                    </h3>
                    <p class="text-body-md font-body-md text-on-surface-variant mb-4">
                        Password akun
                        <span
                            id="resetConfirmName"
                            class="text-primary font-semibold"
                        ></span>
                        akan direset menjadi password default
                    </p>

                    <div class="flex items-center justify-end gap-3">
                        <button
                            type="button"
                            onclick="closeResetConfirm()"
                            class="px-container-padding text-body-md font-label-md border-outline-variant hover:bg-surface-container-high flex h-[44px] cursor-pointer items-center justify-center rounded-lg border font-semibold text-primary transition-colors"
                        >
                            Batal
                        </button>
                        <button
                            type="button"
                            id="resetConfirmButton"
                            onclick="confirmResetPassword()"
                            class="px-container-padding text-body-md font-label-md text-on-error flex h-[44px] cursor-pointer items-center justify-center gap-2 rounded-lg bg-error font-semibold shadow-sm transition-colors hover:bg-error/90"
                        >
                            <span
                                class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 1"
                                >lock_reset</span
                            >
                            Ya, Reset Password
                        </button>
                    </div>
</div>
</div>
        </div>

        <!-- ============================================= -->
        <!-- Modal: Sukses Reset Password -->
        <!-- ============================================= -->
        <div
            id="resetSuccessModal"
            class="fixed inset-0 z-[70] hidden items-center justify-center bg-[#10202d]/60 p-4 backdrop-blur-[2px]"
        >
            <div
                class="bg-surface-container-lowest border-outline-variant w-full max-w-md animate-modal-pop overflow-hidden rounded-2xl border shadow-[0_24px_64px_rgba(0,51,102,0.28)]"
            >
                <!-- Header accent -->
                <div class="bg-[#10b981]/10 flex items-center justify-center px-6 pt-8 pb-2">
                    <div
                        class="bg-[#10b981]/10 text-[#047857] flex h-16 w-16 -rotate-6 items-center justify-center rounded-2xl shadow-lg ring-8 ring-[#10b981]/10"
                    >
                        <span
                            class="material-symbols-outlined text-[32px]"
                            style="font-variation-settings: 'FILL' 1"
                            >check_circle</span
                        >
                    </div>
                </div>

                <div class="px-7 py-6 text-center">
                    <h3
                        class="text-headline-sm font-headline-sm text-on-surface mb-1"
                    >
                        Password Berhasil Direset
                    </h3>
                    <p class="text-body-md font-body-md text-on-surface-variant mb-4">
                        Password akun
                        <span
                            id="resetSuccessName"
                            class="text-primary font-semibold"
                        ></span>
                        berhasil direset ke password default.
                    </p>

                    <div class="flex items-center justify-end gap-3">
                        <button
                            type="button"
                            onclick="closeResetSuccess()"
                            class="px-container-padding text-body-md font-label-md text-on-primary flex h-[44px] cursor-pointer items-center justify-center gap-2 rounded-lg bg-primary font-semibold shadow-sm transition-colors hover:bg-primary/90"
                        >
                            <span
                                class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 1"
                                >check</span
                            >
                            Selesai
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================= -->
        <!-- Modal: Konfirmasi Suspend Akun -->
        <!-- ============================================= -->
        <div
            id="suspendConfirmModal"
            class="fixed inset-0 z-[60] hidden items-center justify-center bg-[#10202d]/60 p-4 backdrop-blur-[2px]"
        >
            <div
                class="bg-surface-container-lowest border-outline-variant w-full max-w-md animate-modal-pop overflow-hidden rounded-2xl border shadow-[0_24px_64px_rgba(0,51,102,0.28)]"
            >
                <!-- Header accent -->
                <div class="bg-error/10 flex items-center justify-center px-6 pt-8 pb-2">
                    <div
                        class="bg-error-container text-on-error-container flex h-16 w-16 -rotate-6 items-center justify-center rounded-2xl shadow-lg ring-8 ring-error/10"
                    >
                        <span
                            class="material-symbols-outlined text-[32px]"
                            style="font-variation-settings: 'FILL' 1"
                            >block</span
                        >
                    </div>
                </div>

                <div class="px-7 py-6 text-center">
                    <h3
                        class="text-headline-sm font-headline-sm text-on-surface mb-1"
                    >
                        Suspend Akun?
                    </h3>
                    <p class="text-body-md font-body-md text-on-surface-variant mb-4">
                        Akun
                        <span
                            id="suspendConfirmName"
                            class="text-primary font-semibold"
                        ></span>
                        akan dinonaktifkan (Suspended). Pengguna tidak dapat login
                        sampai akun diaktifkan kembali.
                    </p>

                    <div class="flex items-center justify-end gap-3">
                        <button
                            type="button"
                            onclick="closeSuspendConfirm()"
                            class="px-container-padding text-body-md font-label-md border-outline-variant hover:bg-surface-container-high flex h-[44px] cursor-pointer items-center justify-center rounded-lg border font-semibold text-primary transition-colors"
                        >
                            Batal
                        </button>
                        <button
                            type="button"
                            id="suspendConfirmButton"
                            onclick="confirmSuspend()"
                            class="px-container-padding text-body-md font-label-md text-on-error flex h-[44px] cursor-pointer items-center justify-center gap-2 rounded-lg bg-error font-semibold shadow-sm transition-colors hover:bg-error/90"
                        >
                            <span
                                class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 1"
                                >block</span
                            >
                            Ya, Suspend Akun
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes modal-pop {
                from {
                    opacity: 0;
                    transform: translateY(12px) scale(0.96);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }
            .animate-modal-pop {
                animation: modal-pop 0.2s ease-out;
            }
        </style>

        <!-- ============================================= -->
        <!-- Script: Logika buka/tutup modal + AJAX ke backend -->
        <!-- ============================================= -->
        <script>
            let editingRow = null;

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
                user: '<span class="bg-surface-container-high text-on-surface-variant inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold"><span class="material-symbols-outlined text-[14px]" style="font-variation-settings: \'FILL\' 0">person</span>User</span>',
            };

            const statusBadges = {
                active: '<span class="inline-flex items-center rounded-md border border-[#10b981]/20 bg-[#10b981]/10 px-2 py-1 text-[12px] font-semibold text-[#047857]">Active</span>',
                inactive:
                    '<span class="bg-outline-variant/30 text-on-surface-variant border-outline-variant/50 inline-flex items-center rounded-md border px-2 py-1 text-[12px] font-semibold">Inactive</span>',
            };

            // ========== Utility: get CSRF token ==========
            function getCsrfToken() {
                const meta = document.querySelector('meta[name="csrf-token"]');
                return meta ? meta.getAttribute('content') : '';
            }

            // ========== Search: filter by Nama atau NIP ==========
            function filterPengguna() {
                const input = document.getElementById('searchInput');
                const query = (input ? input.value : '').trim().toLowerCase();

                // Desktop table rows
                const tbody = document.getElementById('userTableBody');
                const rows = tbody ? tbody.querySelectorAll('tr[data-user-id]') : [];
                // Mobile card items
                const cards = document.querySelectorAll('#userCardList > [data-user-id]');

                let visibleCount = 0;

                function itemMatches(el) {
                    const nama = (el.dataset.name || '').toLowerCase();
                    const nip = (el.dataset.nip || '').toLowerCase();
                    return !query || nama.includes(query) || nip.includes(query);
                }

                rows.forEach(function (row) {
                    const match = itemMatches(row);
                    row.style.display = match ? '' : 'none';
                    if (match) visibleCount++;
                });

                cards.forEach(function (card) {
                    const match = itemMatches(card);
                    card.style.display = match ? '' : 'none';
                    if (match) visibleCount++;
                });

                // Tampilkan pesan "tidak ditemukan" jika hasil kosong (desktop)
                let emptyRow = document.getElementById('searchEmptyRow');
                if (visibleCount === 0 && rows.length > 0) {
                    if (!emptyRow) {
                        emptyRow = document.createElement('tr');
                        emptyRow.id = 'searchEmptyRow';
                        emptyRow.innerHTML =
                            '<td colspan="7" class="text-on-surface-variant px-6 py-12 text-center">' +
                            '<span class="material-symbols-outlined text-4xl mb-4 block" style="font-variation-settings: \'FILL\' 0">search_off</span>' +
                            'Tidak ada pengguna yang cocok dengan pencarian "<span id="searchEmptyQuery"></span>".' +
                            '</td>';
                        tbody.appendChild(emptyRow);
                    }
                    emptyRow.style.display = '';
                    document.getElementById('searchEmptyQuery').textContent = input ? input.value.trim() : '';
                } else if (emptyRow) {
                    emptyRow.style.display = 'none';
                }
            }

            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', filterPengguna);
            }

            // ========== Modal: Add New User ==========
            function openAddModal() {
                document.getElementById('addUserForm').reset();
                document.getElementById('addFormError').classList.add('hidden');
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
                const fullName = document.getElementById('addFullName').value.trim();
                const email = document.getElementById('addEmail').value.trim();
                const department = document.getElementById('addDepartment').value;
                const role = document.getElementById('addRole').value;
                const errorEl = document.getElementById('addFormError');

                if (!nip || !fullName || !email || !department || !role) {
                    errorEl.textContent = 'Mohon lengkapi semua kolom yang wajib diisi.';
                    errorEl.classList.remove('hidden');
                    return false;
                }

                fetch('{{ route("admin.manajemen-pengguna.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ nip, fullName, email, department, role }),
                })
                .then(response => response.json().then(data => ({ status: response.status, data })))
                .then(({ status, data }) => {
                    if (status === 201) {
                        window.location.reload();
                    } else {
                        const errors = data.errors || {};
                        const messages = Object.values(errors).flat().join('\n');
                        errorEl.textContent = messages || 'Gagal menambahkan pengguna.';
                        errorEl.classList.remove('hidden');
                    }
                })
                .catch(() => {
                    errorEl.textContent = 'Terjadi kesalahan jaringan.';
                    errorEl.classList.remove('hidden');
                });

                return false;
            }

            // ========== Modal: Edit User ==========
            function openEditModal(button) {
                const row = button.closest('[data-user-id]');
                editingRow = row;

                document.getElementById('editNip').value = row.dataset.nip || '';
                document.getElementById('editFullName').value = row.dataset.name || '';
                document.getElementById('editEmail').value = row.dataset.email || '';
                document.getElementById('editDepartment').value = row.dataset.department || '';
                document.getElementById('editRole').value = row.dataset.role || '';
                document.getElementById('editStatusToggle').checked = row.dataset.status === 'active';
                document.getElementById('editFormError').classList.add('hidden');

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

                const userId = editingRow.dataset.userId;
                const fullName = document.getElementById('editFullName').value.trim();
                const department = document.getElementById('editDepartment').value;
                const role = document.getElementById('editRole').value;
                const newStatus = document.getElementById('editStatusToggle').checked ? 'active' : 'inactive';
                const errorEl = document.getElementById('editFormError');

                if (!fullName) {
                    errorEl.textContent = 'Nama lengkap tidak boleh kosong.';
                    errorEl.classList.remove('hidden');
                    return false;
                }

                // Update user data
                fetch('{{ url("/admin/manajemen-pengguna") }}/' + userId, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ fullName, department, role }),
                })
                .then(response => response.json().then(data => ({ httpStatus: response.status, data })))
                .then(({ httpStatus, data }) => {
                    if (httpStatus === 200) {
                        // Update status separately if changed
                        const oldStatus = editingRow.dataset.status;
                        if (oldStatus !== newStatus) {
                            return fetch('{{ url("/admin/manajemen-pengguna") }}/' + userId + '/status', {
                                method: 'PATCH',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': getCsrfToken(),
                                    'Accept': 'application/json',
                                },
                                body: JSON.stringify({ status: newStatus }),
                            });
                        }
                        // Status tidak berubah -> lanjut reload
                        return null;
                    } else {
                        const errors = data.errors || {};
                        const messages = Object.values(errors).flat().join('\n');
                        errorEl.textContent = messages || 'Gagal memperbarui pengguna.';
                        errorEl.classList.remove('hidden');
                        throw new Error('Update failed');
                    }
                })
                .then(response => {
                    if (response) return response.json().then(data => ({ httpStatus: response.status, data }));
                    return null;
                })
                .then(result => {
                    // Jika status ikut diubah tapi update status gagal
                    if (result && result.httpStatus !== 200) {
                        const errors = result.data.errors || {};
                        const messages = Object.values(errors).flat().join('\n');
                        errorEl.textContent = messages || 'Gagal memperbarui status akun.';
                        errorEl.classList.remove('hidden');
                        throw new Error('Status update failed');
                    }
                    window.location.reload();
                })
                .catch(err => {
                    if (err.message !== 'Update failed' && err.message !== 'Status update failed') {
                        errorEl.textContent = 'Terjadi kesalahan jaringan.';
                        errorEl.classList.remove('hidden');
                    }
                });

                return false;
            }

// ========== Reset Password ==========
            let resetTargetRow = null;

            function resetPassword(button) {
                const row = button.closest('[data-user-id]');
                resetTargetRow = row;

                document.getElementById('resetConfirmName').textContent = row.dataset.name || '';

                const modal = document.getElementById('resetConfirmModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

function closeResetConfirm() {
                resetTargetRow = null;
                const modal = document.getElementById('resetConfirmModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            // ========== Modal: Sukses Reset Password ==========
            function showResetSuccess(nama) {
                document.getElementById('resetSuccessName').textContent = nama || '';

                const modal = document.getElementById('resetSuccessModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeResetSuccess() {
                const modal = document.getElementById('resetSuccessModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                window.location.reload();
            }

            function confirmResetPassword() {
                if (!resetTargetRow) return;

                const userId = resetTargetRow.dataset.userId;
                const nama = resetTargetRow.dataset.name;
                const confirmBtn = document.getElementById('resetConfirmButton');

                // Disable tombol selama proses berjalan
                confirmBtn.disabled = true;
                confirmBtn.innerHTML =
                    '<span class="material-symbols-outlined text-[18px] animate-spin" style="font-variation-settings: \'FILL\' 1">progress_activity</span>' +
                    'Memproses...';

                fetch('{{ url("/admin/manajemen-pengguna") }}/' + userId + '/reset-password', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                    },
                })
                .then(response => response.json().then(data => ({ httpStatus: response.status, data })))
.then(({ httpStatus, data }) => {
                    if (httpStatus === 200) {
                        closeResetConfirm();
                        showResetSuccess(nama);
                    } else {
                        const errors = data.errors || {};
                        const messages = Object.values(errors).flat().join('\n');
                    alert(messages || 'Gagal mereset password.');
                        closeResetConfirm();
                    }
                })
                .catch(() => {
                    alert('Terjadi kesalahan jaringan.');
                    closeResetConfirm();
                });
            }

            // ========== Suspend Akun ==========
            let suspendTargetRow = null;

            function closeSuspendConfirm() {
                suspendTargetRow = null;
                const modal = document.getElementById('suspendConfirmModal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function confirmSuspend() {
                if (!suspendTargetRow) return;

                const userId = suspendTargetRow.dataset.userId;
                const nama = suspendTargetRow.dataset.name;
                const confirmBtn = document.getElementById('suspendConfirmButton');

                // Disable tombol selama proses berjalan
                confirmBtn.disabled = true;
                confirmBtn.innerHTML =
                    '<span class="material-symbols-outlined text-[18px] animate-spin" style="font-variation-settings: \'FILL\' 1">progress_activity</span>' +
                    'Memproses...';

                // User akan disuspend (status inactive)
                fetch('{{ url("/admin/manajemen-pengguna") }}/' + userId + '/status', {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ status: 'inactive' }),
                })
                .then(response => response.json().then(data => ({ httpStatus: response.status, data })))
                .then(({ httpStatus, data }) => {
                    if (httpStatus === 200) {
                        closeSuspendConfirm();
                        alert('Akun "' + nama + '" berhasil disuspend.');
                        window.location.reload();
                    } else {
                        const errors = data.errors || {};
                        const messages = Object.values(errors).flat().join('\n');
                        alert(messages || 'Gagal menyuspend akun.');
                        closeSuspendConfirm();
                    }
                })
                .catch(() => {
                    alert('Terjadi kesalahan jaringan.');
                    closeSuspendConfirm();
                });
            }

            // ========== Perilaku umum modal ==========
            document.getElementById('addUserModal').addEventListener('click', function (e) {
                if (e.target === e.currentTarget) closeAddModal();
            });
            document.getElementById('editUserModal').addEventListener('click', function (e) {
                if (e.target === e.currentTarget) closeEditModal();
            });
            document.getElementById('suspendConfirmModal').addEventListener('click', function (e) {
                if (e.target === e.currentTarget) closeSuspendConfirm();
            });
            document.getElementById('resetConfirmModal').addEventListener('click', function (e) {
                if (e.target === e.currentTarget) closeResetConfirm();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeAddModal();
                    closeEditModal();
                    closeSuspendConfirm();
                    closeResetConfirm();
                }
            });
        </script>
    </body>
</html>