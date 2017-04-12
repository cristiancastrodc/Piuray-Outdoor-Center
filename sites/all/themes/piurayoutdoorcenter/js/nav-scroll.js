// jQuery for adding class on scroll
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 250) {
    jQuery('nav').addClass("navbar-shrink");
  }
  else{
    jQuery('nav').removeClass("navbar-shrink");
  }
});