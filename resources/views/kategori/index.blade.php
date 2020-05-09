@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>

<script type="text/javascript">
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>

@stop
@section('title','Kategori Destinasi')
@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-8 grid-margin stretch-card">      
          <div class="card">
          <h4 class="card-title"><strong>Tambah</strong> Kategori Destinasi</h4>
          <div class="col-lg-2">
            <a href="{{route('kategori.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>Nama kategori</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($Kategori as $datang)
		            		<tr>
                    <td>{{$datang->nama_kategori}}</td>
                           
                    <td>
                            <div class="btn-group dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                              <a class="dropdown-item" href="{{route('kategori.edit', $datang->id)}}"> Edit </a>
                              <form action="{{route('kategori.destroy',$datang->id)}}" class="pull-left delete-confirm"  method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button class="dropdown-item delete-confirm" onclick="return delete-confirm "> Delete
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
@endsection
