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
          <h4 class="card-title"><strong>Tambah</strong> Jenis Kereta</h4>
          <div class="col-lg-2">
            <a href="{{route('jeniska.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>ID</th>
                <th>Nama kategori</th>

                </tr>
              </thead>
              <tbody>
             
              @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}</td>
                                  <td>{{$data->jenis_kereta}}</td>
                                </tr>
                        @endforeach
              </tbody>
            </table>
          </div>
        </div>
           
@endsection
