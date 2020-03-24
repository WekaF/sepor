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
                    
                    <form class="forms-sample" method="POST" action="{{ route('trayek.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="trayek_name">Nama Angkutan</label>
                        <input name='trayek_name' type="text" class="form-control" placeholder="nama Angkutan">
                       
                      </div>
                      <div class="form-group">
                        <label for="trayek_price">Harga</label>
                        <input name='trayek_price' type="text" class="form-control" placeholder="harga">
                      </div>
                     
                      <div class="form-group">
                        <label for="trayek_slug">slug</label>
                        <input name='trayek_slug' type="text" class="form-control" placeholder="slug">
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea name="trayek_desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>

                      <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar" multipart>
                            </div>
                        </div>

                    
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection