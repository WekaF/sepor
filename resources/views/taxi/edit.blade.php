@section('title','Edit Taxi')
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('taxi.update', $data->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="taxi_name">Nama Taxi</label>
                        <input name='taxi_name' type="text" class="form-control" placeholder="nama taxi" value="{{$data->taxi_name}}">
                       
                      </div>
                      <div class="form-group">
                        <label for="taxi_price">Harga</label>
                        <input name='taxi_price' type="text" class="form-control" placeholder="harga" value="{{$data->taxi_price}}">
                      </div>
                                    

                      <div class="form-group">
                        <label for="exampleTextarea1">Deskripsi</label>
                        <textarea name="taxi_desc" class="form-control" id="exampleTextarea1" rows="4">{{$data->taxi_desc}}</textarea>
                      </div>

                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <a href="{{route('taxi.index')}}">
                      <button class="btn btn-light">Cancel</button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
@endsection