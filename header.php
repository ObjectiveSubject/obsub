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
<?php wp_head(); ?>
<?php if ( is_page( 'contact' ) || is_singular( 'case_study' ) ) : ?>
	<script src='https://www.google.com/recaptcha/api.js' async></script>
<?php endif ;?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2792624-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?> >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'obsub' ); ?></a>

	<header id="masthead" class="site-header <?php echo ( is_front_page() ) ? 'show-preview-menu' : ''; ?> " role="banner">

		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wordmark dark" rel="home"><span class="hide"><?php bloginfo( 'name' ); ?></span></a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wordmark light" rel="home"><span class="hide"><?php bloginfo( 'name' ); ?></span></a>
		</div>

		<a class="menu-toggle" href="#">
			<i class="top-line"></i>
			<i class="center-line"></i>
			<i class="bottom-line"></i>
			<span class="hide">menu</span>
		</a>

		<?php if ( is_front_page() ) : ?>
		<ul class="preview-nav list-unstyled hug">
			<li class="menu-item clear-left future-A hug">
				<span class="muted-link">case studies</span>
				<ul class="sub-menu list-unstyled hug">
				<?php $case_studies = get_posts( array( 'post_type'=>'case_study', 'posts_per_page'=>-1 ) );
				foreach ( $case_studies as $study ) : ?>
					<li class="menu-item case_study future-A hug <?php echo 'cs-' . $study->post_name; ?>">
						<a href="<?php echo '#'.$study->post_name; ?>" class="smooth-scroll text-color-link"><?php echo get_the_title($study->ID); ?></a>
					</li>
				<?php endforeach; ?>
				</ul>
			</li>
			<li class="menu-item future-A hug">
				<a href="#former-clients" class="smooth-scroll muted-link">clients</a>
			</li>
			<li class="menu-item page-profile future-A hug">
				<a href="<?php echo site_url('/profile'); ?>" class="muted-link">profile</a>
			</li>
			<li class="menu-item page-contact future-A hug">
				<a href="<?php echo site_url('/contact'); ?>" class="muted-link">contact</a>
			</li>
		</ul>
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation future-A" role="navigation">
			<div class="main-menu outer-container">
				<ul class="inner-container">
					<li class="menu-item case_study h2 hug">
						<span>case studies</span>
						<ul class="sub-menu">
							<?php $case_studies = get_posts( array( 'post_type'=>'case_study', 'posts_per_page'=>-1 ) );
							foreach ( $case_studies as $study ) : ?>
								<li class="menu-item sub-menu-item h2 hug <?php echo 'cs-' . $study->post_name; ?>">
									<a href="<?php echo get_the_permalink( $study->ID ); ?>"><?php echo get_the_title($study->ID); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="menu-item page-profile h2 hug">
						<a href="<?php echo site_url('/profile'); ?>">profile</a>
					</li>
					<li class="menu-item page-contact h2 hug">
						<a href="<?php echo site_url('/contact'); ?>">contact</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main-menu-scrim"></div>

	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo $post->post_name; ?>">
