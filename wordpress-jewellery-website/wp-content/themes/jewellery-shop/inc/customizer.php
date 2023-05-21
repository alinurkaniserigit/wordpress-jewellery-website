<?php
/**
 * Jewellery Shop Theme Customizer
 *
 * @package Jewellery Shop
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jewellery_shop_customize_register( $wp_customize ) {

	function jewellery_shop_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function jewellery_shop_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->add_setting('jewellery_shop_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_title_enable', array(
	   'settings' => 'jewellery_shop_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('jewellery_shop_tagline_enable',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
	));
	$wp_customize->add_control( 'jewellery_shop_tagline_enable', array(
	   'settings' => 'jewellery_shop_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	//Theme Options
	$wp_customize->add_panel( 'jewellery_shop_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'jewellery-shop' ),
	) );
	
	// Header Section
	$wp_customize->add_section('jewellery_shop_header_section', array(
        'title' => __('Manage Header Section', 'jewellery-shop'),
        'priority' => null,
		'panel' => 'jewellery_shop_panel_area',
 	));

	$wp_customize->add_setting('jewellery_shop_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'jewellery_shop_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_phone_number', array(
	   'settings' => 'jewellery_shop_phone_number',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Phone Number', 'jewellery-shop'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('jewellery_shop_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_email_address', array(
	   'settings' => 'jewellery_shop_email_address',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Email Address', 'jewellery-shop'),
	   'type'      => 'text'
	));

	// Home Category Dropdown Section
	$wp_customize->add_section('jewellery_shop_one_cols_section',array(
		'title'	=> __('Manage Slider','jewellery-shop'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1600 x 850).','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_slidersection', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_slidersection', array(
		'section' => 'jewellery_shop_one_cols_section',
		'settings'   => 'jewellery_shop_slidersection',
	) ) );

	$wp_customize->add_setting( 'jewellery_shop_slider_count', array(
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'jewellery_shop_sanitize_number_absint',
	  	'default' => 1,
	) );
	$wp_customize->add_control( 'jewellery_shop_slider_count', array(
	  	'settings' => 'jewellery_shop_slider_count',
	  	'type' => 'number',
	  	'section' => 'jewellery_shop_one_cols_section',
	  	'label' => __( 'Number Of Slide To Show','jewellery-shop'),
	) );

	$wp_customize->add_setting('jewellery_shop_button_text',array(
		'default' => 'Hire Me',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_button_text', array(
	   'settings' => 'jewellery_shop_button_text',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Add Button Text', 'jewellery-shop'),
	   'type'      => 'text'
	));
	
	//Hide Section
	$wp_customize->add_setting('jewellery_shop_hide_categorysec',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'jewellery_shop_hide_categorysec', array(
	   'settings' => 'jewellery_shop_hide_categorysec',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label'     => __('Check To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));
	
	// Services Section 
	$wp_customize->add_section('jewellery_shop_below_slider_section', array(
		'title'	=> __('Manage Services Section','jewellery-shop'),
		'description'	=> __('Select Pages from the dropdown for Services.','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_services_cat', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_services_cat', array(
		'section' => 'jewellery_shop_below_slider_section',
		'settings'   => 'jewellery_shop_services_cat',
	) ) );

	$wp_customize->add_setting('jewellery_shop_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	
	$wp_customize->add_control( 'jewellery_shop_disabled_pgboxes', array(
	   'settings' => 'jewellery_shop_disabled_pgboxes',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label'     => __('Check To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// Footer Section 
	$wp_customize->add_section('jewellery_shop_footer', array(
		'title'	=> __('Manage Footer Section','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));	
	$wp_customize->add_control( 'jewellery_shop_copyright_line', array(
	   'section' 	=> 'jewellery_shop_footer',
	   'label'	 	=> __('Copyright Line','jewellery-shop'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

    // Google Fonts
    $wp_customize->add_section( 'jewellery_shop_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'jewellery-shop' ),
		'priority'       => 24,
	) );

	$font_choices = array(
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);

	$wp_customize->add_setting( 'jewellery_shop_headings_fonts', array(
		'sanitize_callback' => 'jewellery_shop_sanitize_fonts',
	));
	$wp_customize->add_control( 'jewellery_shop_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'jewellery-shop'),
		'section' => 'jewellery_shop_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'jewellery_shop_body_fonts', array(
		'sanitize_callback' => 'jewellery_shop_sanitize_fonts'
	));
	$wp_customize->add_control( 'jewellery_shop_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'jewellery-shop' ),
		'section' => 'jewellery_shop_google_fonts_section',
		'choices' => $font_choices
	));
}
add_action( 'customize_register', 'jewellery_shop_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jewellery_shop_customize_preview_js() {
	wp_enqueue_script( 'jewellery_shop_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'jewellery_shop_customize_preview_js' );