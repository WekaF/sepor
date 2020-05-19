@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>

@stop
@section('title','Feedback')
@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card ">      
          <div class="col-md-6">
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
        </div>
@endsection
