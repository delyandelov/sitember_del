@section('title', 'Contact - Sitember.com')
<div>
    <!-- contact content start -->
    <main>
        <div class="page">
            <div class="container d-md-flex">
                <div class="page_main">
                    <span class="page_main-subtitle">Contact Us</span>
                    <div class="wrapper mt-0">
                        <span class="tw-height h1">
                            <span class="text">We'd love to help you</span>
                        </span>
                        <h1 class="page_main-title type" data-text="We'd love to help you">We'd love to help you</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact section">
            <div class="container d-lg-flex align-items-stretch">
                <div class="contact_map">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94665.26395253466!2d24.658473838981458!3d42.144091420868136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd108a248763d%3A0x6470d1fa6f1338a0!2z0J_Qu9C-0LLQtNC40LI!5e0!3m2!1sbg!2sbg!4v1707834036190!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <ul class="contact_info unstyled d-flex flex-column flex-md-row flex-lg-column flex-wrap">
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header">Address:</h5>
                        <div class="contact_info-item_content">
                            <div class="wrapper">
                                <span>{{ $settings->address }}</span>
                                <span>{{ $settings->city }}, {{ $settings->country }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header">Contact Info:</h5>
                        <div class="contact_info-item_content">
                            <div class="wrapper">
                                <a class="link" href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                                <a class="link link--underline" href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="contact_info-item">
                        <h5 class="contact_info-item_header">Social:</h5>
                        <div class="contact_info-item_content">
                            <ul class="socials unstyled d-flex">
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
                    </li>
                </ul>
            </div>
        </div>

        <!-- feedback section start -->
        <section class="feedback section">
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
                    @if (Session::has('message'))
                        <div class="btn--neon mb-4" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form class="feedback_main-form form d-flex flex-column" wire:submit='sendMessage'>
                        @csrf
                        @method('POST')
                        <input class="field required" type="text" placeholder="Name" wire:model='name'/>
                        @error('name')<p class="text-red-500">{{ $message }}</p>@enderror

                        <input class="field required" type="text" placeholder="Phone" wire:model='phone'/>
                        @error('name')<p class="text-red-500">{{ $message }}</p>@enderror

                        <input
                            class="field required"
                            type="text"
                            data-type="email"
                            name="feedbackEmail"
                            placeholder="E-mail"
                            wire:model='email'
                        />
                        @error('email')<p class="text-red-500">{{ $message }}</p>@enderror
                        <textarea
                            class="field required"
                            name="feedbackMessage"
                            placeholder="Type your message here…"
                            wire:model='comment'
                        ></textarea>
                        @error('comment')<p class="text-red-500">{{ $message }}</p>@enderror
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
