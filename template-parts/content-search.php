<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="theme-header">
		<?php the_title( sprintf( '<h2 class="theme-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="theme-meta">

		</div><!-- .theme-meta -->
		<?php endif; ?>
	</header><!-- .theme-header -->

	<?php the_post_thumbnail(); ?>

	<div class="theme-summary">
		<?php the_excerpt(); ?>
	</div><!-- .theme-summary -->

	<footer class="theme-footer">
		<?php themx_entry_footer(); ?>
	</footer><!-- .theme-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
