<?php
/**
 * @package tiffany-lite
 * @subpackage tiffany-lite
 * @since tiffany-lite 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses tiffany_lite_header_style()
*/

function tiffany_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tiffany_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1120,
		'height'                 => 125,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'tiffany_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'tiffany_lite_custom_header_setup' );

if ( ! function_exists( 'tiffany_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see tiffany_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'tiffany_lite_header_style' );
function tiffany_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$tiffany_lite_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'tiffany-lite-basic-style', $tiffany_lite_custom_css );
	endif;
}
endif; // tiffany_lite_header_style
