<?php
/**
 * Template for homepage.
 * 
 * @package Basic_theme
 */

get_header();
?>

<h1><?php bloginfo( 'name' ); ?></h1>

<p><?php esc_html_e( 'Welcome to my WordPress site where I share blog posts and portfolio work.', 'basic-theme' ); ?></p>

<?php get_footer(); ?>