<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>

	<section id="home-intro" class="home-intro full-height page-section active" style="height:85vh" >

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

	<section id="case-studies">

		<?php
		$case_studies = get_case_studies();
		foreach ( $case_studies as $study ) : ?>

			<?php
				$featured_image_id = get_post_thumbnail_id($study->ID);
				$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
				$featured_image_url = $featured_image_array[0];
				$color = get_field('case_study_color', $study->ID);

				$style = array();
				$style['#case-study-'.$study->ID] = array(

				);
				?>

		<article id="<?php echo "case-study-{$study->ID}"; ?>" class="case-study">
			<div class="outer-container">
				<div class="case-study__left">
					<h2><a href="<?php echo get_permalink( $study ); ?>" title="View case study"><?php echo get_the_title( $study ); ?></a></h2>
				</div>
				<div class="case-study__right">
					<p>
						Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.<br/>
						<a href="<?php echo get_permalink( $study ); ?>" title="View case study"><em>View case study &rarr;</em></a>
					</p>
				</div>
			</div>
			<div class="case-study__media" style="width:100vw;height:100vh">
				<div class="case-study__color"></div>
				<div class="case-study__image">
					<?php echo get_the_post_thumbnail( $study, 'full' ); ?>
				</div>
			</div>
		</article>

		<?php endforeach;  ?>
			
	</section>

	<section id="our-views" style="margin-top:40vh; padding-top: 3rem; background-color: #e6e6e6">
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
