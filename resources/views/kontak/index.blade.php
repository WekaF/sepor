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
@section('title','Kontak')
@extends('layouts.app')

@section('content')
<div class="card">
          <h4 class="card-title"><strong>Tambah</strong> Kontak</h4>
          <div class="col-lg-2">
            <a href="{{route('kontak.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>Jenis</th>
                <th>Nama Kontak</th>
                <th>Nomor</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($data as $data)
                          <tr>
                                  <td>{{$data->jenis}}</td>
                                  <td>{{$data->nama}}</td>
                                  <td>{{$data->nomor}}</td>
                                 
                                  <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('kontak.edit', $data->id)}}"> Edit </a>
                              <form action="{{route('kontak.destroy',$data->id)}}" class="pull-left"  method="POST">
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
