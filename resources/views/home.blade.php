@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@section('title','Home')

@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-6 col-lg-3">
            <div class="card card-body ">
              <h6 class="text-uppercase text-gray">Angkutan</h6>
              <div class="flexbox mt-2">
                <span class="fa fa-car text-gray fs-30"></span>
                <span class="fs-30">{{$trayek->count()}}</span>
              </div>
            </div>
          </div>



          <div class="col-6 col-lg-3">
            <div class="card card-body bg-gray">
              <h6 class="text-uppercase text-white">Destinasi</h6>
              <div class="flexbox mt-2">
                <span class="fa fa-plus text-white fs-30"></span>
                <span class="fs-30">{{$subkategori->count()}}</span>
              </div>
            </div>
          </div>




          <div class="col-6 col-lg-3">
            <div class="card card-body bg-danger">
              <h6 class="text-uppercase text-white">Taxi</h6>
              <div class="flexbox mt-2">
                <span class="fa fa-car fs-30"></span>
                <span class="fs-30">{{$taxi->count()}}</span>
              </div>
            </div>
          </div>



          <div class="col-6 col-lg-3">
            <div class="card card-body bg-info">
              <h6 class="text-uppercase text-white">Kereta</h6>
              <div class="flexbox mt-2">
                <span class="fa fa-train fs-30"></span>
                <span class="fs-30">
                  {{$detail->count()}}
                </span>
              </div>
            </div>
		  </div>
		  
<div class="col-12">
  <div class="divider text-uppercase fw-500">Informasi</div>
</div>



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">info KA</h4>
                    <table id="" class="table table-striped">
                        <thead>
                          <tr>
                                <th>No</th>
                                  <th>Kategori</th>
                                  <th>Nama Kereta</th>
                                  <th>jalur</th>
                                  <th>Kelas Kereta</th>
                                  <th>Relasi</th>
                                  <th>Jam Keberangkatan</th>
                                  <th>Keterangan</th>
                                 
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($detail as $data)
                          <tr>
                                <td>{{$data->no_ka}}</td>
                                <td>{{$data->jenis->jenis_kereta}}</td>
                                <td>{{$data->nama_kereta}}</td>
                               
                                <td>
                                <a href="{{route('keretainfo.show', $data->id)}}"> 
                                {{$data->jalur->jalur}}
                                </a>
                                </td>
                                <td>{{$data->kelaska}}</td> 
                                <td>{{$data->relasi}}</td> 
                                <td>{{$data->jam}}</td>
                                <td>
                                @if($data->keterangan == "Normal")
                                <span class="badge badge-success">{{$data->keterangan}}</span>
                                @else
                                <span class="badge badge-danger">{{$data->keterangan}}</span>
                                @endif

                                </td>
                              
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
             
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Kontak</h4>
                    <table id="" class="table table-striped">
                      <thead>
                        <tr>
                        <th>Jenis</th>
                        <th>Nama Kontak</th>
                        <th>Nomor</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($kontak as $data)
                          <tr>
                                  <td>{{$data->jenis}}</td>
                                  <td>{{$data->nama}}</td>
                                  <td>{{$data->nomor}}</td>
                                  
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 grid-margin stretch-card">
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
                                  <td>{{$datang->nama_subkategori}}</td>
                                  <td>{{$datang->kategori->nama_kategori}}</td>
                                  
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>







       
</div>


	 

@endsection

