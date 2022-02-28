<?php
if ( ! defined( '_THEMX_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMX_VERSION', '1.0.0' );
}


function themx_setup() {

	load_theme_textdomain( 'themx', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'themx' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	//todo: add custom background color, if any, useful for dark mode
	add_theme_support(
		'custom-background',
		apply_filters(
			'themx_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// todo: custom logo dimensions setup according to theme
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'themx_setup' );

// todo: add content width according to the theme
function themx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'themx_content_width', 640 );
}

add_action( 'after_setup_theme', 'themx_content_width', 0 );

function themx_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'themx' ),
			'id'            => 'primary-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'themx' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'themx_widgets_init' );

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

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';