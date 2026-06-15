<?php
/**
 * Template for portfolio archive.
 *
 * @package Basic_Theme
 */

get_header();
?>
<h1><?php post_type_archive_title(); ?></h1>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_post_thumbnail( 'medium' ); ?>
					</a>
				<?php endif; ?>
				<h2>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php echo esc_html( get_the_title() ); ?>
					</a>
				</h2>
				<?php the_excerpt(); ?>
			</article>
    <?php endwhile; ?>
<?php else : ?>
	<p><?php esc_html_e( 'No portfolio items found.', 'basic-theme' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>