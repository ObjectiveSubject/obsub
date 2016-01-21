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
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<blockquote>
		<p>"Blockquote."<br/><small>&mdash; John Doe, <em>Marketing Director</em></small></p>
	</blockquote>
</section>

<section id="process" class="page-section contain-content" style="background-color: #A6C9E2; padding-bottom: 100px;">
	<h2 class="future-A">process</h2>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</section>

<section id="solution" class="page-section contain-content" style="background-color: #A6C9E2; padding-bottom: 100px">	
	<h2 class="future-A">solution</h2>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<div class="colophon inner-container">
		<div class="details">
			<em>Details</em><br/>
			<em>Typography</em>: Avenir<br/>
			<em>Industry</em>: Public Sector, Start-Up<br/>
			<em>Team</em>: David Jalber-Gagnier, Sam Gray, Kirk Pettinga, Emma White
		</div>
	</div>
	<p class="future-A"><a href="http://www.discoverbps.org/" target="_blank">discoverbps.com/</a></p>
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
















