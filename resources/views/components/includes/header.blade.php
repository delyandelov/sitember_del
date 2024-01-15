<header class="header d-lg-flex align-items-center" data-page="home" data-page-parent="home">
    <div class="container d-flex align-items-center flex-wrap flex-lg-nowrap">
        <a class="logo header_logo d-inline-flex align-items-center" href="/">
            <span class="logo_icon">
                <img src="{{ asset('assets/svg/logo.svg') }}" alt="Sitember" />
            </span>
            <span class="logo_text h5">Sitember</span>
        </a>
        <nav class="header_nav collapse" id="headerMenu">
            <ul class="header_nav-list">
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link @if(Request::url()== url('/')) current @endif" href="/">
                        <span class="nav-item_text">
                            Home
                        </span>
                        <i class="icon-arrow-left icon arrow-rotate"></i>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link @if(Request::url()== url('/about')) current @endif" href="{{ route('about') }}" data-page="about" data-single="true" wire:navigate>
                        <span class="nav-item_text">About Us</span>
                    </a>
                </li>
                <li class="header_nav-list_item dropdown">
                    <a
                        class="nav-link nav-item dropdown-toggle d-flex align-items-center justify-content-between @if(Request::url()== url('/services')) current @endif"
                        href="{{ route('services') }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#servicesMenu"
                        data-trigger="dropdown"
                        data-page-parent="services"
                        data-main-link="true"
                        aria-expanded="false"
                        aria-controls="servicesMenu"
                        data-page="services"
                        wire:navigate
                    >
                        <span class="nav-item_text">
                            Services
                            <i class="icon-circle icon"></i>
                        </span>
                        <i class="icon-arrow-left icon arrow-rotate"></i>
                    </a>
                    <div class="dropdown-menu collapse" id="servicesMenu">
                        <ul class="dropdown-list">
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Web Development
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    UX & UI Design
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Brand Identity
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Ecommerce solutions
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Responsive Web
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    SEO Optimization
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    User Testing
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Prototyping
                                </a>
                            </li>
                            <li class="list-item">
                                <a
                                    class="dropdown-item nav-item"
                                    data-page="service"
                                    data-page-parent="services"
                                    href="service.html"
                                >
                                    Graphic Design
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link @if(Request::url()== url('/prices')) current @endif" href="{{ route('plans') }}" data-page="plans" data-single="true" wire:navigate>
                        <span class="nav-item_text">Plans</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link @if(Request::url()== url('/projects')) current @endif" href="{{ route('projects') }}" data-page="projects" data-single="true" wire:navigate>
                        <span class="nav-item_text">Portfolio</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link @if(Request::url()== url('/contact')) current @endif" href="{{ route('contact') }}" data-page="contact" data-single="true" wire:navigate>
                        <span class="nav-item_text">Contact Us</span>
                    </a>
                </li>
                <li class="header_nav-list_btn">
                    <a class="btn signUpTrigger" href="#">Get a Quote</a>
                </li>
            </ul>
        </nav>
        <a class="header_btn btn btn--neon signUpTrigger" href="#">Get a Quote</a>
        <button
            class="header_trigger"
            id="headerTrigger"
            data-bs-toggle="collapse"
            data-bs-target="#headerMenu"
            aria-controls="headerMenu"
            aria-expanded="false"
            type="button"
        >
            <i class="icon-arrow-left icon arrow-rotate"></i>
        </button>
    </div>
</header>
