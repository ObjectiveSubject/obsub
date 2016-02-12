<?php
/**
 * Template Name: About
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header page-section full-height">
			<div class="section-content">
				<div class="outer-container">
					<div class="inner-container">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<a href="#bios" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>
		</section>

		<section id="bios" class="page-section bios outer-container">

			<div class="inner-container">
				<h2 class="future-A section-title">team</h2>
			</div>

			<div class="clearfix"></div>

			<?php $args = array( 'post_type' => 'bio', 'posts_per_page' => 100, 'order' => 'ASC' );
			$bios = get_posts($args);
			$count = 0;
			foreach ( $bios as $bio ) : $count++; ?>

				<article class="tile bio push-triple layout-image-<?php echo ($count % 2 == 0) ? 'right' : 'left'; ?>">
					<?php echo get_the_post_thumbnail( $bio->ID, 'full', array('class' => 'tile-image bio-image') ); ?>
					<div class="tile-content bio-content">
						<h3 class="h2 future-A push tile-title bio-title"><?php echo get_the_title( $bio->ID ); ?><br/><?php echo $bio->post_excerpt; ?></h3>
						<?php echo apply_filters('the_content', $bio->post_content); ?>
					</div>
				</article>

			<?php endforeach; ?>

		</section>

		<section class="page-section partners outer-container">
			<h2 class="partners-title future-A">frequent collaborators</h2>
			<div class="partners-content">
				<p class="push">We’re lucky to partner with fellow creatives, developers, thinkers and strategists across projects for our clients. As an agile studio, our collaborations are important for delivering the best creative solutions. Some of our partners include:</p>
				<ul class="push list-unstyled">
					<li><a href="http://www.mindybestphotography.com/" target="_blank"><em>Mindy Best</em></a></li>
					<li><a href="http://davekellam.com/" target="_blank"><em>Dave Kellam</em></a></li>
					<li><a href="http://marvinharder.com/" target="_blank"><em>Marvin Harder</em></a></li>
					<li><a href="http://www.hieronymus.co/" target="_blank"><em>Hieronymus</em></a></li>
					<li><a href="http://www.mowe.money/" target="_blank"><em>Andrew Mowe</em></a></li>
					<li><a href="http://jesseragan.com/" target="_blank"><em>Jesse Ragan</em></a></li>
					<li><a href="http://www.samarskaya.com/" target="_blank"><em>Ksenya Samarskaya</em></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</section>

		<div class="process-snapshot parallax-bg" style="background-image: url(<?php echo os_path('process-snapshot.jpg', 'about'); ?>)" data-speed-modifier="0.5"></div>

		<section class="page-section alumni outer-container">
			<div class="alumni-content">
				<h2 class="future-A">Alumni</h2>
				<p class="push">
					Since the start of Objective Subject, we’ve worked with some talented people. Gone, but not forgotten a few of our fellow co-workers:
				</p>
				<p class="push">
					Aaron Carámbula <a href="https://github.com/carambula" target="_blank"><em>@carambula</em></a>, Facebook<br/>
					Sam Gray <a href="https://github.com/samrgray" target="_blank"><em>@samrgray</em></a>, BlenderBox<br/>
					Kuan Luo <a href="https://github.com/kuanluo" target="_blank"><em>@kuanluo</em></a>, Etsy / Grand St<br/>
					Blake Olmstead <a href="https://github.com/blakeolmstead" target="_blank"><em>@blakeolmstead</em></a>, Atlas Obscura<br/>
					Zack Seuberling <a href="https://github.com/zackseuberling" target="_blank"><em>@zackseuberling</em></a>, Rumors<br/>
					Mark Silver <a href="https://twitter.com/markdsilver" target="_blank"><em>@markdsilver</em></a>, The New York Times<br/>
					Dan Shin <a href="https://twitter.com/dan_shin" target="_blank"><em>@dan_shin</em></a>, Square<br/>
					Emma White <a href="https://twitter.com/nodilemma" target="_blank"><em>@nodilemma</em></a>, Portal A
				</p>
			</div>
		</section>

		<section class="page-section recognition outer-container">
			<div class="recognition-content">
				<div class="reddot-img"><img src="<?php echo os_path('reddot.png' ,'about'); ?>" srcset="<?php echo os_path('reddot.png' ,'about'); ?> 1x, <?php echo os_path('reddot-@2x.png' ,'about'); ?> 2x" width="407" /></div>
				<h2 class="future-A inner-container">Recognition</h2>
				<ul class="list-unstyled clearfix push inner-container">
					<li>
					<strong>Webby Awards 2015</strong>, Travel Design<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank"><em>New York Times, Times Journeys</em></a>
					</li>
					<li>
					<strong>German Design Award 2013</strong>, Identity Design<br/>
					<a href="http://www.ap.org/company/brand" target="_blank"><em>Associated Press</em></a>
					</li>
					<li>
					<strong>Red Dot Award 2014</strong>, Online Design<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank"><em>New York Times, Times Journeys</em></a>
					</li>
					<li>
					<strong>Red Dot Award 2012</strong>, Corporate Design<br/>
					<a href="http://www.ap.org/company/brand" target="_blank"><em>Associated Press</em></a>
					</li>
					<li>
					<strong>W3 Awards 2014</strong>, Gold Winner<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank"><em>New York Times, Times Journeys</em></a>
					</li>
					<li>
					<strong>W3 Awards 2012</strong>, Website Design<br/>
					<a href="http://www.watsonadventures.com/" target="_blank"><em>Watson Adventures</em></a>
					</li>
					<li>
					<strong>Davey Awards 2014</strong><br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank"><em>New York Times, Times Journeys</em></a>
					</li>
				</ul>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
