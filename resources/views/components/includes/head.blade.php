<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="title" content="@yield('metatitle')">
    <meta name="description" content="@yield('metadescription')">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

     <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

     <!-- loaded only on the index page-->
     @if(Request::url()== url('/'))

     @endif

    @yield('headScrips')
</head>
