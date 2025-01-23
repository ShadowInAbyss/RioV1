<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\AdminMiddleware;

// Rute untuk login dan autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman utama
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/landing', [LandingPageController::class, 'showLandingPage'])->name('landing_page');

// Rute untuk admin (Dilindungi oleh middleware AdminMiddleware)
Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/tables', [AdminController::class, 'tables'])->name('admin.tables');
    Route::get('/admin/produk/{produk}', [AdminController::class, 'produk'])->name('admin.produk');
});


// Rute untuk user (Dilindungi oleh middleware AuthenticateUser)
Route::prefix('user')->middleware(AuthenticateUser::class)->group(function () {
    Route::get('/pemesanan', [UserController::class, 'pemesanan'])->name('user.pemesanan');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
});
