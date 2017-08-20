<?php
/**
 * Template Name: Home
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

				<div id='leftbar'>
					<h3>Annette Frischmann</h3>

					<h2>My Services</h2>

					<ul>
						<li>Translations of General Texts</li>
						<li>Health and Rehabilitation Medicine</li>
						<li>Contracts</li>
						<li>Business Correspondence</li>
						<li>Marketing Material</li>
						<li>Website Contents</li>
						<li>Business Proposals</li>
						<li>Technical Manuals</li>
						<li>Brochures and Flyers etc.</li>
					</ul>

					<h2>I offer Translations for the Languages</h2>
					<ul>
						<li>German-English</li>
						<li>English-German</li>
						<li>French-English</li>
						<li>French-German</li>
						<li>Italian-English</li>
					</ul>

					<h2>Qualifications and other Information</h2>
					<ul>
						<li>Master Degree in Applied Linguistics and Cultural Studies. English, German and French.<br></li>

					</ul>
					<h4><a href="about-us" title="About us" target="_self">more...</a></h4>
				</div>

				<div id="sidebar">
					<h3>Denise Lachmann</h3>

					<h2>My Services</h2>

					<ul>
						<li>Simultaneous Interpreting</li>
						<li>Consecutive Interpreting</li>
						<li>Whispered Interpreting</li>
						<li>Conference Interpreting</li>
						<li>General Translations</li>
						<li>Certified Document Translations (for Germany)</li>
					</ul>

					<h2>I offer Translations and Interpretations for the Languages</h2>
					<ul>
						<li>German-English</li>
						<li>English-German</li>
						<li>French-English</li>
						<li>French-German</li>
					</ul>

					<h2>Qualifications and other Information</h2>
					<ul>
						<li>Master Degree in Applied Linguistics and Cultural Studies. English, German and French.<br></li>

					</ul>
					<h4><a href="about-us" title="About us" target="_self">more...</a></h4>

				</div>

<?php
get_footer();
?>
