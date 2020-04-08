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
                    
                    
                    <form class="forms-sample" method="POST" action="{{ route('stasiuninfo.store')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                     

                      
                      <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Denah Stasiun</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Denah Evakuasi</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Peta Jaringan Stasiun</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar3">
                            </div>
                        </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection