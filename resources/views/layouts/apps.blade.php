<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="{{ asset('dashboard') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->is('laporan_harian_panen') ? 'active' : '' }}">
                    <a href="{{ asset('laporan_harian_panen') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laporan Harian Panen</span>
                    </a>
                </li>

                <li class="{{ request()->is('nota_pembelian') ? 'active' : '' }}">
                    <a href="{{ asset('nota_pembelian') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop.svg"></ion-icon>
                        </span>
                        <span class="title">Nota Pembelian</span>
                    </a>
                </li>

                <li class="{{ request()->is('nota_penjualan') ? 'active' : '' }}">
                    <a href="{{ asset('nota_penjualan') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop.svg"></ion-icon>
                        </span>
                        <span class="title">Nota Penjualan</span>
                    </a>
                </li>

                <li class="{{ request()->is('BOP') ? 'active' : '' }}">
                    <a href="{{ asset('BOP') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/car-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Biaya Operasional</span>
                    </a>
                </li>

                <li class="{{ request()->is('laporan_laba_rugi_harian') ? 'active' : '' }}">
                    <a href="{{ asset('laporan_laba_rugi_harian') }}">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laba Rugi Harian</span>
                    </a>
                </li>

                <li class="{{ request()->is('laba_bulanan') ? 'active' : '' }}">
                    <a href="{{ asset('laba_bulanan') }}.">
                        <span class="icon">
                            <ion-icon src="https://unpkg.com/ionicons@5.5.2/dist/svg/bar-chart-sharp.svg"></ion-icon>
                        </span>
                        <span class="title">Laba Bulanan</span>
                    </a>
                </li>

                <li class="{{ request()->is('laba_tahunan') ? 'active' : '' }}">
                    <a href="{{ asset('laba_tahunan') }}">
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

        @include('komponen.pesan')
        @yield('content')

        <!-- =========== Scripts =========  -->
    <script src="{{ asset('js/main.js') }}"></script>

        <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>