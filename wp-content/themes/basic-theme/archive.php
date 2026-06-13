<?php
/**
 * Template for archive page.
 *
 * @package Basic_Theme
 */

get_header();?>
<h1><?php the_archive_title(); ?></h1>
<?php the_archive_description() ?>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<?php get_template_part( 'template-parts/content' ); ?>
		<?php
	endwhile;
else :
	esc_html_e( 'Sorry, no posts matched your criteria.', '' );
endif;

get_footer();

