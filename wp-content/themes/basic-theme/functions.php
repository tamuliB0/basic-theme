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

/**
 * Sets up theme features.
 */
function basic_theme_setup() {
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'basic_theme_setup' );

/**
 * Register theme navigation menus.
 */
function basic_theme_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Primary Menu', 'basic-theme' ),
			'footer-menu' => __( 'Secondary Menu', 'basic-theme' ),
		)
	);
}
add_action( 'init', 'basic_theme_register_menus' );

/**
 * Register Portfolio custom post type.
 */
function basic_theme_register_portfolio_post_type() {
	$labels = array(
        'name'                  => __( 'Portfolio', 'basic-theme' ),
        'singular_name'         => __( 'Portfolio Item', 'basic-theme' ),
        'menu_name'             => __( 'Portfolio', 'basic-theme' ),
        'name_admin_bar'        => __( 'Portfolio', 'basic-theme' ),
        'add_new'               => __( 'Add New', 'basic-theme' ),
        'add_new_item'          => __( 'Add New Portfolio', 'basic-theme' ),
        'new_item'              => __( 'New Portfolio', 'basic-theme' ),
        'edit_item'             => __( 'Edit Portfolio', 'basic-theme' ),
        'view_item'             => __( 'View Portfolio', 'basic-theme' ),
        'search_items'          => __( 'Search Portfolios', 'basic-theme' ),
        'not_found'             => __( 'No portfolios found.', 'basic-theme' ),
        'not_found_in_trash'    => __( 'No portfolios found in Trash.', 'basic-theme' ),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array(
            'title',
            'editor',
            'thumbnail'
        ),
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'basic_theme_register_portfolio_post_type' );