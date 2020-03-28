@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@section('title','Jalur')
@extends('layouts.app')

@section('content') 

<div class="row">
<div class="col-lg-8 grid-margin stretch-card">      
          <div class="card">
          <h4 class="card-title"><strong>Tambah</strong> Jalur</h4>
          <div class="col-lg-2">
            <a href="{{route('jalur.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                <th>ID</th>
                <th>jalur</th>
                <th>Intruksi</th>
                <th>gambar</th>
                </tr>
              </thead>
              <tbody>
             
              @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}</td>
                                  <td>{{$data->jalur}}</td>
                                 <td>{{$data->deskripsi}}</td>
                                  <td class="">
                                      @if($data->gambar)
                                        <img src="{{url('images/jalur/'. $data->gambar)}}" alt="image" style="width: 100px; height:100px " />
                                      @else
                                        <img src="{{url('images/jalur/default.jpg')}}" alt="image" style="width: 100px; height:100px" />
                                      @endif
                                  
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
