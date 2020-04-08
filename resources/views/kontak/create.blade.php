@section('title','Create Kontak')
@extends('layouts.app')

@section('content')

<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>
                    
                    <form class="forms-sample" method="POST" action="{{ route('kontak.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('jenis') ? ' has-error' : '' }}">
                            <label for="jenis">Jenis Kontak</label>
                            
                            <select class="form-control" name="jenis" required="">
                                <option value=""></option>
                                <option value="darurat">Darurat</option>
                                <option value="pelanggan">Pelanggan</option>
                              
                            </select>
                           
                        </div>
                      <div class="form-group">
                        <label for="nama">Nama Kontak</label>
                        <input name='nama' type="text" class="form-control" placeholder="nama kontak" required>
                      </div>
                      <div class="form-group">
                        <label for="nomor">Nomor</label>
                        <input name='nomor' type="text" class="form-control" placeholder="nomor" required>
                      </div>
                    
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection