<header class="header d-lg-flex align-items-center" data-page="home" data-page-parent="home">
    <div class="container d-flex align-items-center flex-wrap flex-lg-nowrap">
        <a class="logo header_logo d-inline-flex align-items-center" href="/">
            <span class="logo_icon">
                <img src="{{ asset('assets/svg/logo.png') }}" alt="Sitember" />
            </span>
            <span class="logo_text h2">itember</span>
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
                        data-single="true"
                        data-page="services"
                        wire:navigate
                    >
                        <span class="nav-item_text">
                            Services
                        </span>
                    </a>
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
