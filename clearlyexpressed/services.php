<?php
/**
 * Template Name: Services
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


			<div id='leftbar' >
			<h3>Translating</h3>

				<h2><a href='#translating'>The Art of an Excellent Translation...</a></h2>

				<h2><a href='#standard-texts'>General Texts</a></h2>

				<h2><a href='#technical-texts'>Technical Texts</a></h2>

        <!-- <h2><a href='#urkunden'>Urkunden</a></h2> -->

        <h2><a href='#proofreading'>Proofreading</a></h2>
		 	</div>

       <div id="sidebar">
			<h3>Interpreting</h3>

				<h2><a href='#interpreting'>Outstanding Interpreting Services...</a></h2>

				<h2><a href='#simultaneous-interpreting'>Simultaneous Interpreting</a></h2>

				<h2><a href='#consecutive-interpreting'>Consecutive Interpreting</a></h2>

                <h2><a href='#whispered-interpreting'>Whispered Interpreting</a></h2>

                <h2><a href='#liaison-interpreting '>Liaison Interpreting </a></h2>

			</div>

<?php get_footer(); ?>
