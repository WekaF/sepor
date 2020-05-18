@section('js')

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
<<<<<<< HEAD
@section('title','Create Stasiun Info')   
=======
@section('title','Edit Stasiun Info')   
>>>>>>> fixing

@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="col-md-6 grid-margin stretch-card">
=======
<div class="col-md-12 grid-margin stretch-card">
>>>>>>> fixing
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
<<<<<<< HEAD
                    <form class="forms-sample" method="POST" action="{{ route('stasiuninfo.update', '$data->id')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                     

                      
                      <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Denah Stasiun</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/denah/'.$data->denah_stasiun) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Prosedur Evakuasi</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/denah/'.$data->prosedur_evakuasi) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar2">
=======
                    <form class="forms-sample" method="POST" action="{{ route('stasiuninfo.update', $data->id)}}" enctype="multipart/form-data">    
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Denah</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_denah" value="{{$data->nama_denah}}" required>
>>>>>>> fixing
                            </div>
                        </div>

                        <div class="form-group">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 control-label">Peta Jaringan Kereta Api</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/denah/'.$data->peta_jaringan) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Denah Evakuasi</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/denah/'.$data->denah_evakuasi) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar4">
=======
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img style="width:400px; height:300px" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
>>>>>>> fixing
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Stand Komersil</label>
<<<<<<< HEAD
                            <div class="col-md-6">
                              <textarea name="stand_komersil" class="form-control" id="exampleTextarea1" rows="4">{{$data->stand_komersil}}</textarea>
=======
                            <div class="col-md-8">
                              <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4">{{$data->deskripsi}}</textarea>
>>>>>>> fixing
                              </div>
                            </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection