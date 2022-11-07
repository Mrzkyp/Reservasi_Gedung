<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::post('/login-admin', [AuthController::class,'store1'])->name('login-admin-proses');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'signin'])->name('login-proses');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store'])->name('register-proses');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class,'destroy'])->name('logout');
    Route::get('/reservasi', [AuthController::class,'pesan'])->name('reservasi');
    Route::get('/dashboard-admin', [AuthController::class,'store1'])->name('dashboard-admin');
});