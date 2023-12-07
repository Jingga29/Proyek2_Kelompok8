@extends('layouts/apps')

@section('content')
<a href="/laporan_laba_rugi_harian" class="btn btn-secondary"><< Kembali</a>
    <form method="post" action="{{ '/laporan_laba_rugi_harian/'.$data->nota }}">
        @csrf
        @method('PUT') <!-- Menggunakan 'PUT' untuk method -->
        <div class="mb-3">
            <label for="nota" class="form-label">nota</label>
            <input type="text" class="form-control" name="nota" id="nota" value="{{ $data->nota }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">nominal</label>
            <input type="text" class="form-control" name="nominal" id="nominal" value="{{ $data->nominal }}"> <!-- Memperbaiki sintaksis penutup kurung kurawal dan kurung siku -->
        </div>
        <div class="mb-3">
            <label for="total_pendapatan" class="form-label">Total Pendapatan</label>
            <textarea class="form-control" name="total_pendapatan">{{ $data->total_pendapatan }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
