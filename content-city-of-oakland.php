<?php
	$featured_image_id = get_post_thumbnail_id();
	$featured_image_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
	$featured_image_url = $featured_image_array[0];
?>

<section class="page-header" style="background-image:url( <?php echo $featured_image_url; ?> )">
	<h1 class="page-title"><?php echo get_the_excerpt(); ?></h1>
	<p class="page-subtitle h3"><em>Visual identity</em> and <em>user interface</em> design for City of Oakland</p>
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
	<p class="push-double">Oakland, California is a diverse and dynamic community, with rapid change nearly a constant throughout its storied history. In order to deliver better services to that community, the City government is developing new strategies to deliver better experiences and services online. Working with Code for America on a new model of ‘Digital Front Door,’ the City understood the need for defining an ownable look and feel for everything it does as a government.</p>
	<p class="push-double">
		<strong>A Symbol</strong><br/>
		For many decades, a stylized oak tree has represented the city and its intertwined citizenry. In fact, the symbol has become so popular that many in the community embrace it to brand their store, organization, and even bodies. While such a wellspring of adoption is any community’s dream, this common use exposed the need for the City to differentiate its visual toolkit for communications. 
	</p>
	<blockquote>
		<p>"Oakland is like a tree. The trunk full of businesses with branches stretching into their own communities with their own cultures."<br/><small>&mdash; Kayla, Oakland Native, Chapter 510</small></p>
	</blockquote>
</section>

<section id="process" class="page-section contain-content" style="background-color: #E7F1CF; padding-bottom: 100px;">
	<figure class="alignnone hug">
		<img src="http://placehold.it/1200x275" width="1200" height="275">
		<figcaption>Artifacts from Oakland's Archives</figcaption>
	</figure>
	<p class="push-double">From our offices in Oakland, Objective Subject recommended a concerted approach to visual communication that aims to unify all city departments and allows the city to define a recognizable look and feel throughout its communications, digital and otherwise.[c] The current cacophony of symbols does not connote the clarity and simplicity that should be the hallmark of any experience with a large organization, but so often is not.</p>
	<h2 class="future-A">process</h2>
	<p class="push-double">With any project, we first perform in-depth research and a far-reaching visual audit. In the City’s Archives, we were able to trace the original use of the symbol to the early 1970s. Throughout its history, it has received few tweaks, and retains a special kind of beauty which we were keen to preserve. But with its high recognition and unique properties, there were still various issues with the mark, especially how it rendered in smaller contexts. We collaborated with type designer Jesse Ragan to treat the symbol as a character and give it better optical legibility.</p>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x600?text=interactive+element" width="1200" height="600" />
		<figcaption>Oakland’s tree, before and after</figcaption>	
	</figure>
	<p>As we defined the color scheme, we wanted to help Oakland break through the clutter of commercial activity by giving it a clear and bold look. We paired a dominant color, an energetic green hue with a range of rich hues in complement.</p>
	<figure class="aligncenter">
		<img src="http://placehold.it/850x600" width="850" height="600">
		<figcaption>City of Oakland Brochures</figcaption>
	</figure>
	<p>The City should be able to modulate its expression without always having to resort to the blunt use of the logo. To address, we created a pattern that takes after[g] the tree logo, but grows it into a full root system, as complex and rich as are the communities and network that support the city. The pattern can then be applied to different elements in more overt or more subtle ways, based on what the context calls for.</p>
</section>

<section id="solution" class="page-section contain-content" style="background-color: #E0F3F2; padding-bottom: 100px">
	<figure class="alignnone hug">
		<img src="http://placehold.it/1200x400" width="1200" height="400" />
		<figcaption>Root system</figcaption>	
	</figure>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x600?text=slideshow" width="1200" height="600" />
		<figcaption>City of Oakland Homepage</figcaption>	
	</figure>
	<h2 class="future-A">solution</h2>
	<p class="push-double">The pattern portfolio we built is now being used by Code for America as it conducts agile design and development of various new services for the city, visible in this Beta website.</p>
	<p class="push-double">In the same spirit of open development, the portfolio library is publicly available, and joined with a design toolkit created to support designers, agencies and civil servants in creating material to fit the new visual identity. We will keep supporting the city as it works to improve the quality of its communication with citizens from our west coast office.</p>
	<figure class="alignnone">
		<img src="http://placehold.it/1200x600?text=slideshow" width="1200" height="600" />
		<figcaption>City of Oakland Design Toolkit</figcaption>	
	</figure>
	<p class="colophon">
		<em>Details</em><br/>
		<em>Typography</em>: Fakt Pro (1966, Wilhelm Pischner)<br/>
		<em>Industry</em>: Public Sector<br/>
		<em>Team</em>: David Jalber-Gagnier, Elliot Arthur, Kirk Pettinga, Andrew Mowe
	</p>
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

<section class="page-section contain-content">
	<h2><em>What can we do for your project?</em></h2>
	<p class="h2 hug future-A"><a href="#" class="text-color-link">get in touch</a></p>
</section>
















