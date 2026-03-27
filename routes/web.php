<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get ('/', [HomeController::class, 'home']);
Route::get ('/bayarpeturunan', function () {
    return view ('bayarpeturunan
    ');
});
Route::get ('/bayarair', function () {
    return view ('bayarAir
    ');
});
Route::get ('/bayarsuka', function () {
    return view ('bayarSuka
    ');
});
Route::get ('/pengumuman', function () {
    return view ('pengumuman
    ');
});
Route::get ('/pengaduan', function () {
    return view ('pengaduan
    ');
});
Route::get ('/tagihanAdmin', function () {
    return view ('tagihanAdmn
    ');
});
Route::get ('/datapengaduan', function () {
    return view ('dataPengaduan
    ');
});
Route::get ('/lamanpengajuan', function () {
    return view ('lamanPengajuan
    ');
});