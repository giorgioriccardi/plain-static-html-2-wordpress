<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearly Expressed
 */

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">

	<?php wp_head(); ?>
</head>

	<body>
		<div id="wrapper">
			<div id='header-menu'>
				<?php
					/**
					 * Displays a navigation menu.
					 *
					 * @since 3.0.0
					 */
					$defaults = array(
						'theme_location' => 'primary',
						'container' => 'div',
						'menu_class' => '',
						'menu_id' => 'menu'
					);

					wp_nav_menu( $defaults );
				?>
				<div id="toggle">
					<a href="index.html">English</a> | <a href="https://www.sageundschreibe.eu/index.html" class="aktiv">German</a>
				</div>
			</div>

			<div id="header" class="start">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-start.jpg" hspace="250" alt="50" title="Clearly Expressed Translations: say what you mean."> -->
				<div id="logo"></div>
			</div>
