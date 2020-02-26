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

{!! Form::open(['route' => 'keretainfo.store']) !!}

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('keretainfo.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="nama_kereta">Nama Kereta</label>
                        <input name='nama_kereta' type="text" class="form-control" placeholder="nama Kereta">
                      </div>
                      <div class="form-group">
                        <label for="jam">Jam</label>
                        <input name='jam' type="time" class="form-control" data-provide="timepicker" placeholder="Jam">
                      </div>
                      
                      <div class="form-group{{ $errors->has('jalur') ? ' has-error' : '' }}">
                            <label for="jalur">Jalur</label>
                            
                            <select class="form-control" name="jalur" required="">
                                <option value=""></option>
                                <option value="1">Jalur 1</option>
                                <option value="2">Jalur 2</option>
                                <option value="3">Jalur 3</option>
                            </select>
                           
                        </div>
                        
                        <div class="form-group">
                        <label for="progres_stasiun">Progres Stasiun</label>
                        <input name='progres_stasiun' type="text" class="form-control" placeholder="Progres Stasiun">
                      </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-form-label">Jenis Kereta</label>
                            <div class="col-sm-9">

                            {!! Form::select('jenis_id' ,$jenis ,null,['class'=>'form-control']) !!}
                            
                            </div>
                          </div>
                        </div>


                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection