<?php
/**
 * Custom header implementation
 */

function mobler_ecommerce_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'mobler_ecommerce_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1000,
		'height'             => 68,
		'flex-width'         => true,
		'flex-height'        => true,
		'wp-head-callback'   => 'mobler_ecommerce_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'mobler_ecommerce_custom_header_setup' );

if ( ! function_exists( 'mobler_ecommerce_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see mobler_ecommerce_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'mobler_ecommerce_header_style' );
function mobler_ecommerce_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .bottom-header {
			background-image:url('".esc_url(get_header_image())."');
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'mobler-ecommerce-basic-style', $custom_css );
	endif;
}
endif; // mobler_ecommerce_header_style