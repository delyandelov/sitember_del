@section('title', 'Sitember.com | SITEMBER: Elevating Digital Horizons with Innovative Web Solutions')
@section('metatitle', 'Sitember.com | SITEMBER: Elevating Digital Horizons with Innovative Web Solutions')
@section('metadescription', 'Discover the essence of SITEMBER - a leading website development company committed to crafting digital experiences that transcend expectations. Uncover our journey, values, and the passion driving our team to redefine the online landscape. Explore our About page for a glimpse into the innovation, expertise, and collaborative spirit that sets SITEMBER apart in the world of web development.')
<div>
    <!-- homepage content start -->
    <main>
        <!-- hero section start -->
        <section class="hero">
            <div class="hero_bg">
                <img class="hero_bg-blue" src="{{ asset('assets/svg/herohome1.svg') }}" alt="{{ $hero->title }}" />
            </div>
            <div class="container d-xl-flex">
                <div class="hero_main">
                    <span class="tw-height h1">
                        <span class="text">{{ $hero->title }}</span>
                    </span>
                    <h1 class="hero_main-title type" data-text="{{ $hero->title }}">{{ $hero->title }}</h1>
                    <div class="hero_main-text">{!! $hero->content !!}</div>
                    <a class="hero_main-btn btn btn--neon signUpTrigger" href="{{ $hero->link }}">{{ $hero->link_text }}</a>
                </div>
                <div class="hero_media">
                    <lottie-player
                        class="lottie" src="{{ asset('assets/lottie/herohome.json') }}"
                        background="transparent" speed=".5" style="width: 100%; height: 100%" loop="" autoplay=""
                    >

                    </lottie-player>
                    <!-- <img class="hero_img" src="{{ asset('assets/svg/Illustartion1.svg') }}" alt="{{ $hero->title }}" /> -->
                </div>
            </div>
        </section>
        <!-- hero section end -->
        <!-- features section start -->
        <div class="index-services">
            <img class="index-services_shape" src="{{ asset('assets/svg/blueshape1.svg') }}" alt="Services" />

            <div class="container d-flex flex-column-reverse flex-xl-row">
                <ul class="index-services_list no-styled">
                    <div class="title-wrapper container text-right">
                        <span class="tw-height h4">
                            <span class="text">{{ $home->services_title }}</span>
                        </span>
                        <h4 class="about_main-title type" data-text="{{ $home->services_title }}">
                            {{ $home->services_title }}
                        </h4>
                    </div>
                    @php
                        $latency = 0;
                    @endphp
                    @foreach ($services as $service)
                    <li class="wrapper" data-aos="fade-up" data-aos-delay="{{ $latency += 50}}">
                        <a class="index-services_list-item d-flex flex-column" href="{{ route('service', $service) }}">
                            <svg id="Layer_1" style="enable-background:new 0 0 52 52;" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg') }}" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path class="st0" d="M15.8192625,25.7860241c6.7972288-0.0258121,15.05865-1.4066772,21.1998291,2.0691891    c-0.0758934-0.5889664-0.1517906-1.1779327-0.227684-1.7668991c-3.0799217,3.1330147-8.6694069,2.4318886-12.7028942,2.4633846    c-1.8578205,0.0145054-3.74123,0.0910206-5.5983486,0.0405865c-1.3415718,0.1214161-2.663228,0.0034733-3.9649696-0.3538284    c-0.5497408-1.3943005-0.096941-2.1322536,1.3584013-2.2138615c1.4471216-0.0124817,1.4505968-2.2625103,0-2.25    c-4.2783813,0.0368958-5.4198055,6.1516418-1.275198,7.0746555c2.2535009,0.5018616,5.3133516-0.0173435,7.6139994-0.0340233    c2.5155334-0.0182381,5.0481052,0.0364265,7.5590229-0.1307812c3.1848831-0.2120895,6.2902374-0.6545715,8.600975-3.0051422    c0.5014153-0.5100574,0.4085617-1.4067898-0.227684-1.766901c-6.6984367-3.7912674-14.9502144-2.4044247-22.3354492-2.376379    C14.3717527,23.5415192,14.3688803,25.7915306,15.8192625,25.7860241L15.8192625,25.7860241z"></path></g><g><path class="st0" d="M19.704319,29.6912441c-0.0900784-2.0298538-0.3766785-4.163353-0.2439785-6.1937904    c0.1052551-1.6105213,0.9817219-1.8018837,2.4386692-1.8950634c1.114315-0.0712643,2.2609539,0.0019569,3.3784695,0.002924    c1.4478207,0.0012512,1.4501114-2.2487469,0-2.25c-2.340271-0.0020256-5.8906975-0.7828712-7.3767624,1.585928    c-0.5954895,0.9492149-0.6892204,2.0456467-0.6914539,3.1360722c-0.0038204,1.8666821,0.1622963,3.7489777,0.2450562,5.6139297    C17.5183163,31.1334038,19.7686672,31.1413326,19.704319,29.6912441L19.704319,29.6912441z"></path></g><g><path class="st0" d="M13.9442234,36.1045189c5.2151947-0.0001793,10.4303894-0.0003548,15.6455841-0.0005341    c1.0035324-0.0000343,5.0025921-0.4746094,5.867094-0.0001984c1.9583054,1.0746613,1.9089241,4.3203621,0.0985489,5.5267906    c-1.1879234,0.791626-5.8550625,0.0247803-7.3373318,0.0254517c-1.8342781,0.0008278-3.6685715-0.0021477-5.5028114-0.0148048    c-1.4351368-0.009903-6.2149048,0.7091255-7.3360062-0.1004257c-1.8725109-1.35215-0.9728489-4.3170967-0.817029-6.3572121    c0.1102972-1.4441071-2.1402454-1.4370003-2.25,0c-0.1401968,1.8355637-1.151597,6.3540726,0.0450134,7.9423485    c0.9793072,1.2998466,3.4472408,0.675827,4.855855,0.7006912c4.2793102,0.0755272,8.5594521,0.0856934,12.8393154,0.0764961    c1.9049301-0.0040932,6.919693,1.0025864,8.4358406-0.4106369c1.2541695-1.1690292,1.1547928-8.454319-0.4721451-9.5021858    c-1.8190613-1.171608-7.2266808-0.1363525-9.4041939-0.1362801c-4.8892441,0.0001678-9.7784901,0.0003319-14.6677341,0.0004997    C12.4964571,33.8545685,12.4940548,36.1045685,13.9442234,36.1045189L13.9442234,36.1045189z"></path></g><g><path class="st0" d="M17.2665501,40.1850052c0.048914,0.61129,0.0774231,1.222805,0.0855942,1.8359985    c0.0192757,1.4466782,2.269331,1.4507408,2.25,0c-0.0081711-0.6131935-0.0366802-1.2247047-0.0855942-1.8359985    c-0.0484676-0.60569-0.4823647-1.125-1.125-1.125C17.8204021,39.0600052,17.2178154,39.5759697,17.2665501,40.1850052    L17.2665501,40.1850052z"></path></g><g><path class="st0" d="M24.5235424,39.6043358c0.0192013,0.8748856,0.0384007,1.7497673,0.0576019,2.6246529    c0.0317287,1.4457016,2.2818413,1.45084,2.25,0c-0.0192013-0.8748856-0.0384007-1.7497673-0.0576019-2.6246529    C26.7418137,38.1586342,24.4917011,38.1534958,24.5235424,39.6043358L24.5235424,39.6043358z"></path></g><g><path class="st0" d="M31.9440346,40.1459198c0,0.5833321,0,1.1666679,0,1.75c0,1.4477692,2.25,1.4501648,2.25,0    c0-0.5833321,0-1.1666679,0-1.75C34.1940346,38.6981544,31.9440346,38.695755,31.9440346,40.1459198L31.9440346,40.1459198z"></path></g><g><path class="st0" d="M7.0261455,2.8243484c7.2244096-0.018508,14.4488297-0.0251722,21.6732597-0.0163963    c3.2838268,0.003989,6.5676537,0.0109901,9.8514671,0.0210032c1.560154,0.0047574,4.41185-0.3946586,5.9108582,0.0211389    c1.4996872,0.8385952,2.9993744,1.6771903,4.4990578,2.5157852c0.1499634,1.129396,0.2177353,2.2624621,0.2033234,3.399199    c0.2228622,6.942359,0.1169662,13.9121752,0.1753654,20.8581314c0.0306168,3.6418953,0.0612373,7.2837906,0.0918579,10.9256859    c0.0107956,1.2840233,0.394928,3.0017471,0.0000458,4.2412033c-1.4012947,4.3983917-4.411953,3.7617416-7.5758705,3.8540459    c-6.889389,0.2009926-13.7816448,0.304306-20.6739349,0.3134308c-3.6102772,0.0047798-7.22054-0.0163994-10.830513-0.0636864    c-4.4468274-0.0582504-7.3279352,0.5636673-7.8929682-4.7750969C1.7126251,37.0751686,2.5540974,29.486393,2.6006105,22.3970242    c0.0215931-3.2911777,0.0431864-6.5823545,0.0647795-9.8735323c0.029402-4.4813595-1.1010576-9.4814739,5.1134019-9.4564476    c1.4479957,0.0058312,1.4498897-2.2441611,0-2.25c-2.451869-0.0098739-4.7769079-0.5924653-6.28192,1.673116    C-0.2379788,5.1017318,0.4342614,9.6471729,0.41539,12.5234919c-0.0690813,10.5291796-0.264269,21.0661583-0.2072956,31.5953026    c0.011502,2.1256676-0.3821568,4.9786568,1.708282,6.3678627c2.5026581,1.663147,7.5979424,0.6509972,10.4037838,0.6806335    c10.4924641,0.1108398,21.0179634,0.1061401,31.5036774-0.332962c2.419239-0.1013069,5.0384369,0.1210518,6.6777802-1.9889908    c1.8822136-2.4226418,1.1945877-6.52771,1.1713676-9.2896843c-0.088726-10.5532322,0.3256493-21.2486095-0.2672234-31.7838173    c-0.4542084-8.071229-6.0915565-7.1723542-12.8548889-7.1928787C28.0426464,0.5470664,17.5343819,0.5474278,7.0261455,0.5743485    C5.578547,0.5780571,5.575829,2.828064,7.0261455,2.8243484L7.0261455,2.8243484z"></path></g><g><path class="st0" d="M1.9023687,14.8125868c15.916666,0,31.833334,0,47.75,0c1.4477654,0,1.4501648-2.25,0-2.25    c-15.9166679,0-31.8333359,0-47.75,0C0.454601,12.5625868,0.452203,14.8125868,1.9023687,14.8125868L1.9023687,14.8125868z"></path></g><g><path class="st0" d="M42.7773705,8.9375868c1.4477654,0,1.4501648-2.25,0-2.25    C41.3296013,6.6875868,41.3272018,8.9375868,42.7773705,8.9375868L42.7773705,8.9375868z"></path></g><g><path class="st0" d="M37.6523705,8.8125868c1.4477654,0,1.4501648-2.25,0-2.25    C36.2046013,6.5625868,36.2022018,8.8125868,37.6523705,8.8125868L37.6523705,8.8125868z"></path></g><g><path class="st0" d="M33.1523705,8.8125868c1.4477654,0,1.4501648-2.25,0-2.25    C31.7046013,6.5625868,31.7022038,8.8125868,33.1523705,8.8125868L33.1523705,8.8125868z"></path></g></g></svg>
                            <span class="title h5">{{ $service->name }}</span>
                            <div class="text">{!! $service->short_description !!}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- features section end -->
        <!-- about section start -->
        <section class="about">
            <img class="about_shape" src="{{ asset('assets/svg/bg%202.svg') }}" alt="{{ $home->aboutus_title }}" />
            <div class="container d-lg-flex">
                <div class="about_main">
                    <div class="wrapper">
                        <span class="tw-height h4">
                            <span class="text">{{ $home->aboutus_title }}</span>
                        </span>
                        <h4 class="about_main-title type" data-text="{{ $home->aboutus_title }}">
                            {{ $home->aboutus_title }}
                        </h4>
                    </div>
                    <p class="about_main-text">{!! $home->aboutus_content !!}</p>

                    <div class="about_main-action d-flex flex-column flex-sm-row">
                        <a class="about_main-action_btn btn btn--white signUpTrigger" href="{{ route('about') }}">{{ $home->aboutus_button_text }}</a>
                    </div>
                </div>
                <div class="about_media">
                    <img class="about_media-main" src="{{ asset('assets/svg/illustartion%203.svg') }}" alt="The Right Digital Tools for Business" />
                    <!-- <img class="about_media-shape" src="{{ asset('assets/svg/shapes_bg3.svg') }}" alt="The Right Digital Tools for Business" /> -->
                </div>
            </div>
        </section>
        <!-- about section end -->
        <!-- projects section start -->
        <section class="projects">
            <div class="container">
                <div class="wrapper text-center">
                    <span class="tw-height h4 text-center">
                        <span class="text">{{ $home->projects_title }}</span>
                    </span>
                    <h4 class="about_main-title type text-center" data-text="{{ $home->projects_title }}">
                        {{ $home->projects_title }}
                    </h4>
                </div>

                <div class="projects_wrapper">
                    <div class="projects_slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work2.png') }}" src="{{ asset('assets/img/work1.png') }}" alt="Project Responsive View" />
                            </div>
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work1.png') }}" src="{{ asset('assets/img/work2.png') }}" alt="Project Responsive View" />
                            </div>
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work3.png') }}" src="{{ asset('assets/img/work3.png') }}" alt="Project Responsive View" />
                            </div>
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work4.png') }}" src="{{ asset('assets/img/work4.png') }}" alt="Project Responsive View" />
                            </div>
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work5.png') }}" src="{{ asset('assets/img/work5.png') }}" alt="Project Responsive View" />
                            </div>
                            <div class="swiper-slide">
                                <img class="lazy" data-src="{{ asset('assets/img/work6.png') }}" src="{{ asset('assets/img/work6.png') }}" alt="Project Responsive View" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="projects_controls">
                    <button class="projects_controls-control swiper-button-prev">
                        <i class="icon-angle-left icon"></i>
                    </button>
                    <button class="projects_controls-control swiper-button-next">
                        <i class="icon-angle-right icon"></i>
                    </button>
                </div>

                <div class="d-md-flex flex-column align-items-center">
                    <a class="join_btn btn btn--neon signUpTrigger" href="{{ route('projects') }}">{{ $home->projects_button_text }}</a>
                </div>
            </div>
        </section>
        <!-- projects section end -->
        <!-- accordion section start -->
        <div class="faq">
            <div class="container">
                <div class="accordion" id="faq_accordion">
                    <!-- item 1 -->
                    @foreach ($faqs as $key => $faq)
                    <div class="accordion_item" wire:key='{{ $faq->id }}'>
                        <div class="accordion_item-wrapper" >
                            <h4
                                class="title d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#item{{ $faq->id }}"
                                aria-expanded="@if ($loop->first) true @else false @endif"
                            >
                            {{ $faq->question }}
                                <span class="title_icon @if($loop->first) transform @endif">
                                    <i class="icon-arrow-left icon arrow-rotate"></i>
                                </span>
                            </h4>
                            <div id="item{{ $faq->id }}" class="accordion-collapse collapse @if($loop->first) show @endif" data-bs-parent="#faq_accordion">
                                <div class="body">
                                    <div class="main">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-md-flex flex-column align-items-center">
                    <a class="join_btn btn btn--neon signUpTrigger" href="#">{{ $home->other_button_text }}</a>
                </div>
            </div>
        </div>
        <!-- accordion section end -->
        <!-- join section start -->
        <section class="join section index">
            <div class="join_media">
                <img class="join_media-left lazy" src="{{ asset('assets/svg/joinman.svg') }}" alt="Join Us" />
                <div class="group">
                    <img class="shape lazy" src="{{ asset('assets/svg/bgshape_white.svg') }}" alt="Join Us" />
                    <img class="speaker lazy" src="{{ asset('assets/svg/speaker.svg') }}" alt="Join Us" />
                </div>
            </div>
            <div class="container d-md-flex flex-column align-items-center">
                <h3 class="join_header">
                    Join the
                    <span class="join_header-wrapper">
                        <span class="number countNum" data-value="{{ $home->join_content }}" data-suffix="+ satisfied" data-separator=",">{{ $home->join_content }}+ satisfied</span>
                        <span class="animatedUnderline"></span>
                    </span>
                    customers who have chosen Sitember for successful business partnerships.
                </h3>
            </div>
        </section>
        <!-- join section end -->
        <!-- testimonials section start -->
        <section class="testimonials section">
            <div class="container">
                <h4 class="testimonials_header">{{ $home->testimonials_title }}</h4>
                <div class="testimonials_controls">
                    <a class="testimonials_controls-control swiper-button-prev" href="#">
                        <i class="icon-angle-left icon"></i>
                    </a>
                    <a class="testimonials_controls-control swiper-button-next" href="#">
                        <i class="icon-angle-right icon"></i>
                    </a>
                </div>
                <div class="testimonials_wrapper">
                    <div class="testimonials_slider swiper">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                            <div class="testimonials_slider-slide swiper-slide">
                                <div class="main">
                                    <div class="main_review">
                                        {!! $testimonial->description !!}
                                    </div>
                                    <h6 class="main_author">{{ $testimonial->name }}</h6>
                                    <span class="main_company">{{ $testimonial->position }}</span>
                                </div>

                                @if ($testimonial->getFirstMediaUrl('testimonial_photo'))
                                <picture>
                                    <source data-srcset="{{ $testimonial->getFirstMediaUrl('testimonial_photo') }}" srcset="{{ $testimonial->getFirstMediaUrl('testimonial_photo') }}" />
                                    <img class="lazy doge" data-src="{{ $testimonial->getFirstMediaUrl('testimonial_photo') }}" src="{{ $testimonial->getFirstMediaUrl('testimonial_photo') }}" alt="Customer image" />
                                </picture>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials section end -->
        <!-- feedback section start -->
        <section class="feedback section index">
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
                                <span class="text">{{ $home->askus_title }}</span>
                            </span>
                            <h4 class="feedback_main-header_title type" data-text="{{ $home->askus_title }}">{{ $home->askus_title }}</h4>
                        </div>
                        <p class="feedback_main-header_text">
                            {!! $home->askus_content !!}
                        </p>
                    </div>
                    @if (Session::has('message'))
                        <div class="btn--neon mb-4" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form class="feedback_main-form form d-flex flex-column" wire:submit='sendMessage'>
                        <input class="field required" type="text" name="feedbackName" placeholder="Name" wire:model='name'/>
                        @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
                        <div class="flex-sm-row d-flex flex-lg-nowrap">
                            <div class="col-6 pr-s">
                                <input
                                    class="field required"
                                    type="text"
                                    name="feedbackPhone"
                                    placeholder="Phone"
                                    wire:model='phone'
                                />
                            </div>
                            <div class="col-6 pl-s">
                                <input
                                    class="field required"
                                    type="text"
                                    name="feedbackEmail"
                                    placeholder="Email"
                                    wire:model='email'
                                />
                            @error('email')<p class="text-red-500">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <textarea
                            class="field required"
                            name="feedbackMessage"
                            placeholder="How we can help you?"
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
</div>
