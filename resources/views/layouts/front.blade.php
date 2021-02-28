<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js one-page-layout" data-mobile-classic-layout="false" data-classic-layout="false"
      data-prev-animation="16" data-next-animation="15" data-random-animation="false">
<head>

    <meta charset="utf-8"/>
    <meta name="theme-color" content="#1e56a0">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    @foreach($setting as  $set)
        @if($set->name == 'meta_description')
            <meta name="description" content="{{$set->value}}">
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'meta_keywords')
            <meta name="keywords" content="{{$set->value}}">
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'meta_author')
            <meta name="author" content="{{$set->value}}">
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'og_title')
            <meta property="og:title" content="{{$set->value}}" />
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'og_type')
            <meta property="og:type" content="{{$set->value}}" />
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'og_url')
            <meta property="og:url" content="{{$set->value}}" />
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'og_image')
            <meta property="og:image" content="{{$set->value}}" />
        @endif
    @endforeach
    @foreach($setting as  $set)
        @if($set->name == 'og_description')
            <meta property="og:description" content="{{$set->value}}" />
        @endif
    @endforeach

    @foreach($setting as  $set)
        @if($set->name == 'analytics')
            {!!$set->value!!}
        @endif
    @endforeach
    <title>
        @foreach($setting as  $set)
            @if($set->name == 'title')
                {{$set->value}}
            @endif
        @endforeach
    </title>

    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="front/images/ico/faico.ico">
    <link rel="apple-touch-icon" href="front/images/ico/faico.ico"/>

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/fonts/fontello/css/fontello.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/js/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/js/jquery.magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/js/jquery.uniform/uniform.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/align.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/768.css') }}">

    <!-- INITIAL SCRIPTS -->
    <script src="{{ asset('front/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.min.js') }}"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <![endif]-->

</head>


<body>


<!-- PAGE -->
<div id="page" class="hfeed site">


    <!-- HEADER -->
    <header id="masthead" class="header" role="banner">

        <a class="menu-toggle toggle-link"></a>

        <h1 class="site-title mobile-title">Yonathan Suarez</h1>

        <!-- header-wrap -->
        <div class="header-wrap">

            <img src="{{asset('front/images/site/avatar1.jpg')}}" alt="avatar">

            <h2 class="site-title">Yonathan S</h2>

            <!-- NAV MENU -->
            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                <div class="nav-menu">
                    <ul>
                        <li>
                            <a href="#/home">
                                <i class="pe-7s-home"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#/about">
                                <i class="pe-7s-user"></i>Quien Soy</a>
                        </li>
                        <li>
                            <a href="#/resume">
                                <i class="pe-7s-id"></i>Resumen</a>
                        </li>
                        <li>
                            <a href="#/portfolio">
                                <i class="pe-7s-glasses"></i>Portafolio</a>
                        </li>
                        <li>
                            <a href="#/blog">
                                <i class="pe-7s-cloud-download"></i>download</a>
                        </li>
                        <li>
                            <a href="#/contact">
                                <i class="pe-7s-call"></i>Contacto</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- NAV MENU -->


            <!-- SEARCH -->
          {{--  <div class="header-search">
                <form role="search" method="get" id="search-form" action="#">
                    <input type="text" value="" name="s" id="search" placeholder="enter word">
                    <input type="submit" id="search-submit" title="Search" value="→">
                </form>
            </div>--}}
            <!-- SEARCH -->

            <!-- header-bottom -->
            <div class="header-bottom">

                <script src="https://apis.google.com/js/platform.js"></script>
                <div style="text-align: center">
                    <div class="g-ytsubscribe" data-channelid="UCbLCjrhCC1jl68lxNbSHw0g" data-layout="default" data-count="hidden"></div>
                    <!-- Testimonial -->
                </div>


                <!-- SOCIAL -->
                <ul class="social">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/yonathan.suarez.583" target="_blank"></a>
                    </li>
                    <li>
                        <a class="twitter" href="https://twitter.com/jond_14" target="_blank"></a>
                    </li>
                    <li>
                        <a class="linkedin" href="https://www.linkedin.com/in/yonathan-suarez-a357a6136/" target="_blank"></a>
                    </li>
                    <li>
                        <a class="instagram" href="https://www.instagram.com/yonathan.s.c/" target="_blank"></a>
                    </li>

                </ul>
                <!-- SOCIAL -->

                <!-- copy-text -->
                <div class="copy-text">
                    <p>&copy; 2019 </p>
                </div>
                <!-- copy-text -->

            </div>
            <!-- header-bottom -->


        </div>
        <!-- header-wrap -->

    </header>
    <!-- HEADER -->


    <!-- .site-main -->
    <div id="main" class="site-main"> <!-- PAGE : HOME -->
        @yield('section');
    </div>
    <!-- .site-main -->


</div>
<!-- PAGE -->


<!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
<div class="p-overlay"></div>
<div class="p-overlay"></div>


<!-- ALERT : used for contact form mail delivery alert -->
<div class="site-alert animated"></div>


<!-- SCRIPTS -->
<script src="{{asset('front/js/jquery.address-1.5.min.js')}}"></script>
<script src="{{asset('front/js/nprogress/nprogress.js')}}"></script>
<script src="{{asset('front/js/fastclick.js')}}"></script>
<script src="{{asset('front/js/typist.js')}}"></script>
<script src="{{asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('front/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('front/js/jquery.uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/socialstream.jquery.js')}}"></script>
<script src="{{asset('front/js/jarallax.min.js')}}"></script>
<script src="{{asset('front/js/jarallax-video.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE"></script>-->
<script src="{{asset('front/js/main.js')}}"></script>



</body>
</html>
