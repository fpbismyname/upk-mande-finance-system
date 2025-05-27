<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthWeb;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/beranda', function () {
        return view('beranda');
    })->name('beranda');
    Route::get('/pinjam', function () {
        return view('page.user.pinjam');
    })->name('pinjam');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User Page
Route::middleware(['auth', 'verified', AuthWeb::class])->group(function () {
    Route::get("/dashboard", function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/kelola-pinjaman', function () {
        return view('page.admin.kelola_pinjaman');
    })->name('kelola_pinjaman');
});

require __DIR__ . '/auth.php';
