
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>

                    {!! Form::model($data, ['route' => ['subkategori.update', $data->id], 'method' => 'patch']) !!}    
                    <form class="forms-sample" method="POST" action="{{ route('subkategori.update', $data->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
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

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-form-label">Kategori</label>
                            <div class="col-sm-9">
                            {!! Form::select('kategori_id' ,$kategori,null,['class'=>'form-control']) !!}
                            </div>
                          </div>
                        </div>

                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <a href="{{route('subkategori.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
@endsection