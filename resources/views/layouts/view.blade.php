<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Wisata Islam') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Y<meta name="csrf-token" content="{{ csrf_token() }}"><meta name="author" content="" />
  
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/camera.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />
  
    <!-- Theme skin -->
    <link href="{{ URL::asset('color/default.css') }}" rel="stylesheet" />
  
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('ico/apple-touch-icon-144-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('ico/apple-touch-icon-114-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('ico/apple-touch-icon-72-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('ico/apple-touch-icon-57-precomposed.png') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('ico/favicon.png') }}" />
    
    @yield('style')
    

</head>


<body>

  <div id="wrapper">
  
    <!-- start header -->
    <header>
      <div class="top" style="height:30px;"></div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo" style="float left">
              <h1><a href="{{ url('/') }}"><img src="{{ URL::asset('img/logo.jpg') }}" alt="" />
                {{ config('app.name', 'Wisata Islam') }}
              </a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top" style="margin-top:10px;">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                      <li>
                        <a href="/"><i class="icon-home"></i> Beranda </a>
                      </li>
                      <li>
                        <a href="/wisata">Wisata</a>
                      </li>
                      <li>
                        <a href="/kalender">Kalender Islam</a>
                      </li>
                      <li>
                        <a href="/artikel">Artikel</a>
                      </li>
                      <li>
                        <a href="/kontak">Kontak</a>
                      </li>
                      <li>
                        <a href="/tentang">Tentang Kami </a>
                      </li>

                      @guest
                      <li><a href="{{ route('login') }}" >Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                      <li class="dropdown"><a href="#" style="position:relative; margin-left:50px;">
                        <img src="img/avatars/{{ Auth::user()->avatar }}" alt="" class="img-avatar-header" style="width:20px">
                        {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="{{ url('/profil')}}"> Profil</a></li>
                            <li><a href="{{ url('/bookmark')}}"> Bookmark</a></li>
                            <li><a class="ion-ios-log-out" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                      </li>
                      @endguest
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- inner-headline -->
    @yield('inner-headline')
    <!-- end-inner-headline -->

    <!-- content -->
    @yield('content')
    <!-- content -->


    @extends('layouts.footer')
    
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  @yield('script')
  
  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>

  <script src="{{ URL::asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ URL::asset('js/toucheffects.js') }}"></script>
  <script src="{{ URL::asset('js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ URL::asset('js/camera/camera.js') }}"></script>
  <script src="{{ URL::asset('js/camera/setting.js') }}"></script>

  <script src="{{ URL::asset('js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ URL::asset('js/portfolio/setting.js') }}"></script>

  <script src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>
  <script src="{{ URL::asset('js/animate.js') }}"></script>
  <script src="{{ URL::asset('js/inview.js') }}j"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ URL::asset('js/custom.js') }}"></script>


</body>

</html>
