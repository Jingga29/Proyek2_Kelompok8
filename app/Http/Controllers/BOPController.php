<?php

namespace App\Http\Controllers;

use App\Models\BOP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BOPController extends Controller
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
            $data = BOP::where('tanggal', 'like', "%$katakunci%")
                ->orWhere('item_bop', 'like', "%$katakunci%")
                ->orWhere('nominal', 'like', "%$katakunci%")
                ->orWhere('total', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = BOP::orderBy('tanggal', 'desc')->paginate($jumlahbaris);
        }
        
        return view('BOP.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BOP.create');
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
        Session::flash('item_bop', $request->item_bop);
        Session::flash('nominal', $request->nominal);
        Session::flash('total', $request->total);

        $request->validate([
            "item_bop" => "required",
            "nominal" => "required", // Perbaiki "requited" menjadi "required"
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.numeric" => "Nomor induk wajin diisi dalam angka",
            "item_bop.require" => "item_bop wajin diisi",
            "nominal.require" => "nominal wajin diisi",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "item_bop" => $request->input('item_bop'),
            "nominal" => $request->input('nominal'),
            "total" => $request->input('total'),
        ];
        BOP::create($data);
        return redirect('BOP')->with('success', 'Berhasil Memasukkan Data');
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
        $data = BOP::where('tanggal', $id)->first();
        return view('BOP.show')->with('data', $data);
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
        $data = BOP::where('tanggal', $id)->first();
        return view('BOP.edit')->with('data', $data);
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
            "item_bop" => "required",
            "nominal" => "required", // Perbaiki "requited" menjadi "required"
            "total" => "required|numeric", // Tambahkan validasi numeric untuk "total"
        ],[
            "tanggal.numeric" => "Nomor induk wajin diisi dalam angka",
            "item_bop.require" => "item_bop wajin diisi",
            "nominal.require" => "nominal wajin diisi",
            "total.require" => "total wajib diisi",
            "total.numeric" => "total wajib diisi dalam angka",
        ]);

        $data = [
            "tanggal" => $request->input('tanggal'),
            "item_bop" => $request->input('item_bop'),
            "nominal" => $request->input('nominal'),
            "total" => $request->input('total'),
        ];
        BOP::where('tanggal', $id)->update($data);
        return redirect('/BOP')->with('success', 'Berhasil melakukan update data');
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
        BOP::where('tanggal', $id)->delete();
        return redirect('/BOP')->with('success', 'Berhasil hapus data');
    }
}
