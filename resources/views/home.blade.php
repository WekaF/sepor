@extends('indexmain')

@section('pageTitle')Home @endsection

@section('content')

<div class="card-deck">
@foreach ($berita as $item)
<div class="col-lg-4">
            <div class="card">
              <h3 class="card-title"><strong>{{ $item->judul }}</strong> <br>
              <span><small class="text-twitter"><b>Passenger</b> </small></span>
              <span><small class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</small></span>
            </h3>
              <div class="card-body">
                <figure class="teaser teaser-zoe">
                <a href="{{ route('web.show',$item->id) }}">
                <img src="{{url('images/berita/'. $item->gambar)}}" alt="gambar" style="widht:300px; height:300px" >
                </a>
                  <figcaption>
                    <p class="icon-links">
                      <a href="#"><span class="fa fa-heart"></span></a>
                      <a href="#"><span class="fa fa-eye"></span></a>
                      <a href="#"><span class="fa fa-paperclip"></span></a>
                    </p>
                    <p class="description">{{ $item->judul }}</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
@endforeach
</div>
<div class="col-md-12 pt-2 pl-0 pr-0">
{!! $berita->links() !!}
</div>
@endsection
@section('csspage')

@endsection
@section('scriptpage')

@endsection
