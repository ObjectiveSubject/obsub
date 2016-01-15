<?php
/**
 * The template for displaying all single posts.
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', $post->post_name ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
