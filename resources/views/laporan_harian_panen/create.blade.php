@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->

<form action='{{ url('laporan_harian_panen') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-1 p-1 bg-body rounded shadow-sm">
        <a href="{{ url('laporan_harian_panen') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="produk" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='produk' value="{{ Session::get('produk') }}" id="produk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi_panen" class="col-sm-2 col-form-label">Lokasi Panen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='lokasi_panen' value="{{ Session::get('lokasi_panen') }}" id="lokasi_panen">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pegawai_panen" class="col-sm-2 col-form-label">Pegawai Panen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pegawai_panen' value="{{ Session::get('pegawai_panen') }}" id="pegawai_panen">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
</form>
<!-- AKHIR FORM -->
</div>
@endsection