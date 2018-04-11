<?php
	/**
	 *    function.php
	 *    Function of the theme are listed in this file.
	 * ------------------------------------------------------------------------------------------
	 * 1.0 - Define Constant
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! defined( 'PUNA_THEMEROOT' ) )
	{
		define( 'PUNA_THEMEROOT', get_template_directory() );
	}
	if ( ! defined( 'PUNA_BASE_URL' ) )
	{
		if ( get_template_directory_uri() === get_stylesheet_directory_uri() )
		{
			define( 'PUNA_BASE_URL', get_stylesheet_directory_uri() );
		}
		else
		{
			define( 'PUNA_BASE_URL', get_template_directory_uri() );
		}
	}
	if ( ! defined( 'PUNA_FRAMEWORK' ) )
	{
		define( 'PUNA_FRAMEWORK', PUNA_THEMEROOT . '/admin/' );
	}
	if ( ! defined( 'PUNA_WIDGET_PATH' ) )
	{
		define( 'PUNA_WIDGET_PATH', PUNA_THEMEROOT . '/widgets/' );
	}
	if ( ! defined( 'PUNA_FUNCTIONS_PATH' ) )
	{
		define( 'PUNA_FUNCTIONS_PATH', PUNA_THEMEROOT . '/functions/' );
	}
	if ( ! defined( 'PUNA_PLUGIN_PATH' ) )
	{
		define( 'PUNA_PLUGIN_PATH', PUNA_THEMEROOT . '/includes/plugins/' );
	}
	if ( ! defined( 'PUNA_CSS_PATH' ) )
	{
		define( 'PUNA_CSS_PATH', PUNA_BASE_URL . '/assets/css/' );
	}
	if ( ! defined( 'PUNA_IMG_PATH' ) )
	{
		define( 'PUNA_IMG_PATH', PUNA_BASE_URL . '/assets/img/' );
	}
	if ( ! defined( 'PUNA_JS_PATH' ) )
	{
		define( 'PUNA_JS_PATH', PUNA_BASE_URL . '/assets/js/' );
	}

	if ( ! isset( $content_width ) )
	{
		$content_width = 1200;
	}

	/**
	 * ------------------------------------------------------------------------------------------
	 * 2.0 - Include the framework options
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! class_exists( 'ReduxFramework' ) && file_exists( PUNA_FRAMEWORK . 'core/framework.php' ) )
	{
		require_once( PUNA_FRAMEWORK . 'core/framework.php' );
	}

	if ( ! isset( $redux_demo ) && file_exists( PUNA_FRAMEWORK . 'options-init.php' ) )
	{
		require_once( PUNA_FRAMEWORK . 'options-init.php' );
	}

	/**
	 * ------------------------------------------------------------------------------------------
	 * 3.0 - Puna Function Setup
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_puna_setup' ) )
	{

		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 */
		function puna_tm_puna_setup()
		{

			/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on Puna Theme, use a find and replace
			 * to change 'puna' to the name of your theme in all the template files
			 */
			load_theme_textdomain( 'puna', get_template_directory() . '/languages' );

			// Add default posts and comments RSS feed links to head.
			add_theme_support( 'automatic-feed-links' );

			/*
			 * Let WordPress manage the document title.
			 */
			add_theme_support( 'title-tag' );

			// This theme uses wp_nav_menu() in one location.
			register_nav_menus( array(
				'primary' => esc_html__( 'Primary Menu', 'puna' ),
			) );

			/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
			 */
			add_theme_support( 'html5', array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
				) );

			/**
			 * Enable support for Post Thumbnails, and declare two sizes.
			 */
			add_theme_support( 'post-thumbnails' );

			/*
			 * Enable support for Post Formats.
			 */
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			) );
		}
	} // puna_tm_puna_setup
	add_action( 'after_setup_theme', 'puna_tm_puna_setup' );

	/**
	 *------------------------------------------------------------------------------------------
	 * 4.0 Add required script files ( css / Js and etc )
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_puna_scripts' ) )
	{
		function puna_tm_puna_scripts()
		{
			global $puna_opt, $post;

			if ( ! defined( 'PUNA_SHORTCODE_WIZARD' ) )
			{
				/**
				 * Add the css files of Puna
				 */
				$style_url = PUNA_CSS_PATH;
				if ( is_rtl() )
				{
					if ( isset( $puna_opt['opt-theme'] ) && $puna_opt['opt-theme'] == '1' )
					{
						$style_url .= 'styles-dark-rtl.css';
					}
					else
					{
						$style_url .= 'styles-rtl.css';
					}
				}
				else
				{
					if ( isset( $puna_opt['opt-theme'] ) && $puna_opt['opt-theme'] == '1' )
					{
						$style_url .= 'styles-dark.css';
					}
					else
					{
						$style_url .= 'styles.css';
					}
				}

				wp_enqueue_style( 'puna-main-style-file', $style_url );
				if ( file_exists( PUNA_FRAMEWORK . 'style.css' ) )
				{
					wp_enqueue_style( 'puna-dynamic-style-file', PUNA_BASE_URL . '/admin/style.css' );
				}

				/**
				 * Add the JS files of Puna
				 */
				wp_enqueue_script( "puna-helper-js", PUNA_JS_PATH . 'helper.js', array( 'jquery' ), get_bloginfo( 'version' ), true );

				if ( is_page_template( 'templates/booking-overview.php' ) )
				{
					wp_enqueue_script( "moment", PUNA_JS_PATH . 'moment.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
					wp_enqueue_script( "fullcalendar", PUNA_JS_PATH . 'fullcalendar.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				}

				$theme_current_locale = 'en';
				if ( get_locale() !== 'en_US' )
				{
					if ( file_exists( PUNA_THEMEROOT . '/assets/js/locales/locales.php' ) )
					{
						require_once( PUNA_THEMEROOT . '/assets/js/locales/locales.php' );
					}
					isset( $theme_locales[ get_locale() ] ) ? $theme_current_locale = $theme_locales[ get_locale() ] : '';

					wp_enqueue_script( "puna-datepicker-locale-js", PUNA_JS_PATH . 'locales/' . get_locale() . '.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
					wp_enqueue_script( "puna-fullcalendar-locale-js", PUNA_JS_PATH . 'fullcalendar-lang/' . get_locale() . '.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				}

				if ( ! empty( $puna_opt['opt-smooth-scroll'] ) )
				{
					wp_enqueue_script( "smooth-scroll", PUNA_JS_PATH . 'jquery.SmoothScroll.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				}

				wp_enqueue_script( "owl-carousel", PUNA_JS_PATH . 'owl.carousel.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				wp_enqueue_script( "magnific-popup", PUNA_JS_PATH . 'jquery.magnific-popup.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				wp_enqueue_script( "imageloaded", PUNA_JS_PATH . 'imagesloaded.pkgd.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				wp_enqueue_script( "isotop", PUNA_JS_PATH . 'isotope.pkgd.min.js', array( 'jquery' ), get_bloginfo( 'version' ), true );
				wp_enqueue_script( "puna-template-js", PUNA_JS_PATH . 'template.js', array( 'jquery' ), get_bloginfo( 'version' ), true );

				$start_avail = ! empty( $puna_opt['puna-available-date-start'] ) ? strtotime( $puna_opt['puna-available-date-start'] ) : strtotime( date( 'm/d/Y' ) );
				$end_avail   = ! empty( $puna_opt['puna-available-date-end'] ) ? strtotime( $puna_opt['puna-available-date-end'] ) : strtotime( date( 'm/d/Y', strtotime( '+1 year' ) ) );

				$time_from_avail = ! empty( $puna_opt['puna-available-time'][1] ) ? $puna_opt['puna-available-time'][1] : 0;
				$time_to_avail   = ! empty( $puna_opt['puna-available-time'][2] ) ? $puna_opt['puna-available-time'][2] : 24;

				// Localized ajaxurl
				wp_localize_script( 'puna-template-js', 'puna', array(
						'ajaxurl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
						'themeLang'     => $theme_current_locale,
						'availFrom'     => date( 'Y-m-d', $start_avail ),
						'availTo'       => date( 'Y-m-d', $end_avail ),
						'availTimeFrom' => $time_from_avail,
						'availTimeTo'   => $time_to_avail
					) );

				/**
				 * Include google map required js file for the contact page
				 */
				if ( is_page_template( 'templates/contact-page.php' ) )
				{
					$protocol = is_ssl() ? 'https' : 'http';

					wp_enqueue_script( "google-map", $protocol . '://maps.googleapis.com/maps/api/js' . ( ! empty( $puna_opt['opt-map-api'] ) ? '?key=' . esc_attr( $puna_opt['opt-map-api'] ) : '' ), array(), get_bloginfo( 'version' ), true );

					$google_map_js_codes = '
						"use strict";
						function initialize() {
							var myLatLng = new google.maps.LatLng(' . esc_js( $puna_opt["opt-map-lat"] . ', ' . $puna_opt["opt-map-lng"] ) . ');
							var mapOptions = {
								zoom: 12,
								center: myLatLng,';

					if ( isset( $puna_opt["opt-theme"] ) && $puna_opt["opt-theme"] == "1" )
					{
						$google_map_js_codes .= 'styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}],';
					}
					else
					{
						$google_map_js_codes .= 'styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],';
					}
					$google_map_js_codes .= '
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
				
							var image = "' . ( ! empty( $puna_opt["opt-map-marker"]["url"] ) ? esc_js( $puna_opt["opt-map-marker"]["url"] ) : esc_js( PUNA_IMG_PATH . "marker.png" ) ) . '";
				
							var beachMarker = new google.maps.Marker({
								position: myLatLng,
								map: map,
								icon: image
							});
						}				
						google.maps.event.addDomListener(window, "load", initialize);
					';
					wp_add_inline_script( 'puna-google-map-js', $google_map_js_codes );


				}

				if ( is_singular() )
				{
					wp_enqueue_script( "comment-reply" );
				}
			}
			else
			{
				wp_enqueue_style( 'puna-shortcode-wizard-style', PUNA_CSS_PATH . ( 'shortcode-wizard.css' ) );
				wp_enqueue_script( "puna-shortcode-tinyMCE-popup-js", site_url() . '/wp-includes/js/tinymce/tiny_mce_popup.js', array( 'jquery' ), true );
				wp_enqueue_script( "puna-shortcode-wizard-js", PUNA_JS_PATH . 'shortcode-wizard.js', array( 'jquery' ), true );
			}

			// $option_css_codes = '';
			// if ( isset( $puna_opt['opt-custom-css'] ) && $puna_opt['opt-custom-css'] !== '' )
			// {
			// 	$option_css_codes .= $puna_opt["opt-custom-css"];
			// }
			// if ( ! empty( $puna_opt['puna-spec-ext-bg']['url'] ) || ! empty( $puna_opt['puna-spec-int-bg']['url'] ) || ! empty( $puna_opt['puna-spec-bed-bg']['url'] ) )
			// {
			// 	$option_css_codes .= ! empty( $puna_opt['puna-spec-ext-bg']['url'] ) ? '#feature-section .section-box .section-slide-1{background-image: url(' . $puna_opt['puna-spec-ext-bg']['url'] . ') !important;}' : '';
			// 	$option_css_codes .= ! empty( $puna_opt['puna-spec-int-bg']['url'] ) ? '#feature-section .section-box .section-slide-2{background-image: url(' . $puna_opt['puna-spec-int-bg']['url'] . ') !important;}' : '';
			// 	$option_css_codes .= ! empty( $puna_opt['puna-spec-bed-bg']['url'] ) ? '#feature-section .section-box .section-slide-3{background-image: url(' . $puna_opt['puna-spec-bed-bg']['url'] . ') !important;}' : '';
			// }
			// if ( ! empty( $option_css_codes ) )
			// {
			// 	wp_add_inline_style( 'puna-main-style-file', $option_css_codes );
			// }

			$option_js_code = '';

			if ( ! empty( $puna_opt['opt-sticky-header'] ) )
			{
				$option_js_code .= '
					var stickySelectors = jQuery("body");
					jQuery(window).scroll(function() {
						jQuery(document).scrollTop() > 110 ? stickySelectors.addClass("sticky") : stickySelectors.removeClass("sticky");
					});
				';
			}
			if ( ! empty( $option_js_code ) )
			{
				wp_add_inline_script( 'puna-template-js', $option_js_code );
			}


		}
	}
	add_action( 'wp_enqueue_scripts', 'puna_tm_puna_scripts' );


	/**
	 * Add admin required scripts and stylesheets
	 */

	if ( ! function_exists( 'puna_tm_puna_admin_scripts' ) )
	{
		function puna_tm_puna_admin_scripts()
		{
			global $puna_opt;
			wp_enqueue_style( 'puna-jquery-ui-custom', PUNA_CSS_PATH . 'jquery-ui.min.css' );
			wp_enqueue_style( 'puna-custom-admin-style', PUNA_CSS_PATH . 'admin.css' );
			wp_enqueue_script( 'jquery-ui-datepicker' );
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_script( 'puna-helper-js', PUNA_JS_PATH . 'helper.js' );
			wp_enqueue_script( 'puna-admin-js', PUNA_JS_PATH . 'admin.js' );

			$start_avail = ! empty( $puna_opt['puna-available-date-start'] ) ? strtotime( $puna_opt['puna-available-date-start'] ) : strtotime( date( 'm/d/Y' ) );
			$end_avail   = ! empty( $puna_opt['puna-available-date-end'] ) ? strtotime( $puna_opt['puna-available-date-end'] ) : strtotime( date( 'm/d/Y', strtotime( '+1 year' ) ) );

			// Localized ajaxurl
			wp_localize_script( 'puna-admin-js', 'puna', array(
					'ajaxurl'   => esc_url( admin_url( 'admin-ajax.php' ) ),
					'availFrom' => date( 'Y-m-d', $start_avail ),
					'availTo'   => date( 'Y-m-d', $end_avail )
				) );
		}
	}
	add_action( 'admin_enqueue_scripts', 'puna_tm_puna_admin_scripts' );


	/**
	 * ------------------------------------------------------------------------------------------
	 * 5.0 - Pagination function
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'ravis-pagination.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 6.0 - Title Effect function - it will add "b" tag to the first word of $input
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'title-effect.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 7.0 - Breadcrumb function
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'ravis-breadcrumb.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 8.0 - Register SideBars
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_register_sidebar' ) )
	{
		function puna_tm_register_sidebar()
		{
			register_sidebar( array(
				'name'          => esc_html__( 'Main Widget area', 'puna' ),
				'id'            => 'main-side-bar',
				'description'   => esc_html__( 'Appears to the right side of the blog page.', 'puna' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="side-title">',
				'after_title'   => '</h3>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'Top Footer Widget area', 'puna' ),
				'id'            => 'top-footer',
				'description'   => esc_html__( 'Appears in top of the website footer.', 'puna' ),
				'before_widget' => '<div id="%1$s" class="widget col-xs-6 col-md-4 %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			) );
		}
	}
	add_action( 'widgets_init', 'puna_tm_register_sidebar' );


	/**
	 * ------------------------------------------------------------------------------------------
	 * 9.0 - Register Menu
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_register_menus' ) )
	{
		function puna_tm_register_menus()
		{
			register_nav_menus( array(
				'top-menu'    => esc_html__( 'Top Menu', 'puna' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'puna' ),
			) );
		}
	}
	add_action( 'init', 'puna_tm_register_menus' );


	/**
	 * ------------------------------------------------------------------------------------------
	 * 10.0 - Load post_types in the menu section
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'post-type-in-menu.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 11.0 - Include required plugins to theme
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'include-plugins.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 12.0 - Determine whether blog/site has more than one category.
	 * @return bool True of there is more than one category, false otherwise.
	 * ------------------------------------------------------------------------------------------
	 */

	function puna_tm_categorized_blog()
	{
		if ( false === ( $all_the_cool_cats = get_transient( 'ravis_categories' ) ) )
		{
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,

				// We only need to know if there is more than one category.
				'number'     => 2,
			) );

			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );

			set_transient( 'ravis_categories', $all_the_cool_cats );
		}

		if ( $all_the_cool_cats > 1 )
		{
			// This blog has more than 1 category so puna_tm_categorized_blog should return true.
			return true;
		}
		else
		{
			// This blog has only 1 category so puna_tm_categorized_blog should return false.
			return false;
		}
	}

	/**
	 * ------------------------------------------------------------------------------------------
	 * 13.0 - Post Meta function
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'post-meta.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 14.0 - Include Custom Ravis Widgets
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_WIDGET_PATH . 'ravis-recent-post-thumb.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 15.0 - Create required WP data based tables.
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'create-required-tables.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 16 - Limit the search result for Posts
	 * ------------------------------------------------------------------------------------------
	 */

	if ( ! function_exists( 'puna_tm_search_filter' ) )
	{
		function puna_tm_search_filter( $query )
		{
			global $puna_opt;

			if ( empty( $puna_opt['opt-search-in-pages'] ) )
			{
				if ( $query->is_search )
				{
					$query->set( 'post_type', 'post' );
				}

				return $query;
			}
		}
	}
	add_filter( 'pre_get_posts', 'puna_tm_search_filter' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 17 - Excerpt setting of blog
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'excerpt-setting.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 18 - Link Posts links
	 * ------------------------------------------------------------------------------------------
	 */
	if ( ! function_exists( 'puna_tm_get_link_url' ) )
	{
		function puna_tm_get_link_url()
		{
			$has_url = get_url_in_content( get_the_content() );

			return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
		}
	}

	/**
	 * ------------------------------------------------------------------------------------------
	 * 19 - Breadcrumb background function
	 * It will be generated the background image of breadcrumb
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'set-breadcrumb-bg.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * 20 - Enqueue Google Font
	 * ------------------------------------------------------------------------------------------
	 */

	include( PUNA_FUNCTIONS_PATH . 'google-font-enqueue.php' );


	/**
	 * ------------------------------------------------------------------------------------------
	 *  21 - Add required class to the body
	 * ------------------------------------------------------------------------------------------
	 */
	include( PUNA_FUNCTIONS_PATH . 'add_container_class.php' );


// theme option acf
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Options du theme ',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'themes.php',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}