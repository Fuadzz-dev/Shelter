<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Pegawai\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guest Routes — Authentication (Sign In & Sign Up)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [AuthController::class, 'showSignIn'])->name('sign-in');
    Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-in.submit');

    Route::get('/sign-up', [AuthController::class, 'showSignUp'])->name('sign-up');
    Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up.submit');
    Route::view('/ketentuan-layanan', 'terms')->name('ketentuan-layanan');
    Route::view('/kebijakan-privasi', 'privacy')->name('kebijakan-privasi');

    // Lupa Password (Forgot Password) Routes
    Route::get('/lupa-password', [ForgotPasswordController::class, 'showLupaPassword'])->name('lupa-password');
    Route::post('/lupa-password/lookup', [ForgotPasswordController::class, 'lookupUser'])->name('lupa-password.lookup');
    Route::get('/lupa-password/verify-email', [ForgotPasswordController::class, 'showVerifyEmail'])->name('lupa-password.verify-email');
    Route::post('/lupa-password/send-otp', [ForgotPasswordController::class, 'sendOtp'])->name('lupa-password.send-otp');
    Route::get('/lupa-password/verify-otp', [ForgotPasswordController::class, 'showVerifyOtp'])->name('lupa-password.verify-otp');
    Route::post('/lupa-password/verify-otp', [ForgotPasswordController::class, 'verifyOtp'])->name('lupa-password.verify-otp.submit');
    Route::get('/lupa-password/reset', [ForgotPasswordController::class, 'showResetPassword'])->name('lupa-password.reset');
    Route::post('/lupa-password/reset', [ForgotPasswordController::class, 'updatePassword'])->name('lupa-password.reset.submit');
    Route::post('/lupa-password/resend-otp', [ForgotPasswordController::class, 'resendOtp'])->name('lupa-password.resend-otp');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes — Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Pegawai Routes — accessible by 'user' and 'admin' roles
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'pegawai'])->prefix('pegawai')->name('pegawai.')->group(function () {
    Route::get('/dashboard', [PegawaiController::class, 'dashboard'])->name('dashboard');
    Route::get('/laporan-helpdesk', [PegawaiController::class, 'laporanHelpdesk'])->name('laporan-helpdesk');
    Route::get('/laporan-helpdesk/create', [PegawaiController::class, 'createLaporan'])->name('laporan-helpdesk.create');
    Route::post('/laporan-helpdesk', [PegawaiController::class, 'storeLaporan'])->name('laporan-helpdesk.store');
    Route::get('/laporan-helpdesk/{id}', [PegawaiController::class, 'detailLaporan'])->name('laporan-helpdesk.detail');
    Route::get('/laporan-helpdesk/{id}/validasi-digital', [PegawaiController::class, 'validasiDigital'])->name('laporan-helpdesk.validasi-digital');
    Route::post('/laporan-helpdesk/{id}/validasi-selesai', [PegawaiController::class, 'validasiSelesai'])->name('laporan-helpdesk.validasi-selesai');
});

/*
|--------------------------------------------------------------------------
| Admin Routes — accessible by 'admin' role only
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/helpdesk', [AdminController::class, 'helpdesk'])->name('helpdesk');
    Route::get('/manajemen-pengguna', [AdminController::class, 'manajemenPengguna'])->name('manajemen-pengguna');
    Route::get('/riwayat-helpdesk', [AdminController::class, 'riwayatHelpdesk'])->name('riwayat-helpdesk');
});

/*
|--------------------------------------------------------------------------
| Redirect root to sign-in
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/sign-in');

require __DIR__.'/settings.php';
