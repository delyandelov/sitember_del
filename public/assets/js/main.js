$( document ).ready(function() {

    // Portfolio -> Tab 


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
});