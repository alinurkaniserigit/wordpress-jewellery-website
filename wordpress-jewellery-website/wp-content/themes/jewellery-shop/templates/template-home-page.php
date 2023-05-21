<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Jewellery Shop
 */

get_header(); ?>

<div id="content">
  <?php
    $hidcatslide = get_theme_mod('jewellery_shop_hide_categorysec', true);
    if( $hidcatslide != ''){
  ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('jewellery_shop_slidersection',false) ) { ?>
            <?php $queryvar = new WP_Query(
              array( 
                'cat' => esc_attr(get_theme_mod('jewellery_shop_slidersection',true)),
                'posts_per_page' => esc_attr(get_theme_mod('jewellery_shop_slider_count',true))
              )
            );
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="bg-opacity"></div>
                <div class="slider-box">
                  <p><i class="far fa-gem"></i></p>
                  <h3><?php the_title(); ?></h3>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 15 );
                    echo '<p class="mt-4">' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                  <?php if ( get_theme_mod('jewellery_shop_button_text') != "") { ?>
                    <div class="slide-btn mt-5">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('jewellery_shop_button_text',__('Read More','jewellery-shop'))); ?></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <?php
    $jewellery_shop_hidepageboxes = get_theme_mod('jewellery_shop_disabled_pgboxes',true);
    if( $jewellery_shop_hidepageboxes != ''){
  ?>
  <section id="serives_box" class="py-4">
    <div class="container">
      <div class="row">
        <?php if( get_theme_mod('jewellery_shop_services_cat',false) ) { ?>
          <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('jewellery_shop_services_cat',true)));
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                <div class="services_inner_box text-center p-3">
                  <?php the_post_thumbnail( 'full' ); ?>
                  <h4 class="py-3 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 10 );
                    echo '<p class="mb-0">' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        <?php }?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>