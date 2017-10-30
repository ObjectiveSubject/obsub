<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header page-section full-height use-ui-light-theme" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<div class="section-content">
		<div class="outer-container">
			<h1 class="page-title inner-container hug"><?php echo get_the_excerpt(); ?></h1>
			<h3 class="page-subtitle inner-container"><?php the_field('case_study_subtitle'); ?></h3>
			<nav class="page-nav inner-container">
				<ul class="list-unstyled hug">
					<li><a href="#opportunity" class="future-A h2 smooth-scroll">opportunity</a></li>
					<li><a href="#process" class="future-A h2 smooth-scroll">process</a></li>
					<li><a href="#solution" class="future-A h2 smooth-scroll">solution</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="photo-credit">
		<div class="outer-container">
			<div class="inner-container">&copy; [NEED PHOTO CREDIT]</div>
		</div>
	</div>
	<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
</section>

<section id="opportunity" class="page-section">
	<div class="outer-container">
		<h2 class="future-A inner-container">opportunity</h2>
			<div class="inner-container">
				<p>Hester Street is a non-profit that works with community groups to ensure more equitable urban planning and development. Amidst rapid growth in the organization, the team recognized the need to unify and clarify its brand and communications strategy to better articulate their full offer.</p>
				<p>We leapt at the opportunity to help this crucial social justice organization focus their communications, reach new audiences and make an impact across the U.S. </p>
			</div>
	</div>

	<figure class="alignnone">
		<div class="parallax-container">
			<blockquote class="parallax-node" data-speed-modifier="0.5">
				<p><span class="quote">&ldquo;</span>[Quote from Hester Street]<span class="quote">&rdquo;</span><br/><small>&mdash;Betsy MacLean, Executive Director</small></p>
			</blockquote>
			<img src="<?php echo os_path('HS-Broadway_sign.jpg', 'hesterstreet') ?>" srcset="<?php echo os_path('HS-Broadway_sign.jpg', 'hesterstreet') ?> 1x, <?php echo os_path('HS-Broadway_sign@2x.jpg', 'hesterstreet') ?> 2x" width="1600" height="1008">
		</div>
		<figcaption class="outer-container"><div class="inner-container">Inspiration: Broadway street sign, New York City</div></figcaption>
	</figure>
</section>

<section id="process" class="page-section ">

	<div class="outer-container">
		<h2 class="future-A inner-container push-triple">process</h2>
		<div class="inner-container">
			<p>We went on an inspiring journey to discover what makes Hester Street unique, challenges they face and the organization’s future strategy. Identifying gaps and opportunities in HSC’s communication, we recommended a set of strategic actions such as prioritizing people’s skills to explain the organization, a flexible and meaningful identity system, and a set of messages for different situations.</p>
			<p>Our designers iteratively developed a new identity system and an accessible, streamlined website, and our strategists crafted and tested a multi-level messaging platform, all inspired by our research findings.</p>
		</div>
	</div>
	<figure class="aligncenter" style="background-color: white;">
		<img src="<?php echo os_path('HS-Old_hester.jpg', 'hesterstreet'); ?>" srcset="<?php echo os_path('HS-Old_hester.jpg', 'hesterstreet'); ?> 1x, <?php echo os_path('HS-Old_hester@2x.jpg', 'hesterstreet'); ?> 2x"/>
		<!-- <figcaption>explanatory caption</figcaption> -->
	</figure>

	<figure class="oakland-tree">
		<div class="labels outer-container">
			<div class="inner-container">
				<em class="pull-left text-muted" style="width: 50%; color: #376FFF; ">Before</em>
				<em class="pull-right text-muted text-right" style="width: 50%; color: #376FFF; ">After</em>
			</div>
		</div>
		<div class="slider-row oakland-tree-large">
			<img src="<?php echo os_path('CoO-Tree2.svg', 'oakland'); ?>" class="large top" width="640" height="438" />
			<img src="<?php echo os_path('CoO-Tree1.svg', 'oakland'); ?>" class="large bottom" width="640" height="438" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-lg" class="slider-input tree-slider-lg" value="50" min="0" max="100">
			</div>
		</div>
		<div class="slider-row oakland-tree-small">
			<img src="<?php echo os_path('CoO-Tree2.svg', 'oakland'); ?>" class="small top" width="116" height="119" />
			<img src="<?php echo os_path('CoO-Tree1.svg', 'oakland'); ?>" class="small bottom" width="116" height="119" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-sm" class="slider-input tree-slider-sm" value="50" min="0" max="100">
			</div>
		</div>
	</figure>

	<div class="outer-container">
		<figcaption class="inner-container">Oakland’s tree</figcaption>
		<p class="inner-container push-triple">As we defined the color scheme, we wanted to help Oakland break through the clutter of commercial activity by giving it a clear and bold look. We paired a dominant color, an energetic green hue, to a rich range of complimentary hues, and created a typographic system that emphasizes clarity and lack of ornament.</p>
	</div>

	<figure class="aligncenter hug">
		<img src="<?php echo os_path('CoO-Brochure-lowsrc.png', 'oakland') ?>" class="lazy-load" data-src="<?php echo os_path('CoO-Brochure.png', 'oakland'); ?>" data-src2x="<?php echo os_path('CoO-Brochure-@2x.png', 'oakland'); ?>" width="1025" height="690" />
		<div class="outer-container">
			<figcaption class="inner-container">City of Oakland Brochures</figcaption>
		</div>
	</figure>

	<div class="outer-container push-triple">
		<p class="inner-container">The City should be able to modulate its expression without always employing a blunt use of the logo. We created a pattern that, while related to the tree logo, grows it into a full root system, as complex and rich as the communities and network that support the city. This pattern can be applied to elements in overt or subtle ways, based on the context.</p>
	</div>
</section>

<section class="page-section " style="background-color: #E0F3F2; padding-bottom: 100px">
	<figure class="alignnone hug oakland-pattern"></figure>
	<div class="outer-container">
		<figcaption class="inner-container">Root system</figcaption>
	</div>
</section>

<section id="solution" class="page-section " style="background-color: #E0F3F2; padding-bottom: 200px">

	<div class="outer-container">
		<div class="inner-container">
			<h2 class="future-A">solution</h2>
		</div>

	</div>

	<figure class="os-slideshow-container">
		<div id="oakland-website-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#oakland-website-nav .prev", "nextArrow": "#oakland-website-nav .next", "appendDots": "#oakland-website-dots" }'>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-Homepage-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Homepage-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Homepage-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>City of Oakland Homepage</figcaption>
			</li>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-Landing-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Landing-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Landing-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>Landing Page</figcaption>
			</li>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-Parks-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Parks-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Parks-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>Parks and Recreation</figcaption>
			</li>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-Terminal-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Terminal-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Terminal-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>Terminal page</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-website-nav"); ?>
	</figure>

	<div class="outer-container">
		<div class="inner-container">
			<p class="h2 future-A"><a href="http://beta.oaklandca.gov/" class="cta-link" target="_blank">beta.oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
			<p>In this same spirit of open development, the portfolio library is publicly available, along with a design toolkit created to support designers, agencies and civil servants in creating material to fit the new visual identity.</p>
		</div>
	</div>

	<figure class="os-slideshow-container">
		<div id="oakland-toolkit-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#oakland-toolkit-nav .prev", "nextArrow": "#oakland-toolkit-nav .next", "appendDots": "#oakland-toolkit-dots" }'>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-PatternPortfolio-1-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-1-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-1-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>City of Oakland Design Toolkit</figcaption>
			</li>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-PatternPortfolio-2-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-2-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-2-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>Toolkit – Visual Identity</figcaption>
			</li>
			<li class="browser">
				<div class="browser-bar"></div>
				<div class="browser-window">
					<div class="browser-inner">
						<img src="<?php echo os_path('CoO-PatternPortfolio-3-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-3-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-3-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
					</div>
				</div>
				<figcaption>Toolkit – Pattern Portfolio</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-toolkit-nav"); ?>
	</figure>

	<div class="outer-container">
		<div class="inner-container">
			<p>We continue to support the City as it improves the quality of its visual communication.</p>
			<p class="h2 future-A"><a href="http://design.oaklandca.gov/" class="cta-link" target="_blank">design.oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
		</div>
	</div>

</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'contact-form' ); ?>
