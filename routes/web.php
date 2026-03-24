<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get ('/', [HomeController::class, 'index']);
Route::get ('/validasi/pengajuan', [HomeController::class, 'valpengajuan']);

Route::get ('/login', [AuthController::class, 'login']); 
