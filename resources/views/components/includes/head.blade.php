<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? 'Начало | Sitember' }}</title>

    <link rel="stylesheet preload" as="style" href="{{ asset('assets/css/icomoon.css') }}" />
    <link rel="stylesheet preload" as="style" href="{{ asset('assets/css/libs.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <!-- Javascript -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('assets/js/common.min.js') }}"></script>

    @stack('headScripts')

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
