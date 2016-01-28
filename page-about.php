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
			<h2 class="partners-title future-A">Partners</h2>
			<div class="partners-content">
				<p class="push">We’re lucky to parnter up with fellow creatives, developers, thinkers and strategists across projects for our clients. Being an agile studio our collaboration process is important in delivering the best creative solutions. Some of our partners include:</p>
				<ul class="push list-unstyled">
					<li><em>Jessie Ragan</em></li>
					<li><em>Andrew Mowe</em></li>
					<li><em>Dave Kellem</em></li>
					<li><em>Marvin Harder</em></li>
					<li><em>Ksenya Samarskaya</em></li>
					<li><em>Chris Thomas</em></li>
					<li><em>Jeffory Waldnan</em></li>
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
					Emma White <a href="https://twitter.com/nodilemma" target="_blank">@nodilemma</a>, Portal A<br/>
					Aaron Carámbula <a href="https://twitter.com/daanshin" target="_blank">@daanshin</a>, Facebook<br/>
					Blake Olmstead <a href="https://twitter.com/blakeolmstead" target="_blank">@blakeolmstead</a>, Atlas Obscura<br/>
					Sam Gray <a href="https://twitter.com/samgray" target="_blank">@samgray</a>, BlenderBox<br/>
					Zack Seuberling <a href="https://twitter.com/zackseuberling" target="_blank">@zackseuberling</a>, Rumors<br/>
					Mark Silver <a href="https://twitter.com/markdsilver" target="_blank">@markdsilver</a>, New York Times<br/>
					Kuan Luo <a href="https://twitter.com/kuanluo" target="_blank">@kuanluo</a>, Etsy<br/>
					Dan Shin <a href="https://twitter.com/daanshin" target="_blank">@daanshin</a>, Square
				</p>
			</div>
		</section>

		<section class="page-section recognition outer-container">
			<div class="recognition-content">
				<h2 class="future-A">Recognition</h2>
				<ul class="list-unstyled clearfix push">
					<li>
					Webby Awards 2015,
					Travel Design,
					New York Times, Times Journeys
					</li>
					<li>
					German Design Award, 2013
					Identity Design,
					Associated Press
					</li>
					<li>
					Red Dot 2014,
					Online Design,
					New York Times, Times Journeys
					</li>
					<li>
					Red Dot, 2012
					Identity Design,
					Associated Press
					</li>
					<li>
					W3 Awards 2014,
					Gold Winner
					New York Times, Times Journeys
					</li>
					<li>
					W3 Awards, 2012
					Website Design,
					Watson Adventures
					</li>
					<li>
					Davey Awards 2014,
					New York Times, Times Journeys
					</li>
				</ul>
			</div>
		</section>

	<?php endwhile; // end of the loop. ?>
		
<?php get_footer(); ?>
