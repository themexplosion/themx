<?php
/**
* Enqueue scripts and styles.
*/
function themx_scripts() {
wp_enqueue_style('themx-main', get_theme_file_uri('/assets/css/main.css'));
wp_enqueue_style( 'themx-style', get_stylesheet_uri(), array(), _THEMX_VERSION );
wp_style_add_data( 'themx-style', 'rtl', 'replace' );

wp_enqueue_script( 'themx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _THEMX_VERSION, true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}

add_action( 'wp_enqueue_scripts', 'themx_scripts' );