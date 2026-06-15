<?php
/**
 * Template for 404 pages (page not found)
 *
 * @package Basic_theme
 */

get_header(); 
?>

<h1><?php esc_html_e( '404 - Page not found', 'basic-theme' ); ?></h1>
<p><?php esc_html_e( 'The page that you are looking for does not exist.', 'basic-theme' ); ?></p>

<?php get_footer(); ?>