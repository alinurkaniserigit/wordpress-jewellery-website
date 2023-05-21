<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Jewellery Shop
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'jewellery-shop' ); ?></a>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-4 col-8 center-align">
        <div class="logo py-2 py-md-0 py-sm-0">
          <?php jewellery_shop_the_custom_logo(); ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( get_theme_mod('jewellery_shop_title_enable',true) != "") { ?>
              <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php } ?>
          <?php endif; ?>
           <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <?php if ( get_theme_mod('jewellery_shop_tagline_enable',true) != "") { ?>
              <span class="site-description"><?php echo esc_html( $description ); ?></span>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-3 col-sm-3 col-4 center-align">
        <div class="toggle-nav text-center">
          <?php if(has_nav_menu('primary')){ ?>
            <button role="tab"><?php esc_html_e('MENU','jewellery-shop'); ?></button>
          <?php }?>
        </div>
        <div id="mySidenav" class="nav sidenav text-right">
          <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','jewellery-shop' ); ?>">
            <?php if(has_nav_menu('primary')){
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) );
            } ?>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','jewellery-shop'); ?></a>
          </nav>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 col-sm-5 center-align">
        <?php if ( get_theme_mod('jewellery_shop_phone_number') != "" || get_theme_mod('jewellery_shop_email_address') != "") { ?>
          <div class="info">
            <?php if ( get_theme_mod('jewellery_shop_phone_number') != "") { ?>
              <p class=""><i class="fas fa-phone mr-2"></i><?php echo esc_html(get_theme_mod ('jewellery_shop_phone_number','')); ?></p>
            <?php }?>
            <?php if ( get_theme_mod('jewellery_shop_email_address') != "") { ?>
              <p class="mb-0"><i class="far fa-envelope mr-2"></i><?php echo esc_html(get_theme_mod ('jewellery_shop_email_address','')); ?></p>
            <?php }?>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<div class="shape"></div>