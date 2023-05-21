<?php
	
	$tiffany_lite_theme_color_first = get_theme_mod('tiffany_lite_theme_color_first');

	$tiffany_lite_custom_css = '';

	$tiffany_lite_custom_css .='input[type="submit"], .search-box i, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, #footer .tagcloud a:hover, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce button.button.alt, #sidebar .tagcloud a:hover,#menu-sidebar input[type="submit"], #footer .woocommerce a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$tiffany_lite_custom_css .='background-color: '.esc_attr($tiffany_lite_theme_color_first).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.social-media i:hover, .serach_outer i, #slider .inner_carousel h1 a, #footer li a:hover{';
		$tiffany_lite_custom_css .='color: '.esc_attr($tiffany_lite_theme_color_first).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='#sidebar form, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, #sidebar form.woocommerce-product-search input[type="search"]{';
		$tiffany_lite_custom_css .='border-color: '.esc_attr($tiffany_lite_theme_color_first).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.page-box hr, #sidebar h3{';
		$tiffany_lite_custom_css .='border-top-color: '.esc_attr($tiffany_lite_theme_color_first).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='#sidebar h3{';
		$tiffany_lite_custom_css .='border-bottom-color: '.esc_attr($tiffany_lite_theme_color_first).';';
	$tiffany_lite_custom_css .='}';

	// second theme color
	$tiffany_lite_theme_color_second = get_theme_mod('tiffany_lite_theme_color_second');

	$tiffany_lite_custom_css .='.hvr-sweep-to-right:before, a.button, .pagination span,.pagination a {';
		$tiffany_lite_custom_css .='background-color: '.esc_attr($tiffany_lite_theme_color_second).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #footer input[type="submit"],.tags p a:hover,.meta-nav:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
		$tiffany_lite_custom_css .='background-color: '.esc_attr($tiffany_lite_theme_color_second).'!important;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='input[type="submit"], #header .nav ul li a:active, .page-box h4 a,.woocommerce-message::before, .woocommerce #respond input#submit, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce input.button.alt, .know-btn a, #sidebar input[type="submit"], #footer h3, .primary-navigation a:hover , .woocommerce-MyAccount-content a,#menu-sidebar input[type="submit"],#sidebar ul li a:hover,.primary-navigation a:focus,.metabox a:hover{';
		$tiffany_lite_custom_css .='color: '.esc_attr($tiffany_lite_theme_color_second).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='#header, #footer h3,.fixed-header{';
		$tiffany_lite_custom_css .='border-bottom-color: '.esc_attr($tiffany_lite_theme_color_second).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.woocommerce-message, .primary-navigation ul ul{';
		$tiffany_lite_custom_css .='border-top-color: '.esc_attr($tiffany_lite_theme_color_second).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.primary-navigation ul ul{';
		$tiffany_lite_custom_css .='border-top-color: '.esc_attr($tiffany_lite_theme_color_second).'!important;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.primary-navigation ul ul, .know-btn a{';
		$tiffany_lite_custom_css .='border-color: '.esc_attr($tiffany_lite_theme_color_second).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_custom_css .='.woocommerce-MyAccount-content a, td.product-name a, a.shipping-calculator-button, .woocommerce-info a, .woocommerce-privacy-policy-text a,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul a,.tags i{';
		$tiffany_lite_custom_css .='color: '.esc_attr($tiffany_lite_theme_color_second).'!important;';
	$tiffany_lite_custom_css .='}';

	// media
	$tiffany_lite_custom_css .='@media screen and (max-width:1000px) {';
	if($tiffany_lite_theme_color_second != false || $tiffany_lite_theme_color_first != false){
	$tiffany_lite_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a, #contact-info{
	background-image: linear-gradient(-90deg, '.esc_attr($tiffany_lite_theme_color_second).' 0%, '.esc_attr($tiffany_lite_theme_color_first).' 120%);
		} ';
	}
	$tiffany_lite_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$tiffany_lite_theme_lay = get_theme_mod( 'tiffany_lite_theme_options','Default');
    if($tiffany_lite_theme_lay == 'Default'){
		$tiffany_lite_custom_css .='body{';
			$tiffany_lite_custom_css .='max-width: 100%;';
		$tiffany_lite_custom_css .='}';
	}else if($tiffany_lite_theme_lay == 'Container'){
		$tiffany_lite_custom_css .='body{';
			$tiffany_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='.serach_outer{';
			$tiffany_lite_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$tiffany_lite_custom_css .='width:97%;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_theme_lay == 'Box Container'){
		$tiffany_lite_custom_css .='body{';
			$tiffany_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='.serach_outer{';
			$tiffany_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0;';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='.page-template-custom-front-page #header{';
			$tiffany_lite_custom_css .='width:97%';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$tiffany_lite_custom_css .='width:97%;';
		$tiffany_lite_custom_css .='} }';
		$tiffany_lite_custom_css .='
		@media screen and (max-width: 1000px){
		.page-template-custom-front-page #header{';
		$tiffany_lite_custom_css .='width:100%;';
		$tiffany_lite_custom_css .='} }';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$tiffany_lite_theme_lay = get_theme_mod( 'tiffany_lite_slider_content_alignment','Left');
    if($tiffany_lite_theme_lay == 'Left'){
		$tiffany_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tiffany_lite_custom_css .='text-align:left; left:20%; right:20%;';
		$tiffany_lite_custom_css .='}';
	}else if($tiffany_lite_theme_lay == 'Center'){
		$tiffany_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tiffany_lite_custom_css .='text-align:center; left:20%; right:20%;';
		$tiffany_lite_custom_css .='}';
	}else if($tiffany_lite_theme_lay == 'Right'){
		$tiffany_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tiffany_lite_custom_css .='text-align:right; left:20%; right:20%;';
		$tiffany_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tiffany_lite_theme_lay = get_theme_mod( 'tiffany_lite_slider_image_opacity','0.7');
	if($tiffany_lite_theme_lay == '0'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.1'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.1';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.2'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.2';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.3'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.3';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.4'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.4';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.5'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.5';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.6'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.6';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.7'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.7';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.8'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.8';
		$tiffany_lite_custom_css .='}';
		}else if($tiffany_lite_theme_lay == '0.9'){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:0.9';
		$tiffany_lite_custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/
	$tiffany_lite_button_padding_top_bottom = get_theme_mod('tiffany_lite_button_padding_top_bottom');
	$tiffany_lite_button_padding_left_right = get_theme_mod('tiffany_lite_button_padding_left_right');
	$tiffany_lite_custom_css .='#comments .form-submit input[type="submit"],.blogbutton-small,.know-btn a{';
		$tiffany_lite_custom_css .='padding-top: '.esc_attr($tiffany_lite_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($tiffany_lite_button_padding_top_bottom).'px; padding-left: '.esc_attr($tiffany_lite_button_padding_left_right).'px; padding-right: '.esc_attr($tiffany_lite_button_padding_left_right).'px; display:inline-block;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_button_border_radius = get_theme_mod('tiffany_lite_button_border_radius');
	$tiffany_lite_custom_css .='#comments .form-submit input[type="submit"], .blogbutton-small,.know-btn a,.hvr-sweep-to-right:before{';
		$tiffany_lite_custom_css .='border-radius: '.esc_attr($tiffany_lite_button_border_radius).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_show_header = get_theme_mod( 'tiffany_lite_button_border', false);
	if($tiffany_lite_show_header == true){
		$tiffany_lite_custom_css .='.know-btn a{';
			$tiffany_lite_custom_css .='border:2px solid; margin:10px 0;';
		$tiffany_lite_custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/
	$tiffany_lite_stickyheader = get_theme_mod( 'tiffany_lite_responsive_sticky_header',false);
	if($tiffany_lite_stickyheader == true && get_theme_mod( 'tiffany_lite_sticky_header') == false){
    	$tiffany_lite_custom_css .='.fixed-header{';
			$tiffany_lite_custom_css .='position:static;';
		$tiffany_lite_custom_css .='} ';
	}
    if($tiffany_lite_stickyheader == true){
    	$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='.fixed-header{';
			$tiffany_lite_custom_css .='position:fixed;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_stickyheader == false){
		$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='.fixed-header{';
			$tiffany_lite_custom_css .='position:static;';
		$tiffany_lite_custom_css .='} }';
	}

	$tiffany_lite_slider = get_theme_mod( 'tiffany_lite_responsive_slider',false);
	if($tiffany_lite_slider == true && get_theme_mod( 'tiffany_lite_slider_hide_show', false) == false){
    	$tiffany_lite_custom_css .='#slider{';
			$tiffany_lite_custom_css .='display:none;';
		$tiffany_lite_custom_css .='} ';
	}
    if($tiffany_lite_slider == true){
    	$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#slider{';
			$tiffany_lite_custom_css .='display:block;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_slider == false){
		$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#slider{';
			$tiffany_lite_custom_css .='display:none;';
		$tiffany_lite_custom_css .='} }';
	}

	$tiffany_lite_slider = get_theme_mod( 'tiffany_lite_responsive_scroll',true);
	if($tiffany_lite_slider == true && get_theme_mod( 'tiffany_lite_enable_disable_scroll', true) == false){
    	$tiffany_lite_custom_css .='#scroll-top{';
			$tiffany_lite_custom_css .='display:none !important;';
		$tiffany_lite_custom_css .='} ';
	}
    if($tiffany_lite_slider == true){
    	$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#scroll-top{';
			$tiffany_lite_custom_css .='visibility: visible !important;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_slider == false){
		$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#scroll-top{';
			$tiffany_lite_custom_css .='visibility: hidden !important;';
		$tiffany_lite_custom_css .='} }';
	}

	$tiffany_lite_sidebar = get_theme_mod( 'tiffany_lite_responsive_sidebar',true);
    if($tiffany_lite_sidebar == true){
    	$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#sidebar{';
			$tiffany_lite_custom_css .='display:block;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_sidebar == false){
		$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#sidebar{';
			$tiffany_lite_custom_css .='display:none;';
		$tiffany_lite_custom_css .='} }';
	}

	$tiffany_lite_loader = get_theme_mod( 'tiffany_lite_responsive_preloader', true);
	if($tiffany_lite_loader == true && get_theme_mod( 'tiffany_lite_preloader_option', true) == false){
    	$tiffany_lite_custom_css .='#loader-wrapper{';
			$tiffany_lite_custom_css .='display:none;';
		$tiffany_lite_custom_css .='} ';
	}
    if($tiffany_lite_loader == true){
    	$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#loader-wrapper{';
			$tiffany_lite_custom_css .='display:block;';
		$tiffany_lite_custom_css .='} }';
	}else if($tiffany_lite_loader == false){
		$tiffany_lite_custom_css .='@media screen and (max-width:575px) {';
		$tiffany_lite_custom_css .='#loader-wrapper{';
			$tiffany_lite_custom_css .='display:none;';
		$tiffany_lite_custom_css .='} }';
	}

	/*------------ Woocommerce Settings  --------------*/
	$tiffany_lite_top_bottom_product_button_padding = get_theme_mod('tiffany_lite_top_bottom_product_button_padding', 11);
	$tiffany_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tiffany_lite_custom_css .='padding-top: '.esc_attr($tiffany_lite_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($tiffany_lite_top_bottom_product_button_padding).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_left_right_product_button_padding = get_theme_mod('tiffany_lite_left_right_product_button_padding', 11);
	$tiffany_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tiffany_lite_custom_css .='padding-left: '.esc_attr($tiffany_lite_left_right_product_button_padding).'px; padding-right: '.esc_attr($tiffany_lite_left_right_product_button_padding).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_product_button_border_radius = get_theme_mod('tiffany_lite_product_button_border_radius', 0);
	$tiffany_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$tiffany_lite_custom_css .='border-radius: '.esc_attr($tiffany_lite_product_button_border_radius).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_show_related_products = get_theme_mod('tiffany_lite_show_related_products',true);
	if($tiffany_lite_show_related_products == false){
		$tiffany_lite_custom_css .='.related.products{';
			$tiffany_lite_custom_css .='display: none;';
		$tiffany_lite_custom_css .='}';
	}

	$tiffany_lite_show_wooproducts_border = get_theme_mod('tiffany_lite_show_wooproducts_border', true);
	if($tiffany_lite_show_wooproducts_border == false){
		$tiffany_lite_custom_css .='.products li{';
			$tiffany_lite_custom_css .='border: none;';
		$tiffany_lite_custom_css .='}';
	}

	$tiffany_lite_top_bottom_wooproducts_padding = get_theme_mod('tiffany_lite_top_bottom_wooproducts_padding',10);
	$tiffany_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tiffany_lite_custom_css .='padding-top: '.esc_attr($tiffany_lite_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($tiffany_lite_top_bottom_wooproducts_padding).'px !important;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_left_right_wooproducts_padding = get_theme_mod('tiffany_lite_left_right_wooproducts_padding',10);
	$tiffany_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tiffany_lite_custom_css .='padding-left: '.esc_attr($tiffany_lite_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($tiffany_lite_left_right_wooproducts_padding).'px !important;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_wooproducts_border_radius = get_theme_mod('tiffany_lite_wooproducts_border_radius',0);
	$tiffany_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tiffany_lite_custom_css .='border-radius: '.esc_attr($tiffany_lite_wooproducts_border_radius).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_wooproducts_box_shadow = get_theme_mod('tiffany_lite_wooproducts_box_shadow',0);
	$tiffany_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tiffany_lite_custom_css .='box-shadow: '.esc_attr($tiffany_lite_wooproducts_box_shadow).'px '.esc_attr($tiffany_lite_wooproducts_box_shadow).'px '.esc_attr($tiffany_lite_wooproducts_box_shadow).'px #eee;';
	$tiffany_lite_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$tiffany_lite_theme_lay = get_theme_mod( 'tiffany_lite_background_skin_mode','Transparent Background');
    if($tiffany_lite_theme_lay == 'With Background'){
		$tiffany_lite_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$tiffany_lite_custom_css .='background-color: #fff; padding:10px;';
		$tiffany_lite_custom_css .='}';
		$tiffany_lite_custom_css .='#sidebar{';
			$tiffany_lite_custom_css .='background:none;';
		$tiffany_lite_custom_css .='}';
	}else if($tiffany_lite_theme_lay == 'Transparent Background'){
		$tiffany_lite_custom_css .='.page-box-single, #sidebar, .page-box{';
			$tiffany_lite_custom_css .='background-color: transparent;';
		$tiffany_lite_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$tiffany_lite_footer_content_font_size = get_theme_mod('tiffany_lite_footer_content_font_size', 16);
	$tiffany_lite_custom_css .='.copyright p{';
		$tiffany_lite_custom_css .='font-size: '.esc_attr($tiffany_lite_footer_content_font_size).'px !important;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_copyright_padding = get_theme_mod('tiffany_lite_copyright_padding', 20);
	$tiffany_lite_custom_css .='.abovecopyright{';
		$tiffany_lite_custom_css .='padding-top: '.esc_attr($tiffany_lite_copyright_padding).'px; padding-bottom: '.esc_attr($tiffany_lite_copyright_padding).'px;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_footer_widget_bg_color = get_theme_mod('tiffany_lite_footer_widget_bg_color');
	$tiffany_lite_custom_css .='#footer{';
		$tiffany_lite_custom_css .='background-color: '.esc_attr($tiffany_lite_footer_widget_bg_color).';';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_footer_widget_bg_image = get_theme_mod('tiffany_lite_footer_widget_bg_image');
	if($tiffany_lite_footer_widget_bg_image != false){
		$tiffany_lite_custom_css .='#footer{';
			$tiffany_lite_custom_css .='background: url('.esc_attr($tiffany_lite_footer_widget_bg_image).');';
		$tiffany_lite_custom_css .='}';
	}

	// scroll to top
	$tiffany_lite_scroll_font_size_icon = get_theme_mod('tiffany_lite_scroll_font_size_icon', 22);
	$tiffany_lite_custom_css .='#scroll-top .fas{';
		$tiffany_lite_custom_css .='font-size: '.esc_attr($tiffany_lite_scroll_font_size_icon).'px;';
	$tiffany_lite_custom_css .='}';

	// Slider Height 
	$tiffany_lite_slider_image_height = get_theme_mod('tiffany_lite_slider_image_height');
	$tiffany_lite_custom_css .='#slider img{';
		$tiffany_lite_custom_css .='height: '.esc_attr($tiffany_lite_slider_image_height).'px;';
	$tiffany_lite_custom_css .='}';

	// Display Blog Post 
	$tiffany_lite_display_blog_page_post = get_theme_mod( 'tiffany_lite_display_blog_page_post','In Box');
    if($tiffany_lite_display_blog_page_post == 'Without Box'){
		$tiffany_lite_custom_css .='.page-box{';
			$tiffany_lite_custom_css .='box-shadow:none; margin:25px 0;';
		$tiffany_lite_custom_css .='}';
	}

	// slider overlay
	$tiffany_lite_slider_overlay = get_theme_mod('tiffany_lite_slider_overlay', true);
	if($tiffany_lite_slider_overlay == false){
		$tiffany_lite_custom_css .='#slider img{';
			$tiffany_lite_custom_css .='opacity:1;';
		$tiffany_lite_custom_css .='}';
	} 
	$tiffany_lite_slider_image_overlay_color = get_theme_mod('tiffany_lite_slider_image_overlay_color', true);
	if($tiffany_lite_slider_overlay != false){
		$tiffany_lite_custom_css .='#slider{';
			$tiffany_lite_custom_css .='background-color: '.esc_attr($tiffany_lite_slider_image_overlay_color).';';
		$tiffany_lite_custom_css .='}';
	}

	// site title and tagline font size option
	$tiffany_lite_site_title_size_option = get_theme_mod('tiffany_lite_site_title_size_option', 25);{
	$tiffany_lite_custom_css .='.logo h1 a, .logo p a{';
	$tiffany_lite_custom_css .='font-size: '.esc_attr($tiffany_lite_site_title_size_option).'px;';
		$tiffany_lite_custom_css .='}';
	}

	$tiffany_lite_site_tagline_size_option = get_theme_mod('tiffany_lite_site_tagline_size_option', 12);{
	$tiffany_lite_custom_css .='.logo p{';
	$tiffany_lite_custom_css .='font-size: '.esc_attr($tiffany_lite_site_tagline_size_option).'px !important;';
		$tiffany_lite_custom_css .='}';
	}

	// woocommerce product sale settings
	$tiffany_lite_border_radius_product_sale = get_theme_mod('tiffany_lite_border_radius_product_sale',50);
	$tiffany_lite_custom_css .='.woocommerce span.onsale {';
		$tiffany_lite_custom_css .='border-radius: '.esc_attr($tiffany_lite_border_radius_product_sale).'%;';
	$tiffany_lite_custom_css .='}';

	$tiffany_lite_align_product_sale = get_theme_mod('tiffany_lite_align_product_sale', 'Right');
	if($tiffany_lite_align_product_sale == 'Right' ){
		$tiffany_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tiffany_lite_custom_css .=' left:auto; right:0;';
		$tiffany_lite_custom_css .='}';
	}elseif($tiffany_lite_align_product_sale == 'Left' ){
		$tiffany_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tiffany_lite_custom_css .=' left:0; right:auto;';
		$tiffany_lite_custom_css .='}';
	}

	$tiffany_lite_product_sale_font_size = get_theme_mod('tiffany_lite_product_sale_font_size',14);
	$tiffany_lite_custom_css .='.woocommerce span.onsale{';
		$tiffany_lite_custom_css .='font-size: '.esc_attr($tiffany_lite_product_sale_font_size).'px;';
	$tiffany_lite_custom_css .='}';