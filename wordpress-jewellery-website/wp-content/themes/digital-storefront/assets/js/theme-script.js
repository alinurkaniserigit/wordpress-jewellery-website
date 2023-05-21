function digital_storefront_openNav() {
  jQuery(".sidenav").addClass('show');
}
function digital_storefront_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function digital_storefront_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const digital_storefront_nav = document.querySelector( '.sidenav' );

      if ( ! digital_storefront_nav || ! digital_storefront_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...digital_storefront_nav.querySelectorAll( 'input, a, button' )],
        digital_storefront_lastEl = elements[ elements.length - 1 ],
        digital_storefront_firstEl = elements[0],
        digital_storefront_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && digital_storefront_lastEl === digital_storefront_activeEl ) {
        e.preventDefault();
        digital_storefront_firstEl.focus();
      }

      if ( shiftKey && tabKey && digital_storefront_firstEl === digital_storefront_activeEl ) {
        e.preventDefault();
        digital_storefront_lastEl.focus();
      }
    } );
  }
  digital_storefront_keepFocusInMenu();
} )( window, document );

jQuery(document).ready(function() {
	var owl = jQuery('#top-slider .owl-carousel');
		owl.owlCarousel({
			margin: 0,
			nav: true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			loop: true,
      dots:false,
			navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 1
			  },
			  1024: {
			    items: 1
			}
		}
	})
    window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
  });
})

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.main_header').attr('data-sticky');
  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){  
      jQuery('.main_header').addClass("stick_header");
    } else {
      jQuery('.main_header').removeClass("stick_header");
    }
  }
});
