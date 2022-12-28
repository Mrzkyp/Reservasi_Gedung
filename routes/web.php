<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiAdminController;


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

//pdf Sudah Lunas
Route::get('/download_data/{id}', [DashboardController::class, 'download_data'])->name('download_data');

//pdf belum lunas
Route::get('/download_data_blm/{id}', [DashboardController::class, 'download_data_blm'])->name('download_data_blm');

//pdf ketika Reservasi baru
Route::get('/download_data_jadi', [ReservasiController::class, 'download_data_jadi'])->name('download_data_jadi');


//Login Admin
Route::get('/login-admin', [DashboardController::class,'index1'])->name('login-admin');
Route::post('/login-admin-proses', [DashboardController::class,'store1'])->name('login-admin-proses');

//Login Member
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'signin'])->name('login-proses');

//Register
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store'])->name('register-proses');

//Reservasi
Route::get('/reservasi', [ReservasiController::class,'pesan'])->name('reservasi');
Route::post('/reservasi', [ReservasiController::class,'proses1'])->name('reservasi-proses');

//logout
Route::middleware(['auth'])->group(function(){
    Route::get('/home',[DashboardController::class,'index'])->name('Home');
    Route::get('/logout', [AuthController::class,'destroy'])->name('logout');

    //Reservasi
    Route::get('/accreservasi/{id}', [ReservasiController::class, 'accreservasi'])->name('accreservasi');

    //jadwal_reservasi
    Route::get('/jadwal_reservasi', [JadwalController::class,'show'])->name('jadwal_reservasi');


    Route::get('/status_pemesanan', [ReservasiController::class,'show'])->name('status_pemesanan_admin');
    Route::get('/delete/{id}', [JadwalController::class, 'delete'])->name('delete');

    Route::get('/reservasiadmin', [ReservasiAdminController::class,'index'])->name('reservasiadmin');
    Route::post('/reservasiadmin', [ReservasiAdminController::class,'store'])->name('reservasi-proses2');
    


    //edit status pemesanan
    Route::post('/updatedata/{id}', [ReservasiAdminController::class, 'update'])->name('updatedata');
    Route::get('/edit_pemesanan/{id}', [ReservasiAdminController::class, 'edit'])->name('edit_pemesanan');
    
    // Route::get('/tampildata/{id}', [ReservasiAdminController::class,])

    Route::get('/dashboard-admin', [DashboardController::class,'index'])->name('dashboard_admin');

    Route::get('/logout', [DashboardController::class,'destroys'])->name('logout');

});
