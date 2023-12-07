<?php

namespace App\Http\Controllers;

use App\Models\nota_pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class nota_pembelianController extends Controller
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
            $data = nota_pembelian::where('tanggal', 'like', "%$katakunci%")
                ->orWhere('nama_petani', 'like', "%$katakunci%")
                ->orWhere('lokasi', 'like', "%$katakunci%")
                ->orWhere('jumlah_ikan', 'like', "%$katakunci%")
                ->orWhere('harga', 'like', "%$katakunci%")
                ->orWhere('total', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);

        } else {
            $data = nota_pembelian::orderBy('tanggal', 'desc')->paginate($jumlahbaris);
        }
        
        return view('nota_pembelian.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nota_pembelian.create');
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
        Session::flash('nama_petani', $request->nama_petani);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('jumlah_ikan', $request->jumlah_ikan);
        Session::flash('harga', $request->harga);
        Session::flash('total', $request->total);

        $request->validate([
            "tanggal" => "required",
            "nama_petani" => "required",
            "lokasi" => "required", // Perbaiki "requited" menjadi "required"
            "jumlah_ikan" => "required|numeric",
            "harga" => "required|numeric",
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.require" => "Nomor induk wajin diisi",
            "nama_petani.require" => "nama_petani wajin diisi",
            "lokasi.require" => "lokasi wajin diisi",
            "jumlah_ikan.require" => "jumlah_ikan wajib diisi",
            "jumlah_ikan.numeric" => "jumlah_ikan wajib diisi dalam angka",
            "harga.require" => "harga wajin diisi",
            "harga.numeric" => "harga wajin diisi dalam angka",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "nama_petani" => $request->input('nama_petani'),
            "lokasi" => $request->input('lokasi'),
            "jumlah_ikan" => $request->input('jumlah_ikan'),
            "harga" => $request->input('harga'),
            "total" => $request->input('total'),
        ];
        nota_pembelian::create($data);
        return redirect('nota_pembelian')->with('success', 'Berhasil Memasukkan Data');
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
        $data = nota_pembelian::where('tanggal', $id)->first();
        return view('nota_pembelian.show')->with('data', $data);
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
        $data = nota_pembelian::where('tanggal', $id)->first();
        return view('nota_pembelian.edit')->with('data', $data);
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
            "nama_petani" => "required",
            "lokasi" => "required", // Perbaiki "requited" menjadi "required"
            "jumlah_ikan" => "required|numeric",
            "harga" => "required|numeric",
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.required" => "Nomor induk wajin diisi dalam angka",
            "nama_petani.require" => "nama_petani wajin diisi",
            "lokasi.require" => "lokasi wajin diisi",
            "jumlah_ikan.require" => "jumlah_ikan wajib diisi",
            "jumlah_ikan.numeric" => "jumlah_ikan wajib diisi dalam angka",
            "harga.require" => "harga wajin diisi",
            "harga.numeric" => "harga wajin diisi dalam angka",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "nama_petani" => $request->input('nama_petani'),
            "lokasi" => $request->input('lokasi'),
            "jumlah_ikan" => $request->input('jumlah_ikan'),
            "harga" => $request->input('harga'),
            "total" => $request->input('total'),
        ];
        nota_pembelian::where('tanggal', $id)->update($data);
        return redirect('/nota_pembelian')->with('success', 'Berhasil melakukan update data');
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
        nota_pembelian::where('tanggal', $id)->delete();
        return redirect('/nota_pembelian')->with('success', 'Berhasil hapus data');
    }
}
