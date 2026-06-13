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

		<article <?php post_class(); ?>>
			
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			<?php endif; ?>
			<h2>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php echo esc_html( get_the_title() ); ?>
				</a>
			</h2>
			<p><?php the_time( 'F j, Y' ); ?></p>

			<?php the_excerpt(); ?>
		</article>
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
