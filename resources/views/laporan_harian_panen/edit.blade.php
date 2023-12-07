@extends('layouts/apps')

@section('content')
<div class="container">
<a href="/laporan_harian_panen" class="btn btn-secondary"><< Kembali</a>
    <form method="post" class="mx-auto" action="{{ '/laporan_harian_panen/'.$data->tanggal }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <input type="text" class="form-control" name="produk" id="produk" value="{{ $data->produk }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="lokasi_panen" class="form-label">Lokasi Panen</label>
            <textarea class="form-control" name="lokasi_panen">{{ $data->lokasi_panen }}</textarea>
        </div>
        <div class="mb-3">
            <label for="pegawai_panen" class="form-label">Pegawai Panen</label>
            <input type="text" class="form-control" name="pegawai_panen" id="pegawai_panen" value="{{ $data->pegawai_panen }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
</div>
@endsection
