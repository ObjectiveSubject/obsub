<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header page-section full-height use-ui-light-theme" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<div class="section-content">
		<div class="outer-container bleed">
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
			<div class="inner-container">&copy; CDOT / Nathan Roseberry</div>
		</div>
	</div>
	<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
</section>

<section id="opportunity" class="page-section">
	<div class="outer-container bleed">
		<div class="inner-container">
			<h2 class="future-A">opportunity</h2>
			<p>Given our skills and interest in transit, working with TransitCenter was a dream project. The non-profit was formed from the sale of TransitCheck to advocate for better transit across America. We saw that, despite confusion with city transit interchanges, a name change for TransitCenter was off the table.</p>
			<p>So we proposed a refresh for the brand, visual identity and website, to capitalize on its growing status. We saw an opportunity to enhance its web presence, with a user-focused site to better tell the story of the organization and elevate its voice in the transportation ecosystem.</p>
		</div>

	</div>

	<figure class="alignnone">
		<div class="parallax-container">
			<blockquote class="parallax-node" data-speed-modifier="0.5">
				<p><span class="quote">&ldquo;</span>Objective Subject’s system and website are the foundation for our communications. With it, TransitCenter channels a clear, cohesive and consistent message to cities, transit organizations and policy makers.<span class="quote">&rdquo;</span><br/><small>&mdash; David Bragdon, TransitCenter Executive Director</small></p>
			</blockquote>
			<img src="<?php echo os_path('Boogie_Woogie.jpg', 'transitcenter') ?>" srcset="<?php echo os_path('Boogie_Woogie.jpg', 'transitcenter') ?> 1x, <?php echo os_path('Boogie_Woogie@2x.jpg', 'transitcenter') ?> 2x" width="1600" height="1008">
		</div>
		<figcaption class="outer-container"><div class="inner-container">Inspiration: Broadway Boogie Woogie by Piet Mondrian</div></figcaption>
	</figure>

</section>

<section id="process" class="page-section ">

	<div class="outer-container bleed">
		<div class="inner-container">
			<h2 class="future-A">process</h2>
			<p>We conducted brand, communications and market audits and recognized that TransitCenter was both missing opportunities to explain its mission through its website, logo, self-description and other materials. Multiple communications materials were developed in different styles, which missed the benefits of a consistent brand in building recognition.</p>
			<p>TransitCenter’s existing color scheme of blues and greens was commonly used in the sector, which didn’t allow it to stand out, and there was both a challenge and an opportunity to ensure its visual identity could pair with partner organizations. We saw the need to match communications with organizational strategy: publications that made more impact; more frequent hosting of events; and a raised profile as a commentator on transit developments.</p>
		</div>
	</div>

	<figure class="alignnone">
		<img src="<?php echo os_path('TC-graffitiSubway.jpg', 'transitcenter') ?>" width="1212" height="978" srcset="<?php echo os_path('TC-graffitiSubway.jpg', 'transitcenter') ?> 1x, <?php echo os_path('TC-graffitiSubway@2x.jpg', 'transitcenter') ?> 2x" width="1600" height="1008">
		<div class="outer-container">
			<figcaption class="inner-container">1982, New York, subway, at rush hour</figcaption>
		</div>
	</figure>

</section>

<section id="solution" class="page-section ">

	<div class="outer-container">
		<div class="inner-container">
			<h2 class="future-A">solution</h2>
			<p>We created a strong visual identity and ‘house style’ for all future materials, and a style guide for consistent implementation. We gave TransitCenter a bold and ‘ownable’ distinctive purple for differentiation and gravitas. We created a bold and flexible logo which adapts to different contexts.</p>
		</div>

	</div>

	<figure class="aligncenter" style="background-color:#fff;">
		<div class="inner-container">
			<p>some neat logo stuff</p>
		</div>

	</figure>

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
