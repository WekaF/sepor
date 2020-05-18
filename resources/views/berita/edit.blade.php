<<<<<<< HEAD

=======
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
>>>>>>> fixing
@section('title','Edit Berita')
@extends('layouts.app')

@section('content')
<form action="{{ route('berita.update', $data->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Berita <b>{{$data->Judul}}</b> </h4>
                      <form class="forms-sample">
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Nama Kategori</label>
                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="judul" type="text" class="form-control" name="nama_kategori" value="{{ $data->judul }}" required>
=======
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $data->judul }}" required>
>>>>>>> fixing
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Isi Berita</label>
                        <div class="col-md-6">
<<<<<<< HEAD
                        <textarea name="isi" class="form-control" id="exampleTextarea1" rows="10" required>{{$data->judul}}</textarea>
=======
                        <textarea name="isi" class="form-control" id="exampleTextarea1" rows="10" required>{{$data->isi}}</textarea>
>>>>>>> fixing
                        </div>
                        
                      </div>

                      <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/berita/'.$data->berita) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar" multipart>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                        <a href="{{route('kategori.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection