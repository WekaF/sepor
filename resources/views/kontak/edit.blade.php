
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('kategori.update', $data->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                      <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input name='nama_kategori' type="text" class="form-control" placeholder="Nama Kategori" value="{{ $data->kode_angkot }}">
                      </div>
                     

                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <a href="{{route('kategori.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
@endsection