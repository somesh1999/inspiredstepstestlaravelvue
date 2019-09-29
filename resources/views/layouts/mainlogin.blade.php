<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!--====== Favicon Icon ======-->
      <link rel="shortcut icon" href="https://www.inspiredsteps.org/wp-content/uploads/thegem-logos/logo_cdada73088ba1805e82f506eb836df4d_1x.png" type="image/png">

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Inspired Steps') }}</title> --}}
    <title>@yield('PageTitle')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


   

      <!--====== Slick css ======-->
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  
      <!--====== Animate css ======-->
      <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
      
      <!--====== Nice Select css ======-->
      <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
      
      <!--====== Nice Number css ======-->
      <link rel="stylesheet" href="{{ asset('css/jquery.nice-number.min.css') }}">
  
      <!--====== Magnific Popup css ======-->
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  
      <!--====== Bootstrap css ======-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      
      <!--====== Fontawesome css ======-->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      
      <!--====== Default css ======-->
      <link rel="stylesheet" href="{{ asset('css/default.css') }}">
      
      <!--====== Style css ======-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      
      <!--====== Responsive css ======-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet">

      <script src="{{ asset('js/app.js') }}" defer></script>

      <style>
      .sa-button-container{
          margin-top:30px !important;
      }
      .lead{
          margin-top:10px !important;
      }
      </style>
      @yield('css')

</head>
<body>
    <div id="vue_app">
      
     

         <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <header id="header-part" class="header-two">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-envelope"></i><a href="#">info@yourmail.com</a></li>
                                <li><i class="fa fa-phone"></i><span>+0123-456-5678</span></li>
                            </ul>
                        </div> <!-- header contact -->
                    </div>
                    <div class="col-md-6">
                        <div class="header-right d-flex justify-content-end">
                          
                            <div class="login-register">
                                <ul>
                                    <li style="font-weight:bold; color:gray; font-size:15px;">Hello, {{Auth::user()->name }}</li>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                            </div>
                        </div> <!-- header right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="https://www.inspiredsteps.org/wp-content/uploads/thegem-logos/logo_cdada73088ba1805e82f506eb836df4d_1x.png" alt="Logo" style="height:70px; width:100px;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown show">
                                                <a class="dropdown-toggle active" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{url('home')}}" style="padding:10px;">Add</a>
                                                    <a class="dropdown-item" href="profile"  style="padding:10px;">View</a>
                                                  </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Courses</a>
                                            </li>
                                        </ul>
                            </div>
                            <div class="right-icon text-right">
                                <ul>
                                    {{-- <li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li> --}}
                                </ul>
                            </div> <!-- right icon -->
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->



        {{-- <router-link to="/profile">Home</router-link>
        <router-view></router-view> --}}
        <main>
            @yield('content')
        </main>
    </div>

    @yield('footer')

    @yield('scripts')
   
</body>
</html>