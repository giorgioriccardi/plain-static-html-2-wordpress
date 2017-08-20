<?php
/**
 * Template Name: Credits
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


			<div id="sidebar-contacts-webdesign">
		    <h2>Webdesign</h2>
				<p><strong>Giorgio Riccardi
                <br>Alessandro Franceschetti</strong>
				<br>Vancouver, BC &amp; Turin, Italy
				<br><br>Giorgio Riccardi
				<br>CEO, SEO &amp; SEM
                <br>@ <a href="https://www.youtrail.com/" title="www.youtrail.com" target="_blank">www.youtrail.com</a>
				<br>Web Designer
				<br>Photo Designer</p>
				<p>Contact: <a href="mailto:giorgio@griccardi.com" title="giorgio@griccardi.com">giorgio@griccardi.com</a></p>
				<p><a href="https://giorgioriccardi.com/" title="www.giorgioriccardi.com" target="_blank">www.giorgioriccardi.com</a></p>
                <br>
				<h2>IT Developer<br>
			    Web Application</h2>
				<p><strong>Alessandro Franceschetti</strong>
                <br>Web Designer
                <br>Software Engineer
                <br>CTO &amp; IT Manager
                <br>@ <a href="https://www.youtrail.com/" title="www.youtrail.com" target="_blank">www.youtrail.com</a></p>
				<p>Contact: <a href="mailto:franceschetti.alessandro@gmail.com" title="franceschetti.alessandro@gmail.com">franceschetti.alessandro@gmail.com</a></p>
				<p><a href="https://www.seatoskywebsolutions.ca/" title="https://www.seatoskywebsolutions.ca/" target="_blank">www.ssws.ca</a></p>
			</div>
		</div>

<?php get_footer(); ?>
