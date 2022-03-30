<?php
/**
 * @param $classes
 *
 * @return array
 */
function themx_body_classes( $classes ) {

	$classes[] = 'themx-wrapper';

	return $classes;
}

add_filter( 'body_class', 'themx_body_classes' );