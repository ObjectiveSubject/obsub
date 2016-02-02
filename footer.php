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
			<div class="inner-container">
				<span class="copyright">copyright <i>&copy;</i> <?php echo date('Y'); ?> objective subject</span>
				<a href="#subscribe" class="subscribe">let us say hi, periodically</a>
				<form action="http://objectivesubject.createsend.com/t/r/s/djdjtk/" method="post" id="subForm" class="subscribe-form">
				    <div class="input-row">
				        <label for="fieldEmail" class="hide">Email</label>
				        <input id="fieldEmail" name="cm-djdjtk-djdjtk" type="email" placeholder="luke@skywalker.com" required />
				        <button type="submit">Press enter</button>
				    </div>
				</form>
				<a href="https://www.facebook.com/obsub" class="facebook social" target="_blank">facebook</a>
				<a href="https://twitter.com/ob_sub" class="twitter social" target="_blank">twitter</a>
				<a href="https://dribbble.com/objectivesubject" class="dribble social" target="_blank">dribble</a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<div class="media-size"></div>

<?php //if ( is_page( 'contact' ) ) : ?>
	<!-- <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.2/mapbox-gl.js'></script> -->
<?php //endif; ?>

<?php wp_footer(); ?>

</body>
</html>
