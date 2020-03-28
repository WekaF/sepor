@section('title','Edit Destinasi')
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
                    <div class="form-group{{ $errors->has('nama_subkat') ? ' has-error' : '' }}">
                        <label for="nama_subkat">Nama Destinasi</label>
                        <input name='nama_subkategori' type="text" class="form-control" placeholder="Nama Destinasi" value="{{ $data->nama_subkategori }}">
                      </div>
                      <div class="form-group{{ $errors->has('Deskrip') ? ' has-error' : '' }}">
                        <label for="Deskrip">Deskriptif</label>
                        <input name='desktipsi' type="text" class="form-control" placeholder="Keterangan" value="{{ $data->deskripsi }}">
                      </div>
                      
                      <div class="form-group {{ $errors->has('long') ? ' has-error' : '' }}">
                        <label for="long">Long</label>
                        <input name='long' type="text" class="form-control" placeholder="long" value="{{ $data->long }}">
                      </div>
                      
                      <div class="form-group {{ $errors->has('long') ? ' has-error' : '' }}" >
                        <label for="lat">Lat</label>
                        <input name='lat' type="text" class="form-control" placeholder="Lat" value="{{ $data->lat }}">
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