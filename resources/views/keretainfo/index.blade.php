@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
<script>
$('#form-delete').on('submit', function(e){
    var form = this;
    e.preventDefault();
    swal({
      title: 'Data akan dihapus ?',
      text: "Klik Hapus untuk menghapus data !",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.value) {
        return form.submit();
      }
    })
});
</script>
@stop
@extends('layouts.app')

@section('content')
      <div class="card">
          <h4 class="card-title"><strong>Data</strong> Kereta</h4>
          <div class="col-lg-2">
            <a href="{{route('keretainfo.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>Jenis Kereta</th>
                <th>No KA</th>
                <th>Nama Kereta</th>
                <th>Jam Keberangkatan</th>
                <th>Letak Kereta <i>(jalur)</i> </th>
                <th>Progres Stasiun</th>
                <th>Keterangan</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($data as $data)
                          <tr>
                                <td>{{$data->jenis->jenis_kereta}}</td>
                                <td>{{$data->no_ka}}</td>
                                <td>{{$data->nama_kereta}}</td>
                                <td>{{$data->jam}}</td>
                                <td>{{$data->jalur}}</td>
                                <td>{{$data->progres_stasiun}}</td>
                                <td>
                                @if($data->keterangan == "Normal")
                                <span class="badge badge-success">{{$data->keterangan}}</span>
                                @else
                                <span class="badge badge-danger">{{$data->keterangan}}</span>
                                @endif

                                </td>

                                <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('keretainfo.edit', $data->id)}}"> Edit </a>
                              <form action="{{route('keretainfo.destroy',$data->id)}}" class="pull-left"  method="POST">
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
