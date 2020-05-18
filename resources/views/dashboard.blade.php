@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@section('title','Dashboard')

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
		  
<<<<<<< HEAD
<div class="col-12">
=======
<div class="col-lg-12">
>>>>>>> fixing
  <div class="divider text-uppercase fw-500">Informasi</div>
</div>


<<<<<<< HEAD

=======
         
>>>>>>> fixing
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="text-center font-weight-bold">INFORMASI KERETA API</h3>
                   
                    <table id="" class="table table-striped table-bordered" width="100%">
                        <thead class="table-dark">
                          <tr>
                                  <th width="5px">No</th>
                                  <th width="50px">Kategori</th>
                                  <th width="100px">Nama Kereta</th>
<<<<<<< HEAD
                                  <th width="100px">Kelas Kereta</th>
=======
>>>>>>> fixing
                                  <th width="100px">Relasi</th>
                                  <th width="10px">Jam</th>
                                  <th width="10px">Keterangan</th>
                                 
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($detail as $data)
                          <tr>
                                <td>
                                <a href="{{route('keretainfo.show', $data->id)}}"> 
                                {{$data->no_ka}}
                                </a>
                                </td>
                                <td>{{$data->jenis->jenis_kereta}}</td>
                                <td>{{$data->nama_kereta}}</td>
<<<<<<< HEAD
                                <td>{{$data->kelaska}}</td> 
=======
>>>>>>> fixing
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
<<<<<<< HEAD
=======
          
>>>>>>> fixing
             
              
          <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="text-center font-weight-bold">Kontak</h4>
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
                    <h4 class="text-center font-weight-bold">Data Destinasi</h4>
                    <table id="table" class="table table-striped">
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

     
              

              <div class="col-md-12">
            <div class="card">
              <h5 class="card-title text-center">List<strong> Berita</strong></h5>

              <div class="media-list media-list-hover media-list-divided">

              @foreach($berita as $item)
                <a class="media media-single" href="{{ route('web.show',$item->id) }}">
                  <img class="w-60px" src="{{url('images/berita/'. $item->gambar)}}" alt="...">
                  <div class="media-body">
                    <h5>{{$item->judul}}</h5>
                    <small class="text-fader"><i class="fa fa-info pr-1"></i> {{$item->isi}}</small>
                  </div>
                  <span class="media-right text-fade">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                </a>
              @endforeach
              </div>

            </div>
          </div>


        <div class="col-md-8">
            <div class="card">
              <h5 class="card-title text-center">List<strong> Feedback</strong></h5>

              <div class="media-list media-list-hover media-list-divided">

              @foreach($feedback as $data)
                <header class="card-header bg-lightest">
               
                  <div class="card-title flexbox">
                    <img class="avatar" src="{{asset('assets/img/avatar/1.jpg')}}" alt="...">
                    <div>
                      <h6 class="mb-0">{{$data->nama}} <small class="sidetitle fs-11">{{$data->email}}</small></h6>
                      <small>{{ Carbon\Carbon::parse($data->created_at)->diffForHumans()}}</small>
                    </div>
                  </div>
                </header>
                <div class="card-body">
                  <p>{{$data->saran}}</p>
                </div>
                <div class="divider text-uppercase fw-500"></div>
                
                @endforeach  
              </div>

              {{$feedback->links()}}

            </div>
          </div>






       
</div>


	 

@endsection

