<?php
	if ( ! function_exists( 'puna_tm_title_effect' ) )
	{
		function puna_tm_title_effect( $input_text )
		{
			$text_parts  = explode( ' ', $input_text );
			$return_text = '';
			$i           = 0;
			foreach ( $text_parts as $text_part )
			{
				if ( $i === 0 )
				{
					$return_text .= esc_html( $text_part ) . '<span> ';
				}
				else
				{
					$return_text .= $text_part . ' ';
				}
				$i ++;
			}
			$return_text = $return_text . '</span>';

			return wp_kses( trim( $return_text ), array( 'span' => array() ) );
		}
	}