<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
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

<section id="opportunity" class="page-section outer-container">
	<div class="inner-container">
		<h2 class="future-A">opportunity</h2>
		<p>Every year in Boston, 57,000 students must be placed in 137 public schools. The Discover Boston Public Schools project was born out of a 2011 Code for America fellowship by Joel Mahoney, to address the school department’s critical mandate to engage parents in the process of placing their students in schools. In its first pilot year, upwards of half the parents in Boston used the platform to identify the right school for their child — a pretty remarkable adoption rate for new civic technology.</p>
		<p>In 2013, the school district enacted a policy to transition from a zone-based model to a home-based model of placement, allowing parents to find the best schools for their children within close proximity to their home. The New York Times wrote about the genesis of this algorithm.</p>
	</div>
</section>

<section class="page-section push-double" style="background-color: #D6EFFD;">
	<figure class="alignnone hug">
		<div style="overflow:hidden; position: relative;">
			<blockquote data-parallax-node="0.5" data-parallax-delay="-0.4">
				<p><span class="quote">&ldquo;</span>[Discover BPS] changed the way we relate to parents.<span class="quote">&rdquo;</span><br/><small>&mdash; Carol R. Johnson, <em>Superintendent, Boston Public Schools</em></small></p>
			</blockquote>
			<img src="<?php echo os_path('schoolbusses.jpg', 'bps') ?>" width="1400" height="830" />
		</div>
		<div class="outer-container">
			<figcaption class="inner-container">Boston Public School busses</figcaption>
		</div>
	</figure>
</section>

<section id="process" class="page-section" style="background-color: #D6EFFD; padding-bottom: 100px;">
	<div class="outer-container">
		<div class="inner-container">
			<p>
				<strong>Complex choices, easy decisions</strong><br/>
				To address this policy change, the Discover BPS tool would need to be re-worked. The project team reached out to our team to lead the design of a highly accessible interface that addresses the needs of key constituents with a map-driven interface, centering school options around the location entered by the user.
			</p>
			<p>Key to the solution was to ensure that standardized test scores alone did not lead user selection of schools. To that effect, we emphasized an extensive list of school characteristics that might play a critical role in a parent’s choice. By viewing schools options with preferences such as ‘focus on the arts,’ ‘full-time nurse,’ specific care hours or facilities, parents are empowered to find the schools that are the right fit for their student.</p>
			<h2 class="future-A">process</h2>
			<p>With a full understanding of all that the tool needed to accomplish, our team considered how parents would learn about Discover BPS. In the first incarnation of the tool, the initiative had been branded as an individual product, with little to no relationship with the school district.</p>
		</div>
	</div>

	<figure class="bps-wordmarks aligncenter active-on-inview" data-offset="0.5">
		<div style="background-color: #0077D2;" >	
			<img src="<?php echo os_path('Discover.png', 'bps') ?>" srcset="<?php echo os_path('Discover.png', 'bps') ?> 1x, <?php echo os_path('Discover-@2x.png', 'bps') ?> 2x" width="820" height="240">
			<img src="<?php echo os_path('Register.png', 'bps') ?>" srcset="<?php echo os_path('Register.png', 'bps') ?> 1x, <?php echo os_path('Register-@2x.png', 'bps') ?> 2x" width="820" height="240">
			<img src="<?php echo os_path('Succeed.png', 'bps') ?>" srcset="<?php echo os_path('Succeed.png', 'bps') ?> 1x, <?php echo os_path('Succeed-@2x.png', 'bps') ?> 2x" width="820" height="240">
		</div>
		<div class="outer-container">
			<figcaption class="inner-container">Discover Boston Public Schools wordmarks</figcaption>
		</div>
	</figure>

	<div class="outer-container">
		<p class="inner-container">Since the role of this tool is to serve as the first step in part of the larger registration process, we proposed branding the process holistically, using the bright blue of Boston Public Schools as the unifying element for a streamlined visual system. This cohesive system will play an integral part in the communications campaign to parents.</p>
	</div>

	<figure class="aligncenter">	
		<img src="<?php echo os_path('DBPS-Poster-min.png', 'bps') ?>" srcset="<?php echo os_path('DBPS-Poster-min.png', 'bps') ?> 1x, <?php echo os_path('DBPS-Poster-@2x-min.png', 'bps') ?> 2x" width="1200" height="797">
		<div class="outer-container">
			<figcaption class="inner-container">A poster for a school showcase using the visual system</figcaption>
		</div>
	</figure>

	<div class="outer-container">
		<p class="inner-container">In addition to helping parents take control of an important decision in the children’s life, rethinking  the user experience represents an opportunity to position Boston Public School as a proactive, innovative and trustworthy organization. A positive perception of the school district can only engender more goodwill and participation from parents, students, and the community alike.</p>
	</div>

</section>

<section id="solution" class="page-section" style="background-color: #D6EFFD; padding-bottom: 100px">	
	<figure class="aligncenter hug">
		<div class="image-bg" style="background-color: #EAEAEA; padding: 60px 0; border: 3px solid #CCE3F1; border-right: 0; border-left: 0;">
			<img src="<?php echo os_path('DBPS-Results.png', 'bps') ?>" srcset="<?php echo os_path('DBPS-Results.png', 'bps') ?> 1x, <?php echo os_path('DBPS-Results-@2x.png', 'bps') ?> 2x" width="843" height="317">
		</div>
		<div class="outer-container">
			<figcaption class="inner-container">Comprehensive Icon system for filtration of schools</figcaption>
		</div>
	</figure>

	<div class="outer-container">
		<div class="inner-container">
			<h2 class="future-A">solution</h2>
		</div>
	</div>

	<figure class="os-slideshow-container">
		<div id="bps-website-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#bps-website-nav .prev", "nextArrow": "#bps-website-nav .next", "appendDots": "#bps-website-dots" }'>
			<li class="browser">
				<img src="<?php echo os_path('DBPS-Home-min.png', 'bps'); ?>" srcset="<?php echo os_path('DBPS-Home-min.png', 'bps'); ?> 1x, <?php echo os_path('DBPS-Home-@2x-min.png', 'bps'); ?> 2x" width="850" height="800">
				<figcaption>Discover Boston Public Schools homepage</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('DBPS-Schools-min.png', 'bps'); ?>" srcset="<?php echo os_path('DBPS-Schools-min.png', 'bps'); ?> 1x, <?php echo os_path('DBPS-Schools-@2x-min.png', 'bps'); ?> 2x" width="850" height="800">
				<figcaption>School results</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('DBPS-Schools-Details-min.png', 'bps'); ?>" srcset="<?php echo os_path('DBPS-Schools-Details-min.png', 'bps'); ?> 1x, <?php echo os_path('DBPS-Schools-Details-@2x-min.png', 'bps'); ?> 2x" width="850" height="800">
				<figcaption>School detail</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('DBPS-Compare-min.png', 'bps'); ?>" srcset="<?php echo os_path('DBPS-Compare-min.png', 'bps'); ?> 1x, <?php echo os_path('DBPS-Compare-@2x-min.png', 'bps'); ?> 2x" width="850" height="800">
				<figcaption>Compare schools</figcaption>
			</li>
			<li class="browser">
				<img src="<?php echo os_path('DBPS-Ready-min.png', 'bps'); ?>" srcset="<?php echo os_path('DBPS-Ready-min.png', 'bps'); ?> 1x, <?php echo os_path('DBPS-Ready-@2x-min.png', 'bps'); ?> 2x" width="850" height="800">
				<figcaption>Schools chosen</figcaption>
			</li>
		</ul>
		<div class="outer-container">
			<div class="inner-container">
				<?php os_slide_nav("bps-website-nav"); ?>
			</div>
		</div>
	</figure>

	<figure class="os-slideshow-container">
		<div id="bps-mobile-dots"></div>
		<ul class="list-unstyled os-slideshow center-mode" data-slick='{ "prevArrow": "#bps-mobile-nav .prev", "nextArrow": "#bps-mobile-nav .next", "appendDots": "#bps-mobile-dots", "centerPadding": "0", "slidesToShow" : 1 }'>
			<li>
				<img data-lazy="<?php echo os_path('mobile-home.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Discover Boston Public Schools Mobile Homepage</figcaption>
			</li>
			<li>
				<img data-lazy="<?php echo os_path('mobile-results.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Mobile School results</figcaption>
			</li>
			<li>
				<img data-lazy="<?php echo os_path('mobile-about.png', 'bps'); ?>" width="318" height="660">
				<figcaption>Mobile About page</figcaption>
			</li>
		</ul>
		<?php os_slide_nav("bps-mobile-nav"); ?>
	</figure>

	<div class="outer-container">
		<p class="h2 future-A inner-container"><a href="http://www.discoverbps.org/" class="cta-link" target="_blank">discoverbps.org <span class="icon arnhem rotate-cc-45">&rarr;</span></a></p>
	</div>

</section>

<?php os_get_case_study(); ?>

<?php get_template_part( 'module', 'contact-form' ); ?>

