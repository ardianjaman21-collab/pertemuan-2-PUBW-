<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    public function index()
    {
        return view('laporan.form');
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $tinggi = $request->tinggi;

        return view('laporan.konfirmasi', compact(
            'nama',
            'lokasi',
            'tinggi'
        ));
    }

    public function daftar()
    {
        $laporan = [
            [
                'nama' => 'Budi',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 20
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Baleendah',
                'tinggi' => 50
            ],
            [
                'nama' => 'Andi',
                'lokasi' => 'Banjaran',
                'tinggi' => 90
            ]
        ];

        return view('laporan.daftar', compact('laporan'));
    }
}