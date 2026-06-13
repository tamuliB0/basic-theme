<?php 
/**
 * Header template.
 * 
 * @package Basic_theme
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset= "UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'fallback_cb'    => false,
			)
		);
		?>
	</nav>