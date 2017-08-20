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
 		register_nav_menu( 'primary', esc_html__( 'Main Menu', 'clearlyexpressed' ) );
    // register_nav_menus( array(
    // 	'primary' => 'Main Menu',
    // 	'secondary' => 'Footer Menu',
    // ) );

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

    /*
 		 * Add active class to current page/menu item
 		 */
    function custom_current_menu_item_class($classes, $item){
      if ( in_array('current-menu-item', $classes) ) {
        $classes[] = 'aktiv';
      }
      return $classes;
    }
    add_filter( nav_menu_css_class, 'custom_current_menu_item_class', $priority = 10, $accepted_args = 2 );

    /**
     * Register widget area.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function clearlyexpressed_widgets_init() {
    	register_sidebar( array(
    		'name'          => __( 'Left Sidebar', 'clearlyexpressed' ),
    		'id'            => 'sidebar-1',
    		'description'   => __( 'Add widgets here to appear in your left sidebar on blog posts and archive pages.', 'clearlyexpressed' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

      register_sidebar( array(
    		'name'          => __( 'Right Sidebar', 'clearlyexpressed' ),
    		'id'            => 'sidebar-2',
    		'description'   => __( 'Add widgets here to appear in your right sidebar on blog posts and archive pages.', 'clearlyexpressed' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

    	// register_sidebar( array(
    	// 	'name'          => __( 'Footer Left', 'clearlyexpressed' ),
    	// 	'id'            => 'sidebar-3',
    	// 	'description'   => __( 'Add widgets here to appear in your footer.', 'clearlyexpressed' ),
    	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
    	// 	'after_widget'  => '</section>',
    	// 	'before_title'  => '<h2 class="widget-title">',
    	// 	'after_title'   => '</h2>',
    	// ) );
      //
    	// register_sidebar( array(
    	// 	'name'          => __( 'Footer Right', 'clearlyexpressed' ),
    	// 	'id'            => 'sidebar-4',
    	// 	'description'   => __( 'Add widgets here to appear in your footer.', 'clearlyexpressed' ),
    	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
    	// 	'after_widget'  => '</section>',
    	// 	'before_title'  => '<h2 class="widget-title">',
    	// 	'after_title'   => '</h2>',
    	// ) );
    }
    add_action( 'widgets_init', 'clearlyexpressed_widgets_init' );

    /**
     * Replaces "[...]" (appended to automatically generated excerpts) with ... and
     * a 'Continue reading' link.
     *
     * @since Clearly Expressed 1.0
     *
     * @param string $link Link to single post/page.
     * @return string 'Continue reading' link prepended with an ellipsis.
     */
    function clearlyexpressed_excerpt_more( $link ) {
    	if ( is_admin() ) {
    		return $link;
    	}

    	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
    		esc_url( get_permalink( get_the_ID() ) ),
    		/* translators: %s: Name of current post */
    		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clearlyexpressed' ), get_the_title( get_the_ID() ) )
    	);
    	return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'clearlyexpressed_excerpt_more' );

    /**
     * Handles JavaScript detection.
     *
     * Adds a `js` class to the root `<html>` element when JavaScript is detected.
     *
     * @since Clearly Expressed 1.0
     */
    function clearlyexpressed_javascript_detection() {
    	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
    }
    add_action( 'wp_head', 'clearlyexpressed_javascript_detection', 0 );

    /**
     * Register custom fonts.
     */
    function clearlyexpressed_fonts_url() {
    	$fonts_url = '';

    	/*
    	 * Translators: If there are characters in your language that are not
    	 * supported by Libre Franklin, translate this to 'off'. Do not translate
    	 * into your own language.
    	 */
    	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'clearlyexpressed' );

    	if ( 'off' !== $libre_franklin ) {
    		$font_families = array();

    		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

    		$query_args = array(
    			'family' => urlencode( implode( '|', $font_families ) ),
    			'subset' => urlencode( 'latin,latin-ext' ),
    		);

    		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    	}

    	return esc_url_raw( $fonts_url );
    }

    /**
     * Add preconnect for Google Fonts.
     *
     * @since Clearly Expressed 1.0
     *
     * @param array  $urls           URLs to print for resource hints.
     * @param string $relation_type  The relation type the URLs are printed.
     * @return array $urls           URLs to print for resource hints.
     */
    function clearlyexpressed_resource_hints( $urls, $relation_type ) {
    	if ( wp_style_is( 'clearlyexpressed-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
    		$urls[] = array(
    			'href' => 'https://fonts.gstatic.com',
    			'crossorigin',
    		);
    	}

    	return $urls;
    }
    add_filter( 'wp_resource_hints', 'clearlyexpressed_resource_hints', 10, 2 );

 	}
 endif;
 add_action( 'after_setup_theme', 'clearlyexpressed_setup' );

/**
 * Enqueue scripts and styles.
 */

function clearlyexpressed_scripts(){
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', $deps = array('jquery'), $ver = false, $in_footer = true );
}

add_action( 'wp_enqueue_scripts', 'clearlyexpressed_scripts' );

//
// IMAGES
//

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Clearly Expressed 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function clearlyexpressed_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'clearlyexpressed_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Clearly Expressed 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function clearlyexpressed_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'clearlyexpressed_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Clearly Expressed 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function clearlyexpressed_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'clearlyexpressed_post_thumbnail_sizes_attr', 10, 3 );
