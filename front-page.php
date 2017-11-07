<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>

	<section id="home-intro" class="home-intro full-height page-section active" >

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1 class="page-title">We see a world with better communication, not just more information</h1>
						<div class="page-subtitle">
							<h3>We improve how both the public and private sectors communicate, through a fusion of policy and design expertise. We create clear visual identities and digital experiences for governments, non-profits and innovative firms. <a href="<?php echo site_url('contact/'); ?>">Get in touch</a>.</h3>
						</div>
						<div class="ozy-video push">
							<a href="http://www.ozy.com/video/play/better-logos-better-government/67599" target="_blank">
								<img src="<?php echo os_path('ozy-video.png', 'home'); ?>" srcset="<?php echo os_path('ozy-video.png', 'home'); ?> 1x, <?php echo os_path('ozy-video-@2x.png', 'home'); ?> 2x" width="232" height="155" alt="OZY video" />
								<img class="play-icon" src="<?php echo os_path('play.svg'); ?>" width="32" height="32" alt="play" />
							</a>
							<div class="caption push-half text-muted"><em>Watch principal David Jalbert-Gagnier explain our vision in this 2:27 video from OZY.</em></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php
	$case_studies = get_case_studies('featured');
	foreach ( $case_studies as $study ) : ?>

		<?php
			$featured_image_id = get_post_thumbnail_id($study->ID);
			$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
			$featured_image_url = $featured_image_array[0];
			$color = get_field('case_study_color', $study->ID);
		?>

		<section id="<?php echo $study->post_name; ?>" class="page-section full-height case-study-preview use-ui-light-theme <?php echo $study->post_name; ?>" >
			<div class="section-container">
				<div class="section-image-container">
					<div class="section-image" style="background-image: url( <?php echo $featured_image_url; ?> );">
						<div class="scrim"></div>
					</div>
				</div>
				<div class="section-content">
					<div class="outer-container">
						<h1 class="case-study-title inner-container hug"><a href="<?php echo get_the_permalink($study->ID); ?>"><?php echo $study->post_excerpt; ?></a></h1>
						<h3 class="case-study-subtitle inner-container"><?php echo get_field('case_study_subtitle', $study->ID); ?></h3>
					</div>
				</div>
			</div>
		</section>

	<?php endforeach;  ?>

	<?php get_template_part( 'content-ctas' ); ?>
	<?php get_template_part( 'content-hr' ); ?>

	<section id="former-clients" class="page-section former-clients">

		<div class="outer-container">

			<div class="inner-container">
				<h2 class="future-A">our specialities extend across other industries</h2>
				<p class="push">We also work with a host of non-profit and private sector organizations.</p>
			</div>

			<h2 class="future-A push-triple inner-container">media</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<div class="tile-content">
						<div><img src="<?php echo os_path('logo-nytimes.svg', 'home'); ?>" width="250" height="33"/></div>
						<p class="push big">A toolkit to reinforce journalism’s most prestigious brand and align new services</p>
						<p class="push">We worked with the Times to codify its design tools into a cogent set of principles and rules to make every communication feel more ‘Timesian’. Those inside the organization as well marketers, designers and advertisers which partner with The New York Times use this ‘brand book’ to reinforce the brand. We created an award-winning website for the travel product ‘Times Journeys’, and continue to offer strategic and creative services to support the new ways one can travel with The New York Times. <a href="http://nytimes.com/timesjourneys" target="_blank"><em>nytimes.com/timesjourneys</em></a></p>
						<p class="push">Alongside our partners at Sotheby’s Institute of Art, we designed a digital interface for The New York Times’ new school, nytEDU. We focused on the user in both our visual design and when developing the content strategy – which included sitemaps, wireframes and program naming recommendations – ensuring users are aware of all the ways to learn with The New York Times. <a href="http://nytedu.com" target="_blank"><em>nytedu.com</em></a></p>
					</div>
					<div class="tile-image nyt push">
						<img src="<?php echo os_path('nyt1.png', 'home'); ?>" srcset="<?php echo os_path('nyt1.png', 'home'); ?> 1x, <?php echo os_path('nyt1-@2x.png', 'home'); ?> 2x" width="493" height="330"/>
						<img src="<?php echo os_path('nyt2-journeys.png', 'home'); ?>" srcset="<?php echo os_path('nyt2-journeys.png', 'home'); ?> 1x, <?php echo os_path('nyt2-journeys-@2x.png', 'home'); ?> 2x" width="493" height="330" style="box-shadow: 0 2px 6px -2px rgba(0,0,0,0.2)"/>
						<img src="<?php echo os_path('nyt3-edu.png', 'home'); ?>" srcset="<?php echo os_path('nyt3-edu.png', 'home'); ?> 1x, <?php echo os_path('nyt3-edu-@2x.png', 'home'); ?> 2x" width="493" height="330" />
					</div>
				</li>
				<li class="tile push-triple layout-image-left right-to-left">
					<div class="tile-content">
						<div><img src="<?php echo os_path('logo-ap.svg', 'home'); ?>" width="80" height="93" /></div>
						<p class="push big">A bright new brand for 21<span class="v-align-super small">st</span> Century journalism</p>
						<p class="push">Objective Subject implemented the master brand strategy of the world’s largest news organization, unifying the ‘One AP’ identity across its global network of media channels and properties. Our team created a cohesive and bold visual identity which communicates the mission and values of the Associated Press. We supported AP’s digital teams in the consistent implementation of numerous products, including print, screen, online and the briefing room.</p>	
					</div>
					<div class="tile-image associated-press push">
						<img src="<?php echo os_path('ap.png', 'home'); ?>" srcset="<?php echo os_path('ap.png', 'home'); ?> 1x, <?php echo os_path('ap-@2x.png', 'home'); ?> 2x" width="493" height="330" />
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-fa.svg', 'home'); ?>" width="180" height="71"/></div>
						<p class="push big">Continuity and alignment</p>
						<p class="push">Objective Subject created a visual system to express the high-quality, authoritative and forthright nature of the Foreign Affairs brand. We built on existing visual elements, including the iconic wordmark and light blue color, to keep continuity with the publication’s rich history. Foreign Affairs also sought to define how better to use its name, since it is both the publication title and the field-at-large. We created an alternative identity which emphasizes an affiliation with the publication, and which complements the historic wordmark with an alternative color.</p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-cfr.svg', 'home'); ?>" width="150" height="72"/></div>
						<p class="push big">An august think-tank gets an understated brand</p>
						<p class="push">The historical and exclusive Council on Foreign Relations partnered with Objective Subject for more than eight years for brand consultation, to oversee and implement its identity program in both print and digital contexts, and to develop a range of marketing, advertising and media materials including innovative and engaging infographics.</p>
					</div>
					<div class="clearfix"></div>
					<div class="tile-image push">
						<img src="<?php echo os_path('cfr.png', 'home'); ?>" srcset="<?php echo os_path('cfr.png', 'home'); ?> 1x, <?php echo os_path('cfr-@2x.png', 'home'); ?> 2x" width="493" height="330" alt="CFR Brand Guidelines" style="box-shadow: 0 2px 6px -2px rgba(0,0,0,0.2)"/>
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">arts</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-image-right">
					<div class="tile-content">
						<div><img src="<?php echo os_path('logo-bam.svg', 'home'); ?>" width="100" height="92"/></div>
						<p class="push big">A digital hospitality experience</p>
						<p class="push">The Brooklyn Academy of Music is a historical and progressive multi-arts venue, with an important development role in Brooklyn. Our design research found visitors struggling to find their way through the BAM campus and its many venues. Objective Subject designed a visitor experience that seamlessly integrated BAM’s existing web platform and visual brand to help guests plan an evening around a BAM outing, from pre- dinner drinks to their subway ride home. <a href="http://bam.org/visit" target="_blank"><em>bam.org/visit</em></a></p>
					</div>
					<div class="tile-image bam">
						<div class="building building-1"></div>
						<div class="building building-2"></div>
						<div class="building building-3"></div>
						<!-- <img src="<?php echo os_path('bam-sprite.png', 'home'); ?>" srcset="<?php echo os_path('bam-sprite.png', 'home'); ?> 1x, <?php echo os_path('bam-sprite-@2x.png', 'home'); ?> 2x" width="165" height="326" /> -->
					</div>
				</li>
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-orpheus.svg', 'home'); ?>" width="195" height="52"/></div>
						<p class="push big">A well-conducted digital presence</p>
						<p class="push">Performing without a conductor, Orpheus is one of the world’s top chamber orchestras. Its digital presence needed both to present its distinctive story and accomplish key business goals in ticket and subscription sales. Objective Subject designed and built a website solution which layers different elements, bringing the vitality and emotion of Orpheus’ music to every user interaction. <a href="http://orpheusnyc.org" target="_blank"><em>orpheusnyc.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-nbr.svg', 'home'); ?>" width="250" height="53" /></div>
						<p class="push big">A club feel for cinema devotees</p>
						<p class="push">Since 1909, the National Board of Review has been New York City’s premier film awards organization, dedicated to the celebration and advancement of excellence in cinema. We developed an appropriately modern visual identity, inspired by typography in their early publications. Our work extends through a suite of materials, including a website, that recall the velvety and clubby feel of a projection room. <a href="http://nationalboardofreview.org" target="_blank"><em>nationalboardofreview.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-image-left right-to-left">
					<div class="tile-content">
						<div><img src="<?php echo os_path('logo-gibney.svg', 'home'); ?>" width="250" height="136"/></div>
						<p class="push big">An elevated experience for a growing dance company</p>
						<p class="push">In collaboration with Gina Gibney, Objective Subject helped the growing dance organization define its brand position and develop messages to best communicate the breadth and depth of its programming and future vision. Our work included designing and building a new website, and creating visual communications worthy of any major NYC arts organization. <a href="http://gibneydance.org" target="_blank"><em>gibneydance.org</em></a></p>
					</div>
					<div class="tile-image gibney push">
						<img src="<?php echo os_path('gibney.png', 'home'); ?>" srcset="<?php echo os_path('gibney.png', 'home'); ?> 1x, <?php echo os_path('gibney-@2x.png', 'home'); ?> 2x" width="493" height="330" />
					</div>
				</li>
			</ul>

			<h2 class="future-A push-triple inner-container">and many others</h2>
			<ul class="client-list list-unstyled clearfix hug">
				<li class="tile push-triple layout-half left">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-guittard.svg', 'home'); ?>" width="180" height="68"/></div>
						<p class="push big">Chocolate for Experts</p>
						<p class="push">After nearly 150 years of making the best chocolate in the world, the Guittard Chocolate Company was looking for a way to unify its brand across its communications and leverage its reputation for quality and integrity. Our team conducted in-depth research with employees, partners and customers to identify key values and brand personality traits. We recommended the adoption of a ‘master brand’ strategy, centered around the promise of 'Chocolate for Experts.' We created the corporate wordmark from founder Étienne Guittard’s signature, and used the company’s navy blue for the master brand, supported by a palette of subtle, earthy and bright colors to denote the quality of the natural ingredients. <a href="http://guittard.com" target="_blank"><em>guittard.com</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-half right">
					<div class="tile-content push">
						<div class="cmc-logo"><img src="<?php echo os_path('logo-carrmcclellan.svg', 'home'); ?>" width="250" height="21"/></div>
						<p class="push big">The spirit, and the letter<br class="show-lg"/>of the law</p>
						<p class="push">Carr McClellan is a Northern Californian full-service boutique law firm. They sought a new visual system to convey their new brand positioning: a firm committed to advancing clients’ business goals with an effective, down-to-earth and enthusiastic approach. We designed a visual system which perfectly balanced modernity with the firm's strong heritage and persistent stability amidst a volatile economy and industry. <a href="http://carrmclellan.org" target="_blank"><em>carrmclellan.org</em></a></p>
					</div>
				</li>
				<li class="tile push-triple layout-image-right">
					<div class="tile-content push">
						<div><img src="<?php echo os_path('logo-ws.svg', 'home'); ?>" width="250" height="52"/></div>
						<p class="push big">Education through travel</p>
						<p class="push">A leader in educational travel for nearly 50 years, WorldStrides offers a wide range of traveler experiences, from elementary school trips to group itineraries for MBA graduate students around the world. Focusing on website user needs, we created a robust content strategy to harmonize disparate metadata. Our research and analysis showed that the individual trip or itinerary should be the key node around which all content is organized. We created a series of reusable content modules which are shared amongst itineraries, and which create unique and immersive experiences for the user as well as simplifying site maintenance. Since launching, lead generation has increased 50%. <a href="http://worldstrides.com" target="_blank"><em>worldstrides.com</em></a></p>
					</div>
					<div class="tile-image worldstrides push">
						<img src="<?php echo os_path('Worldstrides1.png', 'home'); ?>" srcset="<?php echo os_path('Worldstrides1.png', 'home'); ?> 1x, <?php echo os_path('Worldstrides1-@2x.png', 'home'); ?> 2x" width="493" height="330" style="box-shadow: 0 2px 6px -2px rgba(0,0,0,0.2)" />
						<img src="<?php echo os_path('Worldstrides2-mobile.png', 'home'); ?>" srcset="<?php echo os_path('Worldstrides2-mobile.png', 'home'); ?> 1x, <?php echo os_path('Worldstrides2-mobile-@2x.png', 'home'); ?> 2x" width="493" height="330" />
					</div>
				</li>
			</ul>

		</div>

	</section>

	<?php get_template_part( 'content-ctas' ); ?>

	<a href="#city-of-oakland" class="scroll-down smooth-scroll"><span class="hide">City of Oakland</span></a>


<?php get_footer(); ?>
