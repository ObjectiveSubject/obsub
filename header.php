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

<body <?php body_class(); ?> data-hijacking="off" data-animation="gallery" >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'obsub' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="outer-container">
			
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>

			<nav id="site-navigation" class="main-navigation future-A" role="navigation">
				<a class="menu-toggle" href="#"><i class="center-line"></i><span class="hide">menu</span></a>
				<ul class="main-menu list-unstyled">
					<li class="menu-item">
						<a href="#">case studies</a>
						<ul class="sub-menu list-unstyled">
							<?php $case_studies = get_posts( array( 'post_type'=>'case_study', 'posts_per_page'=>-1 ) );
							foreach ( $case_studies as $study ) : ?>
							<li class="sub-menu-item">
								<a href="<?php echo get_the_permalink( $study->ID ); ?>"><?php echo get_the_title($study->ID); ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="menu-item">
						<a href="<?php echo site_url('/about'); ?>">about</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo site_url('/contact'); ?>">contact</a>
					</li>
				</ul>
			</nav>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo $post->post_name; ?>">

















