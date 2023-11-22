<?php

use App\Http\Controllers\AuthController;
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
Route::controller(AuthController::class)->prefix('auth')->middleware('guest')->group(function (){
    Route::get('login', 'login')->name('login');
    Route::post('/login/proses', 'loginproses')->name('login.proses');
});
Route::middleware('user-access:admin')->group(function(){
    Route::controller()
});
