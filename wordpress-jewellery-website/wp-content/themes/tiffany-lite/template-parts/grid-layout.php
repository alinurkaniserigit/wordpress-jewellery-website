<?php
/**
 * The template part for displaying services
 *
 * @package tiffany-lite
 * @subpackage tiffany-lite
 * @since tiffany-lite 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div class="col-md-4 col-sm-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
    <div class="page-box">
      <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <hr>
      <?php if( get_theme_mod( 'tiffany_lite_date_hide',true) != '') { ?>
        <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
      <?php } ?>
      <div class="box-image">
        <?php the_post_thumbnail();  ?>
      </div>
      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( tiffany_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('tiffany_lite_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('tiffany_lite_post_suffix_option','...') ); ?></p></div>
      <hr class="con-hr">
      <?php if( get_theme_mod('tiffany_lite_button_text','Read More') != ''){ ?>
        <div class="content-bttn">     
          <a href="<?php the_permalink();?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'tiffany-lite' ); ?>"><?php echo esc_html(get_theme_mod('tiffany_lite_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tiffany_lite_button_text','Read More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </article>
</div>