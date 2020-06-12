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
@section('title','Create Angkutan')
@extends('layouts.app')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('trayek.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="trayek_name">Nama Angkutan</label>
                        <div class="col-md-6">
                        <input name='trayek_name' type="text" class="form-control" placeholder="nama Angkutan" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="trayek_price">Harga</label>
                        <div class="col-md-6">
                        <input name='trayek_price' type="text" class="form-control" placeholder="harga" required>
                        </div>
                       </div>


                      <div class="form-group">
                        <label for="exampleTextarea1">Deskripsi</label>
                        <div class="col-md-6">
                        <textarea name="trayek_desc" class="form-control" id="exampleTextarea1" rows="4" required></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                            <label id="gambar" for="gambar" class="col-md-4 control-label gambar">Gambar</label>
                            <div class="col-md-8">                                                       
                            <div class="input-group control-group increment" >
                               <input type="file" name="gambar[]" class="form-control" multiple>
                          <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                          </div>
                        </div>
                            <div class="clone hide">
                              <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="gambar[]" class="form-control" multiple>
                                <div class="input-group-btn"> 
                                  <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                              </div>
                            </div>
                          </div>  

                    
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection