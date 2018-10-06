<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer class='pure-u-1 pure-u-md-3-4' id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>

		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
        <script src="/wp-content/themes/twentyfifteen/js/manifest.37a2ecbb1d1b7e6c9ada.js" type="text/javascript">
    </script>
    <script src="/wp-content/themes/twentyfifteen/js/linechart-vue.js" type="text/javascript">
    </script>
    <script src="/wp-content/themes/twentyfifteen/js/app.d5ba9fe98f9bc1cb104c.js" type="text/javascript">
    </script>
</body>
</html>
