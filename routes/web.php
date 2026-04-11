<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

Route::get ('/', [HomeController::class, 'index']);

Route::get ('/login', [AuthController::class, 'login']);

Route::get ('/validasi/pengaduan', [ValidasiController::class, 'pengaduan']);
Route::get ('/validasi/pengajuan', [ValidasiController::class, 'pengajuan']);
Route::get ('/validasi/pembayaran', [ValidasiController::class, 'pembayaran']);


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/kontrol-peminjaman', [PeminjamanController::class, 'kontrol'])->name('peminjaman.kontrol');
