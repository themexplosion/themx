<?php
// todo: finish it at the end of design
// Disable regenerating images while importing media
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Change some options for the jQuery modal window
function tobak_ocdi_confirmation_dialog_options( $options ) {
	return array_merge( $options, array(
		'width'       => 400,
		'dialogClass' => 'wp-dialog',
		'resizable'   => false,
		'height'      => 'auto',
		'modal'       => true,
	) );
}

add_filter( 'pt-ocdi/confirmation_dialog_options', 'tobak_ocdi_confirmation_dialog_options', 10, 1 );

function tobak_ocdi_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi_custom-intro-text notice notice-info inline">';
	$default_text .= sprintf(
		'%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
		esc_html__( 'Install and activate all ', 'themx' ),
		get_admin_url( null, 'themes.php?page=tgmpa-install-plugins' ),
		esc_html__( 'required plugins', 'themx' ),
		esc_html__( 'before you click on the "Import" button.', 'themx' )
	);
    
	$default_text .= sprintf(
		'<br> %1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
		esc_html__( 'After importing a demo, you will find all the pages in ', 'themx' ),
		get_admin_url( null, 'edit.php?post_type=page' ),
		esc_html__( 'Pages.', 'themx' ),
		esc_html__( 'Other pages will be imported along with the main Homepage demo.', 'themx' )
	);
	$default_text .= '<br>';
	$default_text .= sprintf(
		'%1$s <a href="%2$s" target="_blank">%3$s</a>',
		esc_html__( 'If you fail to import the demo data, follow the alternative way', 'themx' ),
		'https://is.gd/bk8F5p',
		esc_html__( 'here.', 'themx' )
	);
	$default_text .= '</div>';

	return $default_text;
}

add_filter( 'pt-ocdi/plugin_intro_text', 'tobak_ocdi_intro_text' );

// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'tobak_import_files' );
function tobak_import_files() {
	return array(
		array(
			'import_file_name'         => esc_html__( 'Home Creative', 'themx' ),
			'local_import_file'        => trailingslashit( get_template_directory() ) . 'inc/demo/contents.xml',
			'local_import_widget_file' => trailingslashit( get_template_directory() ) . 'inc/demo/widgets.wie',
			'import_preview_image_url' => trailingslashit( get_template_directory_uri() ) . 'inc/demo/images/creative.png',
			'preview_url'              => 'https://wordpress-theme.spider-themes.net/themx/',
			'local_import_redux'       => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/settings.json',
					'option_name' => 'tobak_opt',
				),
			),
		),

	);
}

function tobak_after_import_setup( $selected_import ) {

	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'main_menu' => $main_menu->term_id,
	)
	);

	// Disable Elementor's Default Colors and Default Fonts
	update_option( 'elementor_disable_color_schemes', 'yes' );
	update_option( 'elementor_disable_typography_schemes', 'yes' );
	update_option( 'elementor_global_image_lightbox', '' );

	$front_page_id = get_page_by_title( 'Home Creative' );

	// Assign front page and posts page (blog page).
	if ( 'Home Creative' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home Creative' );
	}

	if ( 'Home Customer Support' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home Customer Support' );
	}

	if ( 'Home Doc' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home Doc' );
	}

	if ( 'Home Product Landing' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home Product Landing' );
	}


	$blog_page_id = get_page_by_title( 'Blog' );

	// Set the home page and blog page
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
}

add_action( 'pt-ocdi/after_import', 'tobak_after_import_setup' );