<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

// Redirect halaman utama ke daftar jasa
Route::get('/', function () {
    return redirect()->route('services.index');
});

// Route Auth (Login & Logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Publik (Bisa diakses tanpa login)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Route Khusus Pengguna yang Sudah Login
Route::middleware(['auth'])->group(function () {
    // Tambah Jasa (Harus ditaruh sebelum /services/{id} agar tidak terpanggil sebagai {id})
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    
    // Fitur Utama: Kirim Ulasan & Rating (Pivot Table)
    Route::post('/services/{id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});

// Route Detail Jasa (Wildcard {id} ditaruh paling bawah)
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');