<?php
	if ( ! function_exists( 'puna_tm_add_class_body' ) )
	{
		function puna_tm_add_class_body( $classes )
		{

			global $puna_opt, $post;
			if ( ! empty( $puna_opt['opt-layout'] ) && $puna_opt['opt-layout'] == '2' )
			{
				$classes[] = 'boxed';
			}
			if ( ! empty( $puna_opt['opt-pattern'] ) )
			{
				$classes[] = 'pattern-' . esc_attr( $puna_opt['opt-pattern'] );
			}
			if ( get_post_meta( get_the_id(), 'puna_page_class', true ) )
			{
				$classes[] = get_post_meta( get_the_id(), 'puna_page_class', true );
			}

			return $classes;
		}

		add_filter( 'body_class', 'puna_tm_add_class_body' );
	}