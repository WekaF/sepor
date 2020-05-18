
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive Bootstrap 4 Admin, Dashboard &amp; WebApp Template">
    <meta name="keywords" content="dashboard, index, main">

    <title>Passenger - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i|Dosis:300,500" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css')}}">

    @section('css')

@show
 

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}">
    

  </head>

  <body data-provide= "pace">

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <span class="logo">
          <a href="{{ url('/dashboard') }}">
          {{Auth::user()->name}}
          </a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
    

      @include('layouts.sidebar')
      
      </nav>

    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>

        <a class="topbar-btn d-none d-md-block" href="#" data-provide="fullscreen tooltip" title="Fullscreen">
          <i class="material-icons fullscreen-default">fullscreen</i>
          <i class="material-icons fullscreen-active">fullscreen_exit</i>
        </a>

        <div class="topbar-divider d-none d-md-block"></div>

        <div class="lookup d-none d-md-block topbar-search" id="theadmin-search">
          <input class="form-control w-300px" type="text">
          <div class="lookup-placeholder">
            <i class="ti-search"></i>
            <span data-provide="typing" data-type="<strong>Type</strong> Button|<strong>Type</strong> Slider|<strong>Type</strong> Layout|<strong>Type</strong> Modal|<strong>Try</strong> typing any keyword..." data-loop="false" data-type-speed="90" data-back-speed="50" data-show-cursor="false"></span>
          </div>
        </div>
      </div>

      <div class="topbar-right">
        <a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a>

        <div class="topbar-divider"></div>

        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown">hai, {{ Auth::user()->name }}</span>
            <div class="dropdown-menu dropdown-menu-right"> 
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="ti-power-off"></i> Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>></a>
            </div>
          </li>

          <!-- Messages -->
          
        </ul>

      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main>

      <div class="main-content">
      

            @yield('content')
            
      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2020 <a href="http://github.com/WekaF">Sistem Informasi Passenger</a>. All rights reserved.</p>
          </div>

       
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    @section('script')  
    <script src="{{ asset('assets/js/core.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatables.bootstrap.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/sweetalerjs/sweetalert.all.js')}}"></script>
    @include('sweetalert::alert')
    @section('js')

@show
   
  
    

  </body>
</html>
