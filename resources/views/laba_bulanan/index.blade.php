@extends('layouts.apps')

@section('content')
<div class="containers">
<title>Laba Bulanan</title>
        <h1>Laba Bulanan</h1>
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('laba_bulanan') }}" method="get" class="mx-auto">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="/laba_bulanan/create" class="btn btn-primary">+Tambah Data</a>
            </div>
        
            <div>
                <a href="/laba_bulanan/grafik" class="btn btn-primary mr-2">Lihat Grafik</a>
                <!-- Jarak tambahan dapat diatur dengan kelas margin-right (mr-N) -->
            </div>
        </div>

            <div class="details"  style="margin-left: 26%;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <table border="2">
                            <thead>
                                <tr>
                                    <td scope="col" width="600" bgcolor="#FF8A00">No.</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Tanggal</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Jumlah</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Place your dynamic content here using Blade syntax -->
                                @foreach($data as $item)
                                    <tr>
                                        <td bgcolor="FABE79">{{ $loop->iteration }}</td>
                                        <td bgcolor="FABE79">{{ $item['tanggal'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['jumlah'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">
                                            
                                            <div class="d-flex flex-row-reverse">
                                                <a class="btn m-0 me-2 btn-secondary btn-sm" type="submit" style="background-color: rgb(18, 31, 37) !important;" href='{{ url('/laba_bulanan/'.$item->tanggal) }}'>
                                                    <i class="fa-sharp fa-regular fa-eye"></i>
                                                </a>

                                                <a class="btn m-0 me-2 btn-warning btn-sm" type="submit" style="background-color: rgb(0, 207, 0) !important;" href='{{ url('/laba_bulanan/'.$item->tanggal.'/edit') }}'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>

                                            <form class="d-inline" action="{{ '/laba_bulanan/'.$item->tanggal }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn m-0 me-2 btn-danger" style="background-color: rgb(240, 22, 22) !important;">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            </form>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                <tr>
                                    <td colspan="2" align="left" bgcolor="#FF8A00"><strong><center>Total</center></strong></td>
                                    <td bgcolor="FF8A00"><center>Rp. {{ number_format($item->total, 0, ',', '.') }}</center></td>
                                    <td bgcolor="FF8A00"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection