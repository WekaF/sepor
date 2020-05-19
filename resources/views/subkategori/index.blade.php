@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@section('title','Destinasi')
@extends('layouts.app')

@section('content')

          <div class="card">
          <div class="col-md-12">
          <h4 class="card-title"><strong>Tambah</strong> Destinasi</h4>
          <div class="col-lg-2">
            <a href="{{route('subkategori.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>Nama Kategori</th>                                  
                <th>long</th>
                <th>lat</th>    
                <th>Kategori</th>
                <th>Deskriptif</th>
                <th>Gambar</th>
                <th>Kontak</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($subkategori as $datang)
                          <tr>
                                  <td>{{$datang->nama_subkategori}}</td>                                  
                                  <td>{{$datang->long}}</td>
                                  <td>{{$datang->lat}}</td>
                                  <td>{{$datang->kategori->nama_kategori}}</td>
                                  <td>{{$datang->deskripsi}}</td>
                                  
                                  <td>
                                    @if($datang->gambar)
                                      @foreach (json_decode($datang->gambar, true) as $p)
                                         <img src="{{url('images/destinasi/'. $p)}}" style="height:100px; width:100px"/>
                                      @endforeach
                                         @endif
                                    </td>
                                  
                                 


                                      <td>{{$datang->no_telp}}</td>
                                  
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
           
@endsection
