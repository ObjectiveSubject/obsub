<?php
/**
 * Page: Contact
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>

	<section id="about-intro" class="about-intro page-section">
	
		<div class="intro-content section-content">
			<div class="outer-container">

				<div class="inner-container">
					<h1 class="h1 page-title">Partners, colleagues, friends, lovers, visitors, lost tourists: all are welcome!</h1>
					<h3>If you would like to meet us to talk through a project or find out more, we'd love to hear from you. Visitors are always welcome.</h3>
				</div>

			</div>
		</div>
	
	</section>

	<div class="outer-container">

		<div class="inner-container">
			<address class="h1">
				30 East 20<sup>th</sup> Street, 7<sup>th</sup> Floor<br/>New York, NY 10003<br/>
				<a href="tel:+12128639194">+1 212 863 9194</a><br/>
				<a href="mailto:info@objectivesubject.com"><em>info@objectivesubject.com</em></a>
			</address>
		</div>

		<div class="inner-container mt-5">
			<h2 class="h1">Too shy for a ring? Let us reach out.</h2>
		</div>

	</div>

	<?php get_template_part( 'module-contact-form' ); ?>


<?php get_footer(); ?>
