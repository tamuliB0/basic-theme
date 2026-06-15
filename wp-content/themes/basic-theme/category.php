<?php
/**
 * Template for category archive pages.
 *
 * @package Basic_Theme
 */ 

get_header(); ?>
<h1><?php the_archive_title(); ?></h1>
<?php echo wp_kses_post( get_the_archive_description() ); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content' );
    endwhile;
else :
    esc_html_e( 'Sorry, no posts matched your criteria.', 'basic-theme' );
endif;

get_footer();