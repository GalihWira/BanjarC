<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/kontrol-peminjaman', [PeminjamanController::class, 'kontrol'])->name('peminjaman.kontrol');
