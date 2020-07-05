
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
@section('title','Edit Info Kereta')
@extends('layouts.app')

@section('content')
<form action="{{ route('keretainfo.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
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
                                <input id="isbn" type="text" class="form-control" name="no_ka" value="{{$data->no_ka}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Nama Kereta</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nama_kereta" value="{{$data->nama_kereta}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jam</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"  data-autoclose="true" data-provide="clockpicker" name="jam" value="{{$data->jam}}" required>
                            </div>


                         

                        
                        
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Kelas Kereta</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="kelaska" value="{{$data->kelaska}}"required>
                            </div>

                            <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Relasi</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="relasi" value="{{$data->relasi}}"required>
                            </div>

                             <div class="form-group">

                                 <label class="col-md-4 control-label">Jalur</label>
                                 <div class="col-md-6">

                                 <select name="jalur_id" id="" class="form-control">
                                   @foreach($jalur as $item)
                                   <option value="{{$item->id}}">{{$item->nama_jalur}}</option>
                                   @endforeach
                                 </select>

                                 </div>

                              </div>

                            <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Stasiun Pemberhentian</label>
                            <div class="col-md-6">
                            <img src="{{ url('images/keretainfo/'.$data->progres_stasiun) }}" style="width:400px; height:300px">
                                <input required type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar1" >
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Jenis Kereta</label>
                            <div class="col-md-6">
                                        <select name="jenis_id" class="form-control">
                                                @foreach($jenis as $data)
                                                <option value="{{$data->id}}">{{$data->jenis_kereta}}</option>
                                                @endforeach
                                        </select>
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Keterangan</label>
                            <div class="col-md-12">
                                 <select name="keterangan" class="form-control" >
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
@endsection