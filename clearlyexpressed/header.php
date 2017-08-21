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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo("description"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--
		I don't really want to apply a theme favicon to any website using this theme;
		so I use the root path of the website instead of the theme, if it has a favicon on it's own it's fine
	-->
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
						'theme_location' 	=> 'primary',
						'container' 			=> 'div',
						'menu_class' 			=> '',
						'menu_id' 				=> 'menu'
					);

					wp_nav_menu( $defaults );
				?>
			</div>

			<div id="header" class="start">
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
				<?php endif; // End header image check. ?>
			</div>
