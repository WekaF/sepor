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

<div class="row">
    
          
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-car text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Trayek</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$trayek->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-car mr-1" aria-hidden="true"></i> Total Trayek
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-map-marker text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Destinasi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$subkategori->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-map-marker mr-1" aria-hidden="true"></i> Total Destinasi
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-taxi text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Taxi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$taxi->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-taxi mr-1" aria-hidden="true"></i> Total Taxi
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-car text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Destinasi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$subkategori->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total Destinasi
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Destinasi</h4>
                    <table id="" class="table table-striped">
                      <thead>
                        <tr>
                          <th> Nama Destinasi </th>
                          <th> Kategori </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($subkategori as $datang)
                          <tr>
                                  <td>{{$datang->nama_subkat}}</td>
                                  <td>{{$datang->kategori->nama_kategori}}</td>
                                  
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">info KA</h4>
                    <table id="" class="table table-striped">
                        <thead>
                          <tr>
                                  <th>Jenis Kereta</th>
                                  <th>Nama Kereta</th>
                                  <th>Jam Keberangkatan</th>
                                  <th>Letak Gerbong</th>
                                  <th>Progres Stasiun</th>
                                 
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($detail as $data)
                          <tr>
                                <td>{{$data->jenis->jenis_kereta}}</td>
                                <td>{{$data->nama_kereta}}</td>
                                <td>{{$data->jam}}</td>
                                <td>{{$data->jalur}}</td>
                                <td>{{$data->progres_stasiun}}</td>                                
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
             
       
</div>

@endsection

