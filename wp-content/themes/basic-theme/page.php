<?php
/**
 * Template for static page.
 *
 * @package Basic_theme
 */

get_header();
?>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<article <?php post_class(); ?>>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
			<?php the_content(); ?>
		</article>
	
	<?php endwhile;
else :
	esc_html_e( 'No page found', 'basic-theme' );
endif;
get_footer();
?>