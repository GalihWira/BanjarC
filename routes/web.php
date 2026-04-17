<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\PeminjamanController;

<<<<<<< HEAD
Route::get ('/', [HomeController::class, 'home']);
Route::get ('/lamanAwalPP', function() {
    return view ('lamanAwalPP');
});
Route::get ('/daftarTagihan', function() {
    return view ('daftarTagihan');
});
Route::get ('/localProduct', function() {
    return view ('localProduct');
});
Route::get ('/adminPlacetoGo', function() {
    return view ('adminPlacetoGo');
});
Route::get ('/adminLocalProduct', function() {
    return view ('adminLocalProduct');
});
Route::get ('/lamanPengumuman', function() {
    return view ('lamanPengumuman');
});
Route::get ('/dataPembayaranAir', function() {
    return view ('dataPembayaranAir');
});
Route::get ('/dataPembayaranPeturunan', function() {
    return view ('dataPembayaranPeturunan');
});
Route::get ('/dataPembayaranSukaDuka', function() {
    return view ('dataPembayaranSukaDuka');
=======
Route::get ('/', [HomeController::class, 'index']);

Route::get ('/login', [AuthController::class, 'login']);

Route::get ('/validasi/pengaduan', [ValidasiController::class, 'pengaduan']);
Route::get ('/validasi/pengajuan', [ValidasiController::class, 'pengajuan']);
Route::get ('/validasi/pembayaran', [ValidasiController::class, 'pembayaran']);


Route::get ('/', [HomeController::class, 'home']);
Route::get ('/bayarpeturunan', function () {
    return view ('bayarpeturunan
    ');
>>>>>>> b32ff0ff26bd50f8fdc8dfc2889514b75224d3cb
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

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/kontrol-peminjaman', [PeminjamanController::class, 'kontrol'])->name('peminjaman.kontrol');
