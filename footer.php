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
				<ul class="site-footer__list list-unstyled">
					<li><a href="work" >Work</a></li>
					<li><a href="views">Views</a></li>
					<li><a href="about">About</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
				<ul class="site-footer__list list-unstyled">
					<li><a href="https://www.facebook.com/obsub" class="facebook social" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/ob_sub" class="twitter social" target="_blank">Twitter</a></li>
					<li><a href="https://dribbble.com/objectivesubject" class="dribble social" target="_blank">Dribbble</a></li>
				</ul>
				<ul  class="site-footer__list list-unstyled">
					<li><a href="#">Download Firm Profile (<span class="old-num ">5.5</span><span class="mini-caps">mb, pdf</span>)</a> </li>
				</ul>
				<ul class="site-footer__list list-unstyled">
					<li><span class="copyright">copyright &copy; <?php echo date('Y'); ?> objective subject</span></li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php if (defined('WP_DEBUG') && WP_DEBUG === true) : ?>
	<div class="media-size"></div>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2792624-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
