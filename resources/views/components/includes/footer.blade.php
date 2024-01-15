<footer class="footer">
    <div class="container">
        <div class="footer_top">
            <a class="logo footer_top-logo d-inline-flex align-items-center" href="/">
                <span class="logo_icon">
                    <img src="{{ asset('assets/svg/logo.svg') }}" alt="Sitech" />
                </span>
                <span class="logo_text h2">{{ $settings->app_name }}</span>
            </a>
            <ul class="footer_top-nav d-flex flex-wrap">
                <li class="footer_top-nav_link">
                    <a class="link h5 @if(Request::url()== url('/blog')) current @endif" href="{{ route('blog') }}" wire:navigate>
                         News
                        <i class="icon-arrow-left icon arrow-rotate"></i>
                    </a>
                </li>
                <li class="footer_top-nav_link">
                    <a class="link h5 @if(Request::url()== url('/FAQ')) current @endif" href="{{ route('faq') }}" wire:navigate>
                         F.A.Q.
                        <i class="icon-arrow-left icon arrow-rotate"></i>
                    </a>
                </li>
                <li class="footer_top-nav_link">
                    <a class="link h5 @if(Request::url()== url('/blog')) current @endif" href="#">
                        Terms And Conditions
                        <i class="icon-arrow-left icon arrow-rotate"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer_bottom">
            <div class="footer_bottom-contacts d-flex flex-column">
                <a class="link" href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                <a class="link" href="tel:{!! $settings->phone !!}">{{ $settings->phone }}</a>
            </div>
            <div class="footer_bottom-socials">
                <ul class="footer_bottom-socials_list socials d-flex flex-wrap">
                    <li class="socials-item">
                        <a class="link" href="{{ $settings->facebook }}" target="_blank" rel="noopener noreferrer">
                            <i class="icon-facebook icon"></i>
                        </a>
                    </li>
                    <li class="socials-item">
                        <a class="link" href="{{ $settings->instagram }}" target="_blank" rel="noopener noreferrer">
                            <i class="icon-instagram icon"></i>
                        </a>
                    </li>
                    <li class="socials-item">
                        <a class="link" href="{{ $settings->linkedin }}" target="_blank" rel="noopener noreferrer">
                            <i class="icon-linkedin icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="footer_copyright">Copyright &copy; <span id="currentYear"></span> {{ $settings->app_name }}</p>
    </div>
    <a class="footer_scroll" id="scrollToTop" href="#">
        <i class="icon-arrow-up icon"></i>
    </a>
</footer>
