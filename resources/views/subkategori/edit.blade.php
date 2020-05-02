@section('js')

<script type="text/javascript">
  $("#gambar").change(function(){
  $('#image_preview').html("");
  var total_file=document.getElementById("uploadFile").files.length;
  for(var i=0;i<total_file;i++){
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
  }
});
$('form').ajaxForm(function() 
{
alert("Uploaded SuccessFully");
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

@section('title','Edit Destinasi')
@extends('layouts.app')

@section('content')

<div class="col-md-13 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>


                    <form class="forms-sample" method="POST" action="{{ route('subkategori.update', $data->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="nama_subkat" class="col-md-4 control-label">Nama Destinasi</label>
                        <div class="col-md-6">
                        <input name='nama_subkategori' type="text" class="form-control" placeholder="Nama Destinasi" value="{{$data->nama_subkategori}}" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1" class="col-md-4 control-label">Deskripsi</label>
                        <div class="col-md-6">
                        <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4">{{$data->deskripsi}}</textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="long" class="col-md-4 control-label">Long</label>
                        <div class="col-md-6">
                        <input name='long' type="text" class="form-control" placeholder="long" value="{{$data->long}}" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="lat" class="col-md-4 control-label">Lat</label>
                        <div class="col-md-6">
                        <input name='lat' type="text" class="form-control" placeholder="Lat" value="{{$data->lat}}" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="no" class="col-md-4 control-label">Kontak</label>
                        <div class="col-md-6">
                        <input name='no_telp' type="text" class="form-control" placeholder="Kontak" value="{{$data->no_telp}}" required>
                        </div>
                      </div>

                        <div class="form-group">
                         
                            <label class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-6">

                            <select name="kategori_id" id="" class="form-control">
                              @foreach($kategori as $item)
                              <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                              @endforeach
                            </select>
                            
                            </div>
                        
                        </div>
                      

                      

                        <div class="form-group">
                            <label id="gambar" for="gambar" class="col-md-4 control-label gambar">Gambar</label>
                            <div class="col-md-8">                                                       
                            <div class="input-group control-group increment" >
          <input type="file" name="gambar[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="gambar[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
                  </div>         
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <a href="{{route('subkategori.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
             
@endsection