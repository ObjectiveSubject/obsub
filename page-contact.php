<?php
/**
 * Page: Contact
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>

	<section id="about-intro" class="about-intro page-section">
	
		<div class="intro-content section-content">
			<div class="outer-container">

				<div class="os-row">
					<div class="os-column os-span-10-md os-span-6-lg os-offset-1-md os-offset-2-lg">
						<h1 class="h1 page-title"><?php the_title() ?></h1>
						<?php the_content() ?>
					</div>
				</div>

			</div>
		</div>
	
	</section>

	<div class="outer-container">

		<div class="os-row">
			<div class="os-column os-span-10-md os-span-6-lg os-offset-1-md os-offset-2-lg">
				<address class="h1">
					30 East 20<sup>th</sup> Street, 7<sup>th</sup> Floor<br/>New York, NY 10003<br/>
					<a href="tel:+12128639194">+1 212 863 9194</a><br/>
					<a href="mailto:info@objectivesubject.com" class="muted-link">info@objectivesubject.com</a>
				</address>
			</div>
		</div>

		<div class="os-row mt-4">
			<div class="os-column os-span-5-md os-span-4-lg os-offset-1-md os-offset-2-lg">
				<p>
					<em>New Business</em><br/>
					<a href="mailto:newbiz@objectivesubject.com" class="muted-link">newbiz@objectivesubject.com</a>
				</p>
			</div>
			<div class="os-column os-span-5-md os-span-4-lg">
				<p>
					<em>Employment</em><br/>
					<a href="mailto:work@objectivesubject.com" class="muted-link">work@objectivesubject.com</a>
				</p>
			</div>
		</div>

		<div class="grid mt-5">

			<img src="<?php echo os_path('contact-photo-1-bw.jpg', 'contact'); ?>" 
				 width="2048" height="1200" 
				 class="grid-item" />
			
			<img src="<?php echo os_path('contact-photo-2-bw.jpg', 'contact'); ?>" 
				 width="822"  height="1200" 
				 class="grid-item span-5-md" />
			
			<img src="<?php echo os_path('contact-photo-3-bw.jpg', 'contact'); ?>" 
				 width="1172" height="1200" 
				 class="grid-item span-7-md" />
			
			<img src="<?php echo os_path('contact-photo-4-bw.jpg', 'contact'); ?>" 
				 width="2048" height="1200" 
				 class="grid-item" />
			
			<img src="<?php echo os_path('contact-photo-5-bw.jpg', 'contact'); ?>" 
				 width="2048" height="1200" 
				 class="grid-item" />
			
			<img src="<?php echo os_path('contact-photo-6-bw.jpg', 'contact'); ?>" 
				 width="1002" height="1200" 
				 class="grid-item span-6-md" />
			
			<img src="<?php echo os_path('contact-photo-7-bw.jpg', 'contact'); ?>" 
				 width="883"  height="1057" 
				 class="grid-item span-6-md" />
			
			<img src="<?php echo os_path('contact-photo-8-bw.jpg', 'contact'); ?>" 
				 width="2048" height="1200" 
				 class="grid-item" />

		</div>

	</div>

<?php get_footer(); ?>
