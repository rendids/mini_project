<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\user\PesanController;
use App\Http\Controllers\user\DetailController;
use App\Http\Controllers\admin\PersetujuanAdmin;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\RiwayatController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\admin\PemesananController;
use App\Http\Controllers\admin\PengajuanController;
use App\Http\Controllers\admin\PembayaranController;
use App\Http\Controllers\penyedia\PesananController;
use App\Http\Controllers\penyedia\RattingController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\admin\CalonPenyediaController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\penyedia\ProfileController as PenyediaProfileController;
use App\Http\Controllers\penyedia\DashboardController as PenyediaDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [LandingController::class, 'index']);
Route::delete('/update{id}', [LandingController::class, 'tandai'])->name('tandai');

Route::get('/email/verify', [EmailVerificationController::class, 'showVerificationNotice'])
    ->middleware('auth', 'checkEmailVerification')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::get('/kebijakan_privasi', [AuthController::class, 'kebijakan'])->name('kebijakan_privasi');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])
    ->middleware('guest')
    ->name('password.update');



Route::post('/email/verification-notification', [EmailVerificationController::class, 'sendVerificationNotification'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::controller(AuthController::class)->prefix('auth',)->middleware('guest')->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('/login/proses', 'loginproses')->name('login.proses');
    Route::get('register/user', 'registerUser')->name('register.user');
    Route::post('register/user/proccess', 'registerUsersave')->name('registersave.user');
    Route::get('register/penyedia', 'registerPenyedia')->name('register.penyedia');
    Route::post('register/penyedia/proccess', 'registerPenyediasave')->name('registersave.penyedia');
});

Route::get('auth/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

//yang dapat di akses admin
Route::middleware('user-access:admin', 'auth',)->prefix('admin')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.admin');
    });
    Route::controller(CalonPenyediaController::class)->group(function () {
        route::get('calonpenyedia', 'index')->name('calonpenyedia');
        route::patch('calonpenyedia/terima{id}', 'approv')->name('penyedia.terima');
        route::delete('calonpenyedia/tolak{id}', 'tolak')->name('penyedia.tolak');
    });
    Route::controller(PembayaranController::class)->group(function () {
        route::get('pembayaran', 'index')->name('pembayaran');
        Route::post('pembayaran/buat', 'store')->name('pembayaran.store');
        Route::patch('pembayaran/update{id}', 'update')->name('pembayaran.update');
        Route::delete('pembayaran/hapus{id}', 'destroy')->name('pembayaran.delete');
    });

    Route::controller(PengajuanController::class)->group(function () {
        route::get('pengajuan', 'index')->name('pengajuan');
        route::get('pengajuan-process/{id}', 'pengajuanProcess')->name('pengajuan-process');
    });
    Route::controller(PemesananController::class)->group(function () {
        route::get('pemesanan', 'index')->name('pemesanan');
        route::patch('setujui.pesanan{id}', 'setujui')->name('setujui.pemesanan');
    });
});

//yang dapat di akses user
Route::middleware('user-access:user', 'auth', 'verified')->prefix('user')->group(function () {
    Route::controller(UserDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.user');
    });
    Route::controller(PesanController::class)->group(function () {
        Route::get('pesan', 'index')->name('pesan');
    });
    Route::controller(RiwayatController::class)->group(function () {
        Route::get('riwayat', 'index')->name('riwayat');
        Route::post('rating','rating')->name('rating');
        Route::post('pengembalian', 'pengembalian')->name('pengembalian');
    });
    Route::controller(DetailController::class)->group(function () {
        Route::get('detail{id}', 'index')->name('detail');
        Route::get('memesan{id}', 'memesan')->name('memesan');
        Route::post('pesan{id}', 'store')->name('buat.pemesanan');
    });
    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
        Route::put('profile.update{id}', 'updateprofile')->name('updateProfile');
        Route::put('foto.update{id}', 'updatefoto')->name('updatefoto');
        Route::put('password.update{id}', 'updatepassword')->name('updatepassword');


    });
    Route::controller(UserDashboardController::class)->group(function () {
        Route::get('/dashboard/search', 'search')->name('dashboard.search');
    });

});

//yang dapat di akses penyedia
Route::middleware('user-access:penyedia', 'auth')->prefix('penyedia')->group(function () {
    Route::controller(PenyediaDashboardController::class)->middleware('cekprofile')->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.penyedia');
    });
    Route::controller(PesananController::class)->middleware('cekprofile')->group(function () {
        Route::get('pesanan', 'index')->name('pesanan');
        Route::patch('pesanan.tolak{id}', 'tolakpesanan')->name('tolak.pesanan');
        Route::patch('pesanan.terima{id}', 'terimapesanan')->name('terima.pesanan');
    });
    Route::controller(RattingController::class)->group(function () {
        Route::get('ratting', 'index')->name('rating.penyedia');
    });
    Route::controller(PenyediaProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile.penyedia');
        Route::put('profile.update/{id}', 'profileupdate')->name('profile.penyedia.update');
    });
});
