<?php

function enqueue_style() {
	wp_enqueue_style( 'style.min.css', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array() );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.min.js' );
	wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_style' );
