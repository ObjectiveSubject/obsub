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

	<footer id="colophon" class="site-footer future-A bg-default" role="contentinfo">
		<div class="outer-container">
			<div class="inner-container clearfix">
				<a href="#subForm" class="subscribe-toggle">let us say hi, periodically</a>
				<form action="http://objectivesubject.createsend.com/t/r/s/djdjtk/" method="post" id="subForm" class="subscribe-form">
				    <div class="input-row">
				        <label for="fieldEmail" class="hide">Email</label>
				        <input id="fieldEmail" name="cm-djdjtk-djdjtk" type="email" placeholder="luke@skywalker.com" required />
				        <button type="submit">Press enter</button>
				    </div>
				</form>
				<a href="https://www.facebook.com/obsub" class="facebook social" target="_blank">facebook</a>
				<a href="https://twitter.com/ob_sub" class="twitter social" target="_blank">twitter</a>
				<a href="https://dribbble.com/objectivesubject" class="dribble social" target="_blank">dribbble</a>
				<span class="copyright">copyright <i>&copy;</i> <?php echo date('Y'); ?> objective subject</span>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php if ( defined('WP_DEBUG') && WP_DEBUG === TRUE ) : ?>
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
