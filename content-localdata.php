<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<h1 class="page-title"><?php echo get_the_excerpt(); ?></h1>
	<p class="page-subtitle h3"><em>Visual identity</em> and <em>user interface</em> design for LocalData</p>
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
	<p>If cities and towns across the country are to thrive in the decades ahead, the detailed, parcel-level data that community groups, planners and government agencies collect needs to be transformed.</p>
	<p>When three eager technologists were embedded in the Detroit city government as part of their Code for America fellowship, they knew they had their work cut out for them.</p>
	<ol>
		<li>They saw Detriot as the vast sprawling city.</li>
		<li>Looking for the best opportunities to use technology.</li>
		<li>Outdated surveys providing inadequate data for informed decisions, was a major issue.</li>
		<li>Surveying was a time and resources-intensive process involving paper forms, content-entry errors and many months to plot an area.</li>
	</ol>
	<blockquote>
		<p>"They saw detroit, the vast sprawling city, and the outdated surveys providing inadequate data for informed decisions, as a major issue."<br/><small>&mdash; Susan Johnson, <em>Marketing Director</em>, <em>LocalData</em></small></p>
	</blockquote>
</section>

<section id="process" class="page-section contain-content" style="background-color: #FFEAC4; padding-bottom: 100px;">
	<figure class="alignnone hug">
		<img src="http://placehold.it/1200x450" width="1200" height="450">
		<figcaption>Inspiration</figcaption>
	</figure>
	<h2 class="future-A">process</h2>
	<p class="push">We worked with LocalData’s team to streamline the visual communication of their offering. The fully configureable nature of the product and its emphasis on geolocation technology is revealed in the compass arrow icon, which was inspired by the Tinker Toys from our youth, embodying the spirit of a set of tools with limitless possibilities. The elemental color set further emphasizes the simplicity that is at the core of the value proposition.</p>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x330" width="1200" height="330" />
		<figcaption>The LocalData Wordmark</figcaption>	
	</figure>
	<p>We further helped the team design a product interface with an emphasis on clear and bold information communication, highlighting key data points with large and crisp typography.</p>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x600?text=Slideshow" width="1200" height="600">
		<figcaption>The LocalData Tool Landing</figcaption>
	</figure>
</section>

<section id="solution" class="page-section contain-content" style="background-color: #FFEAC4; padding-bottom: 100px">	
	<h2 class="future-A">solution</h2>
	<p class="push">The same logic applies to design of other communication, such as the website, where data points explain how Local Data has already helped a host of other cities, from Lynn, Massachusetts, to Gary, Indiana.</p>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x600?text=Slideshow" width="1200" height="600">
		<figcaption>The LocalData Homepage</figcaption>
	</figure>
	<figure class="aligncenter">
		<img src="http://placehold.it/1024x680" width="1024" height="680">
		<figcaption>LocalData Stationery</figcaption>
	</figure>
	<div class="colophon inner-container">
		<div class="details">
			<em>Details</em><br/>
			<em>Typography</em>: Neuzeit (1966, Wilhelm Pischner)<br/>
			<em>Industry</em>: Public Sector, Start-Up<br/>
			<em>Team</em>: David Jalber-Gagnier, Sam Gray, Emma White, Jessica Wilson
		</div>
		<div class="awards">
			<span class="icon-trophy">[trophy]</span><br/>
			<em>Red dot award</em>: Best Design Interface<br/>
			<em>D&AD</em>: Website Award<br/>
			<em>Webby</em>: Commended<br/>
			<em>W3</em>: Special Mention
		</div>
	</div>
	<p class="future-A"><a href="http://localdata.com" target="_blank">localdata.com</a></p>
</section>


<?php 
$case_studies = get_posts(array(
	'post_type'=>'case_study', 
	'orderby' => 'rand', 
	'posts_per_page' => '1',
	'post__not_in' => array( get_the_id() )
)); 
foreach ($case_studies as $study) : ?>
<section class="page-section contain-content case-study-nav bg-<?php echo $study->post_name; ?>">
	<h1><?php echo $study->post_excerpt; ?></h1>
	<p class="hug"><em>Visual identity</em> and <em>interface design</em> for <?php echo get_the_title( $study->ID ); ?></p>
</section>
<?php endforeach; ?>


<?php get_template_part( 'module', 'get-in-touch' ); ?>
















