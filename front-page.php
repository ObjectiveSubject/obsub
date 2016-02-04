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
						<h1 class="case-study-title inner-container hug"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></h1>
						<p class="h3 case-study-subtitle inner-container push"><?php the_field('case_study_subtitle'); ?></p>
					</div>
				</div>
			</div>
		</section>
	
	<?php endwhile;  ?>

	<section id="former-clients" class="page-section former-clients">
		
		<div class="outer-container">

			<div class="inner-container">
				<h2 class="future-A">our specialities extend across other industries</h2>
				<p class="push">Beyond our focus on the design needs of the public sector, our experience extends to a varied clientele in terms of both sectors and industries.</p>
			</div>

			<h2 class="future-A push-triple inner-container">media</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<div class="tile-image">
						<img src="<?php echo os_path('nyt1.gif', 'home'); ?>" srcset="<?php echo os_path('nyt1.gif', 'home'); ?> 1x, <?php echo os_path('nyt1-@2x.gif', 'home'); ?> 2x" width="493" />
						<img src="<?php echo os_path('nyt2-journeys.png', 'home'); ?>" srcset="<?php echo os_path('nyt2-journeys.png', 'home'); ?> 1x, <?php echo os_path('nyt2-journeys-@2x.png', 'home'); ?> 2x" width="493" />
						<img src="<?php echo os_path('nyt3-edu.png', 'home'); ?>" srcset="<?php echo os_path('nyt3-edu.png', 'home'); ?> 1x, <?php echo os_path('nyt3-edu-@2x.png', 'home'); ?> 2x" width="493" />
					</div>
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-nytimes.svg', 'home'); ?>" width="250" /></div>
						<p class="push">We’ve worked with the Times to codify its design tools into a cogent set of rules and principles that can be applied by marketers, designers and advertisers who partner with The New York Times Brand. This brand book is leveraged both inside the organization and with outside groups to make every communication feel ‘Timesian.’</p>
						<p class="push">We created an award-winning website for the Times’ travel product, Times Journeys, and continue to offer strategic and creative services to support the new ways one can Travel with The New York Times.</p>
						<p class="push"><a href="http://nytimes.com/timesjourneys" target="_blank"><em>nytimes.com/timesjourneys</em></a></p>
						<p class="push">More recently, alongside our partners at Sotheby’s Institute of Art, we designed a digital interface for the new School of The New York Times, nytEDU. We addressed content strategy, including sitemaps, wireframes and recommendations on program naming, and visual design to educate users on ways to Learn with The New York Times.</p>
						<p class="push"><a href="http://nytedu.com" target="_blank"><em>nytedu.com</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-image-left">
					<div class="tile-image">
						<img src="<?php echo os_path('ap.gif', 'home'); ?>" srcset="<?php echo os_path('ap.gif', 'home'); ?> 1x, <?php echo os_path('ap-@2x.gif', 'home'); ?> 2x" width="493" />
						<img src="<?php echo os_path('ap.png', 'home'); ?>" srcset="<?php echo os_path('ap.png', 'home'); ?> 1x, <?php echo os_path('ap-@2x.png', 'home'); ?> 2x" width="493" />
					</div>
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-ap.svg', 'home'); ?>" width="80" /></div>
						<p class="push">The world’s largest news organization looked to Objective Subject to realize its master brand strategy, encapsulating the vision of ‘One AP’ across its global network of media channels and properties.</p>
						<p class="push">We created a cohesive and bold visual identity that communicates the mission and values of the AP. We supported AP’s digital teams in the implementation of numerous online products, including AP Images and AP Archives.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-fa.svg', 'home'); ?>" width="180" /></div>
						<p class="push">Objective Subject created a visual system to connote the authoritative, high-quality and direct qualities of the Foreign Affairs brand. We leveraged existing visual elements, including the iconic wordmark and light blue color, to maintain continuity with the publication’s rich history.</p>
						<p class="push">Foreign Affairs also wanted to better define how to use its name, since it is both the title of its flagship publication and also the field-at-large. Emphasizing an affiliation with the publication, we conceived an alternate identity to complement the historic wordmark, one with a blue frame that crops off the edge of any piece of communication.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-cfr.svg', 'home'); ?>" width="150" /></div>
						<p class="push">Founded in 1921, the exclusive Council on Foreign Relations has partnered with Objective Subject for more than eight years to implement and steward its identity program, in both print and digital contexts.</p>
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">arts</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<div class="tile-image">
						<img src="<?php echo os_path('bam.gif', 'home'); ?>" srcset="<?php echo os_path('bam.gif', 'home'); ?> 1x, <?php echo os_path('bam-@2x.gif', 'home'); ?> 2x" width="495" />
					</div>
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-bam.svg', 'home'); ?>" width="100" /></div>
						<p class="push">The Brooklyn Academy of Music is an ambassador of cutting edge arts and music. Our design research found that would-be visitors struggled to find their way through the BAM campus and its many venues. We designed a visitor experience that seamlessly integrates BAM’s existing web platform and visual brand to help guests plan an evening around a BAM outing, from pre- dinner drinks to their subway ride home.</p>
						<p class="push"><a href="http://bam.org/visit" target="_blank"><em>bam.org/visit</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-orpheus.svg', 'home'); ?>" width="195" /></div>
						<p class="push">Performing without a conductor, Orpheus Chamber Orchestra is one of the world’s foremost chamber orchestras. Its digital presence needed to both present its distinctive story as well as accomplish key business goals in ticket and subscription sales. The final solution layers various elements,bringing the vitality and emotion of the music to every user interaction.</p>
						<p class="push"><a href="http://orpheusnyc.org" target="_blank"><em>orpheusnyc.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-nbr.svg', 'home'); ?>" width="250" /></div>
						<p class="push">Since 1909, the National Board of Review has been New York City’s premier film awards organization, dedicated to the celebration and advancement of excellence in cinema. We were inspired by typography in early publications to develop a visual identity that is appropriately modern. Our work extends through a suite of materials, including a website, that recall the velvety and clubby feel of a projection room.</p>
						<p class="push"><a href="http://nationalboardofreview.org"><em>nationalboardofreview.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-image-left">
					<div class="tile-image">
						<img src="<?php echo os_path('gibney.png', 'home'); ?>" srcset="<?php echo os_path('gibney.png', 'home'); ?> 1x, <?php echo os_path('gibney-@2x.png', 'home'); ?> 2x" width="493" />
					</div>
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-gibney.svg', 'home'); ?>" width="250" /></div>
						<p class="push">In collaboration with Gina Gibney, Objective Subject helped the growing dance organization define its brand positioning and develop messaging to best communicate the breadth and depth of its programming as well as its future vision. Our work included designing and building a new website, and designing visual communications worthy of any major arts organization in NYC.</p>
						<p class="push"><a href="http://gibneydance.org" target="_blank"><em>gibneydance.org</em></a></p>
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">and many others</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-guittard.svg', 'home'); ?>" width="180" /></div>
						<p class="push">After nearly 150 years of making the best chocolate in the world, the Guittard Chocolate Company was looking for a way to unify its offering and leverage its reputation for quality and integrity across its branded communications.</p>
						<p class="push">Our team conducted in-depth research with employees, partners, and customers, to identify key values and personality traits. We recommended the adoption of a master brand strategy, centered around the promise of 'Chocolate for Experts.' The corporate wordmark is derived from the founder Étienne Guittard’s signature. We leveraged the company’s navy blue for the master brand, supported by a palette of subtle, earthy and bright colors to denote the quality of the natural ingredients.</p>
						<p class="push"><a href="http://guittard.com" target="_blank"><em>guittard.com</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div class="cmc-logo"><img src="<?php echo os_path('logo-carrmcclellan.svg', 'home'); ?>" width="250" /></div>
						<p class="push">Carr McClellan is a full-service boutique firm with a strong track record for its clients, located throughout Northern California.</p>
						<p class="push">The new positioning is captured in the brand strategy and reinforced by the new look: Carr McClellan is committed to advancing clients’ business goals with an approach that is effective, down-to-earth, and enthusiastic.</p>
						<p class="push">The visual system we designed perfectly balances a modern approach, while still referencing the firm's strong heritage and persistent stability amidst a volatile industry and economy.</p>
						<p class="push"><a href="http://carrmclellan.org" target="_blank"><em>carrmclellan.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-image-right">
					<div class="tile-image">
						<img src="<?php echo os_path('WorldStrides1.png', 'home'); ?>" srcset="<?php echo os_path('WorldStrides1.png', 'home'); ?> 1x, <?php echo os_path('WorldStrides1-@2x.png', 'home'); ?> 2x" width="493" />
						<img src="<?php echo os_path('WorldStrides2-mobile.png', 'home'); ?>" srcset="<?php echo os_path('WorldStrides2-mobile.png', 'home'); ?> 1x, <?php echo os_path('WorldStrides2-mobile-@2x.png', 'home'); ?> 2x" width="493" />
					</div>
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-ws.svg', 'home'); ?>" width="250"/></div>
						<p class="push">An undisputed leader in educational travel for nearly 50 years, WorldStrides offers a wide range of traveler experiences from elementary school trips to full-scale group itineraries for graduate students in MBA programs around the world.</p>
						<p class="push">Our work involved robust content strategy to bring harmony across a disparate set of metadata. Our research and analysis determined that the individual trip, or itinerary, ought to be the key node around which all content is organized. We created a series of reusable content modules which are shared amongst itineraries, simplifying site maintenance, while creating unique and immersive experiences for the user.</p>
						<p class="push">Since launching in November 2015, the results have been impressive, with a 50% jump in lead generation.</p>
						<p class="push"><a href="http://worldstrides.com" target="_blank"><em>worldstrides.com</em></a></p>
					</div>
				</li>
			</ul>

		</div>

	</section>

	<a href="#city-of-oakland" class="scroll-down smooth-scroll"><span class="hide">City of Oakland</span></a>


<?php get_footer(); ?>
