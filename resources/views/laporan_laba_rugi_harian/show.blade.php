@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/laporan_laba_rugi_harian' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Nota</b> {{ $data->nota }}
    </p>
    <p>
        <b>Nominal</b> {{ $data->nominal }}
    </p>
    <p>
        <b>Total Pendapatan</b> {{ $data->total_pendapatan }}
    </p>
</div>
</div>
</center>
@endsection


