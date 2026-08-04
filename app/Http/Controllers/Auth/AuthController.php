<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show the sign-in page.
     */
    public function showSignIn(): View|RedirectResponse
    {
        if (Auth::check()) {
            return $this->redirectByRole();
        }

        return view('sign_in');
    }

    /**
     * Handle sign-in (login) request.
     */
    public function signIn(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'username.required' => 'NIP atau Nama Lengkap wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $credentials = $this->resolveCredentials($request->input('username'), $request->input('password'));

        // Cegah akun non-active (di-suspend) untuk login
        $user = User::where($this->usernameField($request->input('username')), $request->input('username'))->first();

        if ($user && ($user->status ?? 'active') === 'inactive') {
            return back()
                ->withInput($request->only('username'))
                ->withErrors(['username' => 'Akun Anda telah di-suspend. Silakan hubungi administrator.']);
        }

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
                ->withInput($request->only('username'))
                ->withErrors(['username' => 'NIP/Nama Lengkap atau password tidak valid.']);
        }

        $request->session()->regenerate();

        return $this->redirectByRole();
    }

    /**
     * Show the sign-up (registration) page.
     */
    public function showSignUp(): View|RedirectResponse
    {
        if (Auth::check()) {
            return $this->redirectByRole();
        }

        return view('sign_up');
    }

    /**
     * Handle sign-up (registration) request.
     */
    public function signUp(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'nip'              => ['required', 'string', 'unique:user,nip'],
            'nama'             => ['required', 'string', 'max:150'],
            'departemen'       => ['required', 'string', 'max:150'],
            'email'            => ['nullable', 'email', 'max:100', 'unique:user,email'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'nip.required'         => 'NIP wajib diisi.',
            'nip.digits'           => 'NIP harus terdiri dari 18 digit angka.',
            'nip.unique'           => 'NIP sudah terdaftar di sistem.',
            'nama.required'        => 'Nama lengkap wajib diisi.',
            'departemen.required'  => 'Departemen wajib dipilih.',
            'email.email'          => 'Format email tidak valid.',
            'email.unique'         => 'Email sudah terdaftar di sistem.',
            'password.min'         => 'Password minimal 8 karakter.',
            'password.confirmed'   => 'Konfirmasi password tidak cocok.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->except('password', 'password_confirmation'));
        }

        $user = User::create([
            'nip'                => $request->input('nip'),
            'nama_lengkap'       => $request->input('nama'),
            'jabatan_departemen' => $request->input('departemen'),
            'email'              => $request->input('email'),
            'password'           => Hash::make($request->input('password')),
            'role'               => 'user',
        ]);

        return redirect()->route('sign-in')
            ->with('status', 'Akun berhasil dibuat, Silakan login.');
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('sign-in');
    }

    /**
     * Redirect user based on their role after login.
     */
    private function redirectByRole(): RedirectResponse
    {
        $user = Auth::user();

        if ($user?->role === 'admin') {
            return redirect()->route('admin.helpdesk');
        }

        return redirect()->route('pegawai.dashboard');
    }

    /**
     * Resolve login credentials — support NIP or email as username.
     */
    private function resolveCredentials(string $username, string $password): array
    {
        // Jika input berupa digit angka murni, cari berdasarkan NIP
        if (ctype_digit($username)) {
            return ['nip' => $username, 'password' => $password];
        }
        // Jika input berupa email, cari berdasarkan email
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return ['email' => $username, 'password' => $password];
        }
        // Selain itu (nama lengkap), cari berdasarkan nama_lengkap
        return ['nama_lengkap' => $username, 'password' => $password];
    }

    /**
     * Resolve the DB column name based on username input type.
     */
    private function usernameField(string $username): string
    {
        if (ctype_digit($username)) {
            return 'nip';
        }

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        }

        return 'nama_lengkap';
    }
}
