<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan_harian_panen;
use Illuminate\Support\Facades\Session;

class laporan_harian_panenController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->input('katakunci');
        $jumlahbaris = 4;
        
        if (strlen($katakunci)) {
            $data = laporan_harian_panen::where('tanggal', 'like', "%$katakunci%")
                ->orWhere('produk', 'like', "%$katakunci%")
                ->orWhere('lokasi_panen', 'like', "%$katakunci%")
                ->orWhere('pegawai_panen', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = laporan_harian_panen::orderBy('tanggal', 'desc')->paginate($jumlahbaris);
        }
        
        return view('laporan_harian_panen.index')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laporan_harian_panen.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Session::flash('tanggal', $request->tanggal);
        Session::flash('produk', $request->produk);
        Session::flash('lokasi_panen', $request->lokasi_panen);
        Session::flash('pegawai_panen', $request->pegawai_panen);

        $request->validate([
            "tanggal" => "required",
            "produk" => "required",
            "lokasi_panen" => "required",
            "pegawai_panen" => "required",
        ],[
            "tanggal.require" => "Tanggal wajib diisi",
            "produk.require" => "Produk wajib diisi",
            "lokasi_panen.require" => "Lokasi Panen wajib diisi",
            "pegawai_panen.require" => "produk Pegawai Panen wajib diisi",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "produk" => $request->input('produk'),
            "lokasi_panen" => $request->input('lokasi_panen'),
            "pegawai_panen" => $request->input('pegawai_panen'),
        ];
        laporan_harian_panen::create($data);
        return redirect('laporan_harian_panen')->with('succes', 'Berhasil Memasukkan Data');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
        $data = laporan_harian_panen::where('tanggal', $id)->first();
        return view('laporan_harian_panen.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
        $data = laporan_harian_panen::where('tanggal', $id)->first();
        return view('laporan_harian_panen.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "tanggal" => "required",
            "produk" => "required",
            "lokasi_panen" => "required",
            "pegawai_panen" => "required",
        ],[
            "tanggal.require" => "Tanggal wajib diisi",
            "produk.require" => "Produk wajib diisi",
            "lokasi_panen.require" => "Lokasi Panen wajib diisi",
            "pegawai_panen.require" => "Nama Pegawai Panen wajib diisi",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "produk" => $request->input('produk'),
            "lokasi_panen" => $request->input('lokasi_panen'),
            "pegawai_panen" => $request->input('pegawai_panen'),
        ];
        laporan_harian_panen::where('tanggal', $id)->update($data);
        return redirect('/laporan_harian_panen')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy($id)
    {
        //
        laporan_harian_panen::where('tanggal', $id)->delete();
        return redirect('/laporan_harian_panen')->with('success', 'Berhasil hapus data');
    }
}
