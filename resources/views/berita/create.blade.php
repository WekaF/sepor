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
@section('title','Create Berita')
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Berita</h4>
                      
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Judul</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="judul" required>
                            </div>
                        </div>

                       <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Isi Berita</label>
                        <div class="col-md-6">
                        <textarea name="isi" class="form-control" id="exampleTextarea1" rows="10" required></textarea>
                        </div>
                        
                      </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img width="400" height="300" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar" multipart>
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
</form>              
@endsection