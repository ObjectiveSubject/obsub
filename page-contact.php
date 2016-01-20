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
				<h1 class="page-title">We’re based in Brooklyn, NY and Oakland, CA.</h1>
				<h2 class="future-A page-subtitle">
					718.801.8075<br/>
					<a href="mailto:info@objectivesubject.com" class="text-color-link">info@objectivesubject.com</a>
				</h2>
			</div>
		</section>

		<section class="page-section office-locations clearfix" data-show-map="brooklyn">
			<div class="office-location brooklyn clearfix">
				<div id="brooklyn-map" class="office-map brooklyn-map"></div>
				<div class="office-address">
					<address class="h2 hug future-A">
						81 prospect street<br/>
						brooklyn, ny 11201
					</address>
					<p class="directions push">
						<em>Directions</em><br/>
						F to York St,<br/>
						A and C to High St,<br/>
						2 and 3 to Clark St
					</p>
				</div>
			</div>
			<div class="office-location oakland clearfix">
				<div id="oakland-map" class="office-map oakland-map"></div>
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
			</div>
			<!-- <div class="address-sidebar" data-show="brooklyn">
				<div class="office-address brooklyn">
					<address class="h2 hug future-A">
						81 prospect street<br/>
						brooklyn, ny 11201
					</address>
					<p class="directions push">
						<em>Directions</em><br/>
						F to York St,<br/>
						A and C to High St,<br/>
						2 and 3 to Clark St
					</p>
				</div>
				<div class="office-address oakland">
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
			</div> -->
		</section>

		<section class="page-section outer-container">
			<div class="inner-container">
				<p>If you are curious to hear more about our work and process, interested in hiring us for your project, or simply want to ask about job availability, please do not hesitate to contact us.</p>
				<p class="h2 future-A"><a href="#talk-to-us" class="text-color-link">talk to us</a></p>
				<p class="h2 hug future-A"><a href="#hire-us" class="text-color-link">hire us</a></p>
				<p class="h2 hug future-A"><a href="#join-us" class="text-color-link">join us</a></p>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
