<?php
/**
 * Template Name: About
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
				<h3>Annette Frischmann</h3>

				<h2>My services</h2>

				<ul>
					<li>Translations of General Texts</li>
                    <li>Health and Rehabilitation Medicine</li>
                    <li>Contracts</li>
                    <li>Correspondence</li>
                    <li>Marketing Material</li>
                    <li>Websites</li>
                    <li>Business Proposals</li>
                    <li>Technical Manuals</li>
					<li>Brochures and Flyers, etc.</li>
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
					<li>Master Degree in Applied Linguistics and Cultural Studies in English, German and French at the University of Mainz (FASK Germersheim), Germany.</li>
					<li>Associate Member (English-German) of the Society of Translators and Interpreters of British Columbia (STIBC) since 2012.</li>
					<li>Member of the German Society of Translators and Interpreters (BDÜ) since 2009.</li>
<li>Several years of experience in assisting company management in the areas leisure &amp; tourism; tax, audit, advisory as well as rehabilitation research.</li>
				</ul>

				<h2>Specializes in</h2>
				<ul>
					<li>Economics</li>
					<li>Business administration</li>
					<li>Rehabilitation research</li>
					<li>International Classification of Functioning, Disability and Health (ICF)</li>
                    <li>Paraplegia</li>
					<li>Tourism</li>
                    <li>Accounting</li>

				</ul>
		  </div>

		  <div id="sidebar">
		    <h3>Denise Lachmann</h3>

					<h2>My services</h2>

				<ul>
					<li>Simultaneous Interpreting</li>
					<li>Consecutive Interpreting</li>
					<li>Whispering Interpreting</li>
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
					<li>Master degree in Applied Linguistics and Cultural Studies in English, German and French (2008) at the University of Mainz (FASK Germersheim), Germany.</li>
					<li>Certified translator at the Provincial Court of Heilbronn, Germany.</li>
					<li>Conference Interpreter (M.A.) for German, English and French.</li>
					<li>Master degree in 2011 at the University of Heidelberg, Germany.</li>
				  <li>Since 2014 certified conference interpreter at the Provincial Court of Heilbronn.</li>
				</ul>

				<h2>Specializes in</h2>
				<ul>
					<li>Politics &amp; Economics </li>
					<li>Vehicle &amp; Drive Engineering</li>
					<li>Renewable Energy</li>
					<li>Celebratory Speeches</li>
					<li>International Relationships</li>
					<li>Education</li>
					<li>Tourism etc.</li>
				</ul>
			</div>

<?php get_footer(); ?>
