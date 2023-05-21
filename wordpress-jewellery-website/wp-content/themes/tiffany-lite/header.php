<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package tiffany-lite
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <div class="<?php if( get_theme_mod( 'tiffany_lite_sticky_header', false) != '' || get_theme_mod( 'tiffany_lite_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
    <header role="banner">
      <?php if(get_theme_mod('tiffany_lite_preloader_option',true) != '' || get_theme_mod('tiffany_lite_responsive_preloader', true) != ''){ ?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php }?>
      <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'tiffany-lite' ); ?></a>
      <div class="container">
        <div class="main-header">
          <div id="header" class="w-100 px-2">
            <div class="row">
              <div class="logo col-lg-3 col-md-9 col-9">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('tiffany_lite_site_title',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('tiffany_lite_tagline',true) != ''){ ?>
                    <p class="site-description mb-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>
              </div>
              <div class="col-lg-8 col-md-3 col-3 padremove">
                <?php 
                  if(has_nav_menu('primary')){ ?>
                  <div class="toggle-menu responsive-menu">
                    <button class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','tiffany-lite'); ?></span></button>
                  </div>
                <?php }?>
                <div id="menu-sidebar" class="nav sidebar">
                  <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tiffany-lite' ); ?>">
                    <?php
                      if(has_nav_menu('primary')){ 
                        wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav ps-lg-0 text-lg-start">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      } 
                    ?>
                    <div id="contact-info">
                      <div class="social-media text-center">
                        <?php if( get_theme_mod( 'tiffany_lite_facebook_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','tiffany-lite' );?></span></a>
                        <?php } ?>                       
                        <?php if( get_theme_mod( 'tiffany_lite_twitter_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','tiffany-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'tiffany_lite_youtube_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_youtube_url','' ) ); ?>"><i class="fab fa-youtube-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','tiffany-lite' );?></span></a>
                        <?php } ?> 
                        <?php if( get_theme_mod( 'tiffany_lite_rss_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_rss_url','' ) ); ?>"><i class="fas fa-rss-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS','tiffany-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'tiffany_lite_insta_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_insta_url','' ) ); ?>"><i class="fab fa-instagram me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','tiffany-lite' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'tiffany_lite_pint_url') != '') { ?>
                          <a href="<?php echo esc_url( get_theme_mod( 'tiffany_lite_pint_url','' ) ); ?>"><i class="fab fa-pinterest-square me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','tiffany-lite' );?></span></a>
                        <?php } ?>
                      </div>
                      <?php get_search_form();?>
                    </div>
                    <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','tiffany-lite'); ?></span></a>
                  </nav>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-6">
                <div class="search-box">
                  <button type="button" class="search-open"><i class="fas fa-search mt-3 p-3 rounded-circle"></i></button>
                </div>
              </div>
            </div>
            <div class="search-outer">
              <div class="serach_inner w-100 h-100">
                <?php get_search_form(); ?>
              </div>
              <button type="button" class="search-close"><span>X</span></button>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="clearfix"></div>   
</div>