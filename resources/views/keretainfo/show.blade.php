@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@section('title','Detail Jalur')
@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail <b>{{$data->no_ka}}</b> </h4>
                      <form class="forms-sample">

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar_jalur) src="{{ asset('images/jalur/'.$data->gambar_jalur) }}" @endif />
                            </div>

                            <br>
                            <label for="judul" class="col-md-4 control-label">Progres Stasiun</label>
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->progres_stasiun) src="{{ asset('images/jalur/'.$data->progres_stasiun) }}" @endif />
                            </div>
                            
                        </div>

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Nama Kereta Api</label>
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="nama_kereta" value="{{ $data->nama_kereta }}" readonly="">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">Jam Keberangkatan</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="jam" value="{{ $data->jam }}" readonly>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">Kelas Kereta</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="kelaska" value="{{ $data->kelaska }}" readonly>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">Relasi</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="jam" value="{{ $data->relasi }}" readonly>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">Keterangan</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="jam" value="{{ $data->keterangan }}" readonly>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <a href="{{route('keretainfo.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection