<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.includes.head')

<body>
    {{ $slot }}

    @vite('resources/js/app.js')
</body>

</html>
