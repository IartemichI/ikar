<?php
add_filter( 'show_admin_bar', '__return_false' );
add_theme_support( 'menus' );

add_filter( 'locale', 'my_theme_localized' );
function my_theme_localized( $locale ) {
	if ( isset( $_GET['l'] ) ) {
		return esc_attr( $_GET['l'] );
	}

	return $locale;
}


add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
	load_theme_textdomain( 'ikar', get_template_directory() . '/lang' );

}

require_once get_template_directory() . '/functions/enqueue_js_and_css.php';

function get_logo(): string {
	$upload_dir = wp_get_upload_dir();

	return $upload_dir['baseurl'] . "/logo.png";
}

function get_upload_dir_custom(): string {
	$upload_dir = wp_get_upload_dir();

	return $upload_dir['baseurl'] . "/";
}
