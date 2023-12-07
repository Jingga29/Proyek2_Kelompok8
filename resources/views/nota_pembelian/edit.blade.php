@extends('layouts/apps')

@section('content')
<a href="/nota_pembelian" class="btn btn-secondary"><< Kembali</a>
    <form method="post" class="mx-auto" action="{{ '/nota_pembelian/'.$data->tanggal }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="nama_petani" class="form-label">Nama Petani</label>
            <input type="text" class="form-control" name="nama_petani" id="nama_petani" value="{{ $data->nama_petani }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <textarea class="form-control" name="lokasi">{{ $data->lokasi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="jumlah_ikan" class="form-label">Jumlah Ikan</label>
            <input type="number" class="form-control" name="jumlah_ikan" id="jumlah_ikan" value="{{ $data->jumlah_ikan }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
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
