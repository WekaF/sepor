@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
    <!-- Feature section -->
	<section class="feature-section spad set-bg" data-setbg="{{ Storage::url('bg/bg1.png') }}">
		<div class="container">
			<div class="row">
                
                    <div class="col-lg-3 col-md-6 p-0">

                        <div class="feature-item set-bg" data-setbg="{{ Storage::url('post/'.$featured->image) }}">
                            <div class="fi-content text-white">
                                <h3><a href=""><b>Test</b></a></h3>
                            </div>
                        </div>

                    </div>
                   
                    <div class="col-lg-12 col-md-12">

                        <div class="card h-100">
                            <div class="single-post post-style-1 p-2">
                               <strong>No Post Found :(</strong>
                            </div><!-- single-post -->
                        </div><!-- card -->
                        
                    </div><!-- col-lg-4 col-md-6 -->
               
			</div>
		</div>
	</section>
	<!-- Feature section end -->

    <!-- section Post-->
    <section class="blog-area section recent-game-section spad">
        <div class="container">

            <div class="row">

                @forelse($berita as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                <div class="blog-image"><img src="{{ Storage::url('post/'.$post->image) }}" alt="{{ $post->judul }}"></div>

                                <div class="blog-info">

                                    <h4 class="title"><a href="{{ route('post.details',$post->judul) }}"><b>{{ $post->judul }}</b></a></h4>

                                </div>
                            </div>
                        </div>
                    </div>

                    @empty
                    <div class="col-lg-12 col-md-12">
                        <div class="card h-100">
                            <div class="single-post post-style-1 p-2">
                               <strong>No Post Found :(</strong>
                            </div>
                        </div>
                    </div>
                @endforelse
            
            </div>

            <a class="load-more-btn" href="{{ route('post.index') }}"><b>LOAD MORE</b></a>

        </div>
    </section>
    <!-- End section Post-->

    <!-- Review section -->

	<!-- Review section end -->
@endsection

@push('js')

@endpush