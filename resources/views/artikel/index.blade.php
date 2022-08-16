@extends('layouts.main')
@section('title','Artikel')
@section('container')
<!-- MAIN CONTENT -->
<div class="main-content">
    <div id="toastr-demo" class="panel">
        <div class="panel-body">
            <!-- CONTEXTUAL -->
            <h4 style="margin-left: 3%">{{ $title }}</h4>
            <p class="demo-button">
                    <button type="button"
                    class="btn btn-primary btn-toastr pull-right"
                    data-toggle="modal"
                    data-target="#modal" style="margin-right: 3%">Tambah</button>
            </p>
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
                            <form action="{{ route('artikel.post') }}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                    <input class="form-control" type="hidden" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
                                    <textarea class="form-control" rows="5" name="deskripsi" id="deskripsi"></textarea>
                                </div>
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
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i => $dt)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $dt->title }}</td>
                            <td>{{ $dt->deskripsi }}</td>
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
                                        <form action="{{ route('artikel.delete', $dt->id) }}" method="post">
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
<!-- END MAIN CONTENT -->
@foreach ($data as $i =>$dt)
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
                    <form action="{{ route('artikel.update',$dt->id) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Title</label>
                            <input type="text" class="form-control" type="text" id="title" name="title" value="{{ $dt->title }}">
                        </div>
                        <div class="form-group">
                            <label for="no.rek" class="col-form-label">Deskripsi</label>
                            <input class="form-control" type="text" id="deskripsi" name="deskripsi" value="{{ $dt->deskripsi }}">
                            {{-- <textarea class="form-control" rows="4" name="deskripsi" id="deskripsi" value="{{ $dt->deskripsi }}"></textarea> --}}
                        </div>
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
