
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>@yield('pageTitle')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') !!}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{!! asset('assets/css/sticky-footer-navbar.css') !!}">
    <link href="{{asset('assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}">
    @yield('csspage')
  </head>
  <body>
    <?php $url_segment_cat = Request::segment(2) ?>
  <header class="topbar topbar-expand-xl topbar-secondary topbar-inverse">
          <div class="topbar-left">
            <span class="topbar-btn topbar-menu-toggler"><i></i></span>
            <h5 class="title" style="color:white">Passenger</h5>

            <div class="topbar-divider d-none d-xl-block"></div>

            <nav class="topbar-navigation">
              <ul class="menu">

                <li class="menu-item {{ (request()->routeIs('web.home')) ? 'active' : '' }}">
                  <a class="menu-link" href="{{ route('web.home') }}">
                    <span class="icon ti-home"></span>
                    <span class="title">Home</span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>

          <div class="topbar-right">

          <div>

          @guest
          <a class="btn btn-sm btn-secondary" href="{{route('login')}}">Login</a>
          @else
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
          @endguest
          </div>
          <form class="lookup lookup-circle lookup-lg lookup-right" method="GET" action="{{ route('web.search') }}">
              <input name="search" type="text submit " placeholder="Search" aria-label="Search" >
            </form>
            
            <div class="topbar-divider d-none d-md-block"></div>


          </div>
         
        </header>


    <!-- Begin page content -->
    <main role="main" class="container">
<<<<<<< HEAD
        @yield('content')
=======
      <div class="main-content">

      @yield('content')

      </div>  
>>>>>>> fixing
    </main>

    <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2020 <a href="http://github.com/WekaF">Sistem Informasi Passenger</a>. All rights reserved.</p>
          </div>

       
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script>window.jQuery || document.write('<script src="{!! asset('src/js/vendor/jquery-3.3.1.min.js') !!}"><\/script>')</script>
    <script src="{!! asset('assets/plugins/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <script src="{{asset('assets/js/core.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/script.min.js')}}"></script>
    @yield('scriptpage')
  </body>
</html>
