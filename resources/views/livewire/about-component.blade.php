@section('title', 'About - Sitember.com')
@section('metatitle', 'About - Sitember.com')
@section('metadescription', 'Discover the essence of SITEMBER - a leading website development company committed to crafting digital experiences that transcend expectations. Uncover our journey, values, and the passion driving our team to redefine the online landscape. Explore our About page for a glimpse into the innovation, expertise, and collaborative spirit that sets SITEMBER apart in the world of web development.')
<div>
    <!-- about page content start -->
    <main>
        <section class="section team">
            <div class="container section">
                <div class="title-wrapper">
                    <span class="tw-height h4">
                        <span class="text">{{ $about->heading }}</span>
                    </span>
                    <h2 class="about_main-title type" data-text="{{ $about->heading }}">
                        {{ $about->heading }}
                    </h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('assets/img/placeholder.jpg') }}" class="mb-m" alt="Delyan Delov" />
                            <span class="title h4 text-center">Delyan Delov</span>
                            <p class="text-center">
                                CEO & DevOps
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('assets/img/placeholder.jpg') }}" class="mb-m" alt="Petya Dimitrova" />
                            <span class="title h4 text-center">Petya Dimitrova</span>
                            <p class="text-center">
                            PM & Design
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('assets/img/placeholder.jpg') }}" class="mb-m" alt="Rumen Angelov" />
                            <span class="title h4 text-center">Rumen Angelov</span>
                            <p class="text-center">
                               CTO & Development
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page about-page">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-6">
                        <div class="main">
                            {!! $about->content !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="main">
                            <h3>What Sets Us Apart:</h3>
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
        </section>

        <section class="process">
            <div class="container d-flex flex-column-reverse flex-xl-row">
                <div class="process_list">
                    <div class="title-wrapper container text-right">
                        <span class="tw-height h4">
                            <span class="text">Our Process</span>
                        </span>
                        <h3 class="about_main-title type" data-text="Our Process">
                            Our Process
                        </h3>
                    </div>

                    <div class="process_boxes d-flex">
                        <div class="wrapper">
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

                        <div class="wrapper">
                            <span class="number">2</span>
                            <div class="main">
                                <h5>Working on the design with 3 different visions</h5>
                            </div>
                        </div>

                        <div class="wrapper">
                            <span class="number">3</span>
                            <div class="main">
                                <h5>Choosing the design and finalizing the details</h5>
                            </div>
                        </div>

                        <div class="wrapper">
                            <span class="number">4</span>
                            <div class="main">
                                <h5>Backend development and design revival</h5>
                            </div>
                        </div>

                        <div class="wrapper">
                            <span class="number">5</span>
                            <div class="main">
                                <h5>Final meeting with presentation of the completed site</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- about page content end -->
</div>
