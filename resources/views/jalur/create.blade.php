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
@section('title','Create Jalur')   

@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
                    <form class="forms-sample" method="POST" action="{{ route('jalur.store')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                     
                    <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Jalur</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_jalur" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img style="width:400px; height:300px" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                              <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="6"></textarea>
                              </div>
                        </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection