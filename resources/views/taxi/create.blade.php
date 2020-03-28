
@section('title','Create Taxi')
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('taxi.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="taxi_name">Nama Taxi</label>
                        <input name='taxi_name' type="text" class="form-control" placeholder="nama taxi">
                       
                      </div>
                      <div class="form-group">
                        <label for="taxi_price">Harga</label>
                        <input name='taxi_price' type="text" class="form-control" placeholder="harga">
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Deskripsi</label>
                        <textarea name="taxi_desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection