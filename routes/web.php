<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

Route::get('/login',[AuthController::class, 'index'])->name('auth.index');
Route::post('/login',[AuthController::class, 'verify'])->name('auth.verify');
Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
Route::get('/register',[AuthController::class,'register'])->name('register');

Route::get('admin',[DashboardController::class, 'index'])->name('dashboard.index');
Route::get('admin/profile',[DashboardController::class, 'profile'])->name('dashboard.profile');
