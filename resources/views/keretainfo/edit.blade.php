
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>

                    {!! Form::model($data, ['route' => ['keretainfo.update', $data->id], 'method' => 'patch']) !!}    
                    <form class="forms-sample" method="POST" action="{{ route('keretainfo.update', $data->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="no_ka">No KA</label>
                        <input name='no_ka' type="text" class="form-control" placeholder="no KA" value="{{$data->nama_kereta}}">
                      </div>
                    <div class="form-group">
                        <label for="nama_kereta">Nama Kereta</label>
                        <input name='nama_kereta' type="text" class="form-control" placeholder="Nama Kereta" value="{{$data->nama_kereta}}">
                      </div>
                      <div class="form-group">
                        <label for="jam">Jam</label>
                        <input name='jam' type="time" class="form-control" data-provide="timepicker" placeholder="Jam" value="{{$data->jam}}">
                      </div>
                      
                      <div class="form-group{{ $errors->has('jalur') ? ' has-error' : '' }}">
                            <label for="jalur">Jalur</label>
                            
                            <select class="form-control" name="jalur" required="" value="{{$data->jalur}}">
                                <option value=""></option>
                                <option value="1">Jalur 1</option>
                                <option value="2">Jalur 2</option>
                                <option value="3">Jalur 3</option>
                            </select>
                           
                        </div>
                        
                        <div class="form-group">
                        <label for="progres_stasiun">Progres Stasiun</label>
                        <input name='progres_stasiun' type="text" class="form-control" placeholder="Progres Stasiun" value="{{$data->progres_stasiun}}">
                      </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-form-label">Jenis Kereta</label>
                            <div class="col-sm-9">

                            {!! Form::select('jenis_id' ,$jenis ,null,['class'=>'form-control']) !!}
                            
                            </div>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label for="Keterangan">Keterangan</label>
                            
                            <select class="form-control" name="keterangan" required="">
                                <option value=""></option>
                                <option value="Normal">Normal</option>
                                <option value="Bermasalah">Bermasalah</option>
                               
                            </select>
                           
                        </div>
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <a href="{{route('keretainfo.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
@endsection