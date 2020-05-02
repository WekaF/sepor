@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@section('title','Berita')
@extends('layouts.app')

@section('content')
          <div class="card">
          <h4 class="card-title"><strong>Tambah</strong> Berita</h4>
          <div class="col-lg-2">
            <a href="{{route('berita.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <h5 class="card-title"><a href="{{route('web.home')}}" class="btn btn-secondary btn-rounded btn-fw" >Lihat Berita</a></h5>

          <div class="card-body">

            <table class="table " cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>judul</th>
                <th>Isi Berita</th>
                <th>Gambar</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($data as $datang)
		            		<tr>
                    <td>{{$datang->judul}}</td>
                    <td>{{$datang->isi}}</td>     
                    <td class="py-1">
                                      @if($datang->gambar)
                                        <img src="{{url('images/berita/'. $datang->gambar)}}" alt="image" style="width: 100px; height:100px " />
                                      @else
                                        <img src="{{url('images/berita/default.jpg')}}" alt="image" style="width: 100px; height:100px" />
                                      @endif
                                  
                                      </td>                      
                    <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('berita.edit', $datang->id)}}"> Edit </a>
                              <form action="{{route('berita.destroy',$datang->id)}}" class="pull-left"  method="POST">
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
@endsection
