<?php

	/**
	 * Ravis Short code Class
	 */
	class Puna_plugin_shortcode
	{

		function __construct()
		{
			add_action( 'init', array( $this, 'init' ) );

		}

		/**
		 * Add all the puna Shortcodes to the theme
		 */
		public function init()
		{
			add_shortcode( 'puna-main-slider', array( $this, 'puna_main_slider' ) );
			add_shortcode( 'puna-testimonials', array( $this, 'puna_testimonials' ) );
			add_shortcode( 'puna-attractions', array( $this, 'puna_attractions' ) );
			add_shortcode( 'puna-social-icons', array( $this, 'ravis_social_icon' ) );
			add_shortcode( 'puna-main-gallery', array( $this, 'puna_main_gallery' ) );
			add_shortcode( 'puna-agent', array( $this, 'puna_agent' ) );
			add_shortcode( 'puna-property-highlight', array( $this, 'puna_property_highlight' ) );
			add_shortcode( 'puna-amenities', array( $this, 'puna_amenities' ) );
			add_shortcode( 'puna-services', array( $this, 'puna_services' ) );
			add_shortcode( 'puna-clients', array( $this, 'puna_clients' ) );
			add_shortcode( 'puna-video-tour', array( $this, 'puna_video_tour' ) );
			add_shortcode( 'puna-slide-show', array( $this, 'puna_slide_show' ) );
			add_shortcode( 'puna-contact', array( $this, 'puna_contact' ) );
			add_shortcode( 'puna-property-specs', array( $this, 'puna_property_specs' ) );
			add_shortcode( 'puna-text-section', array( $this, 'puna_text_section' ) );
			add_shortcode( 'puna-booking-overview', array( $this, 'puna_booking_overview' ) );
			add_shortcode( 'puna-booking-form', array( $this, 'puna_booking_form' ) );

			add_filter( 'widget_text', 'do_shortcode' );
		}


		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the main image slider
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_main_slider( $attr )
		{
			global $puna_opt;
			$puna_main_slider_code = '';

			
				$puna_main_slider_code .= '<div id="main-slider">'; 
				$args = array(
					'post_type' => 'sliders', 
			    	'posts_per_page' => -1,   
	          		'order'=> "ASC"
				); 
				$slide_loop = new WP_Query( $args );
				if ( $slide_loop->have_posts() ) :
				    while ( $slide_loop->have_posts() ) : 
				    	$slide_loop->the_post(); 
				    		$puna_main_slider_code .= '
							<div class="items">
								<div class="img-container" data-bg-img="' . get_field('image').'"></div>
								<div class="slide-caption container">
									<a href="' . get_field('url') . '">
										<span class="title">' . get_the_title() . '</span>
										<span class="subtitle">' . get_field('sous-titre') . '</span>
										<span class="corner-box"></span>
									</a>
								
								</div>
							</div>';
				    endwhile;
				    wp_reset_postdata();
				endif;

			$puna_main_slider_code .= '</div>'; 
			if($puna_main_slider_code) return balancetags( $puna_main_slider_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the testimonials section ( with slider )
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_testimonials( $attr )
		{
			global $post, $puna_opt;

			/**
			 * Testimonial's Attribute
			 */
			$puna_testimonials_attr = shortcode_atts( array(
				'title' => esc_html__( 'Testimonials', 'puna' ),
				'count' => 4
			), $attr );

			/**
			 * Generate the Query for getting the posts
			 * @var array $args
			 */
			$args              = array(
				'post_type'      => 'testimonials',
				'post_status'    => 'publish',
				'order'          => 'DESC',
				'orderby'        => 'date',
				'posts_per_page' => $puna_testimonials_attr['count']
			);
			$puna_testimonials = new WP_Query( $args );
			$puna_testimonials_code = '';

			/**
			 * Loading post for making the testimonials
			 */
			if ( $puna_testimonials->have_posts() ) {
				/**
				 * Generating the testimonials HTML codes
				 * @var string     puna_testimonials_code
				 */

				$puna_testimonials_bg   = ! empty( $puna_opt['opt-testimonial-bg']['url'] ) ? $puna_opt['opt-testimonial-bg']['url'] : '';
				$puna_testimonials_code = '
				<div id="testimonials-section" data-parallax="scroll" data-image-src="' . ( $puna_testimonials_bg ? esc_attr( $puna_testimonials_bg ) : PUNA_IMG_PATH . 'testimonails.jpg' ) . '">
					<div class="inner-container container">
						<div class="header-sec">
							<h2>' . puna_tm_title_effect( esc_html( $puna_testimonials_attr['title'] ) ) . '</h2>
						</div>
						<div class="owl-carousel owl-theme">';
				while ( $puna_testimonials->have_posts() ) {
					$puna_testimonials->the_post();

					$puna_testimonials_code .= '
							<div class="item">
				                <div class="user">' . puna_tm_title_effect( esc_html( get_the_title() ) ) . '</div>
				                <div class="text">' . esc_html( get_the_content() ) . '</div>
				            </div>';
				}
				wp_reset_postdata();

				$puna_testimonials_code .= '</div>
					</div>
				</div>';

			} else {
				// no posts found
				$puna_testimonials_code = esc_html__( 'There is not any testimonials', 'puna' );
			}

			/**
			 * Restore original Post Data
			 */
			

			if($puna_testimonials_code) return balancetags( $puna_testimonials_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the attractions section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_attractions( $attr )
		{
			global $post, $puna_opt;

			/**
			 * Testimonial's Attribute
			 */
			$puna_attractions_attr = shortcode_atts( array(
				'title'     => esc_html__( '', 'puna' ),
				'sub_title' => esc_html__( 'test', 'puna' ),
				'count'     => 4
			), $attr );

			/**
			 * Generate the Query for getting the posts
			 * @var array $args
			 */
			$args             = array(
				'post_type'      => 'attraction',
				'post_status'    => 'publish',
				'order'          => 'DESC',
				'orderby'        => 'date',
				'posts_per_page' => $puna_attractions_attr['count']
			);
			$puna_attractions = new WP_Query( $args );
			$puna_attractions_code = '';
			/**
			 * Loading post for making the attractions
			 */
			if ( $puna_attractions->have_posts() ) {
				/**
				 * Generating the attractions HTML codes
				 * @var string     puna_attractions_code
				 */

				$puna_attractions_code = '
				<div id="attraction-section" class="main-bg-color">
					<div class="inner-box container">
						<div class="header-sec">
							<h2>' . puna_tm_title_effect( esc_html( $puna_attractions_attr['title'] ) ) . '</h2>
							<div class="subtitle">' . esc_html( $puna_attractions_attr['sub_title'] ) . '</div>
						</div>
						<div class="attraction-container clearfix">
					';

					while ( $puna_attractions->have_posts() ) {
					$puna_attractions->the_post();
					$postID          = $puna_attractions->ID;
					$attractions_img = get_the_post_thumbnail( $postID, '', '' );

					$puna_attractions_code .= '
					<div class="attraction-box col-md-6 animated-box" data-animation="fadeInRight">
						<div class="inner-box">
							<a href="' . esc_url( get_the_permalink() ) . '" class="img-container">' . $attractions_img . '</a>
							<h3 class="title"><a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></h3>
							<div class="desc">' . balancetags( get_the_content() ) . '</div>
						</div>
					</div>
					';
				}
				wp_reset_postdata();

				$puna_attractions_code .= '
							<a href="' . esc_url( get_post_type_archive_link( 'attraction' ) ) . '" class="btn more-attraction">'.esc_html__('More', 'puna').'</a>
						</div>
					</div>
				</div>
				';

			} else {
				// no posts found
				$puna_attractions_code = esc_html__( 'There is not any attractions', 'puna' );
			}

			/**
			 * Restore original Post Data
			 */
			

			if($puna_attractions_code) return balancetags( $puna_attractions_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Social icons
		 * ------------------------------------------------------------------------------------------
		 */
		function ravis_social_icon( $attr )
		{
			global $puna_opt;

			/**
			 * Service Slider's Attribute
			 */
			$puna_social_icon_attr = shortcode_atts( array(
				'id'    => 'social-icons',
				'print' => false
			), $attr );


			$shocial_icons_codes = '<ul class="list-inline list-unstyled social-icons">';
			if ( isset( $puna_opt['opt-social-twitter'] ) and trim( $puna_opt['opt-social-twitter'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-twitter'] ) . '" class="ravis-icon-twitter"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-facebook'] ) and trim( $puna_opt['opt-social-facebook'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-facebook'] ) . '" class="ravis-icon-facebook"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-gplus'] ) and trim( $puna_opt['opt-social-gplus'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-gplus'] ) . '" class="ravis-icon-google-plus"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-flickr'] ) and trim( $puna_opt['opt-social-flickr'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-flickr'] ) . '" class="ravis-icon-flickr"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-rss'] ) and trim( $puna_opt['opt-social-rss'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-rss'] ) . '" class="ravis-icon-rss"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-vimeo'] ) and trim( $puna_opt['opt-social-vimeo'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-vimeo'] ) . '" class="ravis-icon-vimeo"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-youtube'] ) and trim( $puna_opt['opt-social-youtube'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-youtube'] ) . '" class="ravis-icon-youtube"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-pinterest'] ) and trim( $puna_opt['opt-social-pinterest'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-pinterest'] ) . '" class="ravis-icon-pinterest"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-tumblr'] ) and trim( $puna_opt['opt-social-tumblr'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-tumblr'] ) . '" class="ravis-icon-tumblr"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-dribbble'] ) and trim( $puna_opt['opt-social-dribbble'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-dribbble'] ) . '" class="ravis-icon-dribbble"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-digg'] ) and trim( $puna_opt['opt-social-digg'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-digg'] ) . '" class="ravis-icon-digg"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-linkedin'] ) and trim( $puna_opt['opt-social-linkedin'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-linkedin'] ) . '" class="ravis-icon-linkedin"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-blogger'] ) and trim( $puna_opt['opt-social-blogger'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-blogger'] ) . '" class="ravis-icon-blogger"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-skype'] ) and trim( $puna_opt['opt-social-skype'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-skype'] ) . '" class="ravis-icon-skype"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-forrst'] ) and trim( $puna_opt['opt-social-forrst'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-forrst'] ) . '" class="ravis-icon-forrst"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-deviantart'] ) and trim( $puna_opt['opt-social-deviantart'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-deviantart'] ) . '" class="ravis-icon-deviantart"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-yahoo'] ) and trim( $puna_opt['opt-social-yahoo'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-yahoo'] ) . '" class="ravis-icon-yahoo"></a></li>';
			endif;
			if ( isset( $puna_opt['opt-social-reddit'] ) and trim( $puna_opt['opt-social-reddit'] ) !== '' ):
				$shocial_icons_codes .= '<li><a href="' . esc_url( $puna_opt['opt-social-reddit'] ) . '" class="ravis-icon-reddit"></a></li>';
			endif;

			$shocial_icons_codes .= '</ul>';

			if ( ( ! isset( $puna_social_icon_attr['print'] ) or $puna_social_icon_attr['print'] == false ) && $shocial_icons_codes != '' ) {
				return '<div class="social-icons"><div class="social-icons-box" ' . ( isset( $puna_social_icon_attr['id'] ) && $puna_social_icon_attr['id'] !== '' ? 'id="' . esc_attr( $puna_social_icon_attr['id'] ) . '"' : '' ) . '>' . balancetags( $shocial_icons_codes ) . '</div></div>';
			} else {
				if ( $shocial_icons_codes != '' ) {
					echo '<div class="social-icons"><div class="social-icons-box" ' . ( isset( $puna_social_icon_attr['id'] ) && $puna_social_icon_attr['id'] !== '' ? 'id="' . esc_attr( $puna_social_icon_attr['id'] ) . '"' : '' ) . '>' . balancetags( $shocial_icons_codes ) . '</div></div>';
				}
			}
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the main Gallery
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_main_gallery( $attr )
		{
			global $puna_opt;

			/**
			 * Main Gallery's Attribute
			 */
			$puna_main_gallery_attr = shortcode_atts( array(
				'title'       => esc_html__( 'Our Gallery', 'puna' ),
				'sort_option' => $puna_opt['puna-gallery-sort'],
				'img_count'   => 9
			), $attr );


			$puna_main_gallery_code = $sort_options = $sort_options_li = $img_list_class = '';
			$gallery_items_id       = isset( $puna_opt["puna-main-gallery"] ) ? explode( ',', $puna_opt["puna-main-gallery"] ) : '';

			
				$puna_main_gallery_code .= '
				<div id="gallery-section" class="main-bg-color">';
				if ( isset( $puna_main_gallery_attr['title'] ) && $puna_main_gallery_attr['title'] != '' ) {
					$puna_main_gallery_code .= '
					<div class="header-sec">
						<h2>' . puna_tm_title_effect( esc_html( $puna_main_gallery_attr['title'] ) ) . '</h2>
					</div>';
				}

				

					// foreach ( $sort_options as $sort_options_list ) {
					// 	if ( $sort_options_list === 'All' ) {
					// 		$sort_options_li .= '<li><a href="#" data-filter="*" class="active">' . esc_html__( 'All', 'puna' ) . '</a></li>';
					// 	} else {
					// 		$sort_options_li .= '<li><a href="#" data-filter=".' . esc_attr( str_replace( ' ', '-', trim( strtolower( $sort_options_list ) ) ) ) . '">' . esc_html__( $sort_options_list, 'puna' ) . '</a></li>';
					// 	}
					// }
					// ************category gallery******
						$taxonomy = 'categorie_galerie';
						$terms = get_terms($taxonomy, array(
						   'order' => 'DESC',
						) ); 
						 if ( $terms && !is_wp_error( $terms ) ) :
							foreach ( $terms as $term ) : 
							
							$sort_options_li .= '<li><a href="#" data-filter=".'.  $term->name  .'"> '. $term->name .'</a></li>';
						
							endforeach;
						endif;
					// ******************
					$puna_main_gallery_code .= '<div class="gallery-container container">
						<div class="sort-section">
							<div class="sort-section-container">
								<div class="sort-handle">' . esc_html__( 'Filters', 'puna' ) . '</div>
								<ul class="list-inline">
									<li><a href="#" data-filter="*" class="active">' . esc_html__( 'All', 'puna' ) . '</a></li>
									' . $sort_options_li . '
								</ul>
							</div>
						</div>
						<ul class="image-main-box clearfix">';
					// ********************get gallery with acf*******************
						$args = array(
							'post_type' => 'galerie', 
					    	'posts_per_page' => -1,   
						    'orderby'=>'meta_value_num',
			          		'order'=> "ASC"
						); 
						$posts_loop = new WP_Query( $args );
						if ( $posts_loop->have_posts() ) :
						    while ( $posts_loop->have_posts() ) : 
						    	$posts_loop->the_post();

						    	$terms = wp_get_post_terms( get_the_ID(), 'categorie_galerie'); 
								if ($terms[0]->parent>0){
									get_term_by('id', $terms[0]->parent, 'categorie_galerie')->name;
								}
								$puna_main_gallery_code .= '
									<li class="item col-xs-6 col-md-4 ' . $terms[0]->name . '">
										<figure>
											<img src="' . get_field('image') . '" alt="11"/>
											<a href="' . get_field('image') . '" class="more-details" data-title="' . $terms[0]->name  . '"></a>
											<figcaption>
												<h3>' . puna_tm_title_effect( get_the_title() ) . '</h3>
											</figcaption>
										</figure>
									</li>';


							endwhile; 
							wp_reset_postdata() ;
						    
						endif; 


					// ***********************************************************
					// $img_i = 1;
					// foreach ( $gallery_items_id as $gallery_item_id ) {
					// 	if ( isset( $puna_main_gallery_attr['img_count'] ) && $puna_main_gallery_attr['img_count'] != '' ) {
					// 		if ( $img_i > $puna_main_gallery_attr['img_count'] ) {
					// 			continue;
					// 		}
					// 	}
					// 	$image = get_post( intval( $gallery_item_id ) );

					// 	$puna_main_gallery_code .= '
					// 		<li class="item col-xs-6 col-md-4 ' . ( isset( $image->post_content ) && $image->post_content !== '' ? esc_attr( str_replace( ' ', '-', trim( strtolower( $image->post_content ) ) ) ) : '' ) . '">
					// 			<figure>
					// 				<img src="' . esc_url( $image->guid ) . '" alt="11"/>
					// 				<a href="' . esc_url( $image->guid ) . '" class="more-details" data-title="' . esc_attr__( $image->post_title, 'puna' ) . '"></a>
					// 				<figcaption>
					// 					<h3>' . puna_tm_title_effect( esc_html__( $image->post_title, 'puna' ) ) . '</h3>
					// 				</figcaption>
					// 			</figure>
					// 		</li>';
					// 	$img_i ++;
					// }
					$puna_main_gallery_code .= '</ul>';

					$puna_main_gallery_code .= '</div>';
				
				$puna_main_gallery_code .= '</div>';
			
			/**
			 * Restore original Post Data
			 */
			wp_reset_postdata();

			if($puna_main_gallery_code) return balancetags( $puna_main_gallery_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Agent Section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_agent( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna agent's Attribute
			 */
			$puna_agent_attr = shortcode_atts( array(
				// Type can be "single" or "archive" default value is "archive"
				// In single type agent_id must be filled
				// In archive type count of agents must be added ( default value is 2 )
				'type'     => 'archive',
				'count'    => 2,
				'agent_id' => ''

			), $attr );
			$puna_agent_code = '';

			if ( isset( $puna_agent_attr['type'] ) && $puna_agent_attr['type'] == 'single' ) {

				if ( isset( $puna_agent_attr['agent_id'] ) and $puna_agent_attr['agent_id'] !== '' ) {
					$args             = array(
						'post_type'   => 'agent',
						'post_status' => 'publish',
						'order'       => 'DESC',
						'orderby'     => 'date',
						'p'           => $puna_agent_attr['agent_id']
					);
					$puna_agent_query = new WP_Query( $args );
				} else {
					$puna_agent_code = esc_html__( 'Please add the agent ID.', 'puna' );
				}
			} else {
				$args             = array(
					'post_type'      => 'agent',
					'post_status'    => 'publish',
					'order'          => 'DESC',
					'orderby'        => 'date',
					'posts_per_page' => $puna_agent_attr['count']
				);
				$puna_agent_query = new WP_Query( $args );
			}

			// Agent Loop
			if ( isset( $puna_agent_query ) && $puna_agent_query->have_posts() ) {
				$puna_agent_code = '<div id="agent-section">';
				while ( $puna_agent_query->have_posts() ) {
					$puna_agent_query->the_post();

					$postID                  = get_the_id();
					$agent_email             = get_post_meta( $postID, 'agent_email', true );
					$agent_title             = get_post_meta( $postID, 'agent_title', true );
					$agent_img               = get_the_post_thumbnail( $postID, '', '' );
					$agent_phone             = get_post_meta( $postID, 'agent_phone', true );
					$agent_fax               = get_post_meta( $postID, 'agent_fax', true );
					$agent_alignment         = get_post_meta( $postID, 'agent_alignment', true );
					$agent_contact_shortcode = get_post_meta( $postID, 'agent_shortcode', true );

					$puna_agent_code .= '
						<div class="inner-container ' . ( ! empty( $agent_alignment ) ? 'right' : '' ) . ' container">';
					if ( empty( $agent_alignment ) ) {
						$puna_agent_code .= '
								<div class="col-md-5 agent-img animated-box" data-animation="fadeInLeft">
									' . balancetags( $agent_img ) . '
								</div>
								';
					}
					$puna_agent_code .= '<div class="col-md-7 detail-info animated-box" data-animation="'.(empty( $agent_alignment ) ? esc_attr( 'fadeInRight' ) : esc_attr( 'fadeInLeft' ) ).'">
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

					if(!empty($agent_contact_shortcode)){
						$puna_agent_code .= '
							<a href="#contact-agent-'.esc_attr($postID).'" class="agent-contact-form-url contact-url">'.esc_html__('Contact Me', 'puna').'</a>
							<div id="contact-agent-'.esc_attr($postID).'" class="agent-contact-form mfp-hide">'.do_shortcode($agent_contact_shortcode).'</div>
						';
					}

					$puna_agent_code .='</div>';
					if ( ! empty( $agent_alignment ) ) {
						$puna_agent_code .= '
									<div class="col-md-5 agent-img animated-box" data-animation="fadeInRight">
										' . balancetags( $agent_img ) . '
									</div>
								';
					}
					$puna_agent_code .= ' </div >
					<div class="sep-line" ></div > ';


				}
				wp_reset_postdata();
				$puna_agent_code .= '</div > ';
				
			} else {
				empty( $puna_agent_code ) ? $puna_agent_code = esc_html__( 'There is no agent to show. ', 'puna' ) : '';
			}

			// End of Agent Loop

			if($puna_agent_code) return balancetags( $puna_agent_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Property Highlights Slider
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_property_highlight( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna property highlight's Attribute
			 */
			$puna_property_highlight_attr = shortcode_atts( array(
				'title'    => esc_html__( 'Property Highlights', 'puna' ),
				'subtitle' => esc_html__( 'List of great property highlights', 'puna' ),
				'count'    => 5,
			), $attr );

			$puna_property_highlight_code = '
			<div id="property-highlights-section" class="main-bg-color">
		        <div class="header-sec">
					<h2>' . puna_tm_title_effect( esc_html( $puna_property_highlight_attr['title'] ) ) . '</h2>
					<div class="subtitle">' . esc_html( $puna_property_highlight_attr['subtitle'] ) . '</div>
				</div>
				<div id="highlights-box" class="owl-carousel owl-theme">';

			// $amenity_i = 1;
			// if(!empty($puna_opt['puna-property-highlights'])){
			// 	foreach ( $puna_opt['puna-property-highlights'] as $highlight_item ) {

			// 		if ( isset( $puna_property_highlight_attr['count'] ) && $puna_property_highlight_attr['count'] != '' ) {
			// 			if ( $amenity_i > $puna_property_highlight_attr['count'] ) {
			// 				continue;
			// 			}
			// 		}
			// 		$puna_property_highlight_code .= '
			// 			<div class="item">
			//                 <div class="img-container">
			//                     <img src="' . ( ! empty( $highlight_item['image'] ) ? esc_url( $highlight_item['image'] ) : PUNA_IMG_PATH . 'highlights-placeholder.jpg' ) . '" alt="' . esc_html( $highlight_item['title'] ) . '">
			//                 </div>
			//                 <div class="bottom-sec">
			// 	                <div class="title">' . puna_tm_title_effect( esc_html__( $highlight_item['title'], 'puna' ) ) . '</div>
			// 	                <div class="short-desc">' . esc_html__( $highlight_item['description'], 'puna' ) . '</div>
			// 	            </div>
			//             </div>
			// 		';
			// 		$amenity_i ++;
			// 	}
			// }
						$args = array(
							'post_type' => 'blocs_promos', 
					    	'posts_per_page' => -1,   
						    'orderby'=>'meta_value_num',
			          		'order'=> "ASC"
						); 
						$posts_loop = new WP_Query( $args );
						if ( $posts_loop->have_posts() ) :
						    while ( $posts_loop->have_posts() ) : 
						    	$posts_loop->the_post();  
									$puna_property_highlight_code .= '
										<div class="item">
							                <div class="img-container">
							                    <img src="' . get_field('image') .'" alt="">
							                </div>
							                <div class="bottom-sec">
								                <div class="title">' . puna_tm_title_effect(get_the_title()) . '</div>
								                <div class="short-desc">' . get_field('description') . '</div>
								            </div>
							            </div>
									';
							endwhile ; 
							wp_reset_postdata();
						endif; 


			$puna_property_highlight_code .= '</div>
		    </div>';

			// End of Agent Loop

			if($puna_property_highlight_code) return balancetags( $puna_property_highlight_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Amenities
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_amenities( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna property highlight's Attribute
			 */
			$puna_amenities_attr = shortcode_atts( array(
				'title' => esc_html__( 'Our Amenities', 'puna' ),
				'count' => 9,
			), $attr );

			$args                 = array(
				'post_type'      => 'amenities',
				'post_status'    => 'publish',
				'order'          => 'DESC',
				'orderby'        => 'date',
				'posts_per_page' => $puna_amenities_attr['count']
			);
			$puna_amenities_query = new WP_Query( $args );
			$puna_amenities_code = '';
			if ( isset( $puna_amenities_query ) && $puna_amenities_query->have_posts() ) {
				$puna_amenities_code = '
				<div id="amenities-section" class="main-bg-color">
					<div class="inner-box container">
						<div class="header-sec">
							<h2>' . puna_tm_title_effect( esc_html( $puna_amenities_attr['title'] ) ) . '</h2>
						</div>
						<div class="amenities-list-container clearfix">
						<ul class="list-inline">';

					while ( $puna_amenities_query->have_posts() ) {
						$puna_amenities_query->the_post();
						$postID                 = get_the_id();
						$amenities_more_details = get_post_meta( $postID, 'amenities_more_details', true );
						$amenities_icon         = get_post_meta( $postID, 'amenities_icon', true );

						$puna_amenities_code .= '
							<li class="col-xs-6 col-md-4 amenities-item animated-box" data-animation="fadeInUp">
								<i class="' . esc_attr( $amenities_icon ) . '"></i>
								<div class="text-box">
									<div class="title">' . puna_tm_title_effect( esc_html( get_the_title() ) ) . '</div>
									<div class="value">' . esc_html( $amenities_more_details ) . '</div>
								</div>
							</li>
						';
					}
					wp_reset_postdata();

				$puna_amenities_code .= '
							</ul>
						</div>
					</div>
				</div>';
			}

			// End of Agent Loop
			if($puna_amenities_code) return balancetags( $puna_amenities_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Services
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_services( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna services's Attribute
			 */
			$puna_services_attr = shortcode_atts( array(
				'title'    => esc_html__( 'Our Services', 'puna' ),
				'subtitle' => esc_html__( 'Our professional agents provide special services for you', 'puna' ),
				'count'    => 3,
			), $attr );

			$args                = array(
				'post_type'      => 'service',
				'post_status'    => 'publish',
				'order'          => 'DESC',
				'orderby'        => 'date',
				'posts_per_page' => $puna_services_attr['count']
			);
			$puna_services_query = new WP_Query( $args );
			$puna_services_code = '';

			if ( isset( $puna_services_query ) && $puna_services_query->have_posts() ) {
				$puna_services_code = '
				<div id="service-section" class="main-bg-color">
					<div class="inner-box container">
						<div class="header-sec">
							<h2>' . puna_tm_title_effect( esc_html( $puna_services_attr['title'] ) ) . '</h2>
							<div class="subtitle">' . esc_html( $puna_services_attr['subtitle'] ) . '</div>
						</div>
						<div class="services-container clearfix">';

					while ( $puna_services_query->have_posts() ) {
						$puna_services_query->the_post();
						$postID      = get_the_id();
						$service_img = get_the_post_thumbnail( $postID, '', '' );

						$puna_services_code .= '
	
							<div class="service-box col-md-4 animated-box" data-animation="fadeInRight">
								<div class="img-box">' . ( ! empty( $service_img ) ? $service_img : '<img src="' . PUNA_IMG_PATH . 'service-placeholder.jpg' . '" alt="' . esc_html( get_the_title() ) . '">' ) . '</div>
								<div class="bottom-sec">
									<div class="title">' . puna_tm_title_effect( esc_html( get_the_title() ) ) . '</div>
									<div class="desc">' . balancetags( get_the_content() ) . '</div>
								</div>
							</div>
						';
					}
					wp_reset_postdata();

				$puna_services_code .= '
						</div>
					</div>
				</div>';
			}

			// End of Agent Loop

			if($puna_services_code) return balancetags( $puna_services_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Client boxes
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_clients( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna property highlight's Attribute
			 */
			$puna_clients_attr = shortcode_atts( array(
				'title' => esc_html__( 'Our Clients', 'puna' ),
				'count' => 8,
			), $attr );

			$puna_clients_code = '
			<div id="client-section" class="main-bg-color">
				<div class="inner-box container">
					<div class="header-sec">
						<h2>' . puna_tm_title_effect( esc_html( $puna_clients_attr['title'] ) ) . '</h2>
					</div>
					<div class="client-container">
						<ul class="clearfix">';

				$clients_i = 1;
			if(!empty($puna_opt['puna-clients'])){
				foreach ( $puna_opt['puna-clients'] as $client_item ) {

					if ( isset( $puna_clients_attr['count'] ) && $puna_clients_attr['count'] != '' ) {
						if ( $clients_i > $puna_clients_attr['count'] ) {
							continue;
						}
					}
					$puna_clients_code .= '
								<li class="col-xs-6 col-md-3 animated-box" data-animation="flipInX">
									<a href="' . ( ! empty( $client_item['url'] ) ? esc_url( $client_item['url'] ) : '#' ) . '">
										<img src="' . ( ! empty( $client_item['image'] ) ? esc_url( $client_item['image'] ) : PUNA_IMG_PATH . 'clients-placeholder.jpg' ) . '" alt="' . esc_html( $client_item['title'] ) . '">
									</a>
								</li>';

					$clients_i ++;
				}
			}

			$puna_clients_code .= '
						</ul>
					</div>
				</div>
			</div>';

			// End of Agent Loop

			if($puna_clients_code) return balancetags( $puna_clients_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Video Tour
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_video_tour( $attr )
		{
			global $post, $puna_opt;
			/**
			 * Puna property highlight's Attribute
			 */
			$puna_video_tour_attr = shortcode_atts( array(
				'title' => esc_html__( 'Video Overview', 'puna' ),
				'desc'  => '',
				'url'   => ''
			), $attr );

			$puna_video_tour_code = '
			<div id="video-tour-section" class="main-bg-color">
				<div class="inner-box container">
			        <div class="header-sec">
						<h2>' . puna_tm_title_effect( esc_html( $puna_video_tour_attr['title'] ) ) . '</h2>
					</div>
					<div class="content clearfix">';

				if ( ! empty( $puna_video_tour_attr['desc'] ) ) {
					$puna_video_tour_code .= '<div class="desc">' . esc_html( $puna_video_tour_attr['desc'] ) . '</div>';
				}
				if ( ! empty( $puna_video_tour_attr['url'] ) ) {
					$puna_video_tour_code .= '<iframe src="' . esc_url( $puna_video_tour_attr['url'] ) . '" frameborder="0" allowfullscreen></iframe>';
				}

			$puna_video_tour_code .= '</div>
				</div>
			</div>';

			// End of Agent Loop

			if($puna_video_tour_code) return balancetags( $puna_video_tour_code );
		}


		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the Slide Show
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_slide_show( $attr )
		{
			global $puna_opt;

			/**
			 * Main Gallery's Attribute
			 */
			$puna_slide_show_attr = shortcode_atts( array(
				'title' => esc_html__( 'Property Slide Show', 'puna' )
			), $attr );

			$puna_slide_show_code = '
			<div id="slide-show-section" class="main-bg-color">
				<div class="inner-box container">
			        <div class="header-sec">
						<h2>' . puna_tm_title_effect( esc_html( $puna_slide_show_attr['title'] ) ) . '</h2>
					</div>';
				if ( ! empty( $puna_opt['puna-slide-show-desc'] ) ) {
					$puna_slide_show_code .= '<div class="desc">' . esc_html__( $puna_opt['puna-slide-show-desc'], 'puna' ) . '</div>';
				}
	
	
				$slide_show_images_ids = isset( $puna_opt["puna-slide-show"] ) ? explode( ',', $puna_opt["puna-slide-show"] ) : '';

			$main_slide_box = $thumb_slide_box = '';
			if ( ! empty( $slide_show_images_ids ) ) {
					foreach ( $slide_show_images_ids as $slide_show_images_id ) {
	
						// Check if Polylang is active
						if(defined( 'POLYLANG_VERSION' )):
							$slide_show_images_id = ( pll_get_post($slide_show_images_id) !== false ? pll_get_post($slide_show_images_id) : $slide_show_images_id);
						endif;
						$current_img = get_post( $slide_show_images_id );
	
						$main_slide_box .= '
							<div class="items">
					            <img src="' . esc_url( $current_img->guid ) . '" alt="' . esc_attr( $current_img->post_title ) . '">
					        </div>
						';
						$thumb_slide_box .= '
							<div class="items">
					            <img src="' . esc_url( $current_img->guid ) . '" alt="' . esc_attr( $current_img->post_title ) . '">
					            <div class="slide-caption">
					                <div class="title">' . puna_tm_title_effect( esc_html__( $current_img->post_title ), 'puna' ) . '</div>
					            </div>
					        </div>
						';
					}
				} else {
					$puna_slide_show_code = esc_html__( 'There is not any slides', 'puna' );
				}
	
				$puna_slide_show_code .= '
					<div id="slide-show">
						<div id="main-image-slider">
							' . balancetags( $main_slide_box ) . '
				        </div>
				        <div id="thumbnail-slider">
				            ' . balancetags( $thumb_slide_box ) . '
				        </div>';

			$puna_slide_show_code .= '</div>
				</div>
			</div>';

			if($puna_slide_show_code) return balancetags( $puna_slide_show_code );
		}


		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Contact Section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_contact( $attr )
		{
			global $puna_opt;
			/**
			 * Puna contact's Attribute
			 */
			$puna_contact_attr = shortcode_atts( array(
				'title' => esc_html__( 'Our Location', 'puna' ),
				'subtitle' => esc_html__( '', 'puna' )
			), $attr );


			$protocol = is_ssl() ? 'https' : 'http';

			$puna_contact_codes = '
				<div id="contact-section">
					<div class="contact-container container">
						<div class="contact-box col-xs-8 col-md-5">
							<div class="header-sec">
								<h2>' . puna_tm_title_effect( esc_html( $puna_contact_attr['title'] ) ) . '</h2>
							</div>';

							if(!empty($puna_contact_attr['subtitle'])){
								$puna_contact_codes .= '<div class="desc">'.esc_html($puna_contact_attr['subtitle']).'</div>';
							}

							$puna_contact_codes .= '<ul class="contact-info">';
								if(!empty($puna_opt['opt-web-site-address'])){
									$puna_contact_codes .= '<li><i class="fa fa-map-marker"></i>'.esc_html($puna_opt['opt-web-site-address']).'</li>';
								}
								if(!empty($puna_opt['opt-web-site-email'])){
									$puna_contact_codes .= '<li><i class="fa fa-envelope-o"></i>'.esc_html($puna_opt['opt-web-site-email']).'</li>';
								}
								if(!empty($puna_opt['opt-web-site-phone'])){
									$puna_contact_codes .= '<li><i class="fa fa-phone"></i>'.esc_html($puna_opt['opt-web-site-phone']).'</li>';
								}
							$puna_contact_codes .= '</ul>
							<a href="#booking-form" class="btn visit-request">'.esc_html__('Schedule A Visit', 'puna').'</a>
						</div>
						<div class="map-container col-xs-4 col-md-7">
							<div id="map" data-marker="assets/img/marker.png"></div>
						</div>
					</div>
				</div>


				<script type="text/javascript" src="'.esc_attr($protocol).'://maps.googleapis.com/maps/api/js'.( !empty($puna_opt['opt-map-api']) ? '?key='.esc_attr($puna_opt['opt-map-api']) : '' ).'"></script>
				<script type="text/javascript">
					"use strict";
					function initialize() {
						var myLatLng = new google.maps.LatLng('.esc_js( $puna_opt['opt-map-lat'].', '.$puna_opt['opt-map-lng'] ).');
						var mapOptions = {
							zoom: 12,
							center: myLatLng,';

			if(isset($puna_opt['opt-theme']) && $puna_opt['opt-theme'] == '1'){
				$puna_contact_codes .= '		
							// This is where you would paste any style found on Snazzy Maps.
							styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}],';
			}
			else{
				$puna_contact_codes .= '		
							// This is where you would paste any style found on Snazzy Maps.
							styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],';
			}

			$puna_contact_codes .= '
							// Extra options
							scrollwheel: false,
							mapTypeControl: false,
							panControl: false,
							zoomControlOptions: {
								style   : google.maps.ZoomControlStyle.SMALL,
								position: google.maps.ControlPosition.LEFT_BOTTOM
							}
						};
						var map = new google.maps.Map(document.getElementById("map"),mapOptions);

						var image = "'.( !empty($puna_opt['opt-map-marker']['url']) ? esc_js($puna_opt['opt-map-marker']['url']) : esc_js( PUNA_IMG_PATH.'marker.png' ) ).'";

						var beachMarker = new google.maps.Marker({
							position: myLatLng,
							map: map,
							icon: image
						});
					}

					google.maps.event.addDomListener(window, \'load\', initialize);
					
					jQuery("#map").height(jQuery("#contact-section .contact-box").outerHeight());
					jQuery( window ).resize(function() {
						jQuery("#map").height(jQuery("#contact-section .contact-box").outerHeight());
					});
				</script>
			';

			if($puna_contact_codes) return balancetags($puna_contact_codes);
		}


		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Property Specs Section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_property_specs( $attr )
		{
			global $puna_opt;
			$i=1;
			$option_css_codes = '';
			// ********************get 3 blocks acf*******************
						$args = array(
							'post_type' => '3_blocs_accueil', 
					    	'posts_per_page' => 3,   
						    'orderby'=>'meta_value_num',
			          		'order'=> "ASC"
						); 
						$specs_loop = new WP_Query( $args );
						if ( $specs_loop->have_posts() ) :
						    while ( $specs_loop->have_posts() ) : 
						    	$specs_loop->the_post();  

								$puna_property_specs_code .= '
									<div class="section-box col-xs-4 col-md-4 slide-'.$i.'" data-id="'.$i.'" >
										<div class="content">
											<div class="head-title">'. get_the_title() .'</div>
											<ul> ';
												if( have_rows('caracteristiques_de_la_propriete') ): 
													while ( have_rows('caracteristiques_de_la_propriete') ) : the_row();
	 
														$puna_property_specs_code .= '<li><span class="title">'. get_sub_field('caracteristiques') .'</span><span class="value">'.get_sub_field('valeur').'</span></li>';
													 endwhile; 
												endif;
										$puna_property_specs_code .= '
											</ul>
										</div>
									</div>'; 
								$option_css_codes .= get_field('image') ? '#feature-section .section-box .section-slide-'.$i.'{background-image: url(' . get_field('image') . ') !important;}' : '';

								 
							$i++;
							endwhile ;
						    wp_reset_postdata();
						endif; 
 
					echo '<style rel="stylesheet">';
						echo $option_css_codes;
					echo '</style>'; 

					// ***********************************************************
					$puna_property_specs_codes = '
						<div id="feature-section" class="active-slide-1" data-active-slide="1">
							'. $puna_property_specs_code .'
						</div>
					';

			if($puna_property_specs_codes) return balancetags($puna_property_specs_codes); 
		}


		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the Text Section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_text_section( $attr )
		{
			global $puna_opt;
 

			$btn_1_targetBlunk = $attr['btn_1_targetBlunk'];
			$btn_2_targetBlunk = $attr['btn_2_targetBlunk'];

			/**
			 * Main Gallery's Attribute
			 */
			$puna_text_section_attr = shortcode_atts( array(
				// Type can be "simple", "with-image" and "with-buttons" default value is "simple"
				'type' => 'simple',
				'title' => '',
				'text' => '',
				'img_url' => '',
				'img_url1' => '',
				'btn_1_text' => '',
				'btn_1_url' => '',
				'btn_2_text' => '',
				'btn_2_url' => '', 
				'btn_1_targetblunk' => $attr['btn_1_targetblunk'],
				'btn_2_targetblunk' => $attr['btn_2_targetblunk'], 
			), $attr );
 	
 

			$puna_text_section_code = '
				<div id="welcome-section" class="main-bg-color '.($puna_text_section_attr['type'] == 'with-image' ? esc_attr('has-image') : '').'">
					<div class="inner-box container">
				        <div class="header-sec">
							<h2>'.puna_tm_title_effect(esc_html($puna_text_section_attr['title'])).'</h2>
						</div>
						<div class="content clearfix">';

						if($puna_text_section_attr['type'] == 'simple' || $puna_text_section_attr['type'] == 'with-buttons'){
							$puna_text_section_code .= $puna_text_section_attr['text'];
						}
						elseif($puna_text_section_attr['type'] == 'with-image'){
							$puna_text_section_code .= '
								<div class="col-md-7 animated-box" data-animation="fadeInLeft">'.balancetags($puna_text_section_attr['text']).'</div>
								<div class="col-md-5 animated-box" data-animation="fadeInRight">
									<div class="img-container">
										<img src="'.esc_attr($puna_text_section_attr['img_url']).'" alt="'.esc_attr($puna_text_section_attr['title']).'">
									</div>
								</div>';
						}

						$puna_text_section_code .= '</div>';

						if($puna_text_section_attr['type'] == 'with-buttons'){ 

							$btn_1_targetBlunk = ($attr['btn_1_targetblunk'] == 1) ? 'target="_blank"' : '';
							$btn_2_targetBlunk = ($attr['btn_2_targetblunk'] == 1) ? 'target="_blank"' : '';
							$puna_text_section_code .= '
							<div class="btn-row">
								<a href="'.esc_attr($puna_text_section_attr['btn_1_url']).'" class="btn btn-lg btn-default" asdas '.$btn_1_targetBlunk.'>'.esc_html($puna_text_section_attr['btn_1_text']).'</a>
								<a href="'.esc_attr($puna_text_section_attr['btn_2_url']).'" class="btn btn-lg btn-default" asdas '.$btn_2_targetBlunk.'>'.esc_html($puna_text_section_attr['btn_2_text']).'</a>
							</div>';
						}

			    $puna_text_section_code .= '</div></div>';

			if($puna_text_section_code) return balancetags( $puna_text_section_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate the Booking Overview Section
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_booking_overview( $attr )
		{
			global $puna_opt;

			if( ! wp_script_is('puna-moment-js') ){
				wp_enqueue_script("puna-moment-js", PUNA_JS_PATH . 'moment.min.js', array('jquery'), get_bloginfo('version'), true);
			}
			if( ! wp_script_is('puna-fullcalendar-js') ){
				wp_enqueue_script("puna-fullcalendar-js", PUNA_JS_PATH . 'fullcalendar.min.js', array('jquery'), get_bloginfo('version'), true);

			}

			$puna_booking_overview_code = '<div id="overview-calendar" class="main-bg-color"></div>';

			if($puna_booking_overview_code) return balancetags( $puna_booking_overview_code );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Generate Booking Form
		 * ------------------------------------------------------------------------------------------
		 */
		function puna_booking_form( $attr )
		{

			$puna_booking_form_code = '
				<div id="booking-form" class="mfp-hide">
					<div class="header-sec">
						<h2>'.puna_tm_title_effect(esc_html__('Schedule a Visit' ,'puna')).'</h2>
					</div>
					<form class="booking-form clearfix" action="#" method="post" autocomplete="off">
			            <div class="booking-fields">
			                <input placeholder="'.esc_attr__('Your Name', 'puna').'" class="name" type="text" name="name" required />
			            </div>
			            <div class="booking-fields">
			                <input placeholder="'.esc_attr__('Email', 'puna').'" class="email" type="email" name="email" />
			            </div>
			            <div class="booking-fields">
			                <input placeholder="'.esc_attr__('Phone', 'puna').'" class="phone" type="text" name="phone" required/>
			            </div>
			            <div class="booking-fields clearfix two-cols">
			                <div class="col-xs-6">
			                    <input placeholder="'.esc_attr__('Choose a date', 'puna').'" class="datepicker-fields date" type="text" name="date" required/>
			                </div>
			                <div class="col-xs-6">
			                    <input placeholder="'.esc_attr__('Choose the time', 'puna').'" class="input-time time" type="text" name="time" required/>
			                </div>
			            </div>
			            <div class="booking-fields">
				            <textarea name="message" class="message" placeholder="'.esc_attr__('Your Message', 'puna').'"></textarea>
			            </div>
						<div class="response-message-box alert"></div>
			            <div class="booking-button-container">
			                <input class="btn btn-default" value="'.esc_attr__('Book Now', 'puna').'" type="submit"/>
			            </div>
			        </form>
				</div>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						if (jQuery.isFunction(jQuery.fn.magnificPopup)) {
							jQuery("#header-book-visit-btn, .contact-container .visit-request").magnificPopup({
								type:         "inline",
								removalDelay: 600,
								mainClass:    "mfp-fade"
							});							
						}
					});
				</script>';

			if($puna_booking_form_code) return balancetags( $puna_booking_form_code );
		}
		
	}

	$ravis_shortcode_obj = new Puna_plugin_shortcode;