<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header page-section full-height" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<div class="outer-container">
		<h1 class="page-title inner-container"><?php echo get_the_excerpt(); ?></h1>
		<p class="page-subtitle h3 inner-container"><em>Visual identity</em> and <em>user interface</em> design for City of Oakland</p>
		<nav class="page-nav push-double inner-container">
			<ul class="list-unstyled">
				<li><a href="#opportunity" class="future-A h2 smooth-scroll">opportunity</a></li>
				<li><a href="#process" class="future-A h2 smooth-scroll">process</a></li>
				<li><a href="#solution" class="future-A h2 smooth-scroll">solution</a></li>
			</ul>
		</nav>
	</div>
	<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
</section>

<section id="opportunity" class="page-section outer-container">
	<div class="inner-container">
		<h2 class="future-A">opportunity</h2>
		<p class="push-double">Oakland, California is a diverse and dynamic community, with rapid change nearly a constant throughout its storied history. In order to deliver better services to that community, the City government is developing new strategies to deliver better experiences and services online. Working with Code for America on a new model of ‘Digital Front Door,’ the City understood the need for defining an ownable look and feel for everything it does as a government.</p>
		<p class="push-double">
			<strong>A Symbol</strong><br/>
			For many decades, a stylized oak tree has represented the city and its intertwined citizenry. In fact, the symbol has become so popular that many in the community embrace it to brand their store, organization, and even bodies. While such a wellspring of adoption is any community’s dream, this common use exposed the need for the City to differentiate its visual toolkit for communications. 
		</p>
	</div>
</section>

<section class="page-section push-double" style="background-color: #E7F1CF;">
	<figure class="alignnone hug">
		<div style="overflow:hidden; position: relative;">
			<blockquote data-parallax-node="0.5">
				<p>"Oakland is like a tree. The trunk full of businesses with branches stretching into their own communities with their own cultures."<br/><small>&mdash; Kayla, Oakland Native, Chapter 510</small></p>
			</blockquote>
			<img src="<?php echo os_path('artifacts.jpg', 'oakland') ?>" width="1212" height="978">
		</div>
		<div class="outer-container">
			<figcaption class="inner-container">Artifacts from Oakland's Archives</figcaption>
		</div>
	</figure>
</section>

<section id="process" class="page-section " style="background-color: #E7F1CF; padding-bottom: 100px;">
	<div class="outer-container">
		<div class="inner-container">
			<p class="push-double">From our offices in Oakland, Objective Subject recommended a concerted approach to visual communication that aims to unify all city departments and allows the city to define a recognizable look and feel throughout its communications, digital and otherwise.[c] The current cacophony of symbols does not connote the clarity and simplicity that should be the hallmark of any experience with a large organization, but so often is not.</p>
			<h2 class="future-A">process</h2>
			<p class="push-double">With any project, we first perform in-depth research and a far-reaching visual audit. In the City’s Archives, we were able to trace the original use of the symbol to the early 1970s. Throughout its history, it has received few tweaks, and retains a special kind of beauty which we were keen to preserve. But with its high recognition and unique properties, there were still various issues with the mark, especially how it rendered in smaller contexts. We collaborated with type designer Jesse Ragan to treat the symbol as a character and give it better optical legibility.</p>
		</div>
	</div>

	<figure class="oakland-tree">
		<div class="labels clearfix">
			<em class="pull-left text-muted text-center" style="width: 50%;">Before</em>
			<em class="pull-right text-muted text-center" style="width: 50%;">After</em>
		</div>
		<div class="slider-row oakland-tree-large">
			<img src="<?php echo os_path('tree-1-lg.png', 'oakland'); ?>" class="large top" />
			<img src="<?php echo os_path('tree-2-lg.png', 'oakland'); ?>" class="large bottom" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-lg" class="slider-input tree-slider-lg" value="50" min="0" max="100">
			</div>
		</div>
		<div class="slider-row oakland-tree-medium">
			<img src="<?php echo os_path('tree-1-md.png', 'oakland'); ?>" class="medium top" />
			<img src="<?php echo os_path('tree-2-md.png', 'oakland'); ?>" class="medium bottom" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-md" class="slider-input tree-slider-md" value="50" min="0" max="100">
			</div>
		</div>
		<div class="slider-row oakland-tree-small">
			<img src="<?php echo os_path('tree-1-sm.png', 'oakland'); ?>" class="small top" />
			<img src="<?php echo os_path('tree-2-sm.png', 'oakland'); ?>" class="small bottom" />
			<div class="slider">
				<div class="slider-track"></div>
				<div class="slider-thumb"></div>
				<input type="range" name="tree-slider-sm" class="slider-input tree-slider-sm" value="50" min="0" max="100">
			</div>
		</div>
	</figure>

	<div class="outer-container">
		<figcaption class="inner-container">Oakland’s tree, before and after</figcaption>
		<p class="inner-container">As we defined the color scheme, we wanted to help Oakland break through the clutter of commercial activity by giving it a clear and bold look. We paired a dominant color, an energetic green hue with a range of rich hues in complement.</p>
	</div>

	<figure class="aligncenter">
		<img src="<?php echo os_path('brochures.png', 'oakland') ?>" width="1025" height="690">
		<div class="outer-container">
			<figcaption class="inner-container">City of Oakland Brochures</figcaption>
		</div>
	</figure>

	<div class="outer-container">
		<p class="inner-container">The City should be able to modulate its expression without always having to resort to the blunt use of the logo. To address, we created a pattern that takes after[g] the tree logo, but grows it into a full root system, as complex and rich as are the communities and network that support the city. The pattern can then be applied to different elements in more overt or more subtle ways, based on what the context calls for.</p>
	</div>
</section>

<section id="solution" class="page-section " style="background-color: #E0F3F2; padding-bottom: 100px">
	
	<figure class="alignnone hug oakland-pattern" style="background-image: <?php echo 'url(' . os_path('pattern.jpg', 'oakland') . ')'; ?>"></figure>
	<div class="outer-container">
		<figcaption class="inner-container">Root system</figcaption>
	</div>
	
	<figure class="os-slideshow-container">
		<div id="oakland-website-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#oakland-website-nav .prev", "nextArrow": "#oakland-website-nav .next", "appendDots": "#oakland-website-dots" }'>
			<li>
				<img src="<?php echo os_path('homepage.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>City of Oakland Homepage</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('pay-ticket.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>Pay Tickets Page</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('news-press.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>News and Press</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-website-nav"); ?>
	</figure>
	
	<div class="outer-container">
		<div class="inner-container">
			<h2 class="future-A">solution</h2>
			<p class="push-double">The pattern portfolio we built is now being used by Code for America as it conducts agile design and development of various new services for the city, visible in this Beta website.</p>
			<p class="push-double">In the same spirit of open development, the portfolio library is publicly available, and joined with a design toolkit created to support designers, agencies and civil servants in creating material to fit the new visual identity. We will keep supporting the city as it works to improve the quality of its communication with citizens from our west coast office.</p>
		</div>
	</div>

	<figure class="os-slideshow-container">
		<div id="oakland-toolkit-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#oakland-toolkit-nav .prev", "nextArrow": "#oakland-toolkit-nav .next", "appendDots": "#oakland-toolkit-dots" }'>
			<li>
				<img src="<?php echo os_path('toolkit-home.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>City of Oakland Design Toolkit</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('toolkit-vis-identity.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>Toolkit – Visual Identity</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('toolkit-pattern-portfolio.png', 'oakland'); ?>" width="848" height="778">
				<figcaption>Toolkit – Pattern Portfolio</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("oakland-toolkit-nav"); ?>
	</figure>
	
	<div class="outer-container">
		<div class="inner-container">
			<p class="colophon">
				<em>Details</em><br/>
				<em>Typography</em>: Fakt Pro (1966, Wilhelm Pischner)<br/>
				<em>Industry</em>: Public Sector<br/>
				<em>Team</em>: David Jalber-Gagnier, Elliot Arthur, Kirk Pettinga, Andrew Mowe
			</p>
			<p class="h2 future-A"><a href="http://www.oaklandca.gov/" class="cta-link" target="_blank">oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
			<p class="h2 future-A hug"><a href="http://design.oaklandca.gov/" class="cta-link" target="_blank">design.oaklandca.gov <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
		</div>
	</div>

</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'contact-form' ); ?>
















