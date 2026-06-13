<?php
/**
 * Template for single posts.
 *
 * @package Basic_Theme
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<?php get_template_part( 'template-parts/content' ); ?>

		<?php
	endwhile;
else :
	esc_html_e( 'No posts found', 'basic-theme' );
endif;
get_footer();
