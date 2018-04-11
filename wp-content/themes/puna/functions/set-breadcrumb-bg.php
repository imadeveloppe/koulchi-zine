<?php
	if ( ! function_exists( 'puna_tm_breadcrumb_bg' ) )
	{
		function puna_tm_breadcrumb_bg( $page_id )
		{
			global $puna_opt;

			$breadcrumb_bg_id      = get_post_meta( $page_id, 'puna_page_bread_crumb', true );
			$breadcrumb_bg_img     = wp_get_attachment_image_src( $breadcrumb_bg_id, 'full' );
			$breadcrumb_bg_new     = ( ! empty( $breadcrumb_bg_img[0] ) ? $breadcrumb_bg_img[0] : '' );
			$default_breadcrumb_bg = ( ! empty( $puna_opt['opt-breadcrumb-bg']['url'] ) ? $puna_opt['opt-breadcrumb-bg']['url'] : '' );

			if ( is_post_type_archive( 'guest_book' ) && ! empty( $puna_opt['opt-guestbook-breadcrumb-bg']['url'] ) )
			{
				$internal_page_bread = $puna_opt['opt-guestbook-breadcrumb-bg']['url'];
			}
			elseif ( ( is_post_type_archive( 'rooms' ) || is_page_template( 'templates/room-grid-sidebar.php' ) || is_page_template( 'templates/room-masonry.php' ) || is_page_template( 'templates/room-list.php' ) ) && ! empty( $puna_opt['opt-rooms-breadcrumb-bg']['url'] ) )
			{
				$internal_page_bread = $puna_opt['opt-rooms-breadcrumb-bg']['url'];
			}
			elseif ( ( is_page_template( 'templates/gallery-grid.php' ) || is_page_template( 'templates/gallery-masonry.php' ) ) && ! empty( $puna_opt['opt-gallery-breadcrumb-bg']['url'] ) )
			{
				$internal_page_bread = $puna_opt['opt-gallery-breadcrumb-bg']['url'];
			}
			elseif ( is_404() && ! empty( $puna_opt['opt-404-breadcrumb-bg']['url'] ) )
			{
				$internal_page_bread = $puna_opt['opt-404-breadcrumb-bg']['url'];
			}
			elseif ( is_home() && ! empty( $puna_opt['opt-blog-breadcrumb-bg']['url'] ) )
			{
				$internal_page_bread = $puna_opt['opt-blog-breadcrumb-bg']['url'];
			}

			if ( ! empty( $breadcrumb_bg_new ) )
			{
				return $breadcrumb_bg_new;
			}
			elseif ( isset( $internal_page_bread ) )
			{
				return $internal_page_bread;
			}
			elseif ( ! empty( $default_breadcrumb_bg ) )
			{
				return $default_breadcrumb_bg;
			}
			else
			{
				return PUNA_IMG_PATH . 'bread-bg.jpg';
			}
		}
	}