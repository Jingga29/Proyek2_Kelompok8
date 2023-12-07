<?php

namespace App\Http\Controllers;

use App\Models\nota_penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class nota_penjualanController extends Controller
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
            $data = nota_penjualan::where('tanggal', 'like', "%$katakunci%")
                ->orWhere('pembeli', 'like', "%$katakunci%")
                ->orWhere('lokasi_penjualan', 'like', "%$katakunci%")
                ->orWhere('jenis', 'like', "%$katakunci%")
                ->orWhere('jumlah', 'like', "%$katakunci%")
                ->orWhere('harga', 'like', "%$katakunci%")
                ->orWhere('total', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);

        } else {
            $data = nota_penjualan::orderBy('tanggal', 'desc')->paginate($jumlahbaris);
        }
        
        return view('nota_penjualan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nota_penjualan.create');
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
        Session::flash('pembeli', $request->pembeli);
        Session::flash('lokasi_penjualan', $request->lokasi_penjualan);
        Session::flash('jenis', $request->jenis);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('harga', $request->harga);
        Session::flash('total', $request->total);

        $request->validate([
            "tanggal" => "required",
            "pembeli" => "required",
            "lokasi_penjualan" => "required", // Perbaiki "requited" menjadi "required"
            "jenis" => "required",
            "jumlah" => "required|numeric",
            "harga" => "required|numeric",
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.require" => "Tanggal wajin diisi",
            "pembeli.require" => "pembeli wajin diisi",
            "lokasi_penjualan.require" => "lokasi_penjualan wajin diisi",
            "jenis.require" => "jenis wajin diisi",
            "jumlah.require" => "jumlah wajib diisi",
            "jumlah.numeric" => "jumlah wajib diisi dalam angka",
            "harga.require" => "harga wajin diisi",
            "harga.numeric" => "harga wajin diisi dalam angka",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "pembeli" => $request->input('pembeli'),
            "lokasi_penjualan" => $request->input('lokasi_penjualan'),
            "jenis" => $request->input('jenis'),
            "jumlah" => $request->input('jumlah'),
            "harga" => $request->input('harga'),
            "total" => $request->input('total'),
        ];
        nota_penjualan::create($data);
        return redirect('nota_penjualan')->with('success', 'Berhasil Memasukkan Data');
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
        $data = nota_penjualan::where('tanggal', $id)->first();
        return view('nota_penjualan.show')->with('data', $data);
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
        $data = nota_penjualan::where('tanggal', $id)->first();
        return view('nota_penjualan.edit')->with('data', $data);
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
            "pembeli" => "required",
            "lokasi_penjualan" => "required", // Perbaiki "requited" menjadi "required"
            "jenis" => "required",
            "jumlah" => "required|numeric",
            "harga" => "required|numeric",
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.require" => "tanggal wajin diisi",
            "pembeli.require" => "pembeli wajin diisi",
            "lokasi_penjualan.require" => "lokasi_penjualan wajin diisi",
            "jenis.require" => "jenis wajin diisi",
            "jumlah.require" => "jumlah wajib diisi",
            "jumlah.numeric" => "jumlah wajib diisi dalam angka",
            "harga.require" => "harga wajin diisi",
            "harga.numeric" => "harga wajin diisi dalam angka",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "pembeli" => $request->input('pembeli'),
            "lokasi_penjualan" => $request->input('lokasi_penjualan'),
            "jenis" => $request->input('jenis'),
            "jumlah" => $request->input('jumlah'),
            "harga" => $request->input('harga'),
            "total" => $request->input('total'),
        ];
        nota_penjualan::where('tanggal', $id)->update($data);
        return redirect('/nota_penjualan')->with('success', 'Berhasil melakukan update data');
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
        nota_penjualan::where('tanggal', $id)->delete();
        return redirect('/nota_penjualan')->with('success', 'Berhasil hapus data');
    }
}