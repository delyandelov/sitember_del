<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="TN">
    <title>{{ $title ?? 'Начало | Sitember' }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}



     <!-- Javascript -->
     <script src="{{ asset('assets/js/common.min.js') }}"></script>
     <script src="{{ asset('assets/js/common_navigated.min.js') }}" defer></script>
     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

     <!-- loaded only on the index page-->
     <script src="{{ asset('assets/js/projects.min.js') }}"></script>
     <script src="{{ asset('assets/js/testimonials.min.js') }}"></script>

</head>
