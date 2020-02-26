
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('jeniska.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="jenis_kereta">Jenis Kereta</label>
                        <input name='jenis_kereta' type="text" class="form-control" placeholder="jenis Kereta">
                      </div>
                    
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection