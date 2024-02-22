@section('title', 'Services - Sitember.com')
<div>
    <!-- services content start -->
    <main>
        <div class="page">
            <div class="container d-md-flex">
                <div class="page_header">
                    <div class="wrapper">
                        <span class="tw-height h1">
                            <span class="text">{{ $servicesPage->page_title }}</span>
                        </span>
                        <h1 class="page_header-title type" data-text="Services">{{ $servicesPage->page_title }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="services_list d-flex flex-column no-styled">
                @foreach ($services as $key => $service )
                    <li class="services_list-item" id="service0" data-aos="fade-right" data-aos-duration="800">
                        <div class="media">
                            <picture>
                                <source data-srcset="{{ $service->getFirstMediaURL('services') }}" srcset="{{ $service->getFirstMediaURL('services') }}" type="image/webp" />
                                <img
                                    class="lazy"
                                    data-src="{{ $service->getFirstMediaURL('services') }}"
                                    src="{{ $service->getFirstMediaURL('services') }}"
                                    alt="{{ $service->name }}"
                                />
                            </picture>
                            <span class="media_icon">
                                <i class="{{ $service->icon_name }} icon"></i>
                            </span>
                        </div>
                        <div class="main">
                            <h4 class="main_title">{{ $service->name }}</h4>
                            <div class="main_text">
                                {!! $service->description !!}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

    <!-- services content end -->
</div>
