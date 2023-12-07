@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/laporan_harian_panen' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Tanggal</b> {{ $data->tanggal }}
    </p>
    <p>
        <b>Produk</b> {{ $data->produk }}
    </p>
    <p>
        <b>Lokasi Panen</b> {{ $data->lokasi_panen }}
    </p>
    <p>
        <b>Pegawai Panen</b> {{ $data->pegawai_panen }}
    </p>
</div>
</div>
</center>
@endsection
