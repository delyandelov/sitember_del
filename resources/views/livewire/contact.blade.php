<div>
    <!-- contact content start -->
    <main>
        <div class="page">
            <div class="container">
                <ul class="breadcrumbs d-flex flex-wrap">
                    <li class="breadcrumbs_item">
                        <a class="link" href="/">Начало</a>
                    </li>
                    <li class="breadcrumbs_item current">
                        <span id="currentpage">Контакти</span>
                    </li>
                </ul>
            </div>
            <div class="container d-md-flex">
                <div class="page_main">
                    <h5 class="page_main-subtitle">Contact Us</h5>
                    <div class="wrapper mt-0">
                        <span class="tw-height h2">
                            <span class="text">We'd love to help you</span>
                        </span>
                        <h2 class="page_main-title type" data-text="We'd love to help you">We'd love to help you</h2>
                    </div>
                </div>
                <div class="page_media">
                    <img class="page_media-img" src="{{ asset('assets/svg/herocontact.svg') }}" alt="Contact Us" />
                </div>
            </div>
        </div>

        <div class="contact section">
            <div class="container d-lg-flex align-items-stretch">
                <div class="contact_map">
                    <div id="map"></div>
                </div>
                <ul class="contact_info d-flex flex-column flex-md-row flex-lg-column flex-wrap">
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header" data-aos="fade-up">Office Locations:</h5>
                        <div class="contact_info-item_content" data-aos="fade-up" data-aos-delay="50">
                            <div class="wrapper">
                                <span>9706 S. Mayfield Lane</span>
                                <span>Bemidji, MN 56601</span>
                            </div>
                            <div class="wrapper">
                                <span>12 The Copse, Sutton-in-Ashfield, </span>
                                <span>England United Kingdom</span>
                            </div>
                        </div>
                    </li>
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header" data-aos="fade-up">Phone Numbers:</h5>
                        <div class="contact_info-item_content" data-aos="fade-up" data-aos-delay="50">
                            <div class="wrapper">
                                <a class="link" href="tel:+1234567890">+1-302-555-0134</a>
                                <a class="link" href="tel:+1234567890">+1-602-555-0134</a>
                            </div>
                        </div>
                    </li>
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header" data-aos="fade-up">Send Us a Message:</h5>
                        <div class="contact_info-item_content" data-aos="fade-up" data-aos-delay="50">
                            <ul class="socials d-flex">
                                <li class="socials-item">
                                    <a class="link" href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-facebook icon"></i>
                                    </a>
                                </li>
                                <li class="socials-item">
                                    <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-instagram icon"></i>
                                    </a>
                                </li>
                                <li class="socials-item">
                                    <a class="link" href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-twitter icon"></i>
                                    </a>
                                </li>
                                <li class="socials-item">
                                    <a class="link" href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-linkedin icon"></i>
                                    </a>
                                </li>
                                <li class="socials-item">
                                    <a class="link" href="https://whatsapp.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-whatsapp icon"></i>
                                    </a>
                                </li>
                            </ul>
                            <a class="link link--underline" href="mailto:example@domain.com">sitechcompany@email.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- feedback section start -->
        <section class="feedback section">
            <div class="feedback_shapes">
                <div class="shape shape--left">
                    <img src="{{ asset('assets/svg/bgshape_white2.svg') }}" alt="shape" />
                </div>
                <div class="shape shape--right">
                    <img src="{{ asset('assets/svg/bgshape_white.svg') }}" alt="shape" />
                </div>
            </div>
            <div class="container d-lg-flex align-items-center justify-content-between">
                <div class="feedback_main">
                    <div class="feedback_main-header">
                        <div class="wrapper">
                            <span class="tw-height h4">
                                <span class="text">Ask us any</span>
                            </span>
                            <h4 class="feedback_main-header_title type" data-text="Ask us any">Ask us any</h4>
                        </div>
                        <p class="feedback_main-header_text">
                            Suspendisse ligula magna, laoreet non egestas ac, lobortis at nulla. Suspendisse efficitur neque nec neque
                            porttitor tincidunt. Donec iaculis lacus vitae velit finibus ullamcorper
                        </p>
                    </div>
                    <form class="feedback_main-form form d-flex flex-column" action="form.php" method="post" data-type="feedback">
                        <input class="field required" type="text" id="feedbackName" name="feedbackName" placeholder="Name" />
                        <input
                            class="field required"
                            type="text"
                            data-type="email"
                            id="feedbackEmail"
                            name="feedbackEmail"
                            placeholder="E-mail"
                        />
                        <textarea
                            class="field required"
                            name="feedbackMessage"
                            id="feedbackMessage"
                            placeholder="Type your message here…"
                        ></textarea>
                        <button class="btn btn--neon" type="submit">Send</button>
                    </form>
                </div>
                <div class="feedback_media">
                    <div class="media">
                        <lottie-player
                            class="lottie"
                            src="{{ asset('assets/lottie/paperplane.json') }}"
                            background="transparent"
                            speed=".5"
                            style="width: 100%; height: 100%"
                            loop
                            autoplay
                        ></lottie-player>
                        <img class="feedback_img" src="{{ asset('assets/svg/feedback.svg') }}" alt="The Fastest Web Solutions" />
                    </div>
                </div>
            </div>
        </section>
        <!-- feedback section end -->
    </main>
    <!-- contact content end -->

    @push('headScripts')
        <!-- loaded only on the index page-->
        <script src="{{ asset('assets/js/ticker.min.js') }}"></script>
        <script src="{{ asset('assets/js/map.min.js') }}"></script>
    @endpush

</div>
