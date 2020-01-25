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
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Data Mall dikota Malang</h4>
                            <a href="{{route('mall.create')}}" class="btn btn-success btn-rounded btn-sm" >
                            Tambah Data
                            </a>
                          </div>

                      <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                                  <th>Nama Mall</th>
                                  <th>Deskriptif</th>
                                  <th>gambar</th>
                                  <th>long</th>
                                  <th>lat</th>
                                  <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($Mall as $datang)
                          <tr>
                                  <td>{{$datang->nama_mall}}</td>
                                  <td>{{$datang->deskrip}}</td>
                                  
                                  <td> @if($datang->gambar)
                              <img src="{{url('images/gambar_mall/'. $datang->gambar)}}" alt="image" style="image-size: 200px margin-right: 10px;" />
                              @else
                              <img src="{{url('images/gambar_mall/default.jpg')}}" alt="image" style="margin-right: 10px;" />
                            @endif
                          </td>
                          <td>{{$datang->long}}</td>
                                  <td>{{$datang->lat}}</td>
                                  <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('mall.edit', $datang->id)}}"> Edit </a>
                              <form action="{{route('mall.destroy',$datang->id)}}" class="pull-left"  method="POST">
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
