<?php
/**
 * Template Name: About
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header page-section full-height outer-container">
			<div class="inner-container">
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
