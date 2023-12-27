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
                    <h4 class="about_main-title type" data-text="{{ $about->heading }}">
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
                            <span class="title h5">Rumen Angelov</span>
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
                            <span class="title h5">Petya Dimitrova</span>
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
                            <span class="title h5">Delyan Delov</span>
                            <p class="text">
                                Manager
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page about-page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="page_header">
                            <h2 class="page_header-title type" data-text="{{ $about->title }}">{{ $about->title }}</h2>
                            <span class="tw-height h2">
                                <span class="text">{{ $about->title }}</span>
                            </span>
                        </div>
                        <div class="main">
                            {!! $about->content !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="main">
                            <h4>What Sets Us Apart:</h4>
                            <ul>
                            <li><strong>Innovation Unleashed: </strong>We're not just imitators; we create trends. Our team lives for getting the edge, always hunting out new technologies and methods of design to create digital products that aren't merely up-to-date but also state of the art.</li>
                            <li><strong>Client-Centric Approach:</strong> Your success is our success. The relationships we build with our clients are strong and collaborative. Starting with the initial consultation through project delivery and beyond, we stress open dialogues and transparency.</li>
                            <li><strong>Craftsmanship in Every Line of Code:</strong> Developers don't simply write code, they carve digital experiences. Every line of code is carefully crafted for maximum performance, security and scalability.</li>
                            <li><strong>Design with Purpose:</strong> Our design philosophy: Aesthetics, meeting functionality.&nbsp;We hold that good design should perfectly match the user's experience, to produce a pleasant digital environment.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="process">
            <div class="container d-flex flex-column-reverse flex-xl-row">
                <div class="process_list">
                    <div class="title-wrapper container text-right">
                        <span class="tw-height h4">
                            <span class="text">Our Process</span>
                        </span>
                        <h4 class="about_main-title type" data-text="Our Process">
                            Our Process
                        </h4>
                    </div>

                    <div class="process_boxes d-flex">
                        <div class="wrapper" data-aos="fade-up" data-aos-delay="50">
                            <span class="number">1</span>
                            <div class="main">
                                <h5>Initial discussion on the:</h5>
                                <ul>
                                    <li>Idea</li>
                                    <li>Concept</li>
                                    <li>Branding</li>
                                    <li>Requirements</li>
                                </ul>
                            </div>
                        </div>

                        <div class="wrapper" data-aos="fade-up" data-aos-delay="200">
                            <span class="number">2</span>
                            <div class="main">
                                <h5>Working on the design with 3 different visions</h5>
                            </div>
                        </div>

                        <div class="wrapper" data-aos="fade-up" data-aos-delay="350">
                            <span class="number">3</span>
                            <div class="main">
                                <h5>Choosing the design and finalizing the details</h5>
                            </div>
                        </div>

                        <div class="wrapper" data-aos="fade-up" data-aos-delay="500">
                            <span class="number">4</span>
                            <div class="main">
                                <h5>Backend development and design revival</h5>
                            </div>
                        </div>

                        <div class="wrapper" data-aos="fade-up" data-aos-delay="650">
                            <span class="number">5</span>
                            <div class="main">
                                <h5>Final meeting with presentation of the completed site</h5>
                            </div>
                        </div>
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
</div>
