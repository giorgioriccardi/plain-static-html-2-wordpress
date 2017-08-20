<?php
/**
 * Template Name: Prices
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
		    <h2>Affordable Rates</h2>
				<p>Compared to other companies in the Vancouver area, our pricing is one of the most competitive in the translation industry. Our rates for translations start from $35.00 per document, depending on the size and complexity of the content. <p>We do not have any hidden charges and never change the price once it has been given as long as the source material stays the same.</p> <p>For a detailed quote, please <a href="contact">contact us</a>.</p>

			</div>

<?php get_footer(); ?>
