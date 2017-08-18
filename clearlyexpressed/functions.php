<?php

// Load styles and scripts

function clearlyexpressed_styles_script(){
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/style.css' );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', $deps = array('jquery'), $ver = false, $in_footer = true );
}

add_action( 'wp_enqueue_scripts', 'clearlyexpressed_styles_script' );

?>
