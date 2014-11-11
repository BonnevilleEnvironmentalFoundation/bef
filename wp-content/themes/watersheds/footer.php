<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 */
?>
	<div class="clear"></div>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		
		<div class="footer-nav">
			<?php wp_nav_menu( array( 'container_class' => 'footer-menu', 'theme_location' => 'secondary' ) ); ?>
		</div>
		
		<div class="footer-message">
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'footer-widget-area' ); ?>
		<?php endif; ?>
		</div>

	</div><!-- #footer -->

</div><!-- #wrapper -->
</div><!-- #base -->
<?php wp_footer(); ?>
<?php //require('environment.config.php'); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37862388-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
