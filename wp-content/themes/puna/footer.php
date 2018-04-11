<?php
	/**
	 * Footer.php
	 * The footer section of the theme
	 */
	global $puna_opt;
?>
<!-- Top Footer -->
<?php if ( is_active_sidebar( 'top-footer' ) ) : ?>
	<div id="top-footer">
		<div class="inner-container container">
			<?php
				/**
				 * Load the "Top Footer" sidebar
				 */
				dynamic_sidebar( "top-footer" );
			?>
		</div>
	</div>
<?php endif; ?>
	
<!-- End of Top Footer -->

<!-- Footer -->
<footer id="footer" class="main-bg-color">
	<div class="inner-box container">
		<?php
			if ( is_plugin_active( 'puna/puna.php' ) )
			{
				echo do_shortcode( '[puna-social-icons]' );
			}
		?>
		<div class="copyright">
			<?php
				/**
				 * Add the footer text which is set by user
				 */
				if ( isset( $puna_opt['opt-footer-text'] ) && $puna_opt['opt-footer-text'] !== '' )
				{
					echo esc_html( $puna_opt['opt-footer-text'] );
				}
			?>
		</div>
	</div>
</footer>
<!-- End of Footer -->
<?php
	if ( is_plugin_active( 'puna/puna.php' ) )
	{
		echo do_shortcode( '[puna-booking-form]' );
	}
?>
</div>
<?php wp_footer(); ?>

</body>
</html>