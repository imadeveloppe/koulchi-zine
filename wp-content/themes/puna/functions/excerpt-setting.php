<?php
	if ( ! function_exists( 'puna_tm_excerpt_more' ) )
	{
		function puna_tm_excerpt_more( $more )
		{
			global $post, $puna_opt;

			return '...<br><br><div class="read-more-container"><a class="more-link btn btn-default btn-sm read-more" href="' . esc_url( get_permalink( $post->ID ) ) . '">' . ( ! empty( $puna_opt['opt-read-more-text'] ) ? esc_html( $puna_opt['opt-read-more-text'] ) : esc_html__( 'Continue Reading', 'puna' ) ) . '</a></div>';
		}
	}
	add_filter( 'excerpt_more', 'puna_tm_excerpt_more' );


	if ( ! function_exists( 'puna_tm_excerpt_length' ) )
	{
		function puna_tm_excerpt_length( $len )
		{
			global $puna_opt;

			return ( ! empty( $puna_opt['opt-excerpt-length'] ) ? $puna_opt['opt-excerpt-length'] : 100 );
		}
	}
	add_filter( 'excerpt_length', 'puna_tm_excerpt_length', 999 );


	/**
	 * ------------------------------------------------------------------------------------------
	 * Function that return the excerpt
	 * with the given character length
	 * ------------------------------------------------------------------------------------------
	 */
	if ( ! function_exists( 'puna_tm_the_excerpt_max_charlength' ) )
	{
		function puna_tm_the_excerpt_max_charlength( $charlength, $post_id )
		{
			global $post, $puna_opt;

			( empty( $post_id ) ) ? $post_id = $post->ID : $post_id;

			$excerpt = get_the_excerpt();
			$charlength ++;

			if ( mb_strlen( $excerpt ) > $charlength )
			{
				$subex   = mb_substr( $excerpt, 0, $charlength - 5 );
				$exwords = explode( ' ', $subex );
				$excut   = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
				if ( $excut < 0 )
				{
					$excerpt_text = mb_substr( $subex, 0, $excut );
				}
				else
				{
					$excerpt_text = $subex;
				}
				$excerpt_text .= '...<br><div class="read-more-container"><a class="more-link btn btn-default btn-sm read-more" href="' . esc_url( get_permalink( $post_id ) ) . '">' . ( ! empty( $puna_opt['opt-read-more-text'] ) ? esc_html( $puna_opt['opt-read-more-text'] ) : esc_html__( 'Continue Reading', 'puna' ) ) . '</a></div>';
			}
			else
			{
				$excerpt_text = $excerpt;
			}

			return $excerpt_text;
		}
	}


	/**
	 * ------------------------------------------------------------------------------------------
	 * Function that change all the more Link of Posts
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_modify_read_more_link' ) )
	{
		function puna_tm_modify_read_more_link()
		{
			global $post, $puna_opt;
			$more_sectiton_code = '';
			if ( $post->post_type != 'attraction' )
			{
				$more_sectiton_code .= '<div class="read-more-container"><a class="more-link btn btn-default btn-sm read-more" href="' . esc_url( get_permalink( $post->ID ) ) . '">' . esc_html( $puna_opt['opt-read-more-text'] ) . '</a></div>';
			}

			return $more_sectiton_code;
		}
	}
	add_filter( 'the_content_more_link', 'puna_tm_modify_read_more_link' );
