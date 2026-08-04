<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    /**
     * Show the password recovery page (Step 1: NIP/Username).
     */
    public function showLupaPassword(): View|RedirectResponse
    {
        return view('lupa_password');
    }

    /**
     * Step 1: Lookup user by NIP or Nama Lengkap, then verify email.
     */
    public function lookupUser(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string'],
        ], [
            'username.required' => 'NIP atau Nama Lengkap wajib diisi.',
        ]);

        $username = $request->input('username');

        // Try to find user by NIP OR Nama Lengkap
        $user = User::where('nip', $username)
            ->orWhere('nama_lengkap', $username)
            ->first();

        if (! $user) {
            return back()
                ->withInput()
                ->withErrors(['username' => 'NIP atau Nama Lengkap tidak ditemukan.']);
        }

        if (! $user->email) {
            return back()
                ->withInput()
                ->withErrors(['username' => 'Akun ini tidak memiliki alamat email terdaftar. Hubungi admin.']);
        }

        // Store the found user info in session for verification steps
        Session::put('password_reset_user_id', $user->user_id);
        Session::put('password_reset_email', $user->email);
        Session::put('password_reset_username', $username);
        Session::put('password_reset_nama_lengkap', $user->nama_lengkap);

        // Mask email for display
        $emailParts = explode('@', $user->email);
        $maskedEmail = substr($emailParts[0], 0, 2) . str_repeat('*', max(0, strlen($emailParts[0]) - 2)) . '@' . $emailParts[1];

        return redirect()->route('lupa-password.verify-email');
    }

    /**
     * Show Step 2: Email verification / OTP input.
     */
    public function showVerifyEmail(): View|RedirectResponse
    {
        if (! Session::has('password_reset_user_id')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        $email = Session::get('password_reset_email');
        $emailParts = explode('@', $email);
        $maskedEmail = substr($emailParts[0], 0, 2) . str_repeat('*', max(0, strlen($emailParts[0]) - 2)) . '@' . $emailParts[1];

        return view('lupa_password', [
            'step' => 2,
            'maskedEmail' => $maskedEmail,
            'nama_lengkap' => Session::get('password_reset_nama_lengkap'),
        ]);
    }

    /**
     * Step 2: Send OTP / Verify email step.
     * For demo purposes, we just go to OTP step.
     * In production, you would send an actual email here.
     */
    public function sendOtp(Request $request): RedirectResponse
    {
        if (! Session::has('password_reset_user_id')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
        ]);

        $userEmail = Session::get('password_reset_email');

        // Compare case-insensitively: "AbC@mail.com" == "abc@MAIL.com"
        if (strtolower($request->input('email')) !== strtolower($userEmail)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Email yang dimasukkan tidak sesuai dengan data akun.']);
        }

        // For demo: Generate a 6-digit OTP and store in session
        // In production, send this via email
        $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Session::put('password_reset_otp', $otp);
        Session::put('password_reset_otp_expires', now()->addMinutes(10));

        // In production, you would send $otp via email here
        // For demo, we'll show it in the session status message
        $maskedOtp = substr($otp, 0, 2) . '••••';

        return redirect()->route('lupa-password.verify-otp')
            ->with('status', "Kode OTP telah dikirim ke email Anda. (Demo: {$otp})");
    }

    /**
     * Show Step 3: OTP verification form.
     */
    public function showVerifyOtp(): View|RedirectResponse
    {
        if (! Session::has('password_reset_otp')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        $email = Session::get('password_reset_email');
        $emailParts = explode('@', $email);
        $maskedEmail = substr($emailParts[0], 0, 2) . str_repeat('*', max(0, strlen($emailParts[0]) - 2)) . '@' . $emailParts[1];

        return view('lupa_password', [
            'step' => 3,
            'maskedEmail' => $maskedEmail,
        ]);
    }

    /**
     * Step 3: Verify the OTP code.
     */
    public function verifyOtp(Request $request): RedirectResponse
    {
        if (! Session::has('password_reset_otp')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        $request->validate([
            'otp' => ['required', 'string', 'size:6'],
        ], [
            'otp.required' => 'Kode OTP wajib diisi.',
            'otp.size' => 'Kode OTP harus 6 digit.',
        ]);

        $otp = $request->input('otp');
        $storedOtp = Session::get('password_reset_otp');
        $expires = Session::get('password_reset_otp_expires');

        if (now()->greaterThan($expires)) {
            Session::forget(['password_reset_otp', 'password_reset_otp_expires']);
            return redirect()->route('lupa-password')
                ->withErrors(['otp' => 'Kode OTP sudah kedaluwarsa. Silakan kirim ulang.']);
        }

        if ($otp !== $storedOtp) {
            return redirect()->route('lupa-password.verify-otp')
                ->withInput()
                ->withErrors(['otp' => 'Kode OTP yang dimasukkan salah.']);
        }

        // OTP verified, allow password reset
        Session::put('password_reset_verified', true);
        Session::forget(['password_reset_otp', 'password_reset_otp_expires']);

        return redirect()->route('lupa-password.reset');
    }

    /**
     * Show Step 4: Password reset form.
     */
    public function showResetPassword(): View|RedirectResponse
    {
        if (! Session::has('password_reset_verified') || ! Session::get('password_reset_verified')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        return view('lupa_password', [
            'step' => 4,
        ]);
    }

    /**
     * Step 4: Update the password in the database.
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        if (! Session::has('password_reset_verified') || ! Session::get('password_reset_verified')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.required' => 'Password baru wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        $userId = Session::get('password_reset_user_id');
        $user = User::find($userId);

        if (! $user) {
            Session::forget([
                'password_reset_user_id',
                'password_reset_email',
                'password_reset_username',
                'password_reset_nama_lengkap',
                'password_reset_verified',
            ]);

            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Data pengguna tidak ditemukan. Silakan coba lagi.']);
        }

        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Clear all password reset session data
        Session::forget([
            'password_reset_user_id',
            'password_reset_email',
            'password_reset_username',
            'password_reset_nama_lengkap',
            'password_reset_otp',
            'password_reset_otp_expires',
            'password_reset_verified',
        ]);

        return redirect()->route('sign-in')
            ->with('status', 'Password berhasil diubah. Silakan login dengan password baru Anda.');
    }

    /**
     * Resend OTP - regenerate and simulate sending.
     */
    public function resendOtp(): RedirectResponse
    {
        if (! Session::has('password_reset_user_id')) {
            return redirect()->route('lupa-password')
                ->withErrors(['username' => 'Sesi habis. Silakan mulai ulang proses.']);
        }

        // Generate new OTP
        $otp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Session::put('password_reset_otp', $otp);
        Session::put('password_reset_otp_expires', now()->addMinutes(10));

        return redirect()->route('lupa-password.verify-otp')
            ->with('status', "Kode OTP baru telah dikirim. (Demo: {$otp})");
    }
}

