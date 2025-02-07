<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Popper.js (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- jQuery (required for Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript (Ensure it's the correct version) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>




    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', Config::get('app.name'))</title>
    <meta name="author" content="Datik">
    <meta name="description"
          content="Datik provides a wide selection of TV channels and streaming content, offering a personalized viewing experience.">
    <meta name="keywords" content="Datik">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/update1/favicon/favicon.png')}}">
    <meta name="datik" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('additional-css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>



<!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper d-lg-none">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ URL::route('index') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
 <!-- Language Dropdown -->
                 <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
   role="button" data-bs-toggle="dropdown" aria-haspopup="true"
   aria-expanded="false">

                                                    <!-- Display the current language in the navbar -->
                                                    <span class="lang-icon">
                    @if (App::getLocale() == 'en')
                                                            🇺🇸
                                                        @elseif (App::getLocale() == 'es')
                                                            🇪🇸
                                                        @elseif (App::getLocale() == 'fr')
                                                            🇫🇷
                                                        @endif
                </span>
                                                    <!-- Display the language name based on the current locale -->
                                                    @if (App::getLocale() == 'en')
                                                        English
                                                    @elseif (App::getLocale() == 'es')
                                                        Español
                                                    @elseif (App::getLocale() == 'fr')
                                                        Français
                                                    @endif
                                                </a>
                                               <div class="dropdown-menu dropdown-menu-end" >

                                                    <!-- Provide links for the other languages -->
                                                    @if (App::getLocale() != 'en')
                                                        <a class="dropdown-item" href="{{ url('/language/en') }}">
                                                            🇺🇸 English
                                                        </a>
                                                    @endif
                                                    @if (App::getLocale() != 'es')
                                                        <a class="dropdown-item" href="{{ url('/language/es') }}">
                                                            🇪🇸 Español
                                                        </a>
                                                    @endif
                                                    @if (App::getLocale() != 'fr')
                                                        <a class="dropdown-item" href="{{ url('/language/fr') }}">
                                                            🇫🇷 Français
                                                        </a>
                                                    @endif
                                                </div>
                                            </li>
                <li><a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a></li>
                <li><a href="{{ URL::route('about') }}">{{ trans('messages.about') }}</a></li>
                <li><a href="{{ URL::route('subscription') }}">{{ trans('messages.subscription') }}</a></li>
                <li><a href="{{ URL::route('catalogue') }}">{{ trans('messages.catalogue') }}</a></li>
                <li><a href="{{ URL::route('contact') }}">{{ trans('messages.contact') }}</a></li>



            </ul>
        </div>
    </div>
</div>


<!--==============================
Header Area
==============================-->
<header class="th-header header-layout8">
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ URL::route('index') }}"><img
                                        src="{{asset('assets/img/logo-white.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <nav class="main-menu d-none d-lg-inline-block">
                                        <ul>
                                            <li>
                                                <a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::route('about') }}">{{ trans('messages.about') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::route('subscription') }}">{{ trans('messages.subscription') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::route('catalogue') }}">{{ trans('messages.catalogue') }}</a>
                                            </li>
                                            {{--                                                <li>--}}
                                            {{--                                                    <a href="{{ URL::route('payment') }}">{{ trans('messages.payment') }}</a>--}}
                                            {{--                                                </li>--}}
                                            <li>
                                                <a href="{{ URL::route('contact') }}">{{ trans('messages.contact') }}</a>
                                            </li>


                                            <!-- Language Dropdown -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                   role="button" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <!-- Display the current language in the navbar -->
                                                    <span class="lang-icon">
                    @if (App::getLocale() == 'en')
                                                            🇺🇸
                                                        @elseif (App::getLocale() == 'es')
                                                            🇪🇸
                                                        @elseif (App::getLocale() == 'fr')
                                                            🇫🇷
                                                        @endif
                </span>
                                                    <!-- Display the language name based on the current locale -->
                                                    @if (App::getLocale() == 'en')
                                                        English
                                                    @elseif (App::getLocale() == 'es')
                                                        Español
                                                    @elseif (App::getLocale() == 'fr')
                                                        Français
                                                    @endif
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <!-- Provide links for the other languages -->
                                                    @if (App::getLocale() != 'en')
                                                        <a class="dropdown-item" href="{{ url('/language/en') }}">
                                                            🇺🇸 English
                                                        </a>
                                                    @endif
                                                    @if (App::getLocale() != 'es')
                                                        <a class="dropdown-item" href="{{ url('/language/es') }}">
                                                            🇪🇸 Español
                                                        </a>
                                                    @endif
                                                    @if (App::getLocale() != 'fr')
                                                        <a class="dropdown-item" href="{{ url('/language/fr') }}">
                                                            🇫🇷 Français
                                                        </a>
                                                    @endif
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>


                                    <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                            class="far fa-bars"></i></button>
                                </div>
                                <div class="col-auto d-none d-xl-block">
                                    <div class="header-button">
                                        <a href="{{ URL::route('contact') }}" class="th-btn style3 ml-25">
                                            {{ trans('messages.get_a_quote') }} <i class="fas fa-arrow-right ms-2"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Content -->
@yield('content')
<footer class="footer-wrapper footer-layout3">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ URL::route('index') }}"><img
                                        src="{{asset('assets/img/logo-white.png')}}" alt=""></a>
                            </div>
                            <p class="about-text">{{ trans('messages.footer_description') }}</p>
                            <div class="th-social">
                                <h6 class="title text-white">{{ trans('messages.follow_us') }}:</h6>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/datikmytv/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://api.whatsapp.com/send/?phone=12393808336&text&type=phone_number&app_absent=0"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget style2">
                        <h3 class="widget_title">{{ trans('messages.resources') }}</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a></li>
                                <li><a href="{{ URL::route('about') }}">{{ trans('messages.about') }}</a></li>
                                <li><a href="{{ URL::route('subscription') }}">{{ trans('messages.subscription') }}</a>
                                </li>
                                <li><a href="{{ URL::route('catalogue') }}">{{ trans('messages.catalogue') }}</a></li>
                                {{--                                    <li><a href="{{ URL::route('payment') }}">{{ trans('messages.payment') }}</a></li>--}}
                                <li><a href="{{ URL::route('contact') }}">{{ trans('messages.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget style2">
                        <h3 class="widget_title">{{ trans('messages.contact_us') }}</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li>
                                    <a href="https://wa.me/12393808336?text=Hello%20I%27m%20sending%20this%20message%20from%20UBCOURSE%20Website%20">{{ trans('messages.whatsapp') }}</a>
                                </li>
                                <li><a href="https://www.instagram.com/datikmytv/">{{ trans('messages.instagram') }}</a>
                                </li>
                                <li><a href="{{ URL::route('contact') }}">{{ trans('messages.facebook') }}</a></li>
                                <li><a href="mailto:info.datikiptv@gmail.com">{{ trans('messages.send_gmail') }}</a>
                                </li>
                                <li><a href="{{ URL::route('contact') }}">{{ trans('messages.youtube') }}</a></li>
                                <li><a href="tel:+12393808336">{{ trans('messages.call_now') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget style2">
                        <h3 class="widget_title">{{ trans('messages.catalogue') }}</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li>
                                    <a href="{{ URL::route('catalogue') }}">{{ trans('messages.formuler_z11_pro_max') }}</a>
                                </li>
                                <li><a href="{{ URL::route('catalogue') }}">{{ trans('messages.formuler_z11_pro') }}</a>
                                </li>
                                <li><a href="{{ URL::route('catalogue') }}">{{ trans('messages.formuler_z_mini') }}</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('catalogue') }}">{{ trans('messages.formuler_ir1_remote') }}</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('catalogue') }}">{{ trans('messages.long_formuler_remote') }}</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('catalogue') }}">{{ trans('messages.mini_keyboard_dreamlink_palm_remo_7') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap bg-title">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">{{ trans('messages.copyright_text') }} <a
                            href="https://datik-iptv.com/">{{ trans('messages.company_name') }}</a></p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="whatsapp-container">
                        <button class="contact-button">
                            <a href="https://wa.me/12393808336?text=Hello%20I%27m%20sending%20this%20message%20from%20UBCOURSE%20Website%20"
                               target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <span class="red-dot"></span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--********************************
        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<!-- <div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div> -->
<!--==============================
All Js File
============================== -->
<!-- Jquery -->
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Circle Progress -->
<script src="{{asset('assets/js/circle-progress.js')}}"></script>
<!-- Range Slider -->
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<!-- Isotope Filter -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Tilt JS -->
<script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
<!-- Tweenmax JS -->
<script src="{{asset('assets/js/tweenmax.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('assets/js/nice-select.min.js')}}"></script>

<!-- Main Js File -->
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('additional-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
</script>

</body>

</html>
