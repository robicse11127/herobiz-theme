<?php
/**
 * Template part to display page content in page.php.
 */
?>
<article id="post-<?php the_ID(); ?>">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php
        /**
         * Page Thumbnail.
         */
        if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'full' ); // full, large, medium, custom size
        endif;
    ?>

    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>

    <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'ninestars' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
    <?php endif; ?>
</article>