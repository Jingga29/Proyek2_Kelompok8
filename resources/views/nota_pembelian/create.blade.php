@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->
<form action='{{ url('nota_pembelian') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('nota_pembelian') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_petani" class="col-sm-2 col-form-label">Nama Petani</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_petani' value="{{ Session::get('nama_petani') }}" id="nama_petani">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='lokasi' value="{{ Session::get('lokasi') }}" id="lokasi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah_ikan" class="col-sm-2 col-form-label">Jumlah Ikan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='jumlah_ikan' value="{{ Session::get('jumlah_ikan') }}" id="jumlah_ikan">
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
@endsection
</div>