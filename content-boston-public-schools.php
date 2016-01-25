<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header page-section full-height" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<h1 class="page-title"><?php echo get_the_excerpt(); ?></h1>
	<p class="page-subtitle h3"><em>Visual identity</em> and <em>user interface</em> design for Boston Public Schools</p>
	<nav class="page-nav push-double">
		<ul class="list-unstyled">
			<li><a href="#opportunity" class="future-A h2 smooth-scroll">opportunity</a></li>
			<li><a href="#process" class="future-A h2 smooth-scroll">process</a></li>
			<li><a href="#solution" class="future-A h2 smooth-scroll">solution</a></li>
		</ul>
	</nav>
</section>

<section id="opportunity" class="page-section contain-content">
	<h2 class="future-A">opportunity</h2>
	<p>Every year in Boston, 57,000 students must be placed in 137 public schools. The Discover Boston Public Schools project was born out of a 2011 Code for America fellowship by Joel Mahoney, to address the school department’s critical mandate to engage parents in the process of placing their students in schools. In its first pilot year, upwards of half the parents in Boston used the platform to identify the right school for their child — a pretty remarkable adoption rate for new civic technology.</p>
	<p>In 2013, the school district enacted a policy to transition from a zone-based model to a home-based model of placement, allowing parents to find the best schools for their children within close proximity to their home. The New York Times wrote about the genesis of this algorithm.</p>
</section>

<section class="page-section push-double" style="background-color: #D5EFFF;">
	<figure class="alignnone hug">
		<div style="overflow:hidden; position: relative;">
			<blockquote data-parallax-node="0.5">
				<p>"[Discover BPS] changed the way we relate to parents."<br/><small>&mdash; Carol R. Johnson, <em>Superintendent, Boston Public Schools</em></small></p>
			</blockquote>
			<img src="<?php echo os_path('schoolbusses.jpg', 'bps') ?>" width="1400" height="830" />
		</div>
		<figcaption>Boston Public School busses</figcaption>
	</figure>
</section>

<section id="process" class="page-section contain-content" style="background-color: #D5EFFF; padding-bottom: 100px;">
	<p>
		<strong>Complex choices, easy decisions</strong><br/>
		To address this policy change, the Discover BPS tool would need to be re-worked. The project team reached out to our team to lead the design of a highly accessible interface that addresses the needs of key constituents with a map-driven interface, centering school options around the location entered by the user.
	</p>
	<p>Key to the solution was to ensure that standardized test scores alone did not lead user selection of schools. To that effect, we emphasized an extensive list of school characteristics that might play a critical role in a parent’s choice. By viewing schools options with preferences such as ‘focus on the arts,’ ‘full-time nurse,’ specific care hours or facilities, parents are empowered to find the schools that are the right fit for their student.</p>
	<h2 class="future-A">process</h2>
	<p>With a full understanding of all that the tool needed to accomplish, our team considered how parents would learn about Discover BPS. In the first incarnation of the tool, the initiative had been branded as an individual product, with little to no relationship with the school district.</p>

	<figure class="bps-wordmarks aligncenter active-on-inview">
		<div style="background-color: #0077D2;" >	
			<img src="<?php echo os_path('discover.png', 'bps') ?>" width="820" height="240">
			<img src="<?php echo os_path('register.png', 'bps') ?>" width="820" height="240">
			<img src="<?php echo os_path('succeed.png', 'bps') ?>" width="820" height="240">
		</div>
		<figcaption>Discover Boston Public Schools wordmarks</figcaption>
	</figure>

	<p>Since the role of this tool is to serve as the first step in part of the larger registration process, we proposed branding the process holistically, using the bright blue of Boston Public Schools as the unifying element for a streamlined visual system. This cohesive system will play an integral part in the communications campaign to parents.</p>

	<figure class="aligncenter">	
		<img src="<?php echo os_path('posters.png', 'bps') ?>" width="1200" height="796">
		<figcaption>A poster for a school showcase using the visual system</figcaption>
	</figure>

	<p>In addition to helping parents take control of an important decision in the children’s life, rethinking  the user experience represents an opportunity to position Boston Public School as a proactive, innovative and trustworthy organization. A positive perception of the school district can only engender more goodwill and participation from parents, students, and the community alike.</p>
</section>

<section id="solution" class="page-section contain-content" style="background-color: #D5EFFF; padding-bottom: 100px">	
	<figure class="aligncenter hug">
		<div class="image-bg" style="background-color: #EAEAEA; padding: 60px 0; border: 3px solid #CCE3F1; border-right: 0; border-left: 0;">
			<img src="<?php echo os_path('results.png', 'bps') ?>" width="843" height="317">
		</div>
		<figcaption>Comprehensive Icon system for filtration of schools</figcaption>
	</figure>
	<h2 class="future-A">solution</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
	
	<figure class="os-slideshow-container">
		<div id="bps-website-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#bps-website-nav .prev", "nextArrow": "#bps-website-nav .next", "appendDots": "#bps-website-dots" }'>
			<li class="shadow">
				<img src="<?php echo os_path('website-home.png', 'bps'); ?>" width="1200" height="1100">
				<figcaption>Discover Boston Public Schools Homepage</figcaption>
			</li>
			<li class="shadow">
				<img src="<?php echo os_path('website-results.png', 'bps'); ?>" width="1200" height="1100">
				<figcaption>School results</figcaption>
			</li>
			<li class="shadow">
				<img src="<?php echo os_path('website-school-detail.png', 'bps'); ?>" width="1200" height="1100">
				<figcaption>School detail</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("bps-website-nav"); ?>
	</figure>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	
	<figure class="os-slideshow-container">
		<div id="bps-mobile-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#bps-mobile-nav .prev", "nextArrow": "#bps-mobile-nav .next", "appendDots": "#bps-mobile-dots", "centerPadding": "0" }'>
			<li>
				<img src="<?php echo os_path('mobile-home.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Discover Boston Public Schools Mobile Homepage</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('mobile-results.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Mobile School results</figcaption>
			</li>
			<li>
				<img src="<?php echo os_path('mobile-about.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Mobile About page</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("bps-mobile-nav"); ?>
	</figure>

	<div class="colophon inner-container push-triple">
		<div class="details">
			<em>Details</em><br/>
			<em>Typography</em>: Avenir (1988, Adrian Frutiger)<br/>
			<em>Industry</em>: Public Sector<br/>
			<em>Team</em>: David Jalber-Gagnier, Sam Gray, Kirk Pettinga, Emma White
		</div>
	</div>
	<p class="h2 future-A"><a href="http://www.discoverbps.org/" class="cta-link" target="_blank">discoverbps.org <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'get-in-touch' ); ?>
















