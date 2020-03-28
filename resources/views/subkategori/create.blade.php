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

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
                    <form class="forms-sample" method="POST" action="{{ route('subkategori.store')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="nama_subkat">Nama Destinasi</label>
                        <input name='nama_subkategori' type="text" class="form-control" placeholder="Nama Destinasi">
                      </div>
                      <div class="form-group">
                        <label for="Deskrip">Deskriptif</label>
                        <input name='deskripsi' type="text" class="form-control" placeholder="Keterangan">
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
                        <label for="no">No Telpon</label>
                        <input name='no_telp' type="text" class="form-control" placeholder="no_telp">
                      </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-form-label">Kategori</label>
                            <div class="col-sm-9">

                            <select name="kategori_id" id="">
                              @foreach($kategori as $item)
                              <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                              @endforeach
                            </select>
                            
                            </div>
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

                      
                      

                        

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection
