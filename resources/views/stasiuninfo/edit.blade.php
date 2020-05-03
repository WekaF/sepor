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
@section('title','Create Stasiun Info')   

@extends('layouts.app')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
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
                            </div>
                        </div>

                        <div class="form-group">
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
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Stand Komersil</label>
                            <div class="col-md-6">
                              <textarea name="stand_komersil" class="form-control" id="exampleTextarea1" rows="4">{{$data->stand_komersil}}</textarea>
                              </div>
                            </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection