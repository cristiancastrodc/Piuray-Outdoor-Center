// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
  jQuery('a.page-scroll').bind('click', function(event) {
    var $anchor = jQuery(this);
    jQuery('html, body').stop().animate({
        scrollTop: jQuery($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });
  // Closes the Responsive Menu on Menu Item Click
  jQuery('.navbar-collapse ul li a').click(function() {
    jQuery('.navbar-toggle:visible').click();
  });
});

