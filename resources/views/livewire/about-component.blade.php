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
                        <span class="text">{{ $about->title }}</span>
                    </span>
                    <h2 class="about_main-title type" data-text="{{ $about->title }}">
                        {{ $about->title }}
                    </h2>
                </div>

                <div class="row">
                    @foreach ($members as $member)
                        <div class="col-md-4">
                            <div class="d-flex flex-column" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                                <img src="{{ $member->getFirstMediaURL('member') }}" class="mb-m" alt="{{ $member->name }}" />
                                <span class="title h4 text-center">{{ $member->name }}</span>
                                <p class="text-center">
                                    {{ $member->position }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="page about-page">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-6">
                        <div class="main">
                            {!! $about->content_1 !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="main">
                            {!! $about->content_2 !!}
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
                            <span class="text">{{ $about->process_title }}</span>
                        </span>
                        <h3 class="about_main-title type" data-text="{{ $about->process_title }}">
                            {{ $about->process_title }}
                        </h3>
                    </div>

                    <div class="process_boxes d-flex">
                        @foreach ($process->process_phases as $key => $phase )
                            <div class="wrapper" data-aos="fade-up" @if(!$loop->first) data-aos-delay="200" data-aos-duration="800" @endif>
                                <span class="number">{{ $key + 1}}</span>
                                <div class="main">
                                    <h5>{!! $phase['title'] !!}</h5>
                                    {!! $phase['description'] !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- about page content end -->
</div>
