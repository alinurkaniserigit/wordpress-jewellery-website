<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital Storefront
 */
?>

<div class="col-lg-6 col-md-6 col-sm-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
		<?php digital_storefront_post_thumbnail(); ?>

		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<footer class="entry-footer">
			<?php digital_storefront_entry_footer(); ?>
		</footer>
	</article>
</div>