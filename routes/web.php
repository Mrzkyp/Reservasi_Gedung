<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginMemberController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', function () {
    return view('home');
});

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('register-proses');

Route::get('/login',[LoginMemberController::class, 'index'])->name('login');
Route::post('/login',[LoginMemberController::class, 'store'])->name('login-proses');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
// Route::get('/dashboard',[DasboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard',[LoginMemberController::class, 'store'])->name('dashboard-proses');
