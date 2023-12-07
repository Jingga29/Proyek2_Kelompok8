@extends('layouts.app')

@section('dashboard')
<!-- ======================= Cards ================== -->
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">50 Kg</div>
            <div class="cardName">Total Penjualan Perbulan</div>
        </div>

        <div class="iconBx">
            <img src="assets/imgs/history-fish.png" alt="">
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">100 Kg</div>
            <div class="cardName">Total Penjualan Perbulan</div>
        </div>

        <div class="iconBx">
            <img src="assets/imgs/history-fish.png" alt="">
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">50 Kg</div>
            <div class="cardName">Total Pembelian Perbulan</div>
        </div>

        <div class="iconBx">
            <img src="assets/imgs/history-fish.png" alt="">
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">100 Kg</div>
            <div class="cardName">Total Pembelian Perbulan</div>
        </div>

        <div class="iconBx">
            <img src="assets/imgs/history-fish.png" alt="">
        </div>
    </div>
</div>

    <!-- ================ Add Charts JS ================= -->
    <div class="chartsBx">
        <div class="chart"> <canvas id="chart-1"></canvas> </div>
        <div class="chart"> <canvas id="chart-2"></canvas> </div>
    </div>
</div>

@endsection


<div class="card-body">

</div>