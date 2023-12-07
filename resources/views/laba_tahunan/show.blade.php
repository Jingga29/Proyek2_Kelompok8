@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/laba_tahunan' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Tahun</b> {{ $data->tahun }}
    </p>
    <p>
        <b>Jumlah</b> {{ $data->jumlah }}
    </p>
    <p>
        <b>Total</b> {{ $data->total }}
    </p>
</div>
</div>
</center>
@endsection


