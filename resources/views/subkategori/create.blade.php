@section('js')

<script type="text/javascript">
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#showof').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
 
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
@stop
@section('css')
<style type="text/css">


    #image_preview{

      border: 1px solid black;

      padding: 10px;

    }

    #image_preview img{

      width: 150px;

      padding: 5px;

    }

  </style>
@stop
@section('title','Create Destinasi')
@extends('layouts.app')
@section('content')

<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
                    <form class="forms-sample" method="POST" action="{{ route('subkategori.store')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="nama_subkat" class="col-md-4 control-label">Nama Destinasi</label>
                        <div class="col-md-6">
                        <input name='nama_subkategori' type="text" class="form-control" placeholder="Nama Destinasi" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                              <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                              </div>
                            </div>
                      
                      <div class="form-group">
                        <label for="long" class="col-md-4 control-label">Long</label>
                        <div class="col-md-6">
                        <input name='long' type="text" class="form-control" placeholder="long" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="lat" class="col-md-4 control-label">Lat</label>
                        <div class="col-md-6">
                        <input name='lat' type="text" class="form-control" placeholder="Lat" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="no" class="col-md-4 control-label">Kontak</label>
                        <div class="col-md-6">
                        <input name='no_telp' type="text" class="form-control" placeholder="Kontak" required>
                        </div>
                      </div>

                        <div class="form-group">
                         
                            <label class="col-md-4 control-label" class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-6">

                            <select name="kategori_id" id="" class="form-control">
                              @foreach($kategori as $item)
                              <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                              @endforeach
                            </select>
                            
                            </div>
                        
                        </div>
                      
                        <!-- <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar 1</label>
                            <div class="col-md-6">
                                <img width="400" height="300" />
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar 2</label>
                            <div class="col-md-6">
                                <img width="400" height="300" />
                                <input  type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar 3</label>
                            <div class="col-md-6">
                                <img width="400" height="300" />
                                <input  type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar3">
                            </div>
                        </div> -->


                        <div class="form-group">
                            <label id="gambar" for="gambar" class="col-md-4 control-label gambar">Gambar</label>
                            <div class="col-md-8">                                                       
                            <div class="input-group control-group increment" >
          <input type="file" name="gambar[]" class="form-control" id="showof">
         
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
            
          </div>
          
        </div>


        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="gambar[]" class="form-control" >
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
                  </div>         
                      </div>
                      

                        

                      <button type="submit" class="btn btn-info mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection
