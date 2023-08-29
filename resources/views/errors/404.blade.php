@include('components.includes.head')

<body class="antialiased">

    @include('components.includes.header')

   <!-- page 404 content start -->
   <main class="error">
    <div class="stripe d-flex align-items-center">

        <div class="ticker h3" id="ticker"></div>
        <!--  ticker content changes here  -->
        <div class="d-none">
            <span class="ticker-item">Page Not Found</span>
            <span class="ticker-item">404</span>
            <span class="ticker-item">Page Not Found</span>
            <span class="ticker-item">404</span>
            <span class="ticker-item">Page Not Found</span>
            <span class="ticker-item">404</span>
        </div>
        <!--  ticker content changes here  -->
    </div>

    <div class="error_content container d-flex flex-column align-items-center">
        <a class="error_btn btn btn--neon" href="index.html">Back to Home Page</a>
        <img class="error_media" src="{{ asset('assets/svg/joinman.svg') }}" alt="Page Not Found" />
    </div>
</main>
<!-- page 404 content end -->
<script src="{{ asset('assets/js/error.min.js') }}"></script>
<script src="{{ asset('assets/js/ticker.min.js') }}"></script>


</body>

</html>
