<?php

namespace App\Http\Controllers;

use App\Models\laba_tahunan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class laba_tahunanController extends Controller
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
            $data = laba_tahunan::where('tahun', 'like', "%$katakunci%")
                ->orWhere('jumlah', 'like', "%$katakunci%")
                ->orWhere('total', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = laba_tahunan::orderBy('tahun', 'desc')->paginate($jumlahbaris);
        }
        
        return view('laba_tahunan.index')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laba_tahunan.create');
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
        Session::flash('tahun', $request->tahun);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('total', $request->total);

        $request->validate([
            "tahun" => "required",
            "jumlah" => "required",
            "total" => "required",
        ],[
            "tahun.required" => "tahun wajib diisi",
            "jumlah.required" => "jumlah wajib diisi",
            "total.required" => "Lokasi Panen wajib diisi",
        ]);


        $data = [
            "tahun" => $request->input('tahun'),
            "jumlah" => $request->input('jumlah'),
            "total" => $request->input('total'),
        ];
        laba_tahunan::create($data);
        return redirect('laba_tahunan')->with('succes', 'Berhasil Memasukkan Data');
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
        $data = laba_tahunan::where('tahun', $id)->first();
        return view('laba_tahunan.show')->with('data', $data);
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
        $data = laba_tahunan::where('tahun', $id)->first();
        return view('laba_tahunan.edit')->with('data', $data);
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
            "tahun" => "required",
            "jumlah" => "required",
            "total" => "required",
        ],[
            "tahun.required" => "tahun wajib diisi",
            "jumlah.required" => "jumlah wajib diisi",
            "total.required" => "Lokasi Panen wajib diisi",
        ]);


        $data = [
            "tahun" => $request->input('tahun'),
            "jumlah" => $request->input('jumlah'),
            "total" => $request->input('total'),
        ];
        laba_tahunan::where('tahun', $id)->update($data);
        return redirect('/laba_tahunan')->with('success', 'Berhasil melakukan update data');
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
        laba_tahunan::where('tahun', $id)->delete();
        return redirect('/laba_tahunan')->with('success', 'Berhasil hapus data');
    }
}
