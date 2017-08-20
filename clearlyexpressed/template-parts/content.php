<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clearly Expressed
 */

?>

<?php
// Is this the first post of the front page?
$first_post = $wp_query->current_post == 0 && !is_paged() && is_home();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h3>Note of the theme's Author:</h3>
<h4>This section is not implemented and it probably won't!</h4>

	<header class="entry-header">
		<?php
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
		<?php } ?>
		<?php
		if ( $first_post == true ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

			if ( has_excerpt( $post->ID ) ) {
				echo '<div class="deck">';
				echo '<p>' . get_the_excerpt() . '</p>';
				echo '</div><!-- .deck -->';
			}

			echo '<div class="entry-meta">';
			// this function below is not yet implemented and probably it won't!
			// clearlyexpressed_posted_on();
		} else {
			the_title( sprintf( '<h2 class="entry-title index-excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			echo '<div class="index-entry-meta">';
			// this function below is not yet implemented and probably it won't!
			// clearlyexpressed_index_posted_on();
		} ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-content index-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
