<?php

use App\Http\Controllers\admin\CalonPenyediaController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\PersetujuanAdmin;
use App\Http\Controllers\admin\PembayaranController;
use App\Http\Controllers\admin\PemesananController;
use App\Http\Controllers\admin\PengajuanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\penyedia\DashboardController as PenyediaDashboardController;
use App\Http\Controllers\penyedia\PesananController;
use App\Http\Controllers\penyedia\RattingController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use App\Http\Controllers\user\PesanController;
use App\Http\Controllers\user\RiwayatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->prefix('auth')->middleware('guest')->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('/login/proses', 'loginproses')->name('login.proses');
    Route::get('register/user', 'registerUser')->name('register.user');
    Route::post('register/user/proccess', 'registerUsersave')->name('registersave.user');
    Route::get('register/penyedia', 'registerPenyedia')->name('register.penyedia');
    Route::post('register/penyedia/proccess', 'registerPenyediasave')->name('registersave.penyedia');
});

Route::get('auth/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

//yang dapat di akses admin
Route::middleware('user-access:admin' , 'auth')->prefix('admin')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.admin');
    });
    Route::controller(KategoriController::class)->group(function() {
        Route::get('kategori', 'index')->name('kategori');
        Route::post('kategori/buat', 'store')->name('kategori.store');
        Route::put('kategori/update/{id}', 'update')->name('kategori.update');
        Route::delete('kategori/hapus/{id}', 'destroy')->name('kategori.destroy');
    });
    Route::controller(PersetujuanAdmin::class)->group(function() {
        Route::get('persetujuan', 'index')->name('persetujuan');
    });
    Route::controller(CalonPenyediaController::class)->group(function(){
       route::get('calonpenyedia', 'index')->name('calonpenyedia');
       route::patch('calonpenyedia/terima{id}', 'approv')->name('penyedia.terima');
       route::delete('calonpenyedia/tolak{id}', 'tolak')->name('penyedia.tolak');
    });
    Route::controller(PembayaranController::class)->group(function(){
       route::get('pembayaran', 'index')->name('pembayaran');
       Route::post('pembayaran/buat', 'store')->name('pembayaran.store');
       Route::put('pembayaran/update{id}', 'update')->name('pembayaran.update');
       Route::delete('pembayaran/hapus{id}', 'destroy')->name('pembayaran.delete');
    });

    Route::controller(PengajuanController::class)->group(function(){
       route::get('pengajuan', 'index')->name('pengajuan');
    });
    Route::controller(PemesananController::class)->group(function(){
       route::get('pemesanan', 'index')->name('pemesanan');
    });

});

//yang dapat di akses user
Route::middleware('user-access:user', 'auth')->prefix('user')->group(function () {
    Route::controller(UserDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.user');
    });
    Route::controller(PesanController::class)->group(function() {
        Route::get('pesan', 'index')->name('pesan');
    });
    Route::controller(RiwayatController::class)->group(function() {
        Route::get('riwayat', 'index')->name('riwayat');
    });
});

//yang dapat di akses penyedia
Route::middleware('user-access:penyedia' , 'auth')->prefix('penyedia')->group(function () {
    Route::controller(PenyediaDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.penyedia');
    });
    Route::controller(PesananController::class)->group(function() {
        Route::get('pesanan', 'index')->name('pesanan');
    });
    Route::controller(RattingController::class)->group(function() {
        Route::get('ratting', 'index')->name('ratting');
    });
});
