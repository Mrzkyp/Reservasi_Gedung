<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard_adminController;
Use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalMemberController;
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
Route::get('/jadwal', [JadwalMemberController::class,'muncul'])->name('jadwal');
Route::get('/jadwal-Member', [JadwalMemberController::class,'jadwal'])->name('jadwal-Member');

Route::middleware(['auth'])->group(function(){
    Route::get('/home',[DashboardController::class,'index'])->name('Home');
    Route::get('/logout', [AuthController::class,'destroy'])->name('logout');

    Route::get('/reservasi', [ReservasiController::class,'pesan'])->name('reservasi');
    Route::post('/reservasi', [ReservasiController::class,'proses1'])->name('reservasi-proses');

    Route::get('/tambah_data', [JadwalController::class,'pesan1'])->name('jadwal_admin');
    Route::post('/tambah-proses', [JadwalController::class,'proses1'])->name('tambah-proses');
    Route::get('/jadwal_admin', [JadwalController::class,'muncul'])->name('jadwal_admin');
    Route::get('/hapusdata', [JadwalController::class,'destroy'])->name('hapusdata');
    Route::put('/admin/jadwal/{id}', [JadwalController::class, "update"])->name('updatedata');
    Route::post('/update_admin', [JadwalController::class,""]);

    Route::get('/status_pemesanan', [ReservasiController::class,'muncul'])->name('status_pemesanan_admin');
    Route::get('/profil', [AuthController::class,'profil'])->name('profil');
    
    Route::get('/dashboard-admin', [DashboardController::class,'indexa'])->name('dashboard_admin');
    Route::get('/profil_member', [AuthController::class,'profil'])->name('profil');

    Route::get('/logout', [DashboardController::class,'destroys'])->name('logout');
    
});