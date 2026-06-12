<?php
/**
 * Template for static page.
 *
 * @package Basic_theme
 */

get_header();
?>

<h1>Welcome</h1>
<p>This website shares blog posts, ideas, and portfolio work built with WordPress theme development.</p>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

	<h2><?php echo esc_html( the_title() ); ?></h2>
		<?php the_content(); ?>
	
	<?php endwhile;
else :
	esc_html_e( 'No page found', 'basic-theme' );
endif;
get_footer();
?>