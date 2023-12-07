@extends('layouts.apps')

@section('content')
<div class="containers">
<title>Nota Pembelian</title>
        <h1>Nota Pembelian</h1>
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('nota_pembelian') }}" method="get" class="mx-auto">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        <div>
            <a href="/nota_pembelian/create" class="btn btn-primary">+Tambah Data</a>
        </div>

            <div class="details"  style="margin-left: 26%;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <table border="2">
                            <thead>
                                <tr>
                                    <td scope="col" width="600" bgcolor="#FF8A00">No.</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Tanggal</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Nama Petani</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Lokasi</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Jumlah Ikan</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Harga</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Total</td>
                                    <td scope="col" width="600" bgcolor="#FF8A00">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Place your dynamic content here using Blade syntax -->
                                @foreach($data as $item)
                                    <tr>
                                        <td bgcolor="FABE79">{{ $loop->iteration }}</td>
                                        <td bgcolor="FABE79">{{ $item['tanggal'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['nama_petani'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['lokasi'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['jumlah_ikan'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['harga'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">{{ $item['total'] }}</td> <!-- Use $item instead of $data -->
                                        <td bgcolor="FABE79">
                                            
                                            <div class="d-flex flex-row-reverse">
                                                <a class="btn m-0 me-2 btn-secondary btn-sm" type="submit" style="background-color: rgb(18, 31, 37) !important;" href='{{ url('/nota_pembelian/'.$item->tanggal) }}'>
                                                    <i class="fa-sharp fa-regular fa-eye"></i>
                                                </a>

                                                <a class="btn m-0 me-2 btn-warning btn-sm" type="submit" style="background-color: rgb(0, 207, 0) !important;" href='{{ url('/nota_pembelian/'.$item->tanggal.'/edit') }}'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>

                                            <form class="d-inline" action="{{ '/nota_pembelian/'.$item->tanggal }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn m-0 me-2 btn-danger" style="background-color: rgb(240, 22, 22) !important;">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            </form>
                                            </div>
                                            
                                        </td>
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