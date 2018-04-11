<?php
	// archive-agent.php
	// Puna Agent archive Page

	global $post;
	get_header();
?>


	<div id="agent-section" class="main-bg-color">
		<?php
			if ( have_posts() )
			{
				while ( have_posts() )
				{
					the_post();
					$agent_title             = get_post_meta( $post->ID, 'agent_title', true );
					$agent_email             = get_post_meta( $post->ID, 'agent_email', true );
					$agent_phone             = get_post_meta( $post->ID, 'agent_phone', true );
					$agent_fax               = get_post_meta( $post->ID, 'agent_fax', true );
					$agent_alignment         = get_post_meta( $post->ID, 'agent_alignment', true );
					$agent_contact_shortcode = get_post_meta( $post->ID, 'agent_shortcode', true );
					$agent_img               = ( get_the_post_thumbnail( $post->ID, 'full', 'alt=' . get_the_title() ) ? get_the_post_thumbnail( $post->ID, 'full', 'alt=' . get_the_title() ) : '<img src="' . PUNA_IMG_PATH . 'agent-placeholder.jpg' . '" alt="' . __( 'No Image', 'puna' ) . '" />' );
					echo '
						<div class="inner-container ' . ( ! empty( $agent_alignment ) ? 'right' : '' ) . ' container">';
					if ( empty( $agent_alignment ) )
					{
						echo '
								<div class="col-md-5 agent-img animated-box" data-animation="fadeInLeft">
									' . balancetags( $agent_img ) . '
								</div>
								';
					}
					echo '<div class="col-md-7 detail-info  animated-box" data-animation="fadeInRight">
								<div class="name">' . puna_tm_title_effect( esc_html( get_the_title() ) ) . '</div>
								<div class="title">' . esc_html( $agent_title ) . '</div>
								<div class="desc">' . get_the_content() . '</div>
								<div class="contact-info">
									<ul class="list-inline">
										' . ( ! empty( $agent_phone ) ? '<li><i class="fa fa-phone"></i>' . esc_html( $agent_phone ) . '</li>' : '' ) . '
										' . ( ! empty( $agent_fax ) ? '<li><i class="fa fa-fax"></i>' . esc_html( $agent_fax ) . '</li>' : '' ) . '
										' . ( ! empty( $agent_email ) ? '<li><i class="fa fa-envelope-o"></i>' . esc_html( $agent_email ) . '</li>' : '' ) . '
									</ul>
								</div>';
					if ( ! empty( $agent_contact_shortcode ) )
					{
						echo '
										<a href="#contact-agent-' . esc_attr( $post->ID ) . '" class="agent-contact-form-url contact-url">' . esc_html__( 'Contact Me', 'puna' ) . '</a>
										<div id="contact-agent-' . esc_attr( $post->ID ) . '" class="agent-contact-form mfp-hide">' . do_shortcode( $agent_contact_shortcode ) . '</div>
									';
					}

					echo '</div>';

					if ( ! empty( $agent_alignment ) )
					{
						echo '
								<div class="col-md-5 agent-img  animated-box" data-animation="fadeInLeft">
									' . balancetags( $agent_img ) . '
								</div>
							';
					}
					echo '</div>
					<div class="sep-line"></div>';
				}
			}
		?>
	</div>
<?php
	puna_tm_pagination();
	get_footer();