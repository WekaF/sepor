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

@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('mall.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="nama_mall">Nama Mall</label>
                        <input name='nama_mall' type="text" class="form-control" placeholder="nama univ">
                      </div>
                      <div class="form-group">
                        <label for="deskrip">Deskriptif</label>
                        <input name='deskrip' type="text" class="form-control" placeholder="Keterangan">
                      </div>
                      
                      <div class="form-group">
                        <label for="long">Long</label>
                        <input name='long' type="text" class="form-control" placeholder="long">
                      </div>
                      
                      <div class="form-group">
                        <label for="lat">Lat</label>
                        <input name='lat' type="text" class="form-control" placeholder="Lat">
                      </div>

                      
                      <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection