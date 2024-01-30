<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.includes.head')

<body>
    @include('components.includes.header')

    {{ $slot }}

    @include('components.includes.footer')

    @include('cookie-consent::index')

    <script>
        window.addEventListener('livewire:navigated', () => {
        window.scrollTo({ top: 0 });
        });
    </script>

</body>

</html>
