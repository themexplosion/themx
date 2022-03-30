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

require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/plugin_activation.php';
require get_template_directory() . '/inc/sidebars.php';
require get_template_directory() . '/inc/demo_config.php';