@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/nota_penjualan' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Tanggal</b> {{ $data->tanggal }}
    </p>
    <p>
        <b>pembeli</b> {{ $data->pembeli }}
    </p>
    <p>
        <b>Lokasi Penjualan</b> {{ $data->lokasi_penjualan }}
    </p>
    <p>
        <b>Jenis</b> {{ $data->jenis }}
    </p>
    <p>
        <b>Jumlah</b> {{ $data->jumlah }}
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

