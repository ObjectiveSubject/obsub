<?php
/**
 * Template Name: Contact
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header">
			<div class="inner-container">
				<?php the_content(); ?>
				<h2 class="future-A">
					718.801.8075<br/>
					<a href="mailto:info@objectivesubject.com" class="text-color-link">info@objectivesubject.com</a>
				</h2>
			</div>
		</section>

		<section class="page-section office-locations clearfix">
			<div class="office-location brooklyn">
				<div id="brooklyn-map" class="office-map"></div>
				<address class="h2 future-A">
					81 prospect street<br/>
					brooklyn, ny 11201
				</address>
				<p class="push">
					<em>Directions</em><br/>
					F to York St,<br/>
					A and C to High St,<br/>
					2 and 3 to Clark St
				</p>
			</div>
			<div class="office-location oakland">
				<div id="oakland-map" class="office-map"></div>
				<address class="h2 future-A">
					2355 broadway, no 402<br/>
					oakland, ca 94612
				</address>
				<p class="push">
					<em>Directions</em><br/>
					BART: 19th St - Oakland<br/>
					From San Francisco:<br/>
					I-580 exit 20 towards Broadway
				</p>
			</div>
		</section>

		<section class="page-section">
			<p>If you are curious to hear more about our work and process, interested in hiring us for your project, or simply want to ask about job availability, please do not hesitate to contact us.</p>
			<p class="h2 future-A"><a href="#talk-to-us" class="text-color-link">talk to us</a></p>
			<p class="h2 hug future-A"><a href="#hire-us" class="text-color-link">hire us</a></p>
			<p class="h2 hug future-A"><a href="#join-us" class="text-color-link">join us</a></p>
		</section>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
