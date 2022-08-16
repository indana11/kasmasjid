@extends('layouts.main')
@section('title','Pemasukan')
@section('container')
<!-- MAIN CONTENT -->
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%">Pemasukan Donasi</h4>
            <br>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="nav nav-tabs customtab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tabpanel1"
                                                    aria-selected="false">Verifikasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#home2" role="tabpanel2"
                                                    aria-selected="false">Ditolak</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!--Menunggu Verifikasi-->
                                            <div class="tab-pane fade" id="home1" role="tabpanel">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Donatur</th>
                                                                    <th>Email Donatur</th>
                                                                    <th>Alamat Donatur</th>
                                                                    <th>No Hp Donatur</th>
                                                                    <th>Tanggal Donasi</th>
                                                                    <th>Jumlah Donasi</th>
                                                                    <th>No Rekening</th>
                                                                    <th>Jenis Rekening</th>
                                                                    <th>Foto</th>
                                                                    <th>Validasi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($validasi as $i => $row)
                                                                    <tr>
                                                                        <td>{{ ++$i }}</td>
                                                                        <td>{{ $row->user->name }}</td>
                                                                        <td>{{ $row->user->email }}</td>
                                                                        <td>{{ $row->user->alamat }}</td>
                                                                        <td>{{ $row->user->no_hp }}</td>
                                                                        <td>{{ date('l, d F Y', strtotime($row->tanggal)) }}</td>
                                                                        <td>Rp. {{ number_format($row->jumlah) }}</td>
                                                                        <td>{{ $row->no_rek }}</td>
                                                                        <td>{{ $row->jenis_rek }}</td>
                                                                        <td><img src="{{ url('foto/' . $row->foto) }}"
                                                                                width="50px">
                                                                        </td>
                                                                        <td><form action="{{ route('donasi.terima', $row->id) }}" method="POST">
                                                                            @csrf
                                                                            <button class="btn btn-success" style="border: 0ch"><i class="fa fa-check-circle"></i></button>
                                                                        </form></td>
                                                                        <td style="padding-left: 0px;"><form action="{{ route('donasi.tolak', $row->id) }}" method="POST">
                                                                            @csrf
                                                                            <button class="btn btn-danger" style="border: 0ch"><i class="fa fa-close"></i></button>
                                                                        </form></td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            </div>
                                            <!--Ditolak-->
                                            <div class="tab-pane fade" id="home2" role="tabpanel2">
                                                    <div class="table-responsive">
                                                            <table class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama Donatur</th>
                                                                        <th>Email Donatur</th>
                                                                        <th>Alamat Donatur</th>
                                                                        <th>No Hp Donatur</th>
                                                                        <th>Tanggal Donasi</th>
                                                                        <th>Jumlah Donasi</th>
                                                                        <th>No Rekening</th>
                                                                        <th>Jenis Rekening</th>
                                                                        <th>Foto</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($ditolak as $i => $row)
                                                                        <tr>
                                                                            <td>{{ ++$i }}</td>
                                                                            <td>{{ $row->user->name }}</td>
                                                                            <td>{{ $row->user->email }}</td>
                                                                            <td>{{ $row->user->alamat }}</td>
                                                                            <td>{{ $row->user->no_hp }}</td>
                                                                            <td>{{ date('l, d F Y', strtotime($row->tanggal)) }}</td>
                                                                            <td>{{ $row->jumlah_donasi }}</td>
                                                                            <td>{{ $row->no_rek }}</td>
                                                                            <td>{{ $row->jenis_rek }}</td>
                                                                            <td><img src="{{ url('foto/' . $row->foto) }}"
                                                                                    width="50px">
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                            </div>
                                        </div>
                                        <h4>Donasi Diterima</h4>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi</th>
                                                    <th>Nominal</th>
                                                    <th>Bukti</th>
                                                    {{-- <th>Aksi</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pemasukan_dn as $i => $dn )
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ date('l d M Y H:i:s',strtotime($dn->tanggal)) }}</td>
                                                    <td>{{ $dn->deskripsi }}</td>
                                                    <td>Rp. {{ number_format($dn->pemasukan) }}</td>
                                                    <td><img src="{{ url('foto/' . $dn->foto) }}"
                                                        width="80px">
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTEXTUAL -->
        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%">Pemasukan Keuangan</h4>
            <p class="demo-button">
                <button type="button"
                class="btn btn-primary btn-toastr pull-right"
                data-toggle="modal"
                data-target="#data" style="margin-right: 3%">Tambah Data</button>
            </p><br>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keuangan as $item => $row )
                        <tr>
                            <td>{{ ++$item }}</td>
                            <td>{{ date('l d M Y H:i:s',strtotime($row->tanggal)) }}</td>
                            <td>{{ $row->deskripsi }}</td>
                            <td>Rp. {{ number_format($row->pemasukan) }}</td>
                            <td><img src="{{ url('foto/' . $row->foto) }}"
                                width="80px">
                            </td>
                            <td>
                                <div class="row">

                                    <div class="col-sm-1">
                                        <form action="{{ route('pemasukan.destroy',$row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="submit badge bg-danger" style="border: 0ch"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ========Modal Tambah Pemasukan ==========-->
<div class="container">
    <div class="modal fade" id="data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="data">Pemasukan Keuangan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pemasukan.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tanggal" value="{{ $now }}">
                    <div class="form-group">
                      <label for="deskripsi" class="col-form-label">Deskripsi</label>
                      <input class="form-control" type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
                    </div>
                    <div class="form-group">
                        <label for="pemasukan" class="col-form-label">Nominal</label>
                        <input class="form-control" type="text" id="pemasukan" name="pemasukan" value="{{ old('pemasukan') }}">
                    </div>
                    <input type="hidden" name="status" value="pemasukan">
                    <div class="form-group">
                        <label class="col-form-label" for="foto">Nota</label>
                        <input type="file" class="form-control" id="foto" name="foto" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                      </div>
                  </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

