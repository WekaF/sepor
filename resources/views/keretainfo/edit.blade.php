
@extends('layouts.app')

@section('content')
{!! Form::model($data, ['route' => ['keretainfo.update', $data->id], 'method' => 'patch']) !!} 
<form action="{{ route('keretainfo.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Data baru</h4>
                      
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">No KA</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="no_ka" value="{{$data->no_ka}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Kereta</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nama_kereta" value="{{$data->nama_kereta}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jam</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"  data-autoclose="true" data-provide="clockpicker" name="jam" value="{{$data->jam}}" required>
                            </div>


                            <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Jalur</label>
                            <div class="col-md-12">
                                 <select name="id_kategori" class="form-control" value="{{$data->jalur}}">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="1">Jalur 1</option>
                                    <option value="2">Jalur 2</option>
                                    <option value="3">Jalur 3</option>
                                  </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Progres Stasiun</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="progres_stasiun" value="{{$data->progres_stasiun}}"required>
                            </div>

                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jenis Kereta</label>
                            <div class="col-md-6">
                            {!! Form::select('jenis_id' ,$jenis ,null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Jalur</label>
                            <div class="col-md-12">
                                 <select name="keterangan" class="form-control" >
                                    <option value="">-- Pilih keterangan --</option>
                                    <option value="Normal">Normal </option>
                                    <option value="Bermasalah">Bermasalah </option>
                                    
                                  </select>
                            </div>
                        </div>

                        </div>
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        
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