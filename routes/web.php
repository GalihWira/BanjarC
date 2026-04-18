<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\PeminjamanController;

Route::get ('/', [HomeController::class, 'index']);

Route::get ('/login', [AuthController::class, 'login']);

Route::get ('/validasi/pengaduan-val', [ValidasiController::class, 'pengaduan']);
Route::get ('/validasi/pengajuan-val', [ValidasiController::class, 'pengajuan']);
Route::get ('/validasi/pembayaran-val', [ValidasiController::class, 'pembayaran']);

Route::get('/PlaceToGo', function () {
    return view('PlaceToGo');
})->name('placetogo');
Route::get('/tagihan', function () {
    return view('daftarTagihan');
})->name('tagihan');
Route::get('/awalPP', function () {
    return view('lamanAwalPP');
})->name('awalpp');
Route::get('/pengumuman', function () {
    return view('pengumuman');
})->name('info');
Route::get('/#', function () {
    return view('home');
})->name('hom');
Route::get('/localProduct', function () {
    return view('localProduct');
})->name('lokalproduk');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get ('/bayarpeturunan', function () {
    return view ('bayarpeturunan');
})->name('bayarpet');
Route::get ('/bayarair', function () {
    return view ('bayarAir');
})->name('bayarair');
Route::get ('/bayarsuka', function () {
    return view ('bayarSuka');
})->name('bayarsuk');
Route::get ('/pengumuman', function () {
    return view ('pengumuman');
});
Route::get ('/pengaduan', function () {
    return view ('pengaduan');
})->name('pengad');
Route::get ('/tagihanAdmin', function () {
    return view ('tagihanAdmn
    ');
});
Route::get ('/datapengaduan', function () {
    return view ('dataPengaduan
    ');
});
Route::get ('/lamanpengajuan', function () {
    return view ('lamanPengajuan');
})->name('pengajuan');

Route::get('/peminjaman-ad', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/kontrol-peminjaman', [PeminjamanController::class, 'kontrol'])->name('peminjaman.kontrol');
