<?php
/*
 * @package Jewellery Shop
 */

function jewellery_shop_admin_enqueue_scripts() {
	wp_enqueue_style( 'jewellery-shop-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'jewellery_shop_admin_enqueue_scripts' );

add_action('after_switch_theme', 'jewellery_shop_options');

function jewellery_shop_options () {
	global $pagenow;
	if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
		wp_redirect( admin_url( 'themes.php?page=jewellery-shop' ) );
		exit;
	}
}

if ( ! defined( 'JEWELLERY_SHOP_SUPPORT' ) ) {
define('JEWELLERY_SHOP_SUPPORT',__('https://wordpress.org/support/theme/jewellery-shop','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_REVIEW' ) ) {
define('JEWELLERY_SHOP_REVIEW',__('https://wordpress.org/support/theme/jewellery-shop/reviews/#new-post','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_PRO_DEMO' ) ) {
define('JEWELLERY_SHOP_PRO_DEMO',__('https://www.theclassictemplates.com/demo/jewellery-shop/','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_THEME_PAGE' ) ) {
define('JEWELLERY_SHOP_THEME_PAGE',__('https://www.theclassictemplates.com/themes/','jewellery-shop'));
}
if ( ! defined( 'JEWELLERY_SHOP_PREMIUM_PAGE' ) ) {
define('JEWELLERY_SHOP_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/jewellery-wordpress-theme/','jewellery-shop'));
}

function jewellery_shop_theme_info_menu_link() {

	$theme = wp_get_theme();
	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'jewellery-shop' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ),
		esc_html__( 'Theme Info', 'jewellery-shop' ),'edit_theme_options','jewellery-shop','jewellery_shop_theme_info_page'
	);
}
add_action( 'admin_menu', 'jewellery_shop_theme_info_menu_link' );

function jewellery_shop_theme_info_page() {

	$theme = wp_get_theme();
	?>
<div class="wrap theme-info-wrap">
	<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'jewellery-shop' ), esc_html($theme->display( 'Name', 'jewellery-shop'  )),esc_html($theme->display( 'Version', 'jewellery-shop' ))); ?>
	</h1>
	<p class="theme-description">
	<?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'jewellery-shop' ); ?>
	</p>
	<hr>
	<div class="important-links clearfix">
		<p><strong><?php esc_html_e( 'Theme Links', 'jewellery-shop' ); ?>:</strong>
			<a href="<?php echo esc_url( JEWELLERY_SHOP_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'jewellery-shop' ); ?></a>
			<a href="<?php echo esc_url( JEWELLERY_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'jewellery-shop' ); ?></a>
			<a href="<?php echo esc_url( JEWELLERY_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'jewellery-shop' ); ?></a>
			<a href="<?php echo esc_url( JEWELLERY_SHOP_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'jewellery-shop' ); ?></a>
			<a href="<?php echo esc_url( JEWELLERY_SHOP_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'jewellery-shop' ); ?></a>
		</p>
	</div>
	<hr>
	<div id="getting-started">
		<h3><?php printf( esc_html__( 'Getting started with %s', 'jewellery-shop' ), 
		esc_html($theme->display( 'Name', 'jewellery-shop' ))); ?></h3>
		<div class="columns-wrapper clearfix">
			<div class="column column-half clearfix">
				<div class="section">
					<h4><?php esc_html_e( 'Theme Description', 'jewellery-shop' ); ?></h4>
					<div class="theme-description-1"><?php echo esc_html($theme->display( 'Description' )); ?></div>
				</div>
			</div>
			<div class="column column-half clearfix">
				<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="section">
					<h4><?php esc_html_e( 'Theme Options', 'jewellery-shop' ); ?></h4>
					<p class="about">
					<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'jewellery-shop' ),esc_html($theme->display( 'Name', 'jewellery-shop' ))); ?></p>
					<p>
					<a href="<?php echo esc_attr(wp_customize_url()); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Customize Theme', 'jewellery-shop' ); ?></a>
					<a href="<?php echo esc_url( JEWELLERY_SHOP_PREMIUM_PAGE ); ?>" target="_blank" class="button button-secondary premium-btn"><?php esc_html_e( 'Checkout Premium', 'jewellery-shop' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div id="theme-author">
	  <p><?php
		printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'jewellery-shop' ),
			esc_html($theme->display( 'Name', 'jewellery-shop' )),
			'<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'jewellery-shop' ) . '">classictemplate</a>',
			'<a target="_blank" href="' . esc_url( JEWELLERY_SHOP_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'jewellery-shop' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'jewellery-shop' ) . '</a>'
		)
		?></p>
	</div>
</div>
<?php
}
