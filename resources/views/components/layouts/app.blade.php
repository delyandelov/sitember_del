<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.includes.head')

<body class="bs-effect-scroll">
    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    @include('components.includes.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            {{ $slot }}

            @include('components.includes.footer')
        </div>
    </div>

    @include('cookie-consent::index')

    <script>
        window.addEventListener('livewire:navigated', () => {
        window.scrollTo({ top: 0 });
        });
    </script>

</body>

</html>
