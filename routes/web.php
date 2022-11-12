<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard_adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/login-admin', [AuthController::class,'index1'])->name('login-admin');
Route::post('/login-admin-proses', [AuthController::class,'store1'])->name('login-admin-proses');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'signin'])->name('login-proses');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store'])->name('register-proses');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class,'destroy'])->name('logout');
    Route::get('/reservasi', [AuthController::class,'pesan'])->name('reservasi');
    Route::post('/reservasi', [ReservasiController::class,'proses'])->name('reservasi-proses');
    Route::get('/jadwal', [AuthController::class,'jadwal1'])->name('jadwal');
    Route::get('/jadwal_admin', [AuthController::class,'jadwal2'])->name('jadwal_admin');
    Route::get('/status_pemesanan', [AuthController::class,'order'])->name('status_pemesanan_admin');
    Route::get('/profil', [AuthController::class,'profil'])->name('profil');
    Route::get('/dashboard-admin', [DashboardController::class,'indexa'])->name('dashboard_admin');
    Route::get('/logout', [DashboardController::class,'destroys'])->name('logout');
});