<?php
/**
 * Template Name: Contact
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header page-section full-height">
			<div class="section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1 class="page-title">Why not say hi?</h1>
						<h3 class="page-subtitle">We work on both coasts of the United States to make smart design happen.</h3>
						<h2 class="future-A page-subtitle">
							212.863.9194<br/>
							<a href="mailto:info@objectivesubject.com" class="text-color-link">info@objectivesubject.com</a>
						</h2>
					</div>
				</div>
			</div>
			<a href="#office-locations" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
		</section>

		<section id="office-locations" class="page-section office-locations clearfix" >
			<div class="office-location nyc clearfix">
				<div class="office-address">
					<address class="h2 hug future-A">
						30 east 20th street<br/>
						7th Floor<br/>
						new york, new york 10003
					</address>
					<p class="directions push">
						<em>Directions</em><br/>
						N, Q, R, W, 4, 6<br/>
						to 23rd St,<br/>
						or Union Square
					</p>
				</div>
				<div id="nyc-map" class="office-map nyc-map"></div>
			</div>
			<div class="office-location oakland clearfix">
				<div class="office-address">
					<address class="h2 hug future-A">
						2355 broadway<br/>
						no. 402<br/>
						oakland, ca 94612
					</address>
					<p class="directions push">
						<em>Directions</em><br/>
						BART: 19th St - Oakland<br/>
						From San Francisco:<br/>
						I-580 exit 20 towards Broadway
					</p>
				</div>
				<div id="oakland-map" class="office-map oakland-map"></div>
			</div>
		</section>

		<section class="page-section outer-container push-triple">
			<div class="inner-container">
				<p>If you are curious to hear more about our work and process, interested in hiring us for your project, or simply want to ask about job availability, please do not hesitate to contact us.</p>
			</div>
		</section>

		<?php get_template_part('module', 'contact-form'); ?>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
