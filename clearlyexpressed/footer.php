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
    <p>&copy; <?php echo date(Y) . " " . get_bloginfo( 'name' ); ?></p>
  </div>
  <div class="right">
    <p><a href="credits">Credits</a></p>
  </div>
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
