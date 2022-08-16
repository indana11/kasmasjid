@extends('layouts.main')

@section('container')

<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{{ $title }}</h3>
        <p class="panel-subtitle">{{ date('l d F Y',strtotime($now)) }}</p>
    </div>
    <div class="panel-body">
        <div class="row">
            {{-- <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-download"></i></span>
                    <p>
                        <span class="number">{{ $donasi }}</span>
                        <span class="title">Donasi</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-download"></i></span>
                    <p>
                        <span class="number">Rp. {{ number_format($pemasukan) }}</span>
                        <span class="title">Pemasukan</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-upload"></i></span>
                    <p>
                        <span class="number">Rp. {{ number_format($pengeluaran) }}</span>
                        <span class="title">Pengeluaran</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-credit-card"></i></span>
                    <p>
                        <span class="number">Rp. {{ number_format($saldo->saldo) }}</span>
                        <span class="title">Saldo Terakhir</span>
                    </p>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-9">
                    <div id="headline-chart" class="ct-chart">
                    {{-- <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;">
                        <g class="ct-grids">
                            <line y1="265" y2="265" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                            <line y1="15" y2="15" x1="50" x2="547" class="ct-grid ct-vertical"></line>
                        </g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <path d="M50,265L50,172.143L132.833,129.286L215.667,165L298.5,50.714L381.333,157.857L464.167,165L547,86.429L547,265Z" class="ct-area"></path>
                            </g>
                            <g class="ct-series ct-series-b">
                                <path d="M50,265L50,236.429L132.833,157.857L215.667,207.857L298.5,93.571L381.333,129.286L464.167,65L547,22.143L547,265Z" class="ct-area"></path>
                            </g>
                        </g>
                        <g class="ct-labels">
                            <foreignObject style="overflow: visible;" x="50" y="270" width="82.83333333333333" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="132.83333333333331" y="270" width="82.83333333333333" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span>
                            </foreignObject><foreignObject style="overflow: visible;" x="215.66666666666666" y="270" width="82.83333333333334" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="298.5" y="270" width="82.83333333333331" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="381.3333333333333" y="270" width="82.83333333333331" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span>
                            </foreignObject><foreignObject style="overflow: visible;" x="464.16666666666663" y="270" width="82.83333333333337" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span>
                            </foreignObject><foreignObject style="overflow: visible;" x="547" y="270" width="30" height="20">
                                <span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span>
                            </foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30">
                                <span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span>
                            </foreignObject>
                        </g>
                    </svg> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-download"></i></span>
                        <p>
                            <span class="number">{{ $donasi }}</span>
                            <span class="title">Donasi</span>
                        </p>
                    </div>
                    <div class="metric">
                        <span class="icon"><i class="fa fa-download"></i></span>
                        <p>
                            <span class="number">Rp. {{ number_format($pemasukan) }}</span>
                            <span class="title">Pemasukan</span>
                        </p>
                    </div>
                    <div class="metric">
                        <span class="icon"><i class="fa fa-upload"></i></span>
                        <p>
                            <span class="number">Rp. {{ number_format($pengeluaran) }}</span>
                            <span class="title">Pengeluaran</span>
                        </p>
                    </div>
                    <div class="metric">
                        <span class="icon"><i class="fa fa-credit-card"></i></span>
                        <p>
                            <span class="number">Rp. {{ number_format($saldo->saldo) }}</span>
                            <span class="title">Saldo Terakhir</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div id="rekapanChart" class="ct-chart"></div>
            </div>
        </div>
    </div>
</div>
<!-- END OVERVIEW -->

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="row">
        @foreach ($data as $dt )
        <div class="col-md-4">
            <!-- PANEL NO CONTROLS -->
            <div class="panel">
                <div class="panel-heading">
                    {{-- <h3 class="panel-title">Panel No Right Controls</h3> --}}
                </div>
                <div class="panel-body">
                    <div class="logo text-center"><img src="{{ url('foto/' . $dt->foto) }}" width="100px" alt="Klorofil Logo"></div>
                </div>
                <h3 class="text-center">{{ $dt->title }}</h3>
                <br>
                <button type="button" class="btn btn-default btn-block" style="border: none"
                data-toggle="modal"
                data-target="#data{{ $dt->id }}"><h5>Baca Selengkapnya</h5></button>
            </div>
            <!-- END PANEL NO CONTROLS -->
        </div>
        @endforeach
        </div>


    </div>
<!-- END MAIN CONTENT -->
@foreach ($data as $dt )
<div class="container">
    <div class="modal fade" id="data{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data">{{ $dt->title }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    {{ $dt->deskripsi }}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach
<!--====== Grafik Chart======-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('headline-chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekapitulasi Pemasukan & Pengeluaran'
    },
    xAxis: {
        categories: {!! json_encode($bulan) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rekapitulasi Pemasukan & Pengeluaran'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>Rp. {point.y:.f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Pemasukan',
        data: {!! json_encode($masuk) !!}

    }, {
        name: 'Pengeluaran',
        data: {!! json_encode($keluar) !!}
    }]
});
</script>
@endsection
