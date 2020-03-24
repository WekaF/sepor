
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('kategori.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Kategori baru</h4>
                      
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="nama_kategori" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>              
@endsection