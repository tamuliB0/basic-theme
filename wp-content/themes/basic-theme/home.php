<?php
/**
 * Template for blog page.
 *
 * @package Basic_theme
 */

get_header(); ?>
<h1><?php esc_html_e( 'Blog page', 'basic-theme' ); ?></h1>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			<?php endif; ?>
			<h2> 
				<?php echo esc_html( get_the_title() ); ?>
			</h2>
			<p><?php the_time( 'F j, Y' ); ?></p>

			<?php the_excerpt(); ?>
		</article>
		<?php
	endwhile;
else :
	esc_html_e( 'No posts found', 'basic-theme' );
endif;

get_footer();
