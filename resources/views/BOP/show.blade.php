@extends('layouts/apps')

@section('content')
<center>
<div class="container" class="mx-auto">
<div>
    <a href='/BOP' class="btn btn-secondary"><< Kembali</a>
    <p>
        <b>Tanggal</b> {{ $data->tanggal }}
    </p>
    <p>
        <b>Item BOP</b> {{ $data->item_bop }}
    </p>
    <p>
        <b>Nominal</b> {{ $data->nominal }}
    </p>
    <p>
        <b>Total</b> {{ $data->total }}
    </p>
</div>
</div>
</center>
@endsection




