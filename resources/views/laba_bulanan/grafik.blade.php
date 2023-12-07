@extends('layouts.apps')

@section('content')
<div class="containers">
<title>Grafik Bulanan</title>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grafik Bulanan</div>
                <div class="card-body">
                    <div id="grafik"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var pendapatan = <?php echo json_encode($total) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;
    Highcharts.chart('grafik', {
        title : {
            text: 'Grafik Bulanan',
        },
        xAxis : {
            categories : bulan
        },
        yAxis : {
            title: {
                text : 'Nominal penndapatan bulanan',
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [
            {
                name: 'Nominal',
                data: pendapatan
            }
        ]
    });
</script>
@endsection