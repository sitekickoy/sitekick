<?php

// Enqueue stylesheet

function child_enqueue_styles() {
	wp_enqueue_style( 'sitekick-theme', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), 1.0 , 'all' );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );