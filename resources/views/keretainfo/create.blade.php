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
@section('title','Create Info Kereta')
@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'keretainfo.store']) !!}

              <form method="POST" action="{{ route('keretainfo.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Data baru</h4>
                      
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">No KA</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="no_ka" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Kereta</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nama_kereta" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jam</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"  data-autoclose="true" data-provide="clockpicker" name="jam" required>
                            </div>


                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jalur</label>
                            <div class="col-md-6">
                            {!! Form::select('jalur_id' ,$jalur,null,['class'=>'form-control']) !!}
                            </div>
                           </div>

                           

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Kelas Kereta </label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="kelaska" required>
                            </div>
                            
                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Relasi</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="relasi" required>
                            </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Progres Stasiun</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="progres_stasiun" required>
                            </div>

                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jenis Kereta</label>
                            <div class="col-md-6">
                            {!! Form::select('jenis_id' ,$jenis ,null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Jalur</label>
                            <div class="col-md-12">
                                 <select name="keterangan" class="form-control">
                                    <option value="">-- Pilih keterangan --</option>
                                    <option value="Normal">Normal </option>
                                    <option value="Bermasalah">Bermasalah </option>
                                    
                                  </select>
                            </div>
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
</div>
</div>
</form>              
{!! Form::close() !!}
@endsection