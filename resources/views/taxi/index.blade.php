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

              <div class="card">
          <h4 class="card-title"><strong>Tambah</strong> Taxi</h4>
          <div class="col-lg-2">
            <a href="{{route('taxi.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
              <tr>
                                  <th>Nama Taxi</th>
                                  <th>Harga</th>
                                  <th>Deskripsi</th>
                                <th>Action</th>
                          </tr>
              </thead>
              <tbody>
             
              @foreach($data as $datang)
                          <tr>
                                  <td>{{$datang->taxi_name}}</td>
                                  <td>{{$datang->taxi_price}}</td>
                                  <td>{{$datang->taxi_desc}}</td>
                                  
                                  
                                  <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('taxi.edit', $datang->id)}}"> Edit </a>
                              <form action="{{route('taxi.destroy',$datang->id)}}" class="pull-left"  method="POST">
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
