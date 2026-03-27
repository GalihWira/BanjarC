<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function pengaduan() {
        $pengaduan = [
            [
                'nomor' => '1',
                'nama' => 'I Putu Ardyana Darma Nugraha',
                'adu' => 'Infrastruktur',
                'subjek' => 'Toilet Mampet'
            ],
            [
                'nomor' => '2',
                'nama' => 'A.A. Ayu Kariza Trisna Widari',
                'adu' => 'Infrastruktur',
                'subjek' => 'Toilet Mampet'
            ],
            [
                'nomor' => '3',
                'nama' => 'I Wayan Galih Wira Setiawan',
                'pinjam' => 'Gamelan Banjar C',
                'tanggal' => '33 Februari 2027',
                'adu' => 'Infrastruktur',
                'subjek' => 'Toilet Mampet'
            ],
            [
                'nomor' => '4',
                'nama' => 'Kadek Hevan Pramana Wijaya',
                'adu' => 'Infrastruktur',
                'subjek' => 'Toilet Mampet'
            ],
            [
                'nomor' => '5',
                'nama' => 'Ni Putu Sutariyani',
                'adu' => 'Infrastruktur',
                'subjek' => 'Toilet Mampet'
            ],
            ];
            return view('valpengaduan', ['pengaduan' => $pengaduan]);
    }

        public function pengajuan() {
        $pengajuan = [
            [
                'nomor' => '1',
                'nama' => 'I Putu Ardyana Darma Nugraha',
                'pinjam' => 'Balai Banjar C',
                'tanggal' => '31 Februari 2027',
            ],
            [
                'nomor' => '2',
                'nama' => 'A.A. Ayu Kariza Trisna Widari',
                'pinjam' => 'Gong Banjar C',
                'tanggal' => '32 Februari 2027',
            ],
            [
                'nomor' => '3',
                'nama' => 'I Wayan Galih Wira Setiawan',
                'pinjam' => 'Gamelan Banjar C',
                'tanggal' => '33 Februari 2027',
            ],
            [
                'nomor' => '4',
                'nama' => 'Kadek Hevan Pramana Wijaya',
                'pinjam' => 'Tabuh Banjar C',
                'tanggal' => '34 Februari 2027',
            ],
            [
                'nomor' => '5',
                'nama' => 'Ni Putu Sutariyani',
                'pinjam' => 'Pintu Gebyok Banjar C',
                'tanggal' => '35 Februari 2027',
            ],
            ];
            return view('valpengajuan', ['pengajuan' => $pengajuan]);
    }

    public function pembayaran() {
        $pembayaran = [
[
                'nomor' => '1',
                'nib' => '001',
                'nama' => 'I Putu Ardyana Darma Nugraha',
                'nominal' => '15.000.000',
                'tanggal' => '12/12/2121',
            ],
            [
                'nomor' => '2',
                'nib' => '002',
                'nama' => 'A.A. Ayu Kariza Trisna Widari',
                'nominal' => '10.888.000',
                'tanggal' => '12/12/2121',
            ],
            [
                'nomor' => '3',
                'nib' => '003',
                'nama' => 'I Wayan Galih Wira Setiawan',
                'nominal' => '5.760.000',
                'tanggal' => '12/12/2121',
            ],
            [
                'nomor' => '4',
                'nib' => '004',
                'nama' => 'Kadek Hevan Pramana Wijaya',
                'nominal' => '9.080.000',
                'tanggal' => '12/12/2121',
            ],
            [
                'nomor' => '5',
                'nib' => '005',
                'nama' => 'Ni Putu Sutariyani',
                'nominal' => '7.987.000',
                'tanggal' => '14/11/2023',
            ],
                [
                'nomor' => '6',
                'nib' => '006',
                'nama' => 'Satria',
                'nominal' => '5.000.000',
                'tanggal' => '05/09/2019',
            ],
            [
                'nomor' => '7',
                'nib' => '007',
                'nama' => 'Carmenita',
                'nominal' => '6.750.000',
                'tanggal' => '22/02/2022',
            ],
            [
                'nomor' => '8',
                'nib' => '008',
                'nama' => 'Salsabila',
                'nominal' => '10.500.000',
                'tanggal' => '23/01/2025',
            ],
            [
                'nomor' => '9',
                'nib' => '009',
                'nama' => 'Gusti',
                'nominal' => '13.500.000',
                'tanggal' => '33/01/2025',
            ]
            ];
            return view('valpembayaran', ['pembayaran' => $pembayaran]);
    }

        public function valpengajuan()
    {
        return view('valpengajuan');
    }
        public function valpengaduan()
    {
        return view('valpengaduan');
    }

    public function valpembayaran()
    {
        return view('valpembdataayaran');
    }
}
