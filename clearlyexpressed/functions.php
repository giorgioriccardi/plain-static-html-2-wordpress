<?php

/**
 * Clearly Expressed functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Clearly Expressed
 */

 if ( ! function_exists( 'clearlyexpressed_setup' ) ) :
 	/**
 	 * Sets up theme defaults and registers support for various WordPress features.
 	 *
 	 * Note that this function is hooked into the after_setup_theme hook, which
 	 * runs before the init hook. The init hook is too late for some features, such
 	 * as indicating support for post thumbnails.
 	 */
 	function clearlyexpressed_setup() {
 		/*
 		 * Make theme available for translation.
 		 * Translations can be filed in the /languages/ directory.
 		 * If you're building a theme based on Clearly Expressed, use a find and replace
 		 * to change 'clearlyexpressed' to the name of your theme in all the template files.
 		 */
 		load_theme_textdomain( 'clearlyexpressed', get_template_directory() . '/languages' );

 		// Create Navigation MENU
 	// 	register_nav_menu( 'primary', __( 'Main Menu', 'clearlyexpressed' ) );
    register_nav_menus( array(
    	'primary' => 'Main Menu',
    	'footer_menu' => 'Footer Menu',
    ) );

 		/*
 		 * Let WordPress manage the document title.
 		 * By adding theme support, we declare that this theme does not use a
 		 * hard-coded <title> tag in the document head, and expect WordPress to
 		 * provide it for us.
 		 */
 		add_theme_support( 'title-tag' );

 		/*
 		 * Switch default core markup for search form, comment form, and comments
 		 * to output valid HTML5.
 		 */
 		add_theme_support( 'html5', array(
 			'search-form',
 			'comment-form',
 			'comment-list',
 			'gallery',
 			'caption',
 		) );

 	}
 endif;
 add_action( 'after_setup_theme', 'clearlyexpressed_setup' );

// Load styles and scripts

function clearlyexpressed_scripts(){
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/style.css' );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', $deps = array('jquery'), $ver = false, $in_footer = true );
}

add_action( 'wp_enqueue_scripts', 'clearlyexpressed_scripts' );
