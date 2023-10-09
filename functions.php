<?php

define( 'PODKAST_THEME_ROOT', get_template_directory_uri() );
define( 'PODKAST_IMG_DIR', PODKAST_THEME_ROOT . '/images' );

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style/style.css');

	wp_enqueue_script( 'script-main', get_template_directory_uri() .'/script/script.js', array(), '1.0', true );
}
