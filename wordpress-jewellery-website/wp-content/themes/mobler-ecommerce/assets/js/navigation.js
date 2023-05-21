/**
 * Theme functions file.
 *
 * Contains handlers for navigation.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   	});

   	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	// Click event to scroll to top.
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 500 );
		return false;
	});

	$(document).ready(function(){
		$(".product-cat").hide();
	    $("button.product-btn").click(function(){
	        $(".product-cat").toggle();
	    });
	}); 
});

function mobler_ecommerce_open() {
	jQuery(".sidenav").addClass('show');
}
function mobler_ecommerce_close() {
	jQuery(".sidenav").removeClass('show');
    jQuery( '.mobile-menu' ).focus();
}

function mobler_ecommerce_menuAccessibility() {
	var links, i, len,
	    mobler_ecommerce_menu = document.querySelector( '.nav-menu' ),
	    mobler_ecommerce_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let mobler_ecommerce_focusableElements = 'button, a, input';
	let mobler_ecommerce_firstFocusableElement = mobler_ecommerce_iconToggle; // get first element to be focused inside menu
	let mobler_ecommerce_focusableContent = mobler_ecommerce_menu.querySelectorAll(mobler_ecommerce_focusableElements);
	let mobler_ecommerce_lastFocusableElement = mobler_ecommerce_focusableContent[mobler_ecommerce_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! mobler_ecommerce_menu ) {
    	return false;
	}

	links = mobler_ecommerce_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === mobler_ecommerce_firstFocusableElement) {
		        mobler_ecommerce_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === mobler_ecommerce_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	mobler_ecommerce_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    mobler_ecommerce_menuAccessibility();
  	});
});