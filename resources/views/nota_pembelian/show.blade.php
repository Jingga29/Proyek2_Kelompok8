@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/nota_pembelian' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Tanggal</b> {{ $data->tanggal }}
    </p>
    <p>
        <b>Nama Petani</b> {{ $data->nama_petani }}
    </p>
    <p>
        <b>Lokasi</b> {{ $data->lokasi }}
    </p>
    <p>
        <b>Jumlah Ikan</b> {{ $data->jumlah_ikan }}
    </p>
    <p>
        <b>Harga</b> {{ $data->harga }}
    </p>
    <p>
        <b>Total</b> {{ $data->total }}
    </p>
</div>
</div>
</center>
@endsection
