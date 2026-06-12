<?php
/**
 * Theme functions and definitions.
 * 
 * @package Basic_theme
 */

/**
* Enqueues the theme stylesheet.
*/
function basic_theme_enqueue_styles() {
    wp_enqueue_style(
        'basic-theme-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'basic_theme_enqueue_styles' );