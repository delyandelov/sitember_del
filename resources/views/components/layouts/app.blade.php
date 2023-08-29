<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.includes.head')

<body>
    @include('components.includes.header')

    {{ $slot }}

    @include('components.includes.footer')

</body>

</html>
