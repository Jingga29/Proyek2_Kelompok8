@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->
<form action='{{ url('laba_bulanan') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('laba_bulanan') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='jumlah' value="{{ Session::get('jumlah') }}" id="jumlah">
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
</form>
</div>
<!-- AKHIR FORM -->
</div>
@endsection