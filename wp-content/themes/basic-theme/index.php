<?php
/**
 * Main template file.
 * 
 * @package Basic_Theme
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <h2><?php echo esc_html( get_the_title() );?></h2>
        <?php the_time( 'F j, Y' );
        the_content();
        
        ?>
        <?php
    endwhile;
    else :
        esc_html_e( 'No posts found', 'basic-theme' );
    endif;

get_footer();
?>