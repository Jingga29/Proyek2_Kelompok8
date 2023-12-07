@extends('layouts/apps')

@section('content')
<div class="container">
<a href="/BOP" class="btn btn-secondary"><< Kembali</a>
    <form method="post" class="mx-auto" action="{{ '/BOP/'.$data->tanggal }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="item_bop" class="form-label">Item BOP</label>
            <input type="text" class="form-control" name="item_bop" id="item_bop" value="{{ $data->item_bop }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <textarea class="form-control" name="nominal">{{ $data->nominal }}</textarea>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" class="form-control" name="total" id="total" value="{{ $data->total }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
</div>
@endsection
