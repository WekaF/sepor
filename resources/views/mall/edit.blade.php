
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('angkot.update', $data->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                      <div class="form-group">
                        <label for="kode_angkot">Kode Angkot</label>
                        <input name='kode_angkot' type="text" class="form-control" placeholder="kode angkot" value="{{ $data->kode_angkot }}">
                      </div>
                      <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <input name='Keterangan' type="text" class="form-control" placeholder="Keterangan" value="{{ $data->Keterangan }}">
                      </div>
                     
                      <div class="form-group">
                        <label for="rute">Rute</label>
                        <textarea name='rute' class="form-control" rows="6" placeholder="rute" value="">{{ $data->rute }}</textarea>
                      </div>

                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <a href="{{route('angkot.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
@endsection