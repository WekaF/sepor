@extends('indexmain')

@section('pageTitle'){!!$berita->judul!!}@endsection

@section('content')
    <h1 class="mt-3">{!!$berita->judul!!}</h1>
    <p class="card-text" datetime="{{ $berita->created_at }}" title="{{ $berita->created_at }}"><small class="text-muted">{{ Carbon\Carbon::parse($berita->created_at)->diffForHumans()}}</small></p>
@auth
    @canany(['berita-edit'])
    <a class="btn btn-primary mb-4" href="{{ route('berita.edit',$berita->id) }}" target="_blank" role="button">edit</a>
    @endcan
@endauth

<img src="{{url('images/berita/'. $berita->gambar)}}" alt="" class="card-img-top pb-4 center-block" style="width: 500px; height:400px">

    <div class="lead">{!!$berita->isi!!}</div>


@endsection
@section('csspage')

<link rel="stylesheet" href="{!! asset('plugins/fontawesome/css/all.min.css') !!}">
<link rel="stylesheet" href="{!! asset('plugins/baguetteBox/css/baguetteBox.css') !!}">

@endsection
@section('scriptpage')
<script src="{!! asset('plugins/baguetteBox/js/baguetteBox.js') !!}"></script>
<script>
    baguetteBox.run('.baguetteBox');
</script>
@endsection
