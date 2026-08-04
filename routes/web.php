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
    Route::post('/laporan-helpdesk/{id}/belum-selesai', [PegawaiController::class, 'belumSelesai'])->name('laporan-helpdesk.belum-selesai');

    // Profil Pegawai
    Route::get('/profil', [PegawaiController::class, 'profil'])->name('profil');
    Route::post('/profil', [PegawaiController::class, 'updateProfil'])->name('profil.update');
});

/*
|--------------------------------------------------------------------------
| Admin Routes — accessible by 'admin' role only
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/helpdesk', [AdminController::class, 'helpdesk'])->name('helpdesk');
    Route::get('/laporan-helpdesk/create', [AdminController::class, 'createLaporan'])->name('laporan-helpdesk.create');
    Route::post('/laporan-helpdesk', [AdminController::class, 'storeLaporan'])->name('laporan-helpdesk.store');
    Route::get('/helpdesk/{id}', [AdminController::class, 'helpdeskDetail'])->name('helpdesk.detail');
    Route::post('/helpdesk/{id}/log', [AdminController::class, 'storeLog'])->name('helpdesk.log');
    Route::get('/manajemen-pengguna', [AdminController::class, 'manajemenPengguna'])->name('manajemen-pengguna');
    Route::get('/riwayat-helpdesk', [AdminController::class, 'riwayatHelpdesk'])->name('riwayat-helpdesk');
    Route::get('/riwayat-helpdesk/export', [AdminController::class, 'exportRiwayatHelpdesk'])->name('riwayat-helpdesk.export');
    Route::get('/riwayat-helpdesk/{id}', [AdminController::class, 'detailRiwayat'])->name('riwayat-helpdesk.detail');

    // User management AJAX endpoints
    Route::post('/manajemen-pengguna', [AdminController::class, 'storePengguna'])->name('manajemen-pengguna.store');
    Route::put('/manajemen-pengguna/{id}', [AdminController::class, 'updatePengguna'])->name('manajemen-pengguna.update');
    Route::patch('/manajemen-pengguna/{id}/status', [AdminController::class, 'toggleStatus'])->name('manajemen-pengguna.toggle-status');
    Route::post('/manajemen-pengguna/{id}/reset-password', [AdminController::class, 'resetPassword'])->name('manajemen-pengguna.reset-password');

    // Helpdesk log action AJAX endpoint
    Route::post('/helpdesk/{id}/log', [AdminController::class, 'storeLog'])->name('helpdesk.log');
});

/*
|--------------------------------------------------------------------------
| Redirect root to sign-in
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/sign-in');

require __DIR__.'/settings.php';
