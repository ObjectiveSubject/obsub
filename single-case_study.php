<?php
/**
 * The template for displaying all single posts.
 *
 * @package obsub
 */

get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php
            $featured_image_id = get_post_thumbnail_id();
            $cs_class = "full-height";
            if ($featured_image_id) {
                $featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
                $featured_image_url = $featured_image_array[0];
                $cs_class .= " has-bg-image use-ui-light-theme";
            }
        ?>

		<section class="page-header page-section <?php echo $cs_class; ?>" style="<?php echo ($featured_image_id) ? "background-image:url( {$featured_image_url} )" : ""; ?> ">
			<div class="section-content">
				<div class="outer-container">
					<h1 class="page-title inner-container h1 hug super"><?php echo get_the_excerpt(); ?></h1>
					<h3 class="page-subtitle inner-container"><?php the_field('case_study_subtitle'); ?></h3>
					<nav class="page-nav inner-container">
						<ul class="list-unstyled hug">
							<li><a href="#opportunity" class="future-A h3 smooth-scroll">opportunity</a></li>
							<li><a href="#process" class="future-A h3 smooth-scroll">process</a></li>
							<li><a href="#solution" class="future-A h3 smooth-scroll">solution</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
		</section>

		<?php get_template_part('content', $post->post_name); ?>

		<?php get_template_part('module', 'case-study-preview'); ?>

		<?php get_template_part('module', 'contact-form'); ?>

	<?php endwhile; // end of the loop.?>

<?php get_footer(); ?>
