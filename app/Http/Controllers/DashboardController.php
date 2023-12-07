<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*public function index()
    {
        return view('dashboard.index');
    }*/
    function index()
    {
        return view('dashboard.index');
    }

    function laporan_harian_panen()
    {
        return view('dashboard.laporan_harian_panen');
    }

    function nota_pembelian()
    {
        return view('dashboard.nota_pembelian');
    }

    function nota_penjualan()
    {
        return view('dashboard.nota_penjualan');
    }

    function BOP()
    {
        return view('dashboard.BOP');
    }

    function Laporan_laba_rugi_harian()
    {
        return view('dashboard.Laporan_laba_rugi_harian');
    }

    function Laba_bulanan()
    {
        return view('dashboard.Laba_bulanan');
    }

    function Laba_tahunan()
    {
        //$judul = 'Ini adalah Halaman Laba_tahunan';
        $data = [
            'judul' => 'Ini adalah Halaman Laba Tahunan',
            'laba_tahunan' => [
                'email' => 'jiga@gmail.com',
                'youtube' => 'jingga'
            ]
            ];
        return view('dashboard.Laba_tahunan')->with($data);
    }
}
