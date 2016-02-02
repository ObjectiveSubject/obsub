<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

	<section id="home-intro" class="home-intro full-height page-section active" >

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="outer-container">
					<div class="inner-container">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
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
			$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
			$featured_image_url = $featured_image_array[0];
			$color = get_field('case_study_color');
		?>

		<section id="<?php echo $post->post_name; ?>" class="page-section full-height case-study-preview use-ui-light-theme <?php echo $post->post_name; ?>" >
			<div class="section-container">
				<div class="section-image-container">
					<div class="section-image" style="background-image: url( <?php echo $featured_image_url; ?> );">
						<div class="scrim"></div>
					</div>
				</div>
				<div class="section-content">
					<div class="outer-container">
						<h1 class="case-study-title inner-container"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></h1>
						<p class="h3 case-study-subtitle inner-container push"><em>Visual identity</em> and <em>user interface</em> design for <?php the_title(); ?></p>
					</div>
				</div>
			</div>
		</section>
	
	<?php endwhile;  ?>

	<section id="former-clients" class="page-section former-clients">
		
		<div class="outer-container">

			<div class="inner-container">
				<h2 class="future-A">our specialities extends across other industries</h2>
				<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>

			<h2 class="future-A push-triple inner-container">media</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<img src="<?php echo os_path('times-journeys.png', 'home'); ?>" class="tile-image" width="495" height="330" style="display: block;">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-nytimes.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-image-left">
					<img src="<?php echo os_path('ap.png', 'home'); ?>" class="tile-image" width="495" style="display: block;">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-ap.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-fa.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-cfr.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">arts</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<img src="<?php echo os_path('bam.png', 'home'); ?>" class="tile-image" width="495" style="display: block;">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-bam.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-orpheus.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-nbr.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-image-left">
					<img src="<?php echo os_path('gibney.png', 'home'); ?>" class="tile-image" width="495" style="display: block;">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-gibney.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">and many others</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-guittard.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-carrmcclellan.png', 'home'); ?>" /></div>
						<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
				</li>
			</ul>

		</div>

	</section>

	<a href="#city-of-oakland" class="scroll-down smooth-scroll"><span class="hide">City of Oakland</span></a>


<?php get_footer(); ?>
