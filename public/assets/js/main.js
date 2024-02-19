$( document ).ready(function() {
    // Variables
    const wind = $( window );
    const body = $( "body" );
    let device_width = window.innerWidth;

    // Portfolio -> Tab 
    $('.tab_content').first().addClass('active');
    $('.tabs li').on('click', function() {
        var tabId = $(this).attr('rel');

        // Show/Hide Tabs
        $('.tab_content').removeClass('active');
        $('#' + tabId).addClass('active');

        // Change/remove current tab to active
        $('.tabs li').removeClass('active');
        $(this).addClass('active');
    });

    //Accordion
    $('.accordion-header').click(function() {
      var accordionItem = $(this).parent();
      accordionItem.toggleClass('active').siblings('.accordion-item').removeClass('active');
    });
    
    // Single Project -> Image hover effect
    $('.website-scroll').on('mouseenter', function(){
      var containerHeight = $(this).height();
      var imageHeight = $(this).find('.scroll-img img').height();
      if(imageHeight > containerHeight) {
          var animationDuration = (imageHeight / containerHeight) * 3; // Adjust the scrolling speed
          $(this).find('.scroll-img').css('animation', 'scrollImage ' + animationDuration + 's linear infinite');
      }
    }).on('mouseleave', function(){
        $(this).find('.scroll-img').css('animation', 'none');
    });

    // Project Slider
    new Swiper('.projects_slider', {
      speed: 400,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: true,
      loop: true,
      grabCursor: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Testimonials Slider
    new Swiper('.testimonials_slider', {
      speed: 400,
      spaceBetween: 20,
      slidesPerView: 1,
      freeMode: true,
      autoplay: true,
      loop: true,
      grabCursor: true,
      breakpoints: {
        800: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 3,
        },
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    

    /////////////////////////////////////////////////////
    //               ANIMATIONS
    /////////////////////////////////////////////////////

    AOS.init();

    if (device_width > 1200) {
      // Register GSAP
      gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

      ScrollSmoother.create({
        smooth: 1, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
      });

      // Config GSAP
      gsap.config({
        nullTargetWarn: false,
      });
    }
});