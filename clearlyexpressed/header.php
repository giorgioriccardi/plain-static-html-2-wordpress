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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">

	<?php wp_head(); ?>
</head>

	<body>
		<div id="wrapper">
			<div id='header-menu'>
				<div id="menu">
					<ul>
						<li class="oben"><a href="index.html" class="aktiv">Home</a></li>
						<li><a href="about-us.htm">About Us</a></li>
						<li><a href="services.htm">Services</a></li>
						<li><a href="prices.htm">Prices</a></li>
						<li><a href="contact.htm">Contact</a></li>
					</ul>
				</div>
				<div id="toggle">
					<a href="index.html">English</a> | <a href="https://www.sageundschreibe.eu/index.html" class="aktiv">German</a>
				</div>
			</div>

			<div id="header" class="start">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-start.jpg" hspace="250" alt="50" title="Clearly Expressed Translations: say what you mean."> -->
				<div id="logo"></div>
			</div>
