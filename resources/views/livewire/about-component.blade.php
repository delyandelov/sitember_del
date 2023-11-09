<div>
    <!-- about page content start -->
    <main>
        <div class="services">
            <div class="container section">
                <ul class="breadcrumbs d-flex flex-wrap mb-xl">
                    <li class="breadcrumbs_item">
                        <a class="link" href="/">Home</a>
                    </li>

                    <li class="breadcrumbs_item current">
                        <span id="currentpage">About Us</span>
                    </li>
                </ul>

                <div class="title-wrapper">
                    <span class="tw-height h4">
                        <span class="text">{{ $about->heading }}</span>
                    </span>
                    <h4 class="about_main-title type" data-text="Кои сме ние?">
                        {{ $about->heading }}
                    </h4>
                </div>

                <ul class="services_list justify-content-between">
                    <li class="wrapper" data-aos="fade-up">
                        <div class="services_list-item d-flex flex-column">
                            <picture class="mb-m">
                                <source data-srcset="{{ asset('assets/img/placeholder.jpg') }}" srcset="{{ asset('assets/img/placeholder.jpg') }}" />
                                <img class="lazy doge" data-src="{{ asset('assets/img/placeholder.jpg') }}" src="{{ asset('assets/img/placeholder.jpg') }}" alt="Site Member" />
                            </picture>
                            <span class="title h5">Site Member</span>
                            <p class="text">
                                CEO
                            </p>
                        </div>
                    </li>
                    <li class="wrapper" data-aos="fade-up" data-aos-delay="50">
                        <div class="services_list-item d-flex flex-column">
                            <picture class="mb-m">
                                <source data-srcset="{{ asset('assets/img/placeholder.jpg') }}" srcset="{{ asset('assets/img/placeholder.jpg') }}" />
                                <img class="lazy doge" data-src="{{ asset('assets/img/placeholder.jpg') }}" src="{{ asset('assets/img/placeholder.jpg') }}" alt="Петя Димитрова" />
                            </picture>
                            <span class="title h5">Петя Димитрова</span>
                            <p class="text">
                            CTO
                            </p>
                        </div>
                    </li>
                    <li class="wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="services_list-item d-flex flex-column">
                            <picture class="mb-m">
                                <source data-srcset="{{ asset('assets/img/placeholder.jpg') }}" srcset="{{ asset('assets/img/placeholder.jpg') }}" />
                                <img class="lazy doge" data-src="{{ asset('assets/img/placeholder.jpg') }}" src="{{ asset('assets/img/placeholder.jpg') }}" alt="Делян Делов" />
                            </picture>
                            <span class="title h5">Делян Делов</span>
                            <p class="text">
                                Manager
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="page_header">
                            <h2 class="page_header-title type" data-text="About Us">{{ $about->title }}</h2>
                            <span class="tw-height h2">
                                <span class="text">{{ $about->title }}</span>
                            </span>

                            <h5 class="page_header-subtitle">{{ $about->subtitle }}</h5>
                        </div>
                        <p>
                            {!! $about->content !!}
                        </p>
                    </div>
                    <div class="col-6">
                        <picture>
                            <source data-srcset="{{ asset('assets/svg/Illustartion1.svg') }}" srcset="{{ asset('assets/svg/Illustartion1.svg') }}" />
                            <img class="lazy doge" data-src="{{ asset('assets/svg/Illustartion1.svg') }}" src="{{ asset('assets/svg/Illustartion1.svg') }}" alt="doge" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        {{-- TODO: WE MUST DECIDE IF THESE NUMBERS SHOULD BE ON THE ABOUT PAGE
        <div class="services">
            <div class="container section">
                <div class="services_content d-lg-flex align-items-center">
                    <ul class="services_content-numbers d-flex flex-row justify-content-center">
                        <li class="block">
                            <h6 class="label">Advanced Solutions for Startups</h6>
                            <span class="countNum h1" data-value="240" data-suffix="+">0</span>
                        </li>
                        <li class="block">
                            <h6 class="label">Investors on-boarded on the platform</h6>
                            <span class="countNum h1" data-value="1720">0</span>
                        </li>
                        <li class="block">
                            <h6 class="label">Promotion cases and new products</h6>
                            <span class="countNum h1" data-value="8100" data-suffix="+">0</span>
                        </li>
                        <li class="block">
                            <h6 class="label">Promotion cases and new products</h6>
                            <span class="countNum h1" data-value="8100" data-suffix="+">0</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        --}}
    </main>
    <!-- about page content end -->
    {{-- @push('headScripts')
        <script src="{{ asset('assets/js/common.min.js') }}"></script>
    @endpush --}}

</div>
