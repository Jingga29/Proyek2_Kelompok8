@extends('layouts/apps')

@section('content')
<div>
    <a href='/laporan_harian_panen' class="btn btn-secondary"><< Kembali</a>
    <h1>{{ $data->produk }}</h1>
    <p>
        <b>Tanggal</b> {{ $data->tanggal }}
    </p>
    <p>
        <b>Produk</b> {{ $data->produk }}
    </p>
</div>
@endsection
