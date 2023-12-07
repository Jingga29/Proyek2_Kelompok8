<?php

namespace App\Http\Controllers;

use App\Models\laporan_laba_rugi_harian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class laporan_laba_rugi_harianController extends Controller
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
        $data = laporan_laba_rugi_harian::where('nota', 'like', "%$katakunci%")
            ->orWhere('nominal', 'like', "%$katakunci%")
            ->orWhere('total_pendapatan', 'like', "%$katakunci%")
            ->paginate($jumlahbaris);

    } else {
        $data = laporan_laba_rugi_harian::orderBy('total_pendapatan', 'desc')->paginate($jumlahbaris);
    }

    // Calculate total_pendapatan using DB::raw
    $nota = laporan_laba_rugi_harian::when(!$katakunci, function ($query) {
        return $query->select(DB::raw('SUM(total_pendapatan) as total_pendapatan'));
    })->value('total_pendapatan') ?? 0;

    // Extract 'data' property from the LengthAwarePaginator
    $data = $data->items();

    return view('laporan_laba_rugi_harian.index', compact('data', 'nota'));
}


    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laporan_laba_rugi_harian.create');
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
        Session::flash('nota', $request->nota);
        Session::flash('nominal', $request->nominal);
        Session::flash('total_pendapatan', $request->total_pendapatan);

        $request->validate([
            "nominal" => "required|numeric",
            "total_pendapatan" => "required|numeric", // Perbaiki "requited" menjadi "required"
        ],[
            "nota.numeric" => "nota wajib diisi dalam angka",
            "nominal.require" => "nominal wajib diisi",
            "nominal.numeric" => "nominal wajib diisi dalam angka",
            "total_pendapatan.require" => "total_pendapatan wajib diisi",
            "total_pendapatan.numeric" => "total_pendapatan wajib diisi dalam angka",
        ]);

        $data = [
            "nota" => $request->input('nota'),
            "nominal" => $request->input('nominal'),
            "total_pendapatan" => $request->input('total_pendapatan'),
        ];
        laporan_laba_rugi_harian::create($data);
        return redirect('laporan_laba_rugi_harian')->with('success', 'Berhasil Memasukkan Data');
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
        $data = laporan_laba_rugi_harian::where('nota', $id)->first();
        return view('laporan_laba_rugi_harian.show')->with('data', $data);
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
        $data = laporan_laba_rugi_harian::where('nota', $id)->first();
        return view('laporan_laba_rugi_harian.edit')->with('data', $data);
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
            "nominal" => "required|numeric",
            "total_pendapatan" => "required|numeric", // Perbaiki "requited" menjadi "required"
        ],[
            "nota.numeric" => "nota wajib diisi dalam angka",
            "nominal.require" => "nominal wajib diisi",
            "nominal.numeric" => "nominal wajib diisi dalam angka",
            "total_pendapatan.require" => "total_pendapatan wajib diisi",
            "total_pendapatan.numeric" => "total_pendapatan wajib diisi dalam angka",
        ]);

        $data = [
            "nota" => $request->input('nota'),
            "nominal" => $request->input('nominal'),
            "total_pendapatan" => $request->input('total_pendapatan'),
        ];
        laporan_laba_rugi_harian::where('nota', $id)->update($data);
        return redirect('/laporan_laba_rugi_harian')->with('success', 'Berhasil melakukan update data');
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
        laporan_laba_rugi_harian::where('nota', $id)->delete();
        return redirect('/laporan_laba_rugi_harian')->with('success', 'Berhasil hapus data');
    }
}
