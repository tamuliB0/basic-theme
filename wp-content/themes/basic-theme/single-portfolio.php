<?php
/**
 * Template for single portfolio items.
 *
 * @package Basic_Theme
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content' );
    endwhile;
else :
    esc_html_e( 'No portfolio item found.', 'basic-theme' );
endif;

get_footer();