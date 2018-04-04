<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package obsub
 */


get_header(); ?>



		<section class="page-header page-section full-height">
			<div class="section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1>Looks like we can't find what you're looking for, but...</h1>
						<p><img src="<?php echo os_path('pleaseclap.gif', '404') ?>" width="1600" height="1008" alt="Please Clap..."></p>

						<p><a class="button" href="/">home   ›</a></p>
					</div>
				</div>
			</div>
		</section>



<?php get_footer(); ?>
