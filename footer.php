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
				<a href="#" class="copyright">copyright & privacy information</a>
				<a href="#" class="subscribe">let us say hi, periodically</a>
				<a href="#" class="facebook social" target="_blank">facebook</a>
				<a href="#" class="twitter social" target="_blank">twitter</a>
				<a href="#" class="dribble social" target="_blank">dribble</a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<div class="media-size"></div>

<?php if ( is_page( 'contact' ) ) : ?>
	<!-- <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.2/mapbox-gl.js'></script> -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
