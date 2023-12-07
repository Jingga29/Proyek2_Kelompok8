@extends('layouts.apps')

@section('content')
<div class="container">
<!-- START FORM -->
<form action='{{ url('laporan_laba_rugi_harian') }}' method='post' class="mx-auto">
    
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('laporan_laba_rugi_harian') }}" class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="nota" class="col-sm-2 col-form-label">Nota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nota' value="{{ Session::get('nota') }}" id="nota">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nominal' value="{{ Session::get('nominal') }}" id="nominal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_pendapatan" class="col-sm-2 col-form-label">Total Pendapatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='total_pendapatan' value="{{ Session::get('total_pendapatan') }}" id="total_pendapatan">
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