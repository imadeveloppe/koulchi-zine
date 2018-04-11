<?php
	/*
	Register Fonts
	*/

	function puna_tm_google_fonts_url()
	{
		$font_url = '';

		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'puna' ) )
		{
			$font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,700,300|Playfair Display:400,700&subset=latin,cyrillic,cyrillic-ext' ), "https://fonts.googleapis.com/css" );
		}

		return $font_url;
	}

	/*
	Enqueue scripts and styles.
	*/
	function puna_tm_google_font_scripts()
	{
		wp_enqueue_style( 'google-fonts', puna_tm_google_fonts_url(), array(), '1.0.0' );
	}

	add_action( 'wp_enqueue_scripts', 'puna_tm_google_font_scripts' );