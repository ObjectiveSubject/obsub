<?php
/**
 * Template Name: Basic Template
 *
 * @package obsub
 */

get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<section class="page-header page-section full-height">
			<div class="section-content">
				<div class="outer-container">
					<div class="inner-container">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; // end of the loop.?>

<?php get_footer(); ?>
