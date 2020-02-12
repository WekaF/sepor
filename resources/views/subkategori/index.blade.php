@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop

@extends('layouts.app')

@section('content')


              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Data Kategori</h4>
                            <a href="{{route('subkategori.create')}}" class="btn btn-success btn-rounded btn-sm" >
                            Tambah Data
                            </a>
                          </div>

                      <div class="table-responsive">
                      <table id="table" class="table table-striped data-table">
                        <thead>
                          <tr>
                                  <th>Nama Kategori</th>                                  
                                  <th>long</th>
                                  <th>lat</th>    
                                  <th>Kategori</th>
                                  <th>Deskriptif</th>
                                  <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($subkategori as $datang)
                          <tr>
                                  <td>{{$datang->nama_subkat}}</td>                                  
                                  <td>{{$datang->long}}</td>
                                  <td>{{$datang->lat}}</td>
                                  <td>{{$datang->kategori->nama_kategori}}</td>
                                  <td>{{$datang->Deskrip}}</td>
                                  
                                  <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('subkategori.edit', $datang->id)}}"> Edit </a>
                              <form action="{{route('subkategori.destroy',$datang->id)}}" class="pull-left"  method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                              </button>
                            </form>
                            </div>
                          </div>
                            </td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>

           
@endsection
