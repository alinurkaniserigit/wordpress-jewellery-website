<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'tiffany_lite_before_slider' ); ?>

  <?php /** slider section **/ ?>
  <?php if( get_theme_mod('tiffany_lite_slider_hide_show', false) != '' || get_theme_mod( 'tiffany_lite_responsive_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('tiffany_lite_slider_speed_option', 3000)); ?>"> 
        <?php $tiffany_lite_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'tiffany_lite_slidersettings-page-' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $tiffany_lite_slider_pages[] = $mod;
            }
          }
          if( !empty($tiffany_lite_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $tiffany_lite_slider_pages,
              'orderby' => 'post__in'
            );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('tiffany_lite_slider_title_Show_hide',true) != ''){ ?>
                    <h1 class="mb-3"><?php the_title();?></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('tiffany_lite_slider_content_Show_hide',true) != ''){ ?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( tiffany_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('tiffany_lite_slider_excerpt_length','10')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('tiffany_lite_slider_button','DISCOVER MORE') != ''){ ?>
                    <div class="know-btn">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('tiffany_lite_slider_button','DISCOVER MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tiffany_lite_slider_button','DISCOVER MORE'));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','tiffany-lite' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','tiffany-lite' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>
  <?php do_action( 'tiffany_lite_after_slider' ); ?>

  <?php /** post section **/ ?>
    <section id="tiffany-lite" class="my-4">
      <div class="container">
        <div class="row">
          <?php 
            $tiffany_lite_catData=  get_theme_mod('tiffany_lite_category');
              if($tiffany_lite_catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html($tiffany_lite_catData,'tiffany-lite')));?>
                  <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4"> 
                    <div class="photo-content my-3">
                      <div class="imagebox">
                        <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                        <div class="contentbox w-100 text-center text-uppercase">
                          <h2 class="m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                          <p class="m-3"><?php $excerpt = get_the_excerpt(); echo esc_html( tiffany_lite_string_limit_words( $excerpt,10 ) ); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
            wp_reset_postdata();
            }?>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>

  <?php do_action( 'tiffany_lite_after_tiffany_section' ); ?>

  <div class="container entry-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>