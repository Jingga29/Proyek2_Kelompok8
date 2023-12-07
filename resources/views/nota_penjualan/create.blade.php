@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->
<form action='{{ url('nota_penjualan') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('nota_penjualan') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pembeli" class="col-sm-2 col-form-label">Pembeli</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pembeli' value="{{ Session::get('pembeli') }}" id="pembeli">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi_penjualan" class="col-sm-2 col-form-label">Lokasi Penjualan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='lokasi_penjualan' value="{{ Session::get('lokasi_penjualan') }}" id="lokasi_penjualan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jenis' value="{{ Session::get('jenis') }}" id="jenis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah "kg"</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jumlah' value="{{ Session::get('jumlah') }}" id="jumlah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value="{{ Session::get('harga') }}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='total' value="{{ Session::get('total') }}" id="total">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
</div>
@endsection