<?php
/**
 * The header for our theme
 *
 * @subpackage Mobler Ecommerce
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
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
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'mobler-ecommerce' ); ?></a>

<div id="header">
	<div class="row">
		<div class="col-lg-3 col-md-3 align-self-center">
			<div class="logo text-md-left text-center">
				<?php if ( has_custom_logo() ) : ?>
            		<?php the_custom_logo(); ?>
	            <?php endif; ?>
             	<?php if (get_theme_mod('mobler_ecommerce_show_site_title',true)) {?>
          			<?php $blog_info = get_bloginfo( 'name' ); ?>
	                <?php if ( ! empty( $blog_info ) ) : ?>
	                  	<?php if ( is_front_page() && is_home() ) : ?>
	                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	                  	<?php else : ?>
                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  		<?php endif; ?>
	                <?php endif; ?>
	            <?php }?>
			</div>
		</div>
		<div class="col-lg-9 col-md-9">
			<div class="sale-banner">
				<div class="row">
					<div class="col-lg-9 col-md-8 text-md-left text-center align-self-center">
						<?php if(get_theme_mod('mobler_ecommerce_sale_text') != '') {?>
							<p class="sale-text mb-md-0"><?php echo esc_html(get_theme_mod('mobler_ecommerce_sale_text', 'mobler-ecommerce')) ?></p>
						<?php }?>
					</div>
					<div class="col-lg-3 col-md-4 text-md-right text-center align-self-center">
						<?php if(get_theme_mod('mobler_ecommerce_shop_btn') != '') {?>
							<a class="shop-btn" href="<?php echo esc_url( get_permalink( get_option('woocommerce_shop_page_id') ) ); ?>"><?php echo esc_html(get_theme_mod('mobler_ecommerce_shop_btn', 'mobler-ecommerce')); ?><i class="fas fa-arrow-right"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('mobler_ecommerce_shop_btn', 'mobler-ecommerce')); ?></span></a>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="middle header">
				<div class="row">
					<div class="col-lg-4 col-md-7 col-9 align-self-center">
			            <?php if (get_theme_mod('mobler_ecommerce_show_tagline',true)) {?>
			                <?php $description = get_bloginfo( 'description', 'display' );
		                  	if ( $description || is_customize_preview() ) : ?>
			                  	<p class="site-description"><?php echo esc_html($description); ?>            	</p>
		              		<?php endif; ?>
		          		<?php }?>
					</div>
					<div class="col-lg-8 col-md-5 col-3">
						<div class="menu-bar">
							<div class="toggle-menu responsive-menu">
								<?php if(has_nav_menu('primary')){ ?>
					            	<button onclick="mobler_ecommerce_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','mobler-ecommerce'); ?></span></button>
					            <?php }?>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'mobler-ecommerce' ); ?>">
				                  	<?php if(has_nav_menu('primary')){
					                    wp_nav_menu( array( 
											'theme_location' => 'primary',
											'container_class' => 'main-menu-navigation clearfix' ,
											'menu_class' => 'clearfix',
											'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
											'fallback_cb' => 'wp_page_menu',
					                    ) ); 
				                  	} ?>
				                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="mobler_ecommerce_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','mobler-ecommerce'); ?></span></a>
				                </nav>
				            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="row">
					<div class="col-lg-7 col-md-12 align-self-center">
						<?php if(class_exists('woocommerce')){ ?>
				            <div class="search-box">
								<div class="row mx-0">
									<div class="col-lg-5 col-md-6 pr-md-0 align-self-center position-relative">
										<button role="tab" class="product-btn"><?php echo esc_html_e('All Categories','mobler-ecommerce'); ?><i class="fas fa-chevron-down ml-2"></i></button>
										<div class="product-cat">
											<?php
											$args = array(
											 'orderby'    => 'title',
											 'order'      => 'ASC',
											 'hide_empty' => 0,
											 'parent'  => 0
											);
											$product_categories = get_terms( 'product_cat', $args );
											$count = count($product_categories);
											if ( $count > 0 ){
											  foreach ( $product_categories as $product_category) {
											  $cats_id   = $product_category->term_id;
											  $cat_link = get_category_link( $cats_id );
											  if ($product_category->category_parent == 0) { ?>
											  <li class="drp_dwn_menu py-2 mx-3"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
											  <?php
											  }
											  echo esc_html( $product_category->name ); ?></a><i class="fas fa-caret-down"></i></li>
											  <?php
											  }
											}
											?>
										</div>
									</div>
									<div class="col-lg-7 col-md-6 align-self-center">
										<?php if(class_exists('woocommerce')){ ?>
											<?php get_product_search_form()?>
										<?php }?> 
									</div>
								</div> 
							</div>
						<?php }?>
			        </div>
			        <div class="col-lg-3 col-md-10 phone text-md-right text-center align-self-center py-1">
			        	<?php if(get_theme_mod('mobler_ecommerce_phone_no') != ''){ ?>
			        		<a href="tel:<?php echo esc_attr(get_theme_mod('mobler_ecommerce_phone_no')); ?>"><?php echo esc_html(get_theme_mod('mobler_ecommerce_phone_no')); ?><i class="fas fa-phone ml-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('mobler_ecommerce_phone_no')); ?></span></a>
			        	<?php }?>
			        </div>
			        <div class="col-lg-1 col-md-1 col-6 cart_icon text-md-center text-right align-self-center">
			        	<?php if(class_exists('woocommerce')){ ?>
					        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-cart"></i></a>
				            <li class="cart_box">
				              	<span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
				            </li>
						<?php }?>
				    </div>
				    <div class="col-lg-1 col-md-1 col-6 myaccount-icon text-md-center text-left align-self-center">
				    	<?php if(class_exists('woocommerce')){ ?>
				    		<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user"></i><span class="screen-reader-text"><?php esc_html_e( 'MyAccount', 'mobler-ecommerce' ); ?></span></a>
				    	<?php }?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3 col-md-4">
		<?php if(class_exists('woocommerce')){ ?>
			<div class="sidebar-category px-3">
				<div class="categry-header"><span><?php echo esc_html_e('Category','mobler-ecommerce'); ?></span></div>
				<div class="cat-drop">
					<?php
						$args = array(
						    'orderby'    => 'title',
						    'order'      => 'ASC',
						    'hide_empty' => 0,
						    'parent'  => 0
						);
						$mobler_ecommerce_product_categories = get_terms( 'product_cat', $args );
						$count = count($mobler_ecommerce_product_categories);
						if ( $count > 0 ){
						    foreach ( $mobler_ecommerce_product_categories as $mobler_ecommerce_product_category ) {
					    		$ecommerce_cat_id   = $mobler_ecommerce_product_category->term_id;
								$cat_link = get_category_link( $ecommerce_cat_id );
								$thumbnail_id = get_term_meta( $mobler_ecommerce_product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
								$image = wp_get_attachment_url( $thumbnail_id );
						    	if ($mobler_ecommerce_product_category->category_parent == 0) {
						    		?>
									<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $mobler_ecommerce_product_category ) ); ?>">
									 	<?php
									if ( $image ) {
										echo '<img class="thumd_img" src="' . esc_url( $image ) . '" alt="" />';
									}
									echo esc_html( $mobler_ecommerce_product_category->name ); ?></a><i class="fas fa-caret-down"></i></li>
								<?php }
							}
						}
					?>
				</div>
			</div>
		<?php }?>
	</div>
	<div class="col-lg-9 col-md-8 pl-md-0">