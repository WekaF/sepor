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


              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Tambah Jenis kereta</h4>
                            <a href="{{route('jeniska.create')}}" class="btn btn-success btn-rounded btn-sm" >
                            Tambah Data
                            </a>
                          </div>

                      <div class="table-responsive">
                      <table class="table table-striped">
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
                  </div>
                </div>
              
              </div>

           
@endsection
