<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package obsub
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>

<!-- Lead Forensics -->
<script type=“text/javascript” src=“http://www.qlzn6i1l.com/js/142182.js” ></script>
<noscript><img alt=“” src=“http://www.qlzn6i1l.com/142182.png” style=“display:none;” /></noscript>
<!-- /Lead Forensics -->

<!-- Leady -->
<script type="text/javascript">
	var leady_track_key="Fp0r1i9plXHTcOOg";
	(function(){
		var l=document.createElement("script");l.type="text/javascript";l.async=true;
		l.src='https://t.leady.com/'+leady_track_key+"/L.js";
		var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(l,s);
	})();
</script>
<!-- /Leady -->

<?php if (is_page('contact') || is_singular('case_study')) : ?>
	<script src='https://www.google.com/recaptcha/api.js' async></script>
<?php endif ;?>
</head>

<body <?php body_class( os_get_body_class() ); ?> >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'obsub'); ?></a>

	<header id="masthead" class="site-header <?php echo (is_front_page()) ? 'show-preview-menu' : ''; ?> " role="banner">

		<div class="outer-container">

			<div class="site-title">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="wordmark dark" rel="home"><span class="hide"><?php bloginfo('name'); ?></span></a>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="wordmark light" rel="home"><span class="hide"><?php bloginfo('name'); ?></span></a>
			</div>


			<!-- <ul class="preview-nav list-unstyled mt-nudge">
				<li class="menu-item future-A mt-nudge">
					<a href="work" >work</a>
				</li>
				<li class="menu-item page-profile future-A mt-nudge">
					<a href="about">about</a>
				</li>
				<li class="menu-item page-contact future-A mt-nudge">
					<a href="contact">contact</a>
				</li> -->
				<?php wp_nav_menu(array('menu_class' => 'preview-nav future-A h3 list-unstyled mt-nudge')) ?>

		</div>

		<!-- <nav id="site-navigation" class="main-navigation future-A" role="navigation">
			<div class="main-menu outer-container">
				<ul class="inner-container">
					<li class="menu-item case_study h2 mt-nudge">
						<span>case studies</span>
						<ul class="sub-menu">
							<?php $case_studies = get_case_studies(array( 'orderby'=>'title' ));
                            foreach ($case_studies as $study) : ?>
								<li class="menu-item sub-menu-item h2 mt-nudge <?php echo 'cs-' . $study->post_name; ?>">
									<a href="<?php echo get_the_permalink($study->ID); ?>"><?php echo get_the_title($study->ID); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="menu-item page-profile h2 mt-nudge">
						<a href="<?php echo site_url('/profile'); ?>">profile</a>
					</li>
					<li class="menu-item page-contact h2 mt-nudge">
						<a href="<?php echo site_url('/contact'); ?>">contact</a>
					</li>
				</ul>
			</div>
		</nav> -->

		<div class="main-menu-scrim"></div>

	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo $post->post_name; ?>">
