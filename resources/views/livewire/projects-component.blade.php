@section('title', 'Portfolio - Sitember.com')
<div>
    <!-- Porfolio content start -->
    <main>
        <div class="page">
            <div class="container d-md-flex">
                <div class="page_main">
                    <span class="page_main-subtitle">Projects</span>
                    <div class="wrapper mt-0">
                        <span class="tw-height h1">
                            <span class="text">We would like to present<br/> some of Our Work</span>
                        </span>
                        <h1 class="page_main-title type" data-text="Solutions for Your business">We would like to present<br/> some of Our Work</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Porfolio section start -->
        <section class="section">
            <div class="container">
                    <ul class="tabs d-flex justify-content-center">
                        <li class="tab join_btn btn btn--white active" rel="tab1">Website Development & Ecommerce</li>
                        <li class="tab join_btn btn btn--white" rel="tab2">Graphic Design & Brand Identity</li>
                        <li class="tab join_btn btn btn--white" rel="tab3">Prototyping Projects</li>
                    </ul>

                    <div class="tab_container">
                        <div id="tab1" class="tab_content" data-aos="fade-up" data-aos-duration="800">
                            <div class="row">
                                <div class="col-md-4 box">
                                    <a href="http://127.0.0.1:8000/projects/biohub" title="Biohub Group" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                alt="Biohub Group"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Biohub Group© </h4>
                                            <p>December 2023</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="HiSky LTD." class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                alt="HiSky LTD."
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>HiSky LTD.</h4>
                                            <p>September 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Navistart" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                alt="Navistart"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Navistart</h4>
                                            <p>October 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="VSG" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/vsg-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/vsg-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/vsg-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/vsg-cover.jpg') }}"
                                                alt="VSG"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>VSG</h4>
                                            <p>January 2024</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Grow Remotes" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/grow-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/grow-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/grow-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/grow-cover.jpg') }}"
                                                alt="Grow Remotes"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Grow Remotes</h4>
                                            <p>July 2021</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Claas Isensee Consulting" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/claasisensee-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/claasisensee-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/claasisensee-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/claasisensee-cover.webp') }}"
                                                alt="Claas Isensee Consulting"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Claas Isensee Consulting</h4>
                                            <p>January 2019</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Association Education and health" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/edchild-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/edchild-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/edchild-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/edchild-cover.webp') }}"
                                                alt="Association Education and health"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Association "Education and health"</h4>
                                            <p>May 2017</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="GATN - Global Associates Tech Network" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/gatn-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/gatn-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/gatn-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/gatn-cover.webp') }}"
                                                alt="GATN - Global Associates Tech Network"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>GATN - Global Associates Tech Network</h4>
                                            <p>December 2023</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Glow Praxis Berlin" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/glowpraxisberlin-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/glowpraxisberlin-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/glowpraxisberlin-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/glowpraxisberlin-cover.webp') }}"
                                                alt="Glow Praxis Berlin"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Glow Praxis Berlin</h4>
                                            <p>June 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="New Trade" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/newtrade-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/newtrade-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/newtrade-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/newtrade-cover.webp') }}"
                                                alt="New Trade"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>New Trade</h4>
                                            <p>June 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Kinder Garden Vapcarov" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/dg-cover.webp') }}" srcset="{{ asset('assets/img/projects/websites/dg-cover.webp') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/dg-cover.webp') }}"
                                                src="{{ asset('assets/img/projects/websites/dg-cover.webp') }}"
                                                alt="Kinder Garden Vapcarov"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Kinder Garden "Vapcarov"</h4>
                                            <p>June 2017</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="tab2" class="tab_content" data-aos="fade-up" data-aos-duration="800">
                            <div class="row">
                                <div class="col-md-4 box">
                                    <a href="#" title="Biohub Group" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                alt="Biohub Group"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Biohub Group© </h4>
                                            <p>December 2023</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="HiSky LTD." class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                alt="HiSky LTD."
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>HiSky LTD.</h4>
                                            <p>September 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Navistart" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                alt="Navistart"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Navistart</h4>
                                            <p>October 2022</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab_content" data-aos="fade-up" data-aos-duration="800">
                            <div class="row">
                                <div class="col-md-4 box">
                                    <a href="#" title="Biohub Group" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/biohub-cover.jpg') }}"
                                                alt="Biohub Group"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Biohub Group© </h4>
                                            <p>December 2023</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="HiSky LTD." class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/hisky-cover.jpg') }}"
                                                alt="HiSky LTD."
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>HiSky LTD.</h4>
                                            <p>September 2022</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 box">
                                    <a href="#" title="Navistart" class="project-box">
                                        <picture>
                                            <source data-srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" srcset="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}" type="image/webp" />
                                            <img
                                                class="lazy"
                                                data-src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                src="{{ asset('assets/img/projects/websites/navistart-cover.jpg') }}"
                                                alt="Navistart"
                                            />
                                        </picture>
                                        <div class="title">
                                            <h4>Navistart</h4>
                                            <p>October 2022</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- Porfolio section end -->

    </main>
    <!-- Porfolio content end -->
</div>
