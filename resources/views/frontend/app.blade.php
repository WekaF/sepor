<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!-- Stylesheets -->

    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css')}}"/>

    @stack('css')
</head>
<body>

@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- SCIPTS -->
<script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@stack('js')
</body>
</html>
