@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->
<form action='{{ url('BOP') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('BOP') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="item_bop" class="col-sm-2 col-form-label">Item BOP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='item_bop' value="{{ Session::get('item_bop') }}" id="item_bop">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nominal' value="{{ Session::get('nominal') }}" id="nominal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='total' value="{{ Session::get('total') }}" id="total">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
</div>
@endsection