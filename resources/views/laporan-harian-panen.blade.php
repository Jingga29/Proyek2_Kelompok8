<!-- resources/views/laporan-harian-panen.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="Laporan_harian_panen">
        <h1>Laporan Harian Panen</h1>
    </div>

    <div class="search">
        <label>
            <input type="search" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
            <button class="u-btn-submit" style="background-color: aqua;">+ Tambah</button>
        </label>
    </div>

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <table border="1" width="600px" cellpadding="10" cellspacing="5">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tanggal</td>
                            <td>Produk</td>
                            <td>Lokasi Panen</td>
                            <td>Pegawai Panen</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Place your dynamic content here using Blade syntax -->
                        @foreach($laporanHarianPanen as $laporan)
                            <tr>
                                <td>{{ $laporan->id }}</td>
                                <td>{{ $laporan->tanggal }}</td>
                                <td>{{ $laporan->produk }}</td>
                                <td>{{ $laporan->lokasi_panen }}</td>
                                <td>{{ $laporan->pegawai_panen }}</td>
                                <td>
                                    <span class="edit">Edit</span> 
                                    <span class="delete">Delete</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagination">
            <button id="prevPage">Previous</button>
            <button id="nextPage">Next</button>
        </div>
    </div>
@endsection
