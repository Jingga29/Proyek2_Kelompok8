<?php

namespace App\Http\Controllers;

use App\Models\laba_bulanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\PDF;
use Illuminate\Support\Facades\Session;

class laba_bulananController extends Controller
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
            $data = laba_bulanan::where('tanggal', 'like', "%$katakunci%")
                ->orWhere('jumlah', 'like', "%$katakunci%")
                ->orWhere('total', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = laba_bulanan::orderBy('tanggal', 'desc')->paginate($jumlahbaris);
        }
        
        return view('laba_bulanan.index')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laba_bulanan.create');
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
        Session::flash('jumlah', $request->jumlah);
        Session::flash('total', $request->total);

        $request->validate([
            "tanggal" => "required",
            "jumlah" => "required",
            "total" => "required",
        ],[
            "tanggal.required" => "tanggal wajib diisi",
            "jumlah.required" => "jumlah wajib diisi",
            "total.required" => "Lokasi Panen wajib diisi",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "jumlah" => $request->input('jumlah'),
            "total" => $request->input('total'),
        ];
        laba_bulanan::create($data);
        return redirect('laba_bulanan')->with('succes', 'Berhasil Memasukkan Data');
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
        $data = laba_bulanan::where('tanggal', $id)->first();
        return view('laba_bulanan.show')->with('data', $data);
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
        $data = laba_bulanan::where('tanggal', $id)->first();
        return view('laba_bulanan.edit')->with('data', $data);
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
            "jumlah" => "required",
            "total" => "required",
        ],[
            "tanggal.required" => "tanggal wajib diisi",
            "jumlah.required" => "jumlah wajib diisi",
            "total.required" => "Lokasi Panen wajib diisi",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "jumlah" => $request->input('jumlah'),
            "total" => $request->input('total'),
        ];
        laba_bulanan::where('tanggal', $id)->update($data);
        return redirect('/laba_bulanan')->with('success', 'Berhasil melakukan update data');
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
        laba_bulanan::where('tanggal', $id)->delete();
        return redirect('/laba_bulanan')->with('success', 'Berhasil hapus data');
    }

    //public function downloadpdf()
    //{
        //$data = laba_bulanan::limit(20)->get();
        //$pdf = PDF::loadView('laba_bulanan-pdf',compact('data'));
        //$pdf ->setPaper('A4', 'potrait');
        //return $pdf->stream('laba_bulanan-pdf');
    //}

    public function grafik()
    {
        $total = laba_bulanan::select(DB::raw("CAST(SUM(total) as int) as total"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('total');

        $bulan = laba_bulanan::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at) as bulan"))
        ->pluck('total');

        return view('laba_bulanan.grafik',compact('total','bulan'));
    }
}
