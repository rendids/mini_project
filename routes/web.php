<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\penyedia\DashboardController as PenyediaDashboardController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
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

Route::post('auth/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

//yang dapat di akses admin
Route::middleware('user-access:admin' , 'auth')->prefix('admin')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.admin');
    });
});

//yang dapat di akses user
Route::middleware('user-access:user', 'auth')->prefix('user')->group(function () {
    Route::controller(UserDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.user');
    });
});

//yang dapat di akses penyedia
Route::middleware('user-access:penyedia' , 'auth')->prefix('penyedia')->group(function () {
    Route::controller(PenyediaDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard.penyedia');
    });
});
