<?php
/**
 * Digital Storefront Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Digital Storefront
 */

if ( ! defined( 'DIGITAL_STOREFRONT_URL' ) ) {
    define( 'DIGITAL_STOREFRONT_URL', esc_url( 'https://www.themagnifico.net/themes/storefront-wordpress-theme/', 'digital-storefront') );
}
if ( ! defined( 'DIGITAL_STOREFRONT_TEXT' ) ) {
    define( 'DIGITAL_STOREFRONT_TEXT', __( 'Digital Storefront Pro','digital-storefront' ));
}

use WPTRT\Customize\Section\Digital_Storefront_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Digital_Storefront_Button::class );

    $manager->add_section(
        new Digital_Storefront_Button( $manager, 'digital_storefront_pro', [
            'title'       => esc_html( DIGITAL_STOREFRONT_TEXT, 'digital-storefront' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'digital-storefront' ),
            'button_url'  => esc_url( DIGITAL_STOREFRONT_URL )
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'digital-storefront-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'digital-storefront-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function digital_storefront_customize_register($wp_customize){
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    
    // Theme Color
    $wp_customize->add_section('digital_storefront_color_option',array(
        'title' => esc_html__('Theme Color','digital-storefront'),
        'description' => esc_html__('Change theme color on one click.','digital-storefront'),
    ));

    $wp_customize->add_setting( 'digital_storefront_theme_color', array(
        'default' => '#ff6868',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_storefront_theme_color', array(
        'label' => esc_html__('Color Option','digital-storefront'),
        'section' => 'digital_storefront_color_option',
        'settings' => 'digital_storefront_theme_color' 
    )));

    // Header
    $wp_customize->add_section('digital_storefront_header_top',array(
        'title' => esc_html__('Header','digital-storefront'),
    ));

    $wp_customize->add_setting('digital_storefront_header_offer_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('digital_storefront_header_offer_text',array(
        'label' => esc_html__('Add Offer Text','digital-storefront'),
        'section' => 'digital_storefront_header_top',
        'setting' => 'digital_storefront_header_offer_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('digital_storefront_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'digital_storefront_sanitize_checkbox'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'digital_storefront_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'digital-storefront' ),
        'section'        => 'digital_storefront_header_top',
        'settings'       => 'digital_storefront_sticky_header',
        'type'           => 'checkbox',
    )));

    // General Settings
     $wp_customize->add_section('digital_storefront_general_settings',array(
        'title' => esc_html__('General Settings','digital-storefront'),
        'description' => esc_html__('General settings of our theme.','digital-storefront'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('digital_storefront_preloader_hide', array(
        'default' => false,
        'sanitize_callback' => 'digital_storefront_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'digital_storefront_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'digital-storefront' ),
        'section'        => 'digital_storefront_general_settings',
        'settings'       => 'digital_storefront_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'digital_storefront_preloader_bg_color', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_storefront_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','digital-storefront'),
        'section' => 'digital_storefront_general_settings',
        'settings' => 'digital_storefront_preloader_bg_color' 
    )));
    
    $wp_customize->add_setting( 'digital_storefront_preloader_dot_1_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_storefront_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','digital-storefront'),
        'section' => 'digital_storefront_general_settings',
        'settings' => 'digital_storefront_preloader_dot_1_color' 
    )));

    $wp_customize->add_setting( 'digital_storefront_preloader_dot_2_color', array(
        'default' => '#ff6868',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digital_storefront_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','digital-storefront'),
        'section' => 'digital_storefront_general_settings',
        'settings' => 'digital_storefront_preloader_dot_2_color' 
    )));
    
    // Social Link
    $wp_customize->add_section('digital_storefront_social_link',array(
        'title' => esc_html__('Social Links','digital-storefront'),
    ));

    $wp_customize->add_setting('digital_storefront_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('digital_storefront_facebook_url',array(
        'label' => esc_html__('Facebook Link','digital-storefront'),
        'section' => 'digital_storefront_social_link',
        'setting' => 'digital_storefront_facebook_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('digital_storefront_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('digital_storefront_twitter_url',array(
        'label' => esc_html__('Twitter Link','digital-storefront'),
        'section' => 'digital_storefront_social_link',
        'setting' => 'digital_storefront_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('digital_storefront_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('digital_storefront_intagram_url',array(
        'label' => esc_html__('Intagram Link','digital-storefront'),
        'section' => 'digital_storefront_social_link',
        'setting' => 'digital_storefront_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('digital_storefront_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('digital_storefront_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','digital-storefront'),
        'section' => 'digital_storefront_social_link',
        'setting' => 'digital_storefront_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('digital_storefront_pintrest_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('digital_storefront_pintrest_url',array(
        'label' => esc_html__('Pinterest Link','digital-storefront'),
        'section' => 'digital_storefront_social_link',
        'setting' => 'digital_storefront_pintrest_url',
        'type'  => 'url'
    ));

    //Slider
    $wp_customize->add_section('digital_storefront_top_slider',array(
        'title' => esc_html__('Slider Option','digital-storefront'),
        'description' => esc_html__('Here you have to add 3 different post categories in below dropdown. Image Dimension ( 500px x 500px )','digital-storefront')
    ));

    for ( $count = 1; $count <= 3; $count++ ) {
        $wp_customize->add_setting( 'digital_storefront_top_slider_page' . $count, array(
            'default'           => '',
            'sanitize_callback' => 'digital_storefront_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'digital_storefront_top_slider_page' . $count, array(
            'label'    => __( 'Select Slide Page', 'digital-storefront' ),
            'section'  => 'digital_storefront_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    //Our Services section
    $wp_customize->add_section( 'digital_storefront_services_section' , array(
        'title'      => __( 'Services Settings', 'digital-storefront' ),
        'priority'   => null
    ) );

    $wp_customize->add_setting('digital_storefront_services_on_off', array(
        'default' => '1',
        'sanitize_callback' => 'digital_storefront_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'digital_storefront_services_on_off',array(
        'label'          => __( 'Show Services', 'digital-storefront' ),
        'section'        => 'digital_storefront_services_section',
        'settings'       => 'digital_storefront_services_on_off',
        'type'           => 'checkbox',
    )));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0; 
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('digital_storefront_services',array(
        'default'   => 'select',
        'sanitize_callback' => 'digital_storefront_sanitize_choices',
    ));
    $wp_customize->add_control('digital_storefront_services',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display Services','digital-storefront'),
        'description' => __('Image Size (50 x 50)','digital-storefront'),
        'section' => 'digital_storefront_services_section',
    ));

    //About
    $wp_customize->add_section('digital_storefront_about_section',array(
        'title' => esc_html__('About Settings','digital-storefront'),
    ));

    $wp_customize->add_setting( 'digital_storefront_about_page', array(
        'default'           => '',
        'sanitize_callback' => 'digital_storefront_sanitize_dropdown_pages'
    ) );
    $wp_customize->add_control( 'digital_storefront_about_page', array(
        'label'    => __( 'Select About Page', 'digital-storefront' ),
        'section'  => 'digital_storefront_about_section',
        'type'     => 'dropdown-pages'
    ) );

    // Footer
    $wp_customize->add_section('digital_storefront_site_footer_section', array(
        'title' => esc_html__('Footer', 'digital-storefront'),
    ));

    $wp_customize->add_setting('digital_storefront_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digital_storefront_footer_text_setting', array(
        'label' => __('Replace the footer text', 'digital-storefront'),
        'section' => 'digital_storefront_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));
}
add_action('customize_register', 'digital_storefront_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function digital_storefront_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function digital_storefront_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function digital_storefront_customize_preview_js(){
    wp_enqueue_script('digital-storefront-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'digital_storefront_customize_preview_js');