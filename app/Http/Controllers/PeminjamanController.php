<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
    return view ('peminjaman');
    }
    public function kontrol(){
        return view ('tanggalPeminjaman');
    }
}
