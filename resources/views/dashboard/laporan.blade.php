<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    {{-- CSS Bootstap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- =============== Navigation and Main Content ================ -->
    <div class="container" style="margin-left: 0px;">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="images">
                            <img src="{{ asset('imgs/Logo.png-removebg-preview.png') }}" alt="Logo" style="width: 100px;">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.Dashboard') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.laporan harian panen') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laporan Harian Panen</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.nota_pembelian') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop.svg"></ion-icon>
                        </span>
                        <span class="title">Nota Pembelian</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.nota_penjualan') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop.svg"></ion-icon>
                        </span>
                        <span class="title">Nota Penjualan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.BOP') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/car-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Biaya Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.Laporan_laba_rugi_harian') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laba Rugi Harian</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.Laba_bulanan') }}.">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/bar-chart-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laba Bulanan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('dashboard.Laba_tahunan') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/bar-chart-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laba Tahunan</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="{{ asset('imgs/jaehyun.jpeg') }}" alt="">
                </div>
            </div>
        </div>

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
                                    <td>No.</td>
                                    <td>Tanggal</td>
                                    <td>Produk</td>
                                    <td>Lokasi Panen</td>
                                    <td>Pegawai Panen</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Place your dynamic content here using Blade syntax -->
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->produk }}</td>
                                        <td>{{ $item->lokasi_panen }}</td>
                                        <td>{{ $item->pegawai_panen }}</td>
                                        <td><a class="btn btn-secondary btn-sm" href='{{ url('/laporan_harian_panen/'.$item->tanggal) }}'>Detail</a></td>
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

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
