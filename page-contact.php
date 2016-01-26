<?php
/**
 * Template Name: Contact
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header page-section full-height">
			<div class="outer-container">
				<h1 class="page-title inner-container">We’re based in Brooklyn, NY and Oakland, CA.</h1>
				<h2 class="future-A page-subtitle inner-container">
					718.801.8075<br/>
					<a href="mailto:info@objectivesubject.com" class="text-color-link">info@objectivesubject.com</a>
				</h2>
			</div>
			<a href="#office-locations" class="chevron scroll-down smooth-scroll"><span class="hide">Office Locations</span></a>
		</section>

		<section id="office-locations" class="page-section office-locations clearfix" data-show-map="brooklyn">
			<div class="office-location brooklyn clearfix">
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
				<div id="brooklyn-map" class="office-map brooklyn-map"></div>
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

		<div class="contact-form-container">
			<form action="/contact.php" method="post" accept-charset="utf-8" class="contact-form outer-container">
				
				<div class="inner-container future-A">
					<div class="subject-select h2">
						<a href="#form-fields" class="gateway" data-value="talk to us">talk to us</a><br/>
						<a href="#form-fields" class="gateway" data-value="hire us">hire us</a><br/>
						<a href="#form-fields" class="gateway" data-value="join us">join us</a>
					</div>
					<span class="hide"><input type="radio" id="contact_subject" name="contact_subject" value="talk to us" /></span>
					<span class="hide"><input type="radio" id="contact_subject" name="contact_subject" value="hire us" /></span>
					<span class="hide"><input type="radio" id="contact_subject" name="contact_subject" value="join us" /></span>
				</div>

				<div id="form-fields" class="form-fields inner-container">

					<p>Tell us a little bit about yourself...</p>

					<div class="input-row future-A push">
						<label class="row-node inline-label h2">my name is </label>
						<span class="row-node inline-input h2"><input type="text" id="contact_name" name="contact_name" value="" placeholder="luke skywalker" required></span>
					</div>

					<div class="input-row future-A">
						<label class="row-node inline-label h2 hug">I work for </label>
						<span class="row-node inline-input h2"><input type="text" id="contact_company" name="contact_company" value="" placeholder="the rebels"></span>
					</div>

					<div class="input-row future-A">
						<label class="row-node inline-label h2 hug">my email address is </label>
						<span class="row-node inline-input h2"><input type="text" id="contact_email" name="contact_email" value="" placeholder="luke@rebelbase.org" required></span>
					</div>

					<div class="input-row future-A push">
						<label class="row-node h2 hug">my message is:</label>
						<span class="row-node h2"><textarea id="contact_message" name="contact_message" value="" placeholder="write your message here..." required></textarea></span>
						<input type="submit" id="contact_submit" class="h2 future-A push" name="contact_submit" value="send message" />
					</div>

					<input type="hidden" name="name" value="">
					<input type="hidden" name="email" value="">
					<input type="hidden" name="message" value="">

					<nav class="form-nav push">
						<a href="#contact_name" class=""><span class="hide">Name</span></a>
						<a href="#contact_company" class=""><span class="hide">Company</span></a>
						<a href="#contact_email" class=""><span class="hide">Email</span></a>
						<a href="#contact_message" class=""><span class="hide">Message</span></a>
					</nav>

				</div>

			</form>
		</div>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
