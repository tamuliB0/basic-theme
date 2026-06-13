<?php
/**
 * Template for blog page.
 *
 * @package Basic_theme
 */

get_header(); ?>
<h1><?php esc_html_e( 'Blog page', 'basic-theme' ); ?></h1>
<?php if ( have_posts() ) : ?>
	<div class="grid-container">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content' ); ?>
		<?php endwhile; ?>
	</div>
	<?php
	echo paginate_links(
		array(
			'mid_size' => 2,
			'prev_next' => false,
		)
	);
else :
	esc_html_e( 'No posts found', 'basic-theme' );
endif;

get_footer();
