<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
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
    return view('welcome');
});


// Admin Routes
Route::prefix('admin')->middleware(['web', 'auth:admin', 'verified'])->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// User Routes
Route::prefix('user')->middleware(['web', 'auth:user', 'verified'])->group(function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::post('logout', [UserAuthController::class, 'logout'])->name('user.logout');
});

Route::get('user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('user/login', [UserAuthController::class, 'login'])->name('user.login.post');
Route::post('user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
