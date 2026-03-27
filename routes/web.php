<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/kontrol-peminjaman', [PeminjamanController::class, 'kontrol'])->name('peminjaman.kontrol');
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 5acfe9fb83c8cf5147d9e149fe0648d91637eb80
