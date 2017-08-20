<?php
/**
 * Template Name: Contact
 * @package Clearly Expressed
 * @subpackage Clearly_Expressed
 * @since Clearly Expressed 1.0
 */

 get_header();
 ?>

 	<div id="content">
    <?php get_sidebar( $name = "Left Sidebar" ); ?>
 		<?php if (have_posts()) : ?>

 			<?php while (have_posts()) : the_post(); ?>

 				<?php // content

 				 	the_content();

 				?>

 			<?php endwhile; ?>

 		<?php endif; ?>
    <?php get_sidebar( $name = "Right Sidebar" ); ?>
 	</div> <!-- end of #content -->

				<div id="sidebar">
				    <h2>Frischmann &amp; Lachmann</h2>
					<p>Ph: <a href="tel:+1 604 329 9622">+1 604 329 9622</a>
						<br>E-Mail: <a href="mailto:info@clearlyexpressed.ca">info@clearlyexpressed.ca</a>
					</p>
					<p>All fields marked with an asterisk <strong>(*)</strong> are required.</p>

				</div>

<?php get_footer(); ?>
