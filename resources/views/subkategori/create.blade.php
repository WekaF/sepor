@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'subkategori.store']) !!}
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    
                    <form class="forms-sample" method="POST" action="{{ route('subkategori.store')}}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
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

                      
                      <!-- <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img width="200" height="200" />
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div> -->

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                     
                    </form>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
              
@endsection