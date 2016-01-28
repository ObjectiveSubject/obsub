<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package obsub
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_page( 'contact' ) ) : ?>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.2/mapbox-gl.css' rel='stylesheet' />
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'obsub' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="outer-container"> -->
			
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wordmark dark" rel="home"><span class="hide"><?php bloginfo( 'name' ); ?></span></a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wordmark light" rel="home"><span class="hide"><?php bloginfo( 'name' ); ?></span></a>
			</div>

			<nav id="site-navigation" class="main-navigation future-A" role="navigation">
				<a class="menu-toggle" href="#">
					<i class="top-line"></i>
					<i class="center-line"></i>
					<i class="bottom-line"></i>
					<span class="hide">menu</span>
				</a>
				<ul class="main-menu list-unstyled">
					<?php $case_studies = get_posts( array( 'post_type'=>'case_study', 'posts_per_page'=>-1 ) );
					foreach ( $case_studies as $study ) :
						$img_id = get_post_thumbnail_id( $study->ID );
						$img_array = wp_get_attachment_image_src($img_id, 'thumbnail', true);
						$img_url = $img_array[0]; ?>
						<li class="menu-item h2 hug <?php echo 'cs-' . $study->post_name; ?>">
							<a href="<?php echo get_the_permalink( $study->ID ); ?>"><?php echo get_the_title($study->ID); ?></a>
							<div class="cs-thumb" style="background-image: url(<?php echo $img_url; ?>)"></div>
						</li>
					<?php endforeach; ?>
					<li class="menu-item h2 hug">
						<a href="<?php echo site_url('/about'); ?>">about</a>
					</li>
					<li class="menu-item h2 hug">
						<a href="<?php echo site_url('/contact'); ?>">contact</a>
					</li>
				</ul>
			</nav>

		<!-- </div> -->
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo $post->post_name; ?>">

















