$( document ).ready(function() {

    /* Portfolio -> Tab */
    var tabContent = $(".tab_content");
    var tabNaviLink = $("ul.tabs li");

    tabContent.hide();
    $(".tab_content:first").show();

    tabNaviLink.click(function() {
		
      tabContent.hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      tabNaviLink.removeClass("active");
      $(this).addClass("active");
    });

});