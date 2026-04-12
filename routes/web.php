<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
});