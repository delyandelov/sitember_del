@include('components.includes.head')

<body class="antialiased">

    @include('components.includes.header')

    <main>
        <section id="home" class="parallax p-0 mobile-height wow animate__fadeIn" data-parallax-background-ratio="0.5"
            style="background-image:url({{ asset('assets/images/tn-bg.jpg') }});">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container mx-auto sm:px-4 relative full-screen">
                <div class="flex flex-wrap  h-full items-center">
                    <div class="w-full text-center">
                        <div class="bg-black-opacity-light w-1/2 mx-auto md-w-80 xs-w-95">
                            <div class="padding-fifteen-all sm-padding-twelve-all xs-padding-25px-all">
                                <span
                                    class="title-extra-large text-white-2 font-weight-600 block margin-30px-bottom sm-margin-10px-bottom text-red-700">404!</span>
                                <h6 class="uppercase text-deep-pink font-weight-600 alt-font block margin-5px-bottom">
                                    {{ __('Page Not Found') }}</h6>
                                <span
                                    class="text-medium-gray w-60 block mx-auto text-large md-w-100 margin-30px-bottom ">{{ __('The page you were looking for could not be found.') }}</span>
                                <a href="/"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-transparent-white btn-medium text-extra-small border-radius-4"><i
                                        class="ti-arrow-left margin-5px-right ms-0" aria-hidden="true"></i>
                                    {{ __('Back To Homepage') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</body>

</html>
