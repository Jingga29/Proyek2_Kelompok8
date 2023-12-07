@extends('layouts.apps')

@section('content')
<!-- START FORM -->
<form action='{{ url('dashboard') }}' method='post'>
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('dashboard') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
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
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
</form>
</div>
<!-- AKHIR FORM -->
@endsection