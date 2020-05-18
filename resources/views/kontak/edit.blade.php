
@section('title','Edit Kontak')
@extends('layouts.app')

@section('content')

<form action="{{ route('kontak.update', $data->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Kategori <b>{{$data->jenis}}</b> </h4>
                      <form class="forms-sample">
                        
                      <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">jenis</label>
                            <div class="col-md-6">
                                 <select name="jenis" class="form-control" value="{{$data->jenis}}">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="darurat">Darurat</option>
                                    <option value="pelanggan">Pelanggan</option>
                                  </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Kontak</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nama" value="{{$data->nama}}"required>
                            </div>
                        
                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nomer Kontak</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nomor" value="{{$data->nomor}}"required>
                            </div>
                            </div>
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                        <a href="{{route('kontak.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</form>
@endsection