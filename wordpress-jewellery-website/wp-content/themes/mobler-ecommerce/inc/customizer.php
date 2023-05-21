<?php
/**
 * Mobler Ecommerce: Customizer
 *
 * @subpackage Mobler Ecommerce
 * @since 1.0
 */

use WPTRT\Customize\Section\Mobler_Ecommerce_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Mobler_Ecommerce_Button::class );

	$manager->add_section(
		new Mobler_Ecommerce_Button( $manager, 'mobler_ecommerce_pro', [
			'title'      => __( 'Mobler Ecommerce Pro', 'mobler-ecommerce' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'mobler-ecommerce' ),
			'button_url'  => esc_url( 'https://netnus.com/product/mobler-pro-wordpress-theme-for-multipurpose/', 'mobler-ecommerce')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'mobler-ecommerce-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'mobler-ecommerce-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function mobler_ecommerce_customize_register( $wp_customize ) {

	$wp_customize->add_setting('mobler_ecommerce_logo_margin',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('mobler_ecommerce_logo_margin',array(
		'label' => __('Logo Margin','mobler-ecommerce'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('mobler_ecommerce_logo_top_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('mobler_ecommerce_logo_top_margin',array(
		'type' => 'number',
		'description' => __('Top','mobler-ecommerce'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('mobler_ecommerce_logo_bottom_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('mobler_ecommerce_logo_bottom_margin',array(
		'type' => 'number',
		'description' => __('Bottom','mobler-ecommerce'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('mobler_ecommerce_logo_left_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('mobler_ecommerce_logo_left_margin',array(
		'type' => 'number',
		'description' => __('Left','mobler-ecommerce'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('mobler_ecommerce_logo_right_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_float'
 	));
 	$wp_customize->add_control('mobler_ecommerce_logo_right_margin',array(
		'type' => 'number',
		'description' => __('Right','mobler-ecommerce'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('mobler_ecommerce_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('mobler_ecommerce_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','mobler-ecommerce'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('mobler_ecommerce_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'mobler_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('mobler_ecommerce_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','mobler-ecommerce'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_panel( 'mobler_ecommerce_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'mobler-ecommerce' ),
		'description' => __( 'Description of what this panel does.', 'mobler-ecommerce' ),
	) );

	$wp_customize->add_section( 'mobler_ecommerce_theme_options_section', array(
    	'title'      => __( 'General Settings', 'mobler-ecommerce' ),
		'priority'   => 30,
		'panel' => 'mobler_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('mobler_ecommerce_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('mobler_ecommerce_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','mobler-ecommerce'),
		'section' => 'mobler_ecommerce_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','mobler-ecommerce'),
		   'Right Sidebar' => __('Right Sidebar','mobler-ecommerce'),
		   'One Column' => __('One Column','mobler-ecommerce'),
		   'Grid Layout' => __('Grid Layout','mobler-ecommerce')
		),
	));

	$wp_customize->add_setting('mobler_ecommerce_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('mobler_ecommerce_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','mobler-ecommerce'),
        'section' => 'mobler_ecommerce_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mobler-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','mobler-ecommerce'),
            'One Column' => __('One Column','mobler-ecommerce')
        ),
	));

	$wp_customize->add_setting('mobler_ecommerce_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('mobler_ecommerce_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','mobler-ecommerce'),
        'section' => 'mobler_ecommerce_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mobler-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','mobler-ecommerce'),
            'One Column' => __('One Column','mobler-ecommerce')
        ),
	));

	$wp_customize->add_setting('mobler_ecommerce_archive_page_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('mobler_ecommerce_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','mobler-ecommerce'),
        'section' => 'mobler_ecommerce_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','mobler-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','mobler-ecommerce'),
            'One Column' => __('One Column','mobler-ecommerce'),
            'Grid Layout' => __('Grid Layout','mobler-ecommerce')
        ),
	));

	//Header
	$wp_customize->add_section( 'mobler_ecommerce_header_section' , array(
    	'title'    => __( 'Header', 'mobler-ecommerce' ),
		'priority' => null,
		'panel' => 'mobler_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('mobler_ecommerce_sale_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mobler_ecommerce_sale_text',array(
	   	'type' => 'text',
	   	'label' => __('Sale Text','mobler-ecommerce'),
	   	'section' => 'mobler_ecommerce_header_section',
	));

	$wp_customize->add_setting('mobler_ecommerce_shop_btn',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mobler_ecommerce_shop_btn',array(
	   	'type' => 'text',
	   	'label' => __('Shop Now Button Text','mobler-ecommerce'),
	   	'section' => 'mobler_ecommerce_header_section',
	));

	$wp_customize->add_setting('mobler_ecommerce_phone_no',array(
    	'default' => '',
    	'sanitize_callback'	=> 'mobler_ecommerce_sanitize_phone_number'
	));
	$wp_customize->add_control('mobler_ecommerce_phone_no',array(
	   	'type' => 'text',
	   	'label' => __('Phone No.','mobler-ecommerce'),
	   	'section' => 'mobler_ecommerce_header_section',
	));

	//home page slider
	$wp_customize->add_section( 'mobler_ecommerce_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'mobler-ecommerce' ),
		'priority' => null,
		'panel' => 'mobler_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('mobler_ecommerce_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'mobler_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('mobler_ecommerce_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','mobler-ecommerce'),
	   	'section' => 'mobler_ecommerce_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'mobler_ecommerce_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'mobler_ecommerce_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'mobler_ecommerce_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'mobler-ecommerce' ),
			'description' => __('Image Size (625px x 335px)', 'mobler-ecommerce' ),
			'section' => 'mobler_ecommerce_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	//home page slider
	$wp_customize->add_section( 'mobler_ecommerce_blocks_section' , array(
    	'title'    => __( 'Collection Blocks', 'mobler-ecommerce' ),
		'priority' => null,
		'panel' => 'mobler_ecommerce_panel_id'
	) );

	$wp_customize->add_setting( 'mobler_ecommerce_collection1', array(
		'default'           => '',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'mobler_ecommerce_collection1', array(
		'label' => __('Select Collection Page 1', 'mobler-ecommerce' ),
		'description' => __('Image Size (312px x 160px)', 'mobler-ecommerce' ),
		'section' => 'mobler_ecommerce_blocks_section',
		'type' => 'dropdown-pages'
	));

	$wp_customize->add_setting( 'mobler_ecommerce_collection2', array(
		'default'           => '',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'mobler_ecommerce_collection2', array(
		'label' => __('Select Collection Page 1', 'mobler-ecommerce' ),
		'description' => __('Image Size (312px x 160px)', 'mobler-ecommerce' ),
		'section' => 'mobler_ecommerce_blocks_section',
		'type' => 'dropdown-pages'
	));

	//Service Section
	$wp_customize->add_section('mobler_ecommerce_product_section',array(
		'title'	=> __('Product Section','mobler-ecommerce'),
		'description'=> __('This section will appear below the slider.','mobler-ecommerce'),
		'panel' => 'mobler_ecommerce_panel_id',
	));

	$wp_customize->add_setting( 'mobler_ecommerce_product_page', array(
		'default'           => '',
		'sanitize_callback' => 'mobler_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'mobler_ecommerce_product_page', array(
		'label' => __('Select Product Page', 'mobler-ecommerce' ),
		'section' => 'mobler_ecommerce_product_section',
		'type' => 'dropdown-pages'
	));

	//Footer
    $wp_customize->add_section( 'mobler_ecommerce_footer', array(
    	'title'  => __( 'Footer Text', 'mobler-ecommerce' ),
		'priority' => null,
		'panel' => 'mobler_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('mobler_ecommerce_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'mobler_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('mobler_ecommerce_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','mobler-ecommerce'),
       'section' => 'mobler_ecommerce_footer'
    ));

    $wp_customize->add_setting('mobler_ecommerce_footer_copy',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('mobler_ecommerce_footer_copy',array(
		'label'	=> __('Footer Text','mobler-ecommerce'),
		'section' => 'mobler_ecommerce_footer',
		'setting' => 'mobler_ecommerce_footer_copy',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'mobler_ecommerce_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'mobler_ecommerce_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'mobler_ecommerce_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'mobler_ecommerce_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'mobler-ecommerce' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'mobler-ecommerce' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'mobler_ecommerce_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'mobler_ecommerce_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'mobler_ecommerce_customize_register' );

function mobler_ecommerce_customize_partial_blogname() {
	bloginfo( 'name' );
}

function mobler_ecommerce_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function mobler_ecommerce_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function mobler_ecommerce_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}