@section('title', 'Portfolio - Sitember.com')
<div>
    <!-- Single Project -->
    <main>
        <section class="section info">
            <div class="container">
                <h2 class="text-center">Gateway to Cutting-Edge Healthcare Technology</h2>
                <div class="row row align-items-end">
                    <div class="col-md-7">
                        <div class="website-scroll">
                            <div class="scroll-img">
                                <img
                                    class="lazy"
                                    src="{{ asset('assets/img/projects/websites/biohub.jpg') }}"
                                    alt="Biohub Group"
                                />
                            </div>
                            <img class="icon" src="{{ asset('assets/svg/scroll-down-icon.svg') }}" alt="Scroll Element" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="project-details mb-m">
                            <li><span>Client:</span> BioHub Group©</li>
                            <li>Web Catalog for healthcare supplies</li>
                            <li><span>Date:</span> 15 December 2023</li>
                            <li><span>Services:</span> Bespoke Website Solution - Design & Development</li>
                        </ul>

                        <a class="btn btn--green" href="https://biohubgroup.com/" target="_blank">biohubgroup.com</a>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-section details">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        <h3>Project Details</h3>
                    </div>
                    <div class="col-6">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada urna ligula, 
                            vitae mattis sapien posuere eget. Etiam porta tincidunt ipsum, a varius ante auctor a. Nullam 
                            vel quam tempus, rutrum ipsum sed, bibendum quam. Pellentesque habitant morbi tristique senectus 
                            et netus et malesuada fames ac turpis egestas. Praesent quis lectus volutpat, vulputate leo vel, condimentum sapien. 
                            Morbi nec semper purus.
                        </p>
                        <p>Proin sit amet nisl sed libero condimentum pulvinar at at metus. Donec aliquam ultrices neque ut tincidunt. In eu mi sodales,
                             euismod est sagittis, efficitur nisi. Vestibulum eu nibh eget arcu malesuada porta. Etiam ut ex accumsan, convallis magna 
                             vel, euismod nulla. Proin iaculis interdum leo a blandit. Vestibulum hendrerit vehicula dui, at lacinia est tincidunt id.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section responsive">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center mb-l">Responsive Views</h3>
                        <p class="text-center">Make users feel the same way on each screen size your responsive web design we provide for <b>Biohub Group©</b>.<br/>
                        From desktops to smartphones, through the responsive design the <b>Biohub Group©'s</b> website adapts seamlessly, making it easy for the 
                        audience to enjoy a consistent and spellbinding experience throughout different devices. Discover the charms of the 
                        responsive layouts and the user friendly navigation able to seamlessly adapt to the ever changing digital environment. 
                        The magic is unfolding right before your eyes!</p>
                    </div>
                    <div class="col-12">
                        <img class="lazy" data-src="{{ asset('assets/img/work7.png') }}" src="{{ asset('assets/img/work7.png') }}" alt="Project Responsive View" />
                        <div class="text-center">
                            <a class="btn btn--neon" href="{{ route('projects') }}">Check more projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Single Project content end -->
</div>
