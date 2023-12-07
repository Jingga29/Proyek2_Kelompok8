@extends('layouts.apps')

@section('content')
<title>Laporan Harian Panen</title>
        <h1>Laporan Harian Panen</h1>
        <div class="search" style="margin-left: 30%;">
            <label>
                <input type="search" placeholder="Search here"> 
            </label>
            <a href="/dashboard/create" class="btn btn-primary">+Tambah Data</a>
        </div>

            <div class="details"  style="margin-left: 26%;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <table border="2">
                            <thead>
                                <tr>
                                    <td scope="col" width="600" bgcolor="#FF8A00">No.</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Tanggal</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Produk</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Lokasi Panen</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Pegawai Panen</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Place your dynamic content here using Blade syntax -->
                                @foreach($data as $item)
                                    <tr>
                                        <td bgcolor="FABE79">{{ $loop->iteration }}</td>
                                        <td bgcolor="FABE79">{{ $item->tanggal }}</td>
                                        <td bgcolor="FABE79">{{ $item->produk }}</td>
                                        <td bgcolor="FABE79">{{ $item->lokasi_panen }}</td>
                                        <td bgcolor="FABE79">{{ $item->pegawai_panen }}</td>
                                        <td bgcolor="FABE79"><a class="btn btn-secondary btn-sm" type="submit" style="background-color: rgb(154, 154, 155) !important;" href='{{ url('/laporan_harian_panen/'.$item->tanggal) }}'>Detail</a></td>
                                        <td bgcolor="FABE79"><a class="btn btn-warning btn-sm" href='{{ url('/laporan_harian_panen/'.$item->tanggal.'/edit') }}'>Edit</a></td>
                                        <td bgcolor="FABE79">
                                        <form class="d-inline" action="{{ '/dashboard/'.$item->tanggal }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit" style="background-color: red !important;">Hapus</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Move pagination here -->
                    <div style="margin-top: 20px;">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection