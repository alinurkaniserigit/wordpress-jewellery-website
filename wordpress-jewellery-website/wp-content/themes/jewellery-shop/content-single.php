<?php
/**
 * @package Jewellery Shop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <?php if (has_post_thumbnail() ){ ?>
        <div class="post-thumb">
           <?php the_post_thumbnail(); ?>
        </div>
    <?php } ?>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'jewellery-shop' ),
                'after'  => '</div>',
            ) );
        ?>
        <?php the_tags(); ?>
    </div>
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'jewellery-shop' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>