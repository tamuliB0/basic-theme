<?php
/**
 * Template for single portfolio items.
 *
 * @package Basic_Theme
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article <?php post_class(); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
            <h1><?php echo esc_html( get_the_title() ); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php
    endwhile;
else :
    esc_html_e( 'No portfolio item found.', 'basic-theme' );
endif;
get_footer();