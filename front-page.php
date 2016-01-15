<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

	<section class="home-intro page-section visible">

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="inner-container">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_content(); ?></h1>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>

	</section>

	<?php $args = array(
		'post_type' => 'case_study'
	);
	$case_studies = new WP_Query( $args );
	while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>

		<?php
			$featured_image_id = get_post_thumbnail_id();
			$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
			$featured_image_url = $featured_image_array[0];
			$color = get_field('case_study_color');
		?>

		<section class="page-section case-study-preview <?php echo $post->post_name; ?>" >
			<div class="section-container">
				<div class="section-image" style="background-image: url( <?php echo $featured_image_url; ?> );"></div>
				<div class="section-color" style="background-color: <?php echo $color; ?>"></div>
				<div class="section-content">
					<div class="inner-container">
						<h1><?php echo get_the_excerpt(); ?></h1>
						<p class="hug"><em>Visual identity</em> and <em>user interface</em> for <?php the_title(); ?></p>
					</div>
				</div>
			</div>
		</section>
	
	<?php endwhile; ?>

	<nav>
		<ul class="os-vertical-nav list-unstyled">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	</nav> <!-- .os-vertical-nav -->

<?php get_footer(); ?>
