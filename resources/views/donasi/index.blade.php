@extends('layouts.main')
@section('title','Donasi')
@section('container')
<!-- MAIN CONTENT -->
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%">Donasi</h4>
            <p class="demo-button">
                    <button type="button"
                    class="btn btn-primary btn-toastr pull-right"
                    data-toggle="modal"
                    data-target="#modal" style="margin-right: 3%">Donasi</button>
            </p>
            <!-- Modal Tambah Data-->
            <div class="container">
                <div class="modal fade" id="modal" aria-labelledby="modalLabel" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="data">{{ $title }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('donasi.post') }}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" type="text" id="nama" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_rek" class="col-form-label">Jenis Rekening</label>
                                    <input type="text" class="form-control" type="text" id="jenis_rek" name="jenis_rek" value="{{ old('jenis_rek') }}">
                                </div>
                                <input type="hidden" name="status" value="Diverifikasi">
                                <div class="form-group">
                                    <label for="no.rek" class="col-form-label">No.Rekening</label>
                                    <input class="form-control" type="text" id="no_rek" name="no_rek" value="{{ old('no_rek') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="col-form-label">Nominal</label>
                                    <input class="form-control" type="number" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                                </div>
                                <input type="hidden" name="tanggal" value="{{ $now }}">
                                {{-- <div class="form-group">
                                    <label for="tanggal" class="col-form-label">Tanggal</label>
                                    <input class="form-control" data-toggle="datepicker" type="text" id="tanggal" name="tanggal">
                                </div> --}}
                                <div class="form-group">
                                    <label class="col-form-label" for="foto">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto">
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
            <br>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>jenis Rekening</th>
                            <th>No.Rekening</th>
                            <th>Nominal</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item as $i => $dt)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->jenis_rek }}</td>
                            <td>{{ $dt->no_rek }}</td>
                            <td>Rp. {{ number_format($dt->jumlah) }}</td>
                            <td>{{ date('l d M Y H:i:s',strtotime($dt->tanggal)) }}</td>
                            <td><img src="{{ url('foto/' . $dt->foto) }}"
                                width="80px">
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <button class="badge bg-warning" style="border: 0ch"
                                        data-toggle="modal"
                                        data-target="#modalEdit{{ $dt->id }}">
                                        <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-1">
                                        <form action="{{ route('donasi.delete', $dt->id) }}" method="post">
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
            <!-- END CONTEXTUAL -->
        </div>
    </div>
</div>
<!-- MODAL Update Data -->
@foreach ($item as $i =>$dt)
    <div class="container">
        <div class="modal fade" id="modalEdit{{ $dt->id }}" aria-labelledby="modalLabel" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="data">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('donasi.update',$dt->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" type="text" id="nama" name="nama" value="{{ $dt->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_rek" class="col-form-label">Jenis Rekening</label>
                            <input type="text" class="form-control" type="text" id="jenis_rek" name="jenis_rek" value="{{ $dt->jenis_rek }}">
                            {{-- <select name="jenis_rek" id="jenis_rek" class="form-control">
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BCA">BCA</option>
                                <option value="Mandiri">Mandiri</option>
                            </select> --}}
                        </div>
                        <div class="form-group">
                            <label for="no.rek" class="col-form-label">No.Rekening</label>
                            <input class="form-control" type="text" id="no_rek" name="no_rek" value="{{ $dt->no_rek }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-form-label">Nominal</label>
                            <input class="form-control" type="number" id="jumlah" name="jumlah" value="{{ $dt->jumlah }}">
                        </div>
                        <input type="hidden" name="tanggal" value="{{ $dt->tanggal }}">
                        {{-- <div class="form-group">
                            <label for="tanggal" class="col-form-label">Tanggal</label>
                            <input class="form-control" data-toggle="datepicker" type="text" id="tanggal" name="tanggal">
                        </div> --}}
                        <div class="form-group">
                            <label class="col-form-label" for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
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
@endforeach
@endsection
