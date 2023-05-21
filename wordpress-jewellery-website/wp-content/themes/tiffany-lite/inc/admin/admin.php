<?php
//about theme info
add_action( 'admin_menu', 'tiffany_lite_abouttheme' );
function tiffany_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Tiffany Theme', 'tiffany-lite'), esc_html__('About Tiffany Theme', 'tiffany-lite'), 'edit_theme_options', 'tiffany_lite_guide', 'tiffany_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function tiffany_lite_admin_theme_style( $hook ) {
	if ( 'appearance_page_tiffany_lite_guide' != $hook ) {
   return;
	}
	wp_enqueue_style('tiffany-lite-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
 }
 add_action('admin_enqueue_scripts', 'tiffany_lite_admin_theme_style'); 

//guidline for about theme
function tiffany_lite_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Netnus has got everything that an individual and group need to be successful in their venture.', 'tiffany-lite'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( TIFFANY_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'tiffany-lite'); ?></a>
			<a href="<?php echo esc_url( TIFFANY_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'tiffany-lite'); ?></a>
			<a href="<?php echo esc_url( TIFFANY_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tiffany-lite'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'tiffany-lite'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'tiffany-lite'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'tiffany-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( TIFFANY_LITE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'tiffany-lite'); ?></a>
			<a href="<?php echo esc_url( TIFFANY_LITE_CONTACT ); ?>"><?php esc_html_e('Support', 'tiffany-lite'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'tiffany-lite'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'tiffany-lite'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'tiffany-lite'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'tiffany-lite'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'tiffany-lite'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'tiffany-lite'); ?></b> <?php esc_html_e('Set the front page: Go to Setting >> Reading >> Set the front page display static page to home page', 'tiffany-lite'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'tiffany-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( TIFFANY_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'tiffany-lite'); ?></a>
			<a href="<?php echo esc_url( TIFFANY_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'tiffany-lite'); ?></a>
			<a href="<?php echo esc_url( TIFFANY_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tiffany-lite'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.jpg" alt="" />
	  			<p><?php esc_html_e( 'Bring out the best in you with our Premium Tiffany WordPress Theme. Tiffany Jewellery Store Responsive WordPress Theme with simple and cool features will be suitable for jewellery, fashion designer store, apparel, cosmetic and womens store.	Full user guide documentation to help you installing and utilizing the theme.Compatible with all major browsers, The stories will be so attractive that no one can turn away without getting some of it.', 'tiffany-lite' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'tiffany-lite' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'tiffany-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'tiffany-lite' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
</script>
<?php } ?>