<?php
/**
 * Template part to display posts.
 * 
 * @package Basic_Theme
 */
?>

<article <?php post_class(); ?>>
	<?php if ( is_singular() ) : ?>
		<h1><?php echo esc_html( get_the_title() ); ?></h1>
		<p><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></p>
		<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
			<?php
			the_content();
			?>
	<?php else : ?>
		<h2>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php echo esc_html( get_the_title() ); ?>
			</a>
		</h2>
		<p><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></p>
		<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php the_post_thumbnail( 'medium' ); ?>
				</a>
		<?php endif; ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>
</article>