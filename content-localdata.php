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
		<div class="inner-container">
			<h2 class="future-A">opportunity</h2>
			<p>If cities and towns across the country are to thrive in the decades ahead, the detailed, parcel-level data that community groups, planners and government agencies collect needs to be transformed.</p>
			<p>When three eager technologists were embedded in the Detroit city government as part of their Code for America fellowship, they knew they had their work cut out for them.</p>
			<ol class="list-unstyled os-numbered-list">
				<li><span class="number future-A">1</span>They saw Detroit as the vast sprawling city.</li>
				<li><span class="number future-A">2</span>Looking for the best opportunities to use technology.</li>
				<li><span class="number future-A">3</span>Outdated surveys providing inadequate data for informed decisions, was a major issue.</li>
				<li><span class="number future-A">4</span>Surveying was a time and resources-intensive process involving paper forms, content-entry errors and many months to plot an area.</li>
			</ol>
		</div>
	</div>
	<blockquote>
		<p><span class="quote">&ldquo;</span>They saw detroit, the vast sprawling city, and the outdated surveys providing inadequate data for informed decisions, as a major issue.<span class="quote">&rdquo;</span><br/><small>&mdash; Susan Johnson, <em>Marketing Director</em>, <em>LocalData</em></small></p>
	</blockquote>
</section>

<section id="process" class="page-section " style="padding-bottom: 100px; background-color: #FFEAC4;">
	<figure class="alignnone hug">
		<img src="<?php echo os_path('inspiration.jpg', 'localdata') ?>" width="1400" height="530">
		<div class="outer-container"><figcaption class="inner-container">Inspiration</figcaption></div>
	</figure>
	<div class="outer-container">
		<h2 class="future-A inner-container">process</h2>
		<p class="push inner-container">We worked with LocalData’s team to streamline the visual communication of their offering. The fully configureable nature of the product and its emphasis on geolocation technology is revealed in the compass arrow icon, which was inspired by the Tinker Toys from our youth, embodying the spirit of a set of tools with limitless possibilities. The elemental color set further emphasizes the simplicity that is at the core of the value proposition.</p>
	</div>
	<figure class="alignnone">
		<img src="<?php echo os_path('wordmark.png', 'localdata') ?>" width="1400" height="340" />
		<div class="outer-container"><figcaption class="inner-container">The LocalData Wordmark</figcaption></div>
	</figure>
	<div class="outer-container">
		<p class="inner-container">We further helped the team design a product interface with an emphasis on clear and bold information communication, highlighting key data points with large and crisp typography.</p>
	</div>
	<figure class="os-slideshow-container">
		<div id="tool-landing-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#tool-landing-nav .prev", "nextArrow": "#tool-landing-nav .next", "appendDots": "#tool-landing-dots" }'>
			<li><img data-lazy="<?php echo os_path('tool-landing.jpg', 'localdata'); ?>" width="850" height="792"></li>
			<li><img data-lazy="http://placehold.it/850x792/aaaaaa/ffffff?text=Slide" width="850" height="792"></li>
			<li><img data-lazy="http://placehold.it/850x792/dddddd/666666?text=Slide" width="850" height="792"></li>
		</ul>
		<?php os_slide_nav("tool-landing-nav"); ?>
		<div class="outer-container">
			<figcaption class="inner-container">The LocalData Tool Landing</figcaption>
		</div>
	</figure>
</section>

<section id="solution" class="page-section " style="padding-bottom: 100px; background-color: #FFEBC4;">
	<div class="outer-container">	
		<h2 class="future-A inner-container">solution</h2>
		<p class="push inner-container">The same logic applies to design of other communication, such as the website, where data points explain how Local Data has already helped a host of other cities, from Lynn, Massachusetts, to Gary, Indiana.</p>
	</div>
	<figure class="os-slideshow-container">
		<div id="homepage-slide-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#homepage-slide-nav .prev", "nextArrow": "#homepage-slide-nav .next", "appendDots": "#homepage-slide-dots" }'>
			<li><img data-lazy="<?php echo os_path('homepage.jpg', 'localdata') ?>" width="850" height="792"></li>
			<li><img data-lazy="http://placehold.it/850x792/aaaaaa/ffffff?text=Slide" width="850" height="792"></li>
			<li><img data-lazy="http://placehold.it/850x792/dddddd/666666?text=Slide" width="850" height="792"></li>
		</ul>
		<?php os_slide_nav("homepage-slide-nav"); ?>
	</figure>
	<div class="outer-container">
		<figcaption class="inner-container">The LocalData Homepage</figcaption>
	</div>
	<figure class="aligncenter">
		<img src="<?php echo os_path('stationery.png', 'localdata') ?>" width="1200" height="797">
		<div class="outer-container">
			<figcaption class="inner-container">LocalData Stationery</figcaption>
		</div>
	</figure>
	<div class="colophon push-double outer-container clearfix">
		<div class="inner-container">
			<div class="details push-double">
				<em>Details</em><br/>
				<em>Typography</em>: Neuzeit (1966, Wilhelm Pischner)<br/>
				<em>Industry</em>: Public Sector, Start-Up<br/>
				<em>Team</em>: David Jalber-Gagnier, Sam Gray, Emma White, Jessica Wilson
			</div>
			<div class="awards push-double">
				<span class="icon-trophy">[trophy]</span><br/>
				<em>Red dot award</em>: Best Design Interface<br/>
				<em>D&AD</em>: Website Award<br/>
				<em>Webby</em>: Commended<br/>
				<em>W3</em>: Special Mention
			</div>
		</div>
		<p class="h2 future-A inner-container"><a href="http://localdata.com" class="cta-link" target="_blank">localdata.com <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
	</div>
</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'contact-form' ); ?>
















