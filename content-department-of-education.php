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
			<div class="inner-container">&copy; [PHOTO CREDIT NEEDED]</div>
		</div>
	</div>
	<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
</section>

<section id="opportunity" class="page-section">
	<div class="outer-container">
		<h2 class="future-A inner-container">opportunity</h2>
		<div class="inner-container">
			<p>The NYC Department of Education’s Office of School Wellness Programs sought a new visual identity to convey the positive impact of its work for students, and to enable its messages to reach the right people.</p>
			<p>We saw an opportunity to demonstrate the holistic nature of student health and wellness, and to help schools recognize the benefit of prioritizing the overall well-being of every student and family rather than ‘cherry-picking’ from the office’s suite of programs and materials.</p>
		</div>
	</div>

	<figure class="alignnone">
		<div class="parallax-container">
			<blockquote class="parallax-node" data-speed-modifier="0.5">
				<p><span class="quote">&ldquo;</span>We're competing with math and english for time in the school day, but Wellness supports students to achieve in these subjects.<span class="quote">&rdquo;</span><br/><small>&mdash;Wellness worker</small></p>
			</blockquote>
			<img src="<?php echo os_path('DOE-skateboarding-NYC.jpg', 'doe') ?>" srcset="<?php echo os_path('DOE-skateboarding-NYC.jpg', 'doe') ?> 1x, <?php echo os_path('DOE-skateboarding-NYC@2x.jpg', 'doe') ?> 2x" width="1600">
		</div>
		<figcaption class="outer-container"><div class="inner-container">Skateboarding in New York City, 1965. (Photocredit: Bill Eppridge—Time & Life Pictures/Getty Images)</div></figcaption>
	</figure>
</section>

<section id="process" class="page-section " >

	<div class="outer-container">
		<h2 class="future-A inner-container push-triple">process</h2>
		<div class="inner-container">
			<p>We interviewed people across the NYC school community to build our evidence base, and quickly deduced the problem: head teachers across NYC are not prioritizing health and physical education in the school day, despite its benefits across grades and behavior.</p>
			<p>Communicating the legitimacy and imperative of wellness education in the Office of School Wellness Programs’ visual communications became the chief objective. To create impact, capture the attention of key audiences, and communicate the core messages, we focused on the students, their actions and their outcomes. </p>
		</div>
	</div>

	<!-- <figure class="alignnone hug">
		<img src="<?php echo os_path('artifacts.jpg', 'oakland') ?>" width="1212" height="978">
		<div class="outer-container">
			<figcaption class="inner-container">Artifacts from Oakland's Archives</figcaption>
		</div>
	</figure> -->

	<figure class="alignnone">
		<img src="<?php echo os_path('DOE-interview.jpg', 'doe') ?>" srcset="<?php echo os_path('DOE-interview.jpg', 'doe') ?> 1x, <?php echo os_path('DOE-interview@2x.jpg', 'doe') ?> 2x">
		<div class="outer-container">
			<figcaption class="inner-container">Lizzie interviewing Dan Marascia, PE Teacher; Courtland Elementary School</figcaption>
		</div>
	</figure>
</section>

<section id="solution" class="page-section " >

	<div class="outer-container">
		<div class="inner-container">
			<h2 class="future-A">solution</h2>
			<p>We designed an identity which brands the result rather than the office. The wordmark logo Think—Move—Achieve— highlights the symbiotic relationship between learning to take care of one’s mind and body, and achieving personal and academic goals.</p>
		</div>
	</div>

	<figure class="aligncenter" style="background-color:#fff; height:250px;width:100%;line-height:250px;">
		<div class="outer-container fade-each-left active-on-inview" style="text-align:center;vertical-align:center">
				<img style="max-width:30%;display:inline-block;padding:0 1vw;" src="<?php echo os_path('Think.svg', 'doe') ?>">
				<img style="max-width:30%;display:inline-block;padding:0 1vw;" src="<?php echo os_path('Move.svg', 'doe') ?>">
				<img style="max-width:37%;display:inline-block;padding:0 1vw;" src="<?php echo os_path('Achieve.svg', 'doe') ?>">
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
