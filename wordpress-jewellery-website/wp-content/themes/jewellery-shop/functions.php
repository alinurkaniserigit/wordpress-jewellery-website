<?php
/**
 * Jewellery Shop functions and definitions
 *
 * @package Jewellery Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'jewellery_shop_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function jewellery_shop_setup() {
	global $content_width;   
	if ( ! isset( $content_width ) )
		$content_width = 680; 

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );	
	add_theme_support( 'custom-header', array( 
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jewellery-shop' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // jewellery_shop_setup
add_action( 'after_setup_theme', 'jewellery_shop_setup' );

function jewellery_shop_widgets_init() {
	register_sidebar( array( 
		'name'          => __( 'Blog Sidebar', 'jewellery-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'jewellery-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array( 
		'name'          => __( 'Footer', 'jewellery-shop' ),
		'description'   => __( 'Appears on footer', 'jewellery-shop' ),
		'id'            => 'footer-nav',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'jewellery_shop_widgets_init' );

function jewellery_shop_scripts() {
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri())."/css/bootstrap.css" );
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri())."/css/owl.carousel.css" );
	wp_enqueue_style( 'jewellery-shop-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'jewellery-shop-responsive', esc_url(get_template_directory_uri())."/css/responsive.css" );
	wp_enqueue_style( 'jewellery-shop-default', esc_url(get_template_directory_uri())."/css/default.css" );
	wp_enqueue_script( 'owl.carousel-js', esc_url(get_template_directory_uri()). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jewellery-shop-theme', esc_url(get_template_directory_uri()) . '/js/theme.js' );
	wp_enqueue_script( 'jquery.superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/css/fontawesome-all.css" );	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'jewellery-shop-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	$headings_font = esc_html(get_theme_mod('jewellery_shop_headings_fonts'));
	$body_font = esc_html(get_theme_mod('jewellery_shop_body_fonts'));

	if( $headings_font ) {
		wp_enqueue_style( 'jewellery-shop-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'jewellery-shop-emilys', '//fonts.googleapis.com/css2?family=Merienda+One');
	}
	if( $body_font ) {
		wp_enqueue_style( 'jewellery-shop-poppins', '//fonts.googleapis.com/css?family='. $body_font );
	} else {
		wp_enqueue_style( 'jewellery-shop-source-body', '//fonts.googleapis.com/css2?family=Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}
}
add_action( 'wp_enqueue_scripts', 'jewellery_shop_scripts' );

// Footer Link
define('JEWELLERY_SHOP_FOOTER_LINK',__('https://theclassictemplates.com/themes/free-jewellery-wordpress-theme/','jewellery-shop'));

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme Info Page.
 */
require get_template_directory() . '/inc/addon.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * PRO Button Link
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/button-link/class-button-link.php' );

if ( ! function_exists( 'jewellery_shop_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function jewellery_shop_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

//sanitize number field
function jewellery_shop_sanitize_number_absint( $number, $setting ) {
  // Ensure $number is an absolute integer (whole number, zero or greater).
  $number = absint( $number );

  // If the input is an absolute integer, return it; otherwise, return the default
  return ( $number ? $number : $setting->default );
}