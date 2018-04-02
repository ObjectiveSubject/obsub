<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package obsub
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-default" role="contentinfo">
		<div class="outer-container">

			<div class="inner-container">
				<p class="h1">Get our periodic email updates</p>
				<form id="subForm" class="js-cm-form" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="5B5E7037DA78A748374AD499497E309EB2458E90C43B586B223EEA4E239EEE513766D33A967F0A3CD89493E329D3A9FB70B520762DED60A2E37E3A8A03AB73DC">
					<div class="form-field align-md">
						<label for="fieldName" style="min-width:150px"><em>Your name</em></label>
						<input id="fieldName" name="cm-name" type="text" />
					</div>
					<div class="form-field align-md mt-nudge">
						<label for="fieldEmail" style="min-width:150px"><em>Email Address</em></label>
						<input id="fieldEmail" class="js-cm-email-input" name="cm-djdjtk-djdjtk" type="email" required /> 
					</div>
					<div class="mt-nudge text-right">
						<button class="js-cm-submit-button" type="submit">Subscribe &nbsp;&nbsp;&#8250;</button> 
					</div>
				</form>
				<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
			</div>

			<div class="inner-container mt-5">
				<ul class="site-footer__list list-unstyled">
					<li><a href="<?php echo site_url('work') ?>" >Work</a></li>
					<!-- <li><a href="<?php echo site_url('views') ?>">Views</a></li> -->
					<li><a href="<?php echo site_url('about') ?>">About</a></li>
					<li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
				</ul>
				<ul class="site-footer__list list-unstyled">
					<li><a href="https://www.facebook.com/obsub" class="facebook social" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/ob_sub" class="twitter social" target="_blank">Twitter</a></li>
					<li><a href="https://www.instagram.com/objectivesubject/" class="instagram social" target="_blank">Instagram</a></li>
				</ul>
				<ul  class="site-footer__list list-unstyled">
					<li><a href="<?php echo site_url('/wp-content/uploads/2018/03/Objective-Subject-Firm-Overview-Medium-2018.pdf') ?>" target="_blank">Download Firm Profile (<span class="old-num ">7.2</span><span class="mini-caps">mb, pdf</span>)</a> </li>
				</ul>
				<ul class="site-footer__list list-unstyled">
					<li><em class="copyright">Copyright &copy; <?php echo date('Y'); ?>, Objective Subject</em></li>
				</ul>
			</div>
		</div>

		<a href="#page" class="back-to-top button smooth-scroll">back to top &nbsp;&nbsp;<span class="rotate-cc-90">&#8250</span></a>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php if (defined('WP_DEBUG') && WP_DEBUG === true) : ?>
	<div class="media-size"></div>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).mt-1(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2792624-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
