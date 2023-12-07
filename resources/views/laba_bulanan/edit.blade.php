@extends('layouts/apps')

@section('content')
<div class="container">
<a href="/laba_bulanan" class="btn btn-secondary"><< Kembali</a>
    <form method="post" class="mx-auto" action="{{ '/laba_bulanan/'.$data->tanggal }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" value="{{ $data->jumlah }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">total</label>
            <input type="number" class="form-control" name="total" id="total" value="{{ $data->total }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
</div>
@endsection
