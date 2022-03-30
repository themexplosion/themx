<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="theme-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="theme-title">', '</h1>' );
		else :
			the_title( '<h2 class="theme-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="theme-meta">

			</div><!-- .theme-meta -->
		<?php endif; ?>
	</header><!-- .theme-header -->

	<?php the_post_thumbnail(); ?>

	<div class="theme-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'themx' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themx' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="theme-footer">
		
	</footer>
</article>
