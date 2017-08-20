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
	<title><?php bloginfo( "name" ); ?></title>
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
			<div class="logo">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
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
