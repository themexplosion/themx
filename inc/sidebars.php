<?php
function register_theme_sidebar() {
	// Blog Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'themx' ),
		'description'   => esc_html__( 'Place widgets in sidebar widgets area.', 'themx' ),
		'id'            => 'sidebar_widgets',
		'before_widget' => '<div id="%1$s" class="post-cat-widget pt-60  %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="post-widget-title pb-20">',
		'after_title'   => '</h4>',
	) );


	// Footer Widgets
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'themx' ),
		'description'   => esc_html__( 'Add widgets here for Footer widgets area', 'themx' ),
		'id'            => 'footer_widgets',
		'before_widget' => '<div id="%1$s" class="col-lg-3 footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}

add_action( 'widgets_init', 'register_theme_sidebar' );
