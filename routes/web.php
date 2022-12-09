<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiAdminController;
use App\Http\Controllers\TransaksiController;


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
//Home
Route::get('/', [DashboardController::class,'show'])->name('home');

//Login Admin
Route::get('/login-admin', [AuthController::class,'index1'])->name('login-admin');
Route::post('/login-admin-proses', [AuthController::class,'store1'])->name('login-admin-proses');

//Login Member
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'signin'])->name('login-proses');

//Register
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store'])->name('register-proses');

//Reservasi
Route::get('/reservasi', [ReservasiController::class,'pesan'])->name('reservasi');
Route::post('/reservasi', [ReservasiController::class,'proses1'])->name('reservasi-proses');

Route::middleware(['auth'])->group(function(){
    Route::get('/home',[DashboardController::class,'index'])->name('Home');
    Route::get('/logout', [AuthController::class,'destroy'])->name('logout');

    //Reservasi
    Route::get('/delete1/{id}', [ReservasiController::class, 'delete1'])->name('delete');
    Route::get('/accreservasi/{id}', [ReservasiController::class, 'accreservasi'])->name('accreservasi');

    Route::get('/jadwal_reservasi', [JadwalController::class,'show'])->name('jadwal_reservasi');

    Route::get('/status_pemesanan', [ReservasiController::class,'show'])->name('status_pemesanan_admin');
    Route::get('/delete/{id}', [JadwalController::class, 'delete'])->name('delete');

    Route::get('/reservasiadmin', [ReservasiAdminController::class,'index'])->name('reservasiadmin');
    Route::post('/reservasiadmin', [ReservasiAdminController::class,'store'])->name('reservasi-proses2');
    Route::get('/edit/{id}', [ReservasiController::class, 'edit'])->name('edit');

    Route::get('/status_transaksi', [TransaksiController::class,'index'])->name('status_transaksi');
    Route::get('/status_transaksi_admin', [TransaksiController::class,'show'])->name('status_transaksi_admin');

    Route::get('/dashboard-admin', [DashboardController::class,'index'])->name('dashboard_admin');
    Route::get('/profil_member', [AuthController::class,'profil'])->name('profil');

    Route::get('/logout', [DashboardController::class,'destroys'])->name('logout');

});
