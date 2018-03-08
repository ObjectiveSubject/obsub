<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>

	<section id="about-intro" class="home-intro full-height page-section" >

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1 class="h2 page-title">Objective Subject is a design firm.</h1>
						<p class="h2">We create a more informed and engaged society by rethinking how companies, institutions, and governments’ thorniest issues are framed and experienced.</p>
						<p><a href="/about" class="button">about us &nbsp; &#8250;</a></p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="about__approach">

	</section>

	<section class="about__practice-areas" style="margin-top:40vh; padding-top: 3rem; background-color: #e6e6e6">
		<div class="outer-container">

			<div class="inner-container">
				<h3 class="h2">Some text talking about our views lorem ipsum dolor sit amet</h3>
			</div>

			<div class="clearfix" style="margin-top:5rem">
				<?php
				$i = 0; do { ?>
				<article class="our-views-article" style="margin-bottom: 2rem">
					<img src="http://unsplash.it/750/560" width="750" height="560" />
					<h4 class="h3" style="margin-top:1.5rem">Design thinking to reinvent the policymaking process</h4>
					<p style="margin-top:1.5rem">Governments need a new approach to creating public policy that reduces risks, unknowns, and variables while improving impact, quality, and accuracy.</p>
					<p style="margin-top:1.5rem"><a href="#" class="button">read &nbsp; &#8250;</a></p>
				</article>
				<?php $i++; } while ( $i < 3 ) ?>
			</div>

		</div>
	</section>

	<section id="address" style="margin-top:5rem">
	<div class="outer-container">
		<div class="inner-container">
			<address class="h2">
				30 East 20th Street, 7th Floor<br/>New York, NY 10003<br/><br/>
				+1 212 863 9194 office<br/>info@objectivesubject.com
			</address>
			<p style="margin-top:1.5rem"><a href="#" class="button">contact us &nbsp; &#8250;</a></p>
		</div>
	</div>
	</section>

<?php get_footer(); ?>