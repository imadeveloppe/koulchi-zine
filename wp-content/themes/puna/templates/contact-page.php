<?php
	/**
	 *    contact-page.php
	 *    Contact page template of Puna
	 *  Template Name: Contact Page
	 */

	global $puna_opt;

	get_header();

?>
	<div id="contact-info-box" class="main-bg-color">
		<div class="inner-box container">
			<div class="contact-info-container clearfix">
				<div class="header-sec clear">
					<h2><?php echo puna_tm_title_effect( esc_html__( 'Contact Information', 'puna' ) ); ?></span></h2>
					<div
						class="subtitle"><?php esc_html_e( 'Please do not hesitate to contact me if you have any further questions.', 'puna' ) ?></div>
				</div>
				<div class="col-md-6 left-sec">
					<div class="desc"><?php echo esc_html( $puna_opt['opt-contact-text'] ); ?></div>
					<ul class="contact-info">
						<?php
							if ( ! empty( $puna_opt['opt-web-site-address'] ) )
							{
								echo '<li><i class="fa fa-map-marker"></i>' . esc_html( $puna_opt['opt-web-site-address'] ) . '</li>';
							}
							if ( ! empty( $puna_opt['opt-web-site-email'] ) )
							{
								echo '<li><i class="fa fa-envelope-o"></i>' . esc_html( $puna_opt['opt-web-site-email'] ) . '</li>';
							}
							if ( ! empty( $puna_opt['opt-web-site-phone'] ) )
							{
								echo '<li><i class="fa fa-phone"></i>' . esc_html( $puna_opt['opt-web-site-phone'] ) . '</li>';
							}
						?>
					</ul>
				</div>
				<div class="col-md-6 right-sec">
					<div id="map" data-marker="../assets/img/marker.png"></div>
				</div>
			</div>

			<div class="contact-form-container clearfix">
				<div class="header-sec clear">
					<h2><?php echo puna_tm_title_effect( esc_html__( 'Contact Form', 'puna' ) ); ?></h2>
					<div
						class="subtitle"><?php esc_html_e( 'Please fill the below form to send us an Email', 'puna' ) ?></div>
				</div>
				<?php
					if ( have_posts() )
					{
						global $puna_opt;
						while ( have_posts() )
						{
							the_post();
							the_content();
						}
					}
				?>
			</div>
		</div>
	</div>
<?php
	get_footer();