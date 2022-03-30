<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="theme-header">
		<?php the_title( '<h1 class="theme-title">', '</h1>' ); ?>
	</header><!-- .theme-header -->

	<?php the_post_thumbnail(); ?>

	<div class="theme-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themx' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .theme-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="theme-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'themx' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .theme-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
