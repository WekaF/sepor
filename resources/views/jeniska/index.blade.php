@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@section('title','Jenis Kereta Api')
@extends('layouts.app')

@section('content') 

<div class="row">
<div class="col-lg-6 grid-margin stretch-card">      
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
           </div>

           
           </div>
           </div>
@endsection
