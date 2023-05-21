<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tiffany-lite
 */

get_header(); ?>

<?php /** post section **/ ?>
<main id="maincontent" role="main" class="our-services">
	<div class="container">
    <?php
    $tiffany_lite_left_right = get_theme_mod( 'tiffany_lite_layout_options','Right Sidebar');
    if($tiffany_lite_left_right == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <?php get_sidebar();?>
        </div>          
        <div class="col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content', get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
        	  <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                    'next_text'          => __( 'Next page', 'tiffany-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?> 
  	    </div>
      </div>
    <?php }else if($tiffany_lite_left_right == 'Right Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                    'next_text'          => __( 'Next page', 'tiffany-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
        <div class="col-lg-4 col-md-4">
    			<?php get_sidebar();?>
    	  </div>
      </div>
    <?php }else if($tiffany_lite_left_right == 'One Column'){ ?>
      <?php if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content',get_post_format() ); 
        endwhile;
        else :
          get_template_part( 'no-results' );
        endif; 
      ?>
      <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                'next_text'          => __( 'Next page', 'tiffany-lite' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
            ) );
          ?>
        </div>
      <?php } ?>  
    <?php }else if($tiffany_lite_left_right == 'Three Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div class="col-lg-6 col-md-6">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                    'next_text'          => __( 'Next page', 'tiffany-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($tiffany_lite_left_right == 'Four Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3'); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                    'next_text'          => __( 'Next page', 'tiffany-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($tiffany_lite_left_right == 'Grid Layout'){ ?>
      <div class="row">
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/grid-layout' ); 
          endwhile;
          else :
            get_template_part( 'no-results' );
          endif; 
        ?>
        <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                  'next_text'          => __( 'Next page', 'tiffany-lite' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
              ) );
            ?>
          </div>
        <?php } ?> 
      </div>
    <?php }else {?>
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'tiffany_lite_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'tiffany-lite' ),
                    'next_text'          => __( 'Next page', 'tiffany-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tiffany-lite' ) . ' </span>',
                ) );
              ?>
            </div>
          <?php } ?>  
        </div>
        <div class="col-lg-4 col-md-4">
          <?php get_sidebar();?>
        </div>
      </div>
    <?php }?>
	  <div class="clearfix"></div>
  </div>
</main>

<?php get_footer(); ?>