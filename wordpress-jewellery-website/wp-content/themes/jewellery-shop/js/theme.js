jQuery(window).on('load', function() {
  jQuery('#status').fadeOut();
  jQuery('#preloader').delay(350).fadeOut('slow');
  jQuery('body').delay(350).css({'overflow':'visible'});
})

jQuery(function($){
  "use strict";
  jQuery('.main-menu > ul').superfish({
    delay:       500,
    animation:   {opacity:'show',height:'show'},
    speed:       'fast'
  });
});

jQuery(function($){
  $( '.toggle-nav button' ).click( function(e){
    $( 'body' ).toggleClass( 'show-main-menu' );
    var element = $( '.sidenav' );
    jewellery_shop_trapFocus( element );
  });

  $( '.close-button' ).click( function(e){
    $( '.toggle-nav button' ).click();
    $( '.toggle-nav button' ).focus();
  });
  $( document ).on( 'keyup',function(evt) {
    if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
      $( '.toggle-nav button' ).click();
      $( '.toggle-nav button' ).focus();
    }
  });
});

function jewellery_shop_trapFocus( element, namespace ) {
  var jewellery_shop_focusableEls = element.find( 'a, button' );
  var jewellery_shop_firstFocusableEl = jewellery_shop_focusableEls[0];
  var jewellery_shop_lastFocusableEl = jewellery_shop_focusableEls[jewellery_shop_focusableEls.length - 1];
  var KEYCODE_TAB = 9;

  jewellery_shop_firstFocusableEl.focus();

  element.keydown( function(e) {
    var isTabPressed = ( e.key === 'Tab' || e.keyCode === KEYCODE_TAB );

    if ( !isTabPressed ) { 
      return;
    }

    if ( e.shiftKey ) /* shift + tab */ {
      if ( document.activeElement === jewellery_shop_firstFocusableEl ) {
        jewellery_shop_lastFocusableEl.focus();
        e.preventDefault();
      }
    } else /* tab */ {
      if ( document.activeElement === jewellery_shop_lastFocusableEl ) {
        jewellery_shop_firstFocusableEl.focus();
        e.preventDefault();
      }
    }
  });
}

jQuery(document).ready(function() { 
  jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:true,
    dots:false,
    smartSpeed:250,
    navText : ['<i class="fas fa-caret-left"></i>','<i class="fas fa-caret-right"></i>'],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  })
});