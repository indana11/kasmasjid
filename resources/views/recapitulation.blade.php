@extends('layouts.main')
@section('title','Rekapitulasi')
@section('container')
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%"></h4>
            <br>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            {{-- <th>Tahun</th> --}}
                            <th>Bulan</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                            <th>Saldo</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekape as $i =>$data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                {{-- <td>{{ date('Y',strtotime($data->tanggal)) }}</td> --}}
                                {{-- <td>{{ date('F',strtotime($data->tanggal)) }}</td> --}}
                                <td>{{ $data->month }}</td>
                                <td>Rp. {{ number_format($data->kas_masuk) }}</td>
                                @if($data->kas_keluar == 0)
                                  <td>-</td>
                                  @else
                                  <td>Rp. {{ number_format($data->kas_keluar) }}</td>
                                @endif
                                <td>Rp. {{ number_format($data->total_saldo) }}</td>
                                {{-- <td><button class="btn btn-link" data-toggle="modal" data-target="#rekapShow"></button></td> --}}
                                {{-- <td>{{ $data->deskripsi }}</td> --}}
                                {{-- <td>Rp. {{ number_format($data->pemasukan) }}</td>
                                <td>Rp. {{ number_format($data->pengeluaran) }}</td> --}}
                                {{-- <td>Rp. {{ number_format($data->saldo) }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th>Total Saldo Terakhir = </th>
                            <th>Rp. {{ number_format($last_saldo->saldo) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- END CONTEXTUAL -->
        </div>
    </div>
</div>
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%">Rekapitulasi Bulanan</h4>
            <div class="row">
                    <form action="/recapitulation" method="GET">
                    <div class="col-md-5">
                        <input type="month" name="bulan" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                @if(Request::input('bulan'))
                <form action="{{ route('cetakpdf') }}" method="GET">
                    <input type="month" name="bulan_id" value="{{ $date }}" hidden>
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary">Cetak PDF</button>
                        </div>
                    </form>
                    @endif
                </div>
            <br>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            {{-- <th>Tahun</th> --}}
                            <th>Bulan</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                            <th>Diskripsi</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Request::input('bulan'))
                        @foreach ($show as $i =>$data)

                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ date('d F Y H:i:s',strtotime($data->tanggal)) }}</td>
                                @if($data->pemasukan == 0)
                                <td>-</td>
                                @else
                                <td>Rp. {{ number_format($data->pemasukan) }}</td>
                                @endif
                                @if($data->pengeluaran == 0)
                                <td>-</td>
                                @else
                                <td>Rp. {{ number_format($data->pengeluaran) }}</td>
                                @endif
                                <td>{{ $data->deskripsi }}</td>
                                <td>Rp. {{ number_format($data->saldo) }}</td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- END CONTEXTUAL -->
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection

