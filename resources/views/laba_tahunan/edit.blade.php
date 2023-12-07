@extends('layouts.apps')

@section('content')
    <a href="/laba_tahunan" class="btn btn-secondary"><< Kembali</a>
    <form method="post" action="{{ '/laba_tahunan/'.$data->tahun }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" name="tahun" id="tahun" value="{{ $data->tahun }}" readonly>
            <!-- Menggunakan 'number' agar hanya menerima angka dan menambahkan atribut 'readonly' agar tidak dapat diubah -->
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" value="{{ $data->jumlah }}">
            <!-- Menggunakan 'text' jika input jumlah dapat berupa angka atau teks -->
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" class="form-control" name="total" id="total" value="{{ $data->total }}">
            <!-- Menggunakan 'text' jika input total dapat berupa angka atau teks -->
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
