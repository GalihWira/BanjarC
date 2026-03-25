<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get ('/', [HomeController::class, 'home']);
//Route::get ('/', [HomeController::class, 'lamanAwalPP']);
Route::get ('/', [HomeController::class, 'daftarTagihan']);
