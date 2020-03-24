@section('js')

<script type="text/javascript">
$("#gambar").change(function(){

$('#image_preview').html("");

var total_file=document.getElementById("uploadFile").files.length;

for(var i=0;i<total_file;i++)

{

 $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

}

});



$('form').ajaxForm(function() 

{

alert("Uploaded SuccessFully");

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
                        <input name='nama_subkat' type="text" class="form-control" placeholder="Nama Destinasi">
                      </div>
                      <div class="form-group">
                        <label for="Deskrip">Deskriptif</label>
                        <input name='Deskrip' type="text" class="form-control" placeholder="Keterangan">
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
                            <label for="gambar" class="col-md-4 control-label gambar">Gambar</label>
                            <div class="col-md-6">                                                       
                            <input type="file" class="uploads form-control gambar" style="margin-top: 20px;" name="gambar[]" multiple/>
                                <div id="image_preview"></div>   
                            </div>
                             
                        </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                   
                  </div>
                </div>
              </div>
              
@endsection
