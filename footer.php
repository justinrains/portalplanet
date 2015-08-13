<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package portalplanet
 */
?>

	</div><!-- #content -->
	</div><!-- .row -->
	<div class="row">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
          <?php dynamic_sidebar( 'footer-3' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>
	<div class="row">
	<footer id="colophon2" class="site-footer" role="contentinfo">
		<div class="site-info">
          <?php dynamic_sidebar( 'footer-2' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->
</div><!-- .container -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/search.min.js"></script>
<script>
jQuery(document).ready(function($) {
});
</script>
</body>
</html>
