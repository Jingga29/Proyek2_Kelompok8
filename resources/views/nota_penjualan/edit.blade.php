@extends('layouts/apps')

@section('content')
<div class="container">
<a href="/nota_penjualan" class="btn btn-secondary"><< Kembali</a>
    <form method="post" class="mx-auto" action="{{ '/nota_penjualan/'.$data->tanggal }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="pembeli" class="form-label">Pembeli</label>
            <input type="text" class="form-control" name="pembeli" id="pembeli" value="{{ $data->pembeli }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="lokasi_penjualan" class="form-label">Lokasi Penjualan</label>
            <textarea class="form-control" name="lokasi_penjualan">{{ $data->lokasi_penjualan }}</textarea>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis" value="{{ $data->jenis }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah "kg"</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $data->jumlah }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{ $data->harga }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" class="form-control" name="total" id="total" value="{{ $data->total }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
</div>
