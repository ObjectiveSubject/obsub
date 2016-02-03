<?php
/**
 * Template Name: About
 *
 * @package obsub
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-header page-section full-height">
			<div class="outer-container">
				<div class="inner-container">
					<?php the_content(); ?>
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
					<li><a href="http://eightface.com/" target="_blank"><em>Dave Kellam</em></a></li>
					<li><a href="http://marvinharder.com/" target="_blank"><em>Marvin Harder</em></a></li>
					<li><a href="http://www.hieronymus.co/" target="_blank"><em>Hieronymus</em></a></li>
					<li><a href="http://www.mowe.money/" target="_blank"><em>Andrew Mowe</em></a></li>
					<li><a href="http://jesseragan.com/" target="_blank"><em>Jesse Ragan</em></a></li>
					<li><a href="http://www.samarskaya.com/" target="_blank"><em>Ksenya Samarskaya</em></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</section>

		<div class="process-snapshot"><img src="<?php echo os_path('process-snapshot.jpg', 'about'); ?>" /></div>

		<section class="page-section alumni outer-container">
			<div class="alumni-content">
				<h2 class="future-A">Alumni</h2>
				<p class="push">
					Since the start of Objective Subject, we’ve worked with some talented people. Gone, but not forgotten a few of our fellow co-workers:
				</p>
				<p class="push">
					Aaron Carámbula <a href="https://twitter.com/daanshin" target="_blank">@daanshin</a>, Facebook<br/>
					Sam Gray <a href="https://twitter.com/samgray" target="_blank">@samgray</a>, BlenderBox<br/>
					Kuan Luo <a href="https://twitter.com/kuanluo" target="_blank">@kuanluo</a>, Etsy / Grand St<br/>
					Blake Olmstead <a href="https://twitter.com/blakeolmstead" target="_blank">@blakeolmstead</a>, Atlas Obscura<br/>
					Zack Seuberling <a href="https://twitter.com/zackseuberling" target="_blank">@zackseuberling</a>, Rumors<br/>
					Mark Silver <a href="https://twitter.com/markdsilver" target="_blank">@markdsilver</a>, The New York Times<br/>
					Dan Shin <a href="https://twitter.com/daanshin" target="_blank">@daanshin</a>, Square<br/>
					Emma White <a href="https://twitter.com/nodilemma" target="_blank">@nodilemma</a>, Portal A
				</p>
			</div>
		</section>

		<section class="page-section recognition outer-container">
			<div class="recognition-content">
				<h2 class="future-A">Recognition</h2>
				<ul class="list-unstyled clearfix push">
					<li>
					Webby Awards 2015, Travel Design<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank">New York Times, Times Journeys</a>
					</li>
					<li>
					German Design Award 2013, Identity Design<br/>
					<a href="http://www.ap.org/company/brand" target="_blank">Associated Press</a>
					</li>
					<li>
					Red Dot Award 2014, Online Design<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank">New York Times, Times Journeys</a>
					</li>
					<li>
					Red Dot Award 2012, Corporate Design<br/>
					<a href="http://www.ap.org/company/brand" target="_blank">Associated Press</a>
					</li>
					<li>
					W3 Awards 2014, Gold Winner<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank">New York Times, Times Journeys</a>
					</li>
					<li>
					W3 Awards 2012, Website Design<br/>
					<a href="http://www.watsonadventures.com/" target="_blank">Watson Adventures</a>
					</li>
					<li>
					Davey Awards 2014<br/>
					<a href="http://www.nytimes.com/times-journeys/" target="_blank">New York Times, Times Journeys</a>
					</li>
				</ul>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
