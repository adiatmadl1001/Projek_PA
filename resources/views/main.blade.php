@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2">
            <h1>Report</h1>
        </div>
        <div class="row my-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>
    @php
        // get all bulan
        $bulan = [];
        $kwh = [];
        foreach ($tagihan as $t) {
            $bulan[] = $t->bulan;
            $kwh[] = $t->pemakaian;
            // $bulan = implode(' ', $bulan);
        }
    @endphp
@endsection
