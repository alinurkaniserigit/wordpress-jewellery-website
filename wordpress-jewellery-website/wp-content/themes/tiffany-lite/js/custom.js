jQuery(function($){
  "use strict";
  jQuery('.main-menu-navigation > ul').superfish({
    delay:       0,                            
    animation:   {opacity:'show',height:'show'},  
    speed:       'fast'                        
  });
});

// scroll
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
        jQuery('#scroll-top').fadeIn();
    } else {
        jQuery('#scroll-top').fadeOut();
    }
  });
  jQuery(window).on("scroll", function () {
    document.getElementById("scroll-top").style.display = "block";
  });
  jQuery('#scroll-top').click(function () {
    jQuery("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
  });

  tiffany_lite_MobileMenuInit();

  tiffany_lite_search_focus();
});

(function( $ ) {

  $(window).scroll(function(){
    var sticky = $('.sticky-header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
  });

})( jQuery );

// preloader
jQuery(function($){
    setTimeout(function(){
        $("#loader-wrapper").delay(1000).fadeOut("slow");
    });
});

function tiffany_lite_MobileMenuInit() {

  /* First and last elements in the menu */
  var tiffany_lite_firstTab = jQuery('.main-menu-navigation ul:first li:first a');
  var tiffany_lite_lastTab  = jQuery('a.closebtn'); /* Cancel button will always be last */

  jQuery(".mobiletoggle").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("noscroll");
    tiffany_lite_firstTab.focus();
  });

  jQuery("a.closebtn").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("noscroll");
    jQuery(".mobiletoggle").focus();
  });

  /* Redirect last tab to first input */
  tiffany_lite_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      tiffany_lite_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  tiffany_lite_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      tiffany_lite_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.sidebar').on('keyup', function(e){
    if (jQuery('body').hasClass('noscroll'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('noscroll');
      tiffany_lite_lastTab.focus();
    };
  });
}

function tiffany_lite_search_focus() {

  /* First and last elements in the menu */
  var tiffany_lite_search_firstTab = jQuery('.serach_inner input[type="search"]');
  var tiffany_lite_search_lastTab  = jQuery('button.search-close'); /* Cancel button will always be last */

  jQuery(".search-open").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("search-focus");
    tiffany_lite_search_firstTab.focus();
  });

  jQuery("button.search-close").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("search-focus");
    jQuery(".search-open").focus();
  });

  /* Redirect last tab to first input */
  tiffany_lite_search_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      tiffany_lite_search_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  tiffany_lite_search_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      tiffany_lite_search_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.serach_inner').on('keyup', function(e){
    if (jQuery('body').hasClass('search-focus'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('search-focus');
      tiffany_lite_search_lastTab.focus();
    };
  });
}