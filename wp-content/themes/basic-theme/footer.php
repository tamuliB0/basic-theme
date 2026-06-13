<?php 
/**
 * Footer template.
 * 
 * @package Basic_theme
 */
 
wp_nav_menu(
    array(
        'theme_location' => 'footer-menu',
        'fallback_cb' => false
    )
);
wp_footer(); 
?>
</body>
</html>