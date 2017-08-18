<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearly Expressed
 */

?>

<div id="footer">
  <div class="left">
    <p>&copy; 2017 Clearly Expressed Translations</p>
  </div>
  <div class="right">
    <a href="http://www.iubenda.com/privacy-policy/308195" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a>
  </div>
  <div class="right">
    <p><a href="credits.htm">Credits</a></p>
  </div>
</div>
<?php
  /**
   * Displays a navigation menu.
   *
   * @since 3.0.0
   */
  $defaults = array(
    'theme_location' => 'Footer Menu',
    'container' => 'div',
    'menu_class' => '',
    'menu_id' => 'footer_menu'
  );

  wp_nav_menu( $defaults );
?>
</div>

<?php wp_footer(); ?>

</body>
</html>
