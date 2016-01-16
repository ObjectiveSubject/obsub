<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

	<section class="home-intro full-height page-section active" data-color="#F0F0EE" data-active-offset="200">

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="inner-container">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
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

		<section id="<?php echo $post->post_name; ?>" class="page-section full-height case-study-preview <?php echo $post->post_name; ?>" style="background-color:<?php echo $color; ?>" data-color="<?php echo $color; ?>" data-active-offset="-200" >
			<div class="section-container">
				<div class="section-image-container">
					<div class="section-image" style="background-image: url( <?php echo $featured_image_url; ?> );"></div>
				</div>
				<div class="section-content">
					<div class="inner-container">
						<h1><?php echo get_the_excerpt(); ?></h1>
						<p class="hug"><em>Visual identity</em> and <em>user interface</em> for <?php the_title(); ?></p>
					</div>
				</div>
			</div>
		</section>
	
	<?php endwhile;  ?>

	<section class="page-section former-clients">
		
		<h2 class="future-A">our specialities extends across other industries</h2>
		<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

		<h2 class="future-A push-triple">media</h2>

		<ul class="client-list list-unstyled">
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
			<li class="client push-double">
				<p class="hug"><strong>Client Name</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<img src="http://placehold.it/495x330"/ width="495" height="330" style="display: block;">
			</li>
		</ul>
	</section>

	<nav>
		<ul class="os-vertical-nav list-unstyled">
			<?php while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>
			<li>
				<a href="#<?php echo $post->post_name; ?>" class="smooth-scroll">
					<span class="hide"><?php the_title(); ?></span>
					<span class="bubble"></span>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</nav><!-- .os-vertical-nav -->

<?php get_footer(); ?>
