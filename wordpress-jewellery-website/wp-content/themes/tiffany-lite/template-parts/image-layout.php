<?php
/**
 * The template part for displaying slider
 *
 * @package tiffany-lite
 * @subpackage tiffany-lite
 * @since tiffany-lite 1.0
 */
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h2><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title();?></span></a></h2>
        <div class="entry-attachment">
            <div class="attachment">
                <?php tiffany_lite_the_attached_image(); ?>
            </div>
            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content"><p><?php the_excerpt();?></p></div>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'tiffany-lite' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>    
    <?php edit_post_link( __( 'Edit', 'tiffany-lite' ), '<footer  role="contentinfo" class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
            comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tiffany-lite' ),
            ) );
        }   elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'tiffany-lite' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'tiffany-lite' ) . '</span> ' ,
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'tiffany-lite' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'tiffany-lite' ) . '</span> ' ,
            ) );
        }

    ?>
</article>