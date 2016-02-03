<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header page-section full-height use-ui-light-theme" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<div class="section-content">
		<div class="outer-container">
			<h1 class="page-title inner-container hug"><?php echo get_the_excerpt(); ?></h1>
			<p class="page-subtitle h3 inner-container"><?php the_field('case_study_subtitle'); ?></p>
			<nav class="page-nav inner-container">
				<ul class="list-unstyled hug">
					<li><a href="#opportunity" class="future-A h2 smooth-scroll">opportunity</a></li>
					<li><a href="#process" class="future-A h2 smooth-scroll">process</a></li>
					<li><a href="#solution" class="future-A h2 smooth-scroll">solution</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
</section>

<section id="opportunity" class="page-section">
	<div class="outer-container">
		<h2 class="future-A inner-container">opportunity</h2>
		<p class="inner-container">Oakland, California is a diverse and dynamic community, with rapid change nearly a constant throughout its storied history. In order to deliver better services to that community, and clarify the services it provides, the City government working with <a href="https://www.codeforamerica.org/our-work/" target="_blank">Code for America</a>, is to define an ownable look and feel for all of its strategies and actions.</p>
	</div>

	<figure class="alignnone">
		<div class="parallax-container">
			<blockquote data-parallax-node="0.5">
				<p><span class="quote">&ldquo;</span>Oakland is like a tree. The trunk full of businesses with branches stretching into their own communities with their own cultures.<span class="quote">&rdquo;</span><br/><small>&mdash; Kayla, Oakland Native, Chapter 510 Writing Project</small></p>
			</blockquote>
			<img src="<?php echo os_path('CoO-TreeB-min.jpg', 'oakland') ?>" srcset="<?php echo os_path('CoO-TreeB-min.jpg', 'oakland') ?> 1x, <?php echo os_path('CoO-TreeB@2x-min.jpg', 'oakland') ?> 2x" width="1600" height="1008">
		</div>
		<figcaption class="outer-container"><div class="inner-container">Big Trees Trail at Joaquin Miller Park, Oakland (Photo credits: Greg Linhares / City of Oakland)</div></figcaption>
	</figure>

	<div class="outer-container">
		<p class="inner-container">
			<strong>A Symbol</strong><br/>
			For many decades, a stylized oak tree has represented the city and its intertwined citizenry. In fact, the symbol has become so popular that many in the community embrace it to brand their store, organization, and <a href="https://www.flickr.com/photos/rebeccacbrown13/4935745171" target="_blank">even bodies</a>. While such a wellspring of adoption is any community’s dream, this widespread use exposed the need to create a differentiated interpretation of the symbol, so it can be made clear when the government is communicating.
		</p>
		<p class="inner-container">In the past, the City never had a concerted approach to visual communication. The resulting cacophony of symbols across city departments did not connote the clarity and simplicity that should be the hallmark of any experience with a large organization. </p>
	</div>
	
	<figure class="aligncenter" style="background-color: white;">
		<img src="<?php echo os_path('oakland-cacophony.png', 'oakland'); ?>" srcset="<?php echo os_path('oakland-cacophony.png', 'oakland'); ?> 1x, <?php echo os_path('oakland-cacophony@2x.png', 'oakland'); ?> 2x" width="1193" />
		<!-- <figcaption>explanatory caption</figcaption> -->
	</figure>
</section>

<section id="process" class="page-section " style="background-color: #E7F1CF; padding-bottom: 50px;">
	<div class="outer-container">
		<h2 class="future-A inner-container push-triple">process</h2>
	</div>

	<figure class="alignnone">
		<img src="<?php echo os_path('artifacts.jpg', 'oakland') ?>" width="1212" height="978">
		<div class="outer-container">
			<figcaption class="inner-container">Artifacts from Oakland's Archives</figcaption>
		</div>
	</figure>

	<div class="outer-container">
		<p class="push-double inner-container">We first performed in-depth research and a far-reaching visual audit. Immersed in the City’s Archives, we traced the original use of the symbol to the early 1970s. Throughout its history, it has received few tweaks, and retains a special kind of beauty which we were keen to preserve. But with its high recognition and unique properties, there were still various issues with the mark, especially how it rendered in smaller contexts. We collaborated with type designer Jesse Ragan to treat the symbol as we would from a typeface glyph, to give it better optical legibility, especially on-screen and at small sizes.</p>
		<!-- [ANIMATED EVOLUTION OF TREE GRAPHIC: .MOV ELLIOT PREPARED] -->
	</div>

	<figure class="oakland-tree">
		<div class="labels clearfix">
			<em class="pull-left text-muted text-center" style="width: 50%;">Before</em>
			<em class="pull-right text-muted text-center" style="width: 50%;">After</em>
		</div>
		<div class="slider-row oakland-tree-large">
			<img src="<?php echo os_path('CoO-Tree2.svg', 'oakland'); ?>" class="large top" width="640" />
			<img src="<?php echo os_path('CoO-Tree1.svg', 'oakland'); ?>" class="large bottom" width="640" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-lg" class="slider-input tree-slider-lg" value="50" min="0" max="100">
			</div>
		</div>
		<div class="slider-row oakland-tree-medium">
			<img src="<?php echo os_path('CoO-Tree2.svg', 'oakland'); ?>" class="medium top" width="215" />
			<img src="<?php echo os_path('CoO-Tree1.svg', 'oakland'); ?>" class="medium bottom" width="215" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-md" class="slider-input tree-slider-md" value="50" min="0" max="100">
			</div>
		</div>
		<div class="slider-row oakland-tree-small">
			<img src="<?php echo os_path('CoO-Tree2.svg', 'oakland'); ?>" class="small top" width="116" />
			<img src="<?php echo os_path('CoO-Tree1.svg', 'oakland'); ?>" class="small bottom" width="116" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-sm" class="slider-input tree-slider-sm" value="50" min="0" max="100">
			</div>
		</div>
	</figure>

	<div class="outer-container">
		<figcaption class="inner-container">Oakland’s tree, before and after</figcaption>
		<p class="inner-container push-triple">As we defined the color scheme, we wanted to help Oakland break through the clutter of commercial activity by giving it a clear and bold look. We paired a dominant color, an energetic green hue, to a rich range of complimentary hues, and created a typographic system that emphasizes clarity and lack of ornament.</p>
	</div>

	<figure class="aligncenter hug">
		<img src="<?php echo os_path('CoO-Brochure-min.png', 'oakland') ?>" srcset="<?php echo os_path('CoO-Brochure-min.png', 'oakland') ?> 1x, <?php echo os_path('CoO-Brochure-@2x-min.png', 'oakland') ?> 2x" width="1025" height="690">
		<div class="outer-container">
			<figcaption class="inner-container">City of Oakland Brochures</figcaption>
		</div>
	</figure>

	<div class="outer-container push-triple">
		<p class="inner-container">The City should be able to modulate its expression without always employing a blunt use of the logo. We created a pattern that, while related to the tree logo, grows it into a full root system, as complex and rich as the communities and network that support the city. This pattern can be applied to elements in overt or subtle ways, based on the context.</p>
	</div>
</section>

<section class="page-section " style="background-color: #E0F3F2; padding-bottom: 100px">
	<figure class="alignnone hug oakland-pattern" style="background-image: <?php echo 'url(' . os_path('pattern.jpg', 'oakland') . ')'; ?>"></figure>
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
				<img src="<?php echo os_path('CoO-Homepage-crop-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Homepage-crop-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Homepage-crop-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>City of Oakland Homepage</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('CoO-Landing-crop-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Landing-crop-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Landing-crop-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>Landing Page</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('CoO-Parks-crop-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Parks-crop-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Parks-crop-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>Parks and Recreation</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('CoO-Terminal-crop-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-Terminal-crop-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-Terminal-crop-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>Terminal page</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-website-nav"); ?>
	</figure>
	
	<div class="outer-container">
		<div class="inner-container">
			<p class="h2 future-A"><a href="http://beta.oaklandca.gov/" class="cta-link" target="_blank">beta.oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
			<p>In this same spirit of open development, the portfolio library is publicly available, along with a design toolkit created to support designers, agencies and civil servants in creating material to fit the new visual identity.</p>
			<p>We continue to support the City as it improves the quality of its visual communication.</p>
			<p class="h2 future-A"><a href="http://design.oaklandca.gov/" class="cta-link" target="_blank">design.oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
		</div>
	</div>

	<figure class="os-slideshow-container">
		<div id="oakland-toolkit-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#oakland-toolkit-nav .prev", "nextArrow": "#oakland-toolkit-nav .next", "appendDots": "#oakland-toolkit-dots" }'>
			<li class="browser">
				<img src="<?php echo os_path('CoO-PatternPortfolio-crop-1-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-crop-1-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-crop-1-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>City of Oakland Design Toolkit</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('CoO-PatternPortfolio-crop-2-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-crop-2-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-crop-2-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>Toolkit – Visual Identity</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('CoO-PatternPortfolio-crop-3-min.png', 'oakland'); ?>" srcset="<?php echo os_path('CoO-PatternPortfolio-crop-3-min.png', 'oakland'); ?> 1x, <?php echo os_path('CoO-PatternPortfolio-crop-3-@2x-min.png', 'oakland'); ?> 2x" width="850" height="780">
				<figcaption>Toolkit – Pattern Portfolio</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-toolkit-nav"); ?>
	</figure>

</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'contact-form' ); ?>
















