<?php
	/**
	 *    404.php
	 */
	get_header();
?>
	<div id="not-found-page" class="main-bg-color">
		<div class="inner-box container">
			<div class="header-sec">
				<h2><?php echo wp_kses( __( '<span>Sorry,</span> This page no longer exists.', 'puna' ), array( 'span' => array() ) ) ?></h2>
				<div
					class="subtitle"><?php echo sprintf( wp_kses( __( 'Would you like to go to <a href="%s">homepage</a> instead?', 'puna' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( home_url( '/' ) ) ) ?></div>
			</div>
			<!-- Search Box -->
			<div class="search-box">
				<form class="search-form" role="search" action="<?php echo esc_attr( site_url( '/' ) ); ?>">
					<label>
						<input type="search" class="search-field"
						       placeholder="<?php esc_html_e( 'Search …', 'puna' ); ?>" value="" name="s"
						       title="Search for:">
					</label>
					<input type="submit" class="search-submit" value="<?php esc_html_e( 'Search', 'puna' ); ?>">
				</form>
			</div>
		</div>
	</div>
<?php
	get_footer();