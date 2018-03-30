<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header();
the_post(); 
$case_studies = get_case_studies(); ?>

	<section id="home-intro" class="home-intro full-height page-section active" style="height:85vh" >

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1 class="page-title">Objective Subject is a design firm.</h1>
						<p class="h1">We create a more informed and engaged society by rethinking how companies, institutions, and governments’ thorniest issues are framed and experienced.</p>
						<p><a href="/about" class="button">about us &nbsp; &#8250;</a></p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="case-studies" class="page-section use-ui-light-theme push-double">

		<?php 
		foreach ( $case_studies as $study ) :
		
			$color = get_field('case_study_color', $study->ID); ?>

			<div class="case-study-container js-case-study-container" data-id="<?php echo $study->ID; ?>" data-color="<?php echo $color; ?>"></div>

		<?php endforeach;  ?>

		<!-- <div class="bg-color"></div> -->
		
		<div class="bg-image">
			<?php foreach ( $case_studies as $key => $study ) {
				echo get_the_post_thumbnail( $study, 'full', array( 'id' => 'image-' . $study->ID ) ); 
			} ?>
		</div>		

		<div class="mask">
			
			<ul class="mask__list list-unstyled">

				<?php foreach ( $case_studies as $study ) : ?>

				<li id="<?php echo "li-case-study-{$study->ID}"; ?>" class="case-study">

					<div class="outer-container">
					
						<div class="case-study__text clearfix">
							
							<h2 class="case-study__title h1 hug"><a href="<?php echo get_permalink( $study ); ?>" title="View case study"><?php echo get_the_title( $study ); ?></a></h2>
							
							<div class="case-study__desc">
								<p class="hug">
									<?php echo get_the_excerpt( $study ); ?><br/>
									<a href="<?php echo get_permalink( $study ); ?>" class="button-ghost" style="margin-top:0.5em">view case study &nbsp; &#8250;</a>
								</p>
							</div>

						</div>

					</div>

				</li>

				<?php endforeach; ?>

			</ul>
		
		</div>
			
	</section>

	<section id="our-views" class="page-section" style="padding-top: 3rem; background-color: #e6e6e6;">
		<div class="outer-container">
			
			<div class="inner-container">
				<h3 class="h1">Involving creative people to tackle complex questions can yield more dynamic, trusting, and accountable communities. Here are some places where we think we can help.</h3>
			</div>		

			<div class="our-views-container" style="margin-top:5rem">
				<?php 
				$views = array(
					array(
						'title' => 'Design thinking to reinvent the policymaking process',
						'content' => 'Governments need a new approach to creating public policy that reduces risks, unknowns, and variables while improving impact, quality, and accuracy.',
						'url' => get_template_directory_uri() . '/documents/OS%20Concept%20Brief%20Policy%20Design%2020171113.pdf',
						'image' => '<img src="' . get_template_directory_uri() . '/images/policydesign.png" width="1000" height="700" alt="policy design" style="display:block"/>'
					),
					array(
						'title' => 'On the design of public transit experiences that delight and deliver',
						'content' => 'Using human-centered design principles to help transit agencies provide care to their users.',
						'url' => get_template_directory_uri() . '/documents/OS%20Concept%20Brief%20Transit%20UX%2020180215.pdf',
						'image' => '<img src="' . get_template_directory_uri() . '/images/transitexperience.jpg" width="1000" height="700" alt="transit experience" style="display:block"/>'
					),
					array(
						'title' => 'What visual identity can do for government communications',
						'content' => 'Inconsistent, unclear and cluttered communication from Government does not allow citizens to see what Government is doing for them.',
						'url' => get_template_directory_uri() . '/documents/OS%20Concept%20Brief%20Visual%20Identity%2020161013.pdf',
						'image' => '<img src="' . get_template_directory_uri() . '/images/visualidentity.jpg" width="1000" height="700" alt="visual identity" style="display:block"/>'
					)
				);
				foreach ( $views as $view ) { ?>
					<article class="our-views-article" style="margin-bottom: 2rem">
						<?php echo $view['image']; ?>
						<h4 class="h2 push-half"><?php echo $view['title']; ?></h4>
						<p class="push-half"><?php echo $view['content']; ?></p>
						<p class="push-half"><a href="<?php echo $view['url']; ?>" target="_blank" class="button">read &nbsp; &#8250;</a></p>
					</article>
				<?php } ?>
			</div>

		</div>
	</section>

	<section id="address" class="page-section" style="padding-top:5rem; background-color: #e6e6e6;">
		<div class="outer-container">
			<div class="inner-container">
				<address class="h1">
					30 East 20<sup>th</sup> Street, 7<sup>th</sup> Floor<br/>New York, NY 10003<br/><br/>
					<a href="tel:+12128639194">+1 212 863 9194</a><br/>
					<a href="mailto:info@objectivesubject.com">info@objectivesubject.com</a>
				</address>
				<p style="margin-top:1.5rem"><a href="#" class="button">contact us &nbsp; &#8250;</a></p>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
