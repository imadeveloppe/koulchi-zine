<?php
	/**
	 * Plugin Name: Puna Plugin
	 * Plugin URI: http://themeforest.net/user/RavisTheme
	 * Description: Required plugin for Puna theme
	 * Version: 1.0.0
	 * Author: RavisTheme
	 * Author URI: http://themeforest.net/user/RavisTheme
	 * Text Domain: puna
	 * Domain Path:  /languages
	 * This is not a free software and you can only use it with RavisTheme templates.
	 */


	if ( ! defined( 'ABSPATH' ) )
	{
		exit;
	}

	define( 'PUNA_PLG_VERSION', '1.0.0' );

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
	if ( ! defined( 'PUNA_PLG_BASE_URL' ) )
	{
		define( 'PUNA_PLG_BASE_URL', esc_url( plugin_dir_url( __FILE__ ) ) );
	}
	if ( ! defined( 'PUNA_PLG_IMG_PATH' ) )
	{
		define( 'PUNA_PLG_IMG_PATH', PUNA_PLG_BASE_URL . 'assets/img/' );
	}
	if ( ! defined( 'PUNA_PLG_JS_PATH' ) )
	{
		define( 'PUNA_PLG_JS_PATH', PUNA_PLG_BASE_URL . 'assets/js/' );
	}

	register_activation_hook( __FILE__, array( 'Puna_plugin_main', 'puna_plg_activate' ) );
	register_deactivation_hook( __FILE__, array( 'Puna_plugin_main', 'puna_plg_deactivate' ) );
	// register_uninstall_hook( __FILE__, array( 'Puna_plugin_main', 'uninstall' ) );

	/**
	 * ------------------------------------------------------------------------------------------
	 * Define Constants and Variables
	 * ------------------------------------------------------------------------------------------
	 */
	$puna_plg_base = __FILE__;
	define( 'PUNA_PLG_BASE', $puna_plg_base );
	define( 'PUNA_PLG_PATH', plugin_dir_path( $puna_plg_base ) );
	define( 'PUNA_PLG_MAIN_FILE', $puna_plg_base );
	define( 'PUNA_PLG_FIELDS', PUNA_PLG_PATH . 'fields/' );
	define( 'PUNA_PLG_SHORTCODES', PUNA_PLG_PATH . 'shortcodes/' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * Include Meta box classes
	 * ------------------------------------------------------------------------------------------
	 */

	require_once( PUNA_PLG_FIELDS . 'agent.php' );
	require_once( PUNA_PLG_FIELDS . 'amenities.php' );
	require_once( PUNA_PLG_FIELDS . 'booking.php' );
	require_once( PUNA_PLG_FIELDS . 'page_id_class.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * Add shortcode class
	 * ------------------------------------------------------------------------------------------
	 */

	require_once( PUNA_PLG_PATH . 'shortcode.class.php' );

	/**
	 * ------------------------------------------------------------------------------------------
	 * Main Class of Puna Plugin
	 * ------------------------------------------------------------------------------------------
	 */
	class Puna_plugin_main
	{

		public function __construct()
		{
			add_action( 'init', array( $this, 'puna_plg_load_plugin_text_domain' ), 0 );
			add_action( 'init', array( $this, 'puna_plg_register_custom_post_type' ), 0 );
			add_action( 'wp_enqueue_scripts', array( $this, 'puna_plg_register_script' ) );
			// Booking Form Function
			add_action( 'wp_ajax_nopriv_booking_form', array( $this, 'puna_plg_puna_booking_form_func' ) );
			add_action( 'wp_ajax_booking_form', array( $this, 'puna_plg_puna_booking_form_func' ) );
			// Get Booking Information Function
			add_action( 'wp_ajax_nopriv_puna_plg_get_booking_info', array( $this, 'puna_plg_get_booking_info_fn' ) );
			add_action( 'wp_ajax_puna_plg_get_booking_info', array( $this, 'puna_plg_get_booking_info_fn' ) );
			// Update Booking Table Function
			add_action( 'wp_trash_post', array( $this, 'puna_plg_update_puna_booking_table' ) );
			// Email Notification Function
			add_action( 'publish_booking', array( $this, 'puna_plg_confirm_booking_notification', 10, 2 ) );
			// Add Button to TinyMCE Functions
			add_filter( 'mce_external_plugins', array( $this, 'puna_plg_add_buttons' ) );
			add_filter( 'mce_buttons', array( $this, 'puna_plg_register_buttons' ) );
			add_action( 'wp_ajax_ravis_tinymce', array( $this, 'puna_plg_ajax_tinymce' ) );
		}

		public static function puna_plg_activate()
		{

			global $wpdb;

			$table_name      = $wpdb->prefix . "ravis_booking";
			$charset_collate = $wpdb->get_charset_collate();
			/**
			 * Create Booking Room table
			 * @var string table_name
			 */
			$sql = "CREATE TABLE $table_name (
				id INT NOT NULL AUTO_INCREMENT,
				booking_id INT NOT NULL,
				guest_name VARCHAR(300) NOT NULL,
				guest_email VARCHAR(300) NOT NULL,
				guest_phone INT NOT NULL,
				check_in_date INT NOT NULL,
				check_in_time INT NOT NULL,
				guest_message longtext NOT NULL,
				confirmed INT NOT NULL DEFAULT '0',
				UNIQUE KEY id (id)
			) $charset_collate;";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );

		}

		/**
		 * Load plugin text domain
		 */

		public static function puna_plg_load_plugin_text_domain()
		{
			load_plugin_textdomain( 'puna', false, 'puna/languages/' );
		}


		public function puna_plg_ajax_tinymce()
		{
			if ( current_user_can( 'edit_posts' ) or current_user_can( 'edit_pages' ) )
			{
				include_once( PUNA_PLG_PATH . 'ravisButtons.php' );
				die();
			}
			else
			{
				die( esc_html__( "You are not allowed to be here", 'puna' ) );
			}
		}

		/*
		 * Adding button to MCE
		 */

		public function puna_plg_add_buttons( $plugin_array )
		{
			$plugin_array['ravisButtons'] = PUNA_PLG_JS_PATH . 'ravisButtons.js';

			return $plugin_array;
		}

		/*
		 * Registering button to MCE
		 */

		public function puna_plg_register_buttons( $buttons )
		{
			array_push( $buttons, 'ravisShortcodes' );

			return $buttons;
		}

		/**
		 * Register All required post types for Plugin
		 */

		public static function puna_plg_register_custom_post_type()
		{

			/**
			 * ------------------------------------------------------------------------------------------
			 * Guest Book post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'testimonials', array(
				'label'               => esc_html__( 'Testimonials', 'puna' ),
				'description'         => esc_html__( 'Manage the testimonials which is given by your users.', 'puna' ),
				'exclude_from_search' => true,
				'public'              => true,
				'has_archive'         => true,
				'rewrite'             => array( 'slug' => 'testimonials' ),
				'menu_icon'           => 'dashicons-format-status'
			) );
			/**
			 * ------------------------------------------------------------------------------------------
			 * Services post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'service', array(
				'label'               => esc_html__( 'Services', 'puna' ),
				'description'         => esc_html__( 'Manage the services that you provide.', 'puna' ),
				'public'              => true,
				'has_archive'         => false,
				'exclude_from_search' => true,
				'rewrite'             => array( 'slug' => 'service' ),
				'supports'            => array( 'title', 'editor', 'thumbnail' ),
				'menu_icon'           => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzgwLjcyMXB4IiBoZWlnaHQ9IjM4MC43MjJweCIgdmlld0JveD0iMCAwIDM4MC43MjEgMzgwLjcyMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzgwLjcyMSAzODAuNzIyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGc+PHBhdGggZD0iTTEyOS4xOTQsMTk1LjI0NmMwLjI1LTQuMDcyLDAuNS04LjE1LDEuMDM0LTEyLjI2OWMwLjk4Ny05Ljc2NiwzLjEwOC0xOS41NzIsNS4yNzUtMjkuMTExYzEuMzE5LTQuNzU4LDIuNzQ4LTkuNDU4LDQuMjQ3LTE0LjA1M2MxLjkxNy00LjQ4NSwzLjc5My04Ljk0Niw1LjY2NC0xMy4zMDNjNC4yMzUtOC41MDUsOC45Ny0xNi40NTIsMTQuNjIyLTIzLjEwNGMxLjM0Mi0xLjcxNCwyLjY3Mi0zLjM3NSwzLjk3NC01LjA0MmMxLjQ4Ny0xLjQ4NywyLjk3NS0yLjkyOCw0LjQwOS00LjM2OWMzLjAyNy0yLjczNiw1LjY1Mi01LjY5OSw4LjY3NC03Ljg3MmM2LjAyMy00LjQ2MSwxMS4zNTItOC43MDIsMTYuNzc3LTExLjMyOGM1LjIyOS0yLjkxNyw5LjcxMy01LjQ0OSwxMy43NTYtNi44NzhjNy45MjQtMy4xODksMTIuNDIxLTQuNzkyLDEyLjQyMS00Ljc5MnMtMy44MzUsMy4wNDQtMTAuNTM4LDcuOTgyYy0zLjQ2MywyLjI2LTcuMTM0LDUuODI3LTExLjUwMyw5LjQ4MWMtNC41NTUsMy40ODUtOC42NzksOC40ODEtMTMuNTgyLDEzLjI2OWMtMi40NTIsMi40NDYtNC4zNTYsNS41MTktNi42NzUsOC4zNDhjLTEuMTI3LDEuNDQxLTIuMjgzLDIuODkzLTMuNDc1LDQuMzY5Yy0wLjk2NCwxLjYyNy0xLjk2MywzLjI1OS0yLjk3NCw0LjkyNmMtNC4zMjgsNi40MTQtNy41NjMsMTMuOTQzLTEwLjkzNCwyMS41ODJjLTEuMzgzLDMuOTk3LTIuNzgyLDguMDUyLTQuMjEyLDEyLjE0N2MtMC45NzYsNC4yNTgtMi4wNTYsOC41NjItMy4yMzUsMTIuODVjLTEuNzcyLDguODEyLTMuNTA5LDE3LjgtNC4yNTksMjcuMDQyYy0wLjUyMiwzLjM1Mi0wLjc3Miw2LjczMy0xLjA4NiwxMC4xMzdjNzMuNDM2LDAuMDEyLDEzMC4yNzQsMC4wNTgsMjA5LjgwNSwwLjA1OGMwLjI2Ny0zLjQ4NiwwLjQxOC03LjAxOCwwLjQxOC0xMC41NjdjMC02Ni45ODEtNDguODExLTEyMi4xNDctMTExLjYyMS0xMjkuNDU1YzQuMDU1LTMuNzkzLDYuNjIzLTkuMTczLDYuNjIzLTE1LjE1N2MwLjAyMy0xMS41MDItOS4yOTUtMjAuODA5LTIwLjc3NC0yMC44MDljLTExLjQ5MSwwLTIwLjgyLDkuMzA3LTIwLjgyLDIwLjgwOWMwLDUuOTk2LDIuNTU2LDExLjM2Myw2LjYyMiwxNS4xNTdjLTYyLjgwNSw3LjMwOC0xMTEuNjAzLDYyLjQ3NC0xMTEuNjAzLDEyOS40NTVjMCwzLjUzOCwwLjEyNyw3LjAyMywwLjM4OSwxMC40OThDMTE0LjM2OSwxOTUuMjQ2LDEyMS44NTcsMTk1LjI0NiwxMjkuMTk0LDE5NS4yNDZ6Ii8+PHJlY3QgeD0iODMuMzI5IiB5PSIyMDIuOTk1IiB3aWR0aD0iMjk3LjM5MiIgaGVpZ2h0PSIyNi4yMzYiLz48cGF0aCBkPSJNMjU4LjYzMSwyNDcuODU1Yy0xNS4xMTUsNy4zNDMtNjcuODE4LDI2LjM1MS02Ny44MTgsMjYuMzUxbC02Mi4yOTktMy45MDNjMCwwLDM1LjYzNS05LjkxMSw0OS40NDktMTMuMDEzYzEzLjgzOC0zLjA5MSw3LjgxOS0xOC42OTQsMC4xNjgtMTguNjk0Yy03LjY1LDAtNzQuMzI0LDIuNzUzLTc0LjMyNCwyLjc1M0w1OS41MzQsMjU3LjI5bDExLjcxNyw3NC4xNjJjMCwwLDkuMTE1LTE1LjYwNCwxOC4yMDctMTUuNjA0YzkuMTI2LDAsODguMTc0LDIuMTAzLDk4LjkwNCwwYzEwLjczNi0yLjEyNyw3Ni4xMjYtNDYuODU5LDgzLjk1Ny01Mi4wNzZDMjgwLjExNSwyNTguNTc5LDI3My44MDUsMjQwLjUwMSwyNTguNjMxLDI0Ny44NTV6Ii8+PHBvbHlnb24gcG9pbnRzPSIwLDI2NS4yNjEgMCwzNjEuMzk0IDY3LjgzLDM0OC42OTQgNTAuODYxLDI1Ni4zMTMgIi8+PC9nPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48L3N2Zz4='
			) );
			/**
			 * ------------------------------------------------------------------------------------------
			 * Attractions post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'attraction', array(
				'label'               => esc_html__( 'Attractions', 'puna' ),
				'description'         => esc_html__( 'Manage the attraction which are located around your property.', 'puna' ),
				'public'              => true,
				'has_archive'         => true,
				'exclude_from_search' => true,
				'rewrite'             => array( 'slug' => 'attraction' ),
				'supports'            => array( 'title', 'editor', 'thumbnail' ),
				'menu_icon'           => 'dashicons-palmtree'
			) );
			/**
			 * ------------------------------------------------------------------------------------------
			 * Amenities post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'amenities', array(
				'label'               => esc_html__( 'Amenities', 'puna' ),
				'description'         => esc_html__( 'Manage the amenities of your property..', 'puna' ),
				'public'              => true,
				'has_archive'         => false,
				'exclude_from_search' => true,
				'rewrite'             => array( 'slug' => 'amenities' ),
				'supports'            => array( 'title' ),
				'menu_icon'           => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjk3IDI5NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk3IDI5NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik05OC4zNTEsMjAyLjA0M0g1LjMzN2wtMy43MjUsNzEuMDIxYy0wLjE0MSwyLjY4NSwwLjgyOCw1LjMxLDIuNjc4LDcuMjYxYzEuODUxLDEuOTUsNC40MjEsMy4wNTUsNy4xMSwzLjA1NWM0LjkyMiwwLDYuOTIyLDEuMjA0LDEwLjIzNCwzLjE5OGM0LjIxMSwyLjUzNiw5Ljk3OCw2LjAwOCwyMC4zNDYsNi4wMDhzMTYuMTM0LTMuNDcyLDIwLjM0NS02LjAwOGMzLjMxMi0xLjk5NCw1LjMxMi0zLjE5OCwxMC4yMzQtMy4xOThjNC45MiwwLDYuOTIsMS4yMDQsMTAuMjMyLDMuMTk4YzQuMjEsMi41MzYsOS45NzYsNi4wMDgsMjAuMzQ0LDYuMDA4czE2LjEzNC0zLjQ3MiwyMC4zNDQtNi4wMDhjMy4zMTItMS45OTQsNS4zMTItMy4xOTgsMTAuMjMyLTMuMTk4YzMuNjA1LDAsNi45MTktMS45NzksOC42MjgtNS4xNTJjMS43MTEtMy4xNzMsMS41NDEtNy4wMjktMC40NDEtMTAuMDRMOTguMzUxLDIwMi4wNDN6Ii8+PHBhdGggZD0iTTI5MS42NjMsMjAyLjA0M2gtOTMuMDE0bC00My41NDcsNjYuMTQ0Yy0xLjk4MiwzLjAxMS0yLjE1Miw2Ljg2Ny0wLjQ0MSwxMC4wNGMxLjcxLDMuMTczLDUuMDI0LDUuMTUyLDguNjI4LDUuMTUyYzQuOTIxLDAsNi45MjEsMS4yMDQsMTAuMjMzLDMuMTk4YzQuMjEsMi41MzYsOS45NzcsNi4wMDgsMjAuMzQ0LDYuMDA4YzEwLjM2OCwwLDE2LjEzNC0zLjQ3MywyMC4zNDUtNi4wMDhjMy4zMTEtMS45OTUsNS4zMS0zLjE5OCwxMC4yMy0zLjE5OGM0LjkyMiwwLDYuOTIyLDEuMjA0LDEwLjIzNCwzLjE5OGM0LjIxMSwyLjUzNiw5Ljk3OCw2LjAwOCwyMC4zNDYsNi4wMDhzMTYuMTM1LTMuNDcyLDIwLjM0Ni02LjAwOGMzLjMxMi0xLjk5NCw1LjMxMi0zLjE5OCwxMC4yMzQtMy4xOThjMi42ODksMCw1LjI2LTEuMTA1LDcuMTEtMy4wNTVjMS44NS0xLjk1MSwyLjgxOS00LjU3NiwyLjY3OC03LjI2MUwyOTEuNjYzLDIwMi4wNDN6Ii8+PHBhdGggZD0iTTIzMi42OTcsNTguNjJjLTIzLjMwOSw5LjUxNi01Mi41NjksMTUuNDAxLTc5LjE5MSwxNi4wMThjLTAuMDA0LDAuMTEyLTAuMDE4LDAuMjIxLTAuMDE4LDAuMzM0YzAsMS4xNDEsMC4wOTEsMjguMjcxLDcuOTcyLDU1Ljg1NGMxMC40NDQsMzYuNTUyLDI4LjExNCw1MS45MDYsNDQuOTYxLDU3LjQ5NGg4NC41MjRsLTguNjE3LTE2NC4zMDJoNC44NzFjNS40MTMsMCw5LjgwMi00LjM4OSw5LjgwMi05LjgwMnMtNC4zODktOS44MDItOS44MDItOS44MDJIOS44MDJDNC4zODksNC40MTUsMCw4LjgwNCwwLDE0LjIxN3M0LjM4OSw5LjgwMiw5LjgwMiw5LjgwMmg0Ljg3Mkw2LjA1NywxODguMzIxaDg0LjUyNGMxNi44NDYtNS41ODgsMzQuNTE2LTIwLjk0Miw0NC45Ni01Ny40OTRjNy44ODEtMjcuNTgzLDcuOTcyLTU0LjcxMyw3Ljk3Mi01NS44NTRjMC0wLjExOC0wLjAxNS0wLjIzMi0wLjAxOS0wLjM0OWMtMjYuNDA2LTAuNzE2LTU1LjMxNi02LjU4My03OC4zOS0xNi4wMDNjLTIzLjI3OS05LjUwNi0zOC4wODUtMjEuNTQ5LTQyLjg3Ni0zNC42MDJoMTUuMzljNS4zMTYsNy42MzYsMTYuNzE3LDE1LjM4MiwzMi42NzMsMjEuODk3YzIzLjA5OSw5LjQzMiw1Mi40ODYsMTUuMDYyLDc4LjYwOSwxNS4wNjJzNTUuNTEtNS42Myw3OC42MDktMTUuMDYyYzE1Ljk1Ni02LjUxNSwyNy4zNTctMTQuMjYsMzIuNjczLTIxLjg5N2gxNS4zOUMyNzAuNzgyLDM3LjA3MiwyNTUuOTc2LDQ5LjExNSwyMzIuNjk3LDU4LjYyeiIvPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48L3N2Zz4='
			) );
			/**
			 * ------------------------------------------------------------------------------------------
			 * Staff post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'agent', array(
				'label'               => esc_html__( 'Agents', 'puna' ),
				'description'         => esc_html__( 'Manage the agents of property.', 'puna' ),
				'public'              => true,
				'has_archive'         => true,
				'exclude_from_search' => true,
				'rewrite'             => array( 'slug' => 'agent' ),
				'supports'            => array( 'title', 'editor', 'thumbnail' ),
				'menu_icon'           => 'dashicons-businessman'
			) );
			/**
			 * ------------------------------------------------------------------------------------------
			 * Booking post_type
			 * ------------------------------------------------------------------------------------------
			 */
			register_post_type( 'booking', array(
				'label'               => esc_html__( 'Booking', 'puna' ),
				'description'         => esc_html__( 'Manage the Booking posts.', 'puna' ),
				'public'              => true,
				'has_archive'         => true,
				'exclude_from_search' => true,
				'rewrite'             => array( 'slug' => 'booking' ),
				'supports'            => array( 'title' ),
				'menu_icon'           => 'dashicons-calendar-alt'
			) );
		}

		public static function puna_plg_deactivate()
		{
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 *  Include required plugin js
		 * ------------------------------------------------------------------------------------------
		 */

		public function puna_plg_register_script()
		{
			wp_enqueue_script( 'puna-plugin-js', PUNA_PLG_JS_PATH . 'puna.js', array(), PUNA_PLG_VERSION, true );
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 *   Booking form functionality
		 * ------------------------------------------------------------------------------------------
		 */
		public function puna_plg_puna_booking_form_func()
		{
			global $wpdb, $puna_opt;

			$puna_auto_confirm = isset( $puna_opt['puna-booking-autoconfirm'] ) && $puna_opt['puna-booking-autoconfirm'] == '1' ? true : false;
			$name              = isset( $_POST['nameVal'] ) ? trim( $_POST['nameVal'] ) : '';
			$email             = isset( $_POST['emailVal'] ) ? trim( $_POST['emailVal'] ) : '';
			$phone             = isset( $_POST['phoneVal'] ) ? trim( $_POST['phoneVal'] ) : '';
			$check_in_date     = isset( $_POST['dateVal'] ) ? strtotime( $_POST['dateVal'] ) : '';
			$check_in_time     = isset( $_POST['timeVal'] ) ? sanitize_text_field( $_POST['timeVal'] ) : '';
			if ( strpos( $check_in_time, ':' ) )
			{
				$check_in_time_p = explode( ':', $check_in_time );
				$check_in_time   = $check_in_time_p[0];
			}
			$message = isset( $_POST['messageVal'] ) ? trim( $_POST['messageVal'] ) : '';

			if ( ! empty( $name ) and ! empty( $phone ) and ! empty( $check_in_date ) and ! empty( $check_in_time ) )
			{

				/**
				 * ------------------------------------------------------------------------------------------
				 * Check for previous Booking
				 * ------------------------------------------------------------------------------------------
				 */
				$table_name           = $wpdb->prefix . 'ravis_booking';
				$affected_booking     = $wpdb->get_row( $wpdb->prepare( "
							SELECT * FROM  $table_name
							WHERE check_in_date = %s AND check_in_time = %s AND confirmed = 1
							", array(
					$check_in_date,
					$check_in_time
				) ) );
				$affected_rows_number = $wpdb->num_rows;

				if ( isset( $affected_booking ) && $affected_rows_number > 0 )
				{
					$result['status']  = false;
					$result['message'] = esc_html__( "We are NOT available. Please try other dates and hours.", 'puna' );
				}
				else
				{

					/**
					 * insert a post in booking post_type
					 * @var array $post_info
					 */
					if ( $puna_auto_confirm )
					{
						$post_info = array(
							'post_title'  => $name . ' - ' . $email . ' - ' . $phone . ' - ' . date( 'Y-m-d', $check_in_date ) . ' - ' . $check_in_time . ':00',
							'post_type'   => 'booking',
							'post_status' => 'publish'
						);
					}
					else
					{
						$post_info = array(
							'post_title'  => $name . ' - ' . $email . ' - ' . $phone . ' - ' . $check_in_date . ' - ' . $check_in_time . ':00',
							'post_type'   => 'booking',
							'post_status' => 'pending'
						);
					}
					$inserted_post_id = wp_insert_post( $post_info );

					/**
					 * update the post_meta of inserted booking post
					 * @var string $prefix "post meta prefix"
					 * @var array $post_meta_array "it contains post_meta IDs and their values"
					 */
					$prefix          = 'puna_booking_';
					$post_meta_array = array(
						array(
							'id'    => $prefix . 'name',
							'value' => $name,
						),
						array(
							'id'    => $prefix . 'email',
							'value' => $email,
						),
						array(
							'id'    => $prefix . 'phone',
							'value' => $phone,
						),
						array(
							'id'    => $prefix . 'message',
							'value' => $message,
						),
						array(
							'id'    => $prefix . 'check_in_date',
							'value' => date( 'Y-m-d', $check_in_date ),
						),
						array(
							'id'    => $prefix . 'check_in_time',
							'value' => $check_in_time,
						)
					);

					// loop through fields and save the data
					foreach ( $post_meta_array as $field )
					{
						update_post_meta( $inserted_post_id, $field['id'], $field['value'] );
					}

					/**
					 * insert booking info in ravis_booking table
					 */
					$table_name = $wpdb->prefix . 'ravis_booking';

					if ( $puna_auto_confirm )
					{
						// insert booking items
						$booking_data        = array(
							'check_in_date' => $check_in_date,
							'check_in_time' => $check_in_time,
							'guest_name'    => $name,
							'guest_email'   => $email,
							'guest_phone'   => $phone,
							'guest_message' => $message,
							'booking_id'    => $inserted_post_id,
							'confirmed'     => 1
						);
						$booking_data_format = array(
							'%s',
							'%s',
							'%s',
							'%s',
							'%s',
							'%s',
							'%d',
							'%d'
						);
					}
					else
					{
						// insert booking items
						$booking_data        = array(
							'check_in_date' => $check_in_date,
							'check_in_time' => $check_in_time,
							'guest_name'    => $name,
							'guest_email'   => $email,
							'guest_phone'   => $phone,
							'guest_message' => $message,
							'booking_id'    => $inserted_post_id
						);
						$booking_data_format = array(
							'%s',
							'%s',
							'%s',
							'%s',
							'%s',
							'%s',
							'%d'
						);
					}

					$wpdb->insert( $table_name, $booking_data, $booking_data_format );

					/**
					 * ------------------------------------------------------------------------------------------
					 * Send Notification Emails to the admins of website
					 * ------------------------------------------------------------------------------------------
					 */
					$edit_post_url = esc_url( admin_url() ) . 'post.php?post=' . $inserted_post_id . '&action=edit';
					if ( isset( $puna_opt['puna-email-notification'] ) && $puna_opt['puna-email-notification'] == '1' )
					{
						$email_sender        = ( ! empty( $puna_opt['puna-email-sender'] ) ? $puna_opt['puna-email-sender'] : get_option( 'admin_email' ) );
						$multiple_recipients = ( isset( $puna_opt['puna-email-receiver'] ) ? $puna_opt['puna-email-receiver'] : '' );
						$subj                = esc_html__( 'New Booking Information was  in your website. Booking ID : ', 'puna' ) . $inserted_post_id;
						$headers             = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: "' . get_bloginfo( 'name' ) . '" <' . $email_sender . '>';

						$link_shortcodes   = array(
							'[booking-item-url]',
							'[/booking-item-url]',
							'[guest-name]',
							'[guest-email]',
							'[guest-phone]',
							'[guest-message]',
							'[guest-check-in-date]',
							'[guest-check-in-time]'
						);
						$link_replace_text = array(
							'<a href="' . esc_url( $edit_post_url ) . '" target="_blank">',
							'</a>',
							$name,
							$email,
							$phone,
							$message,
							$check_in_date,
							$check_in_time
						);
						$body              = str_replace( $link_shortcodes, $link_replace_text, $puna_opt['puna-admin-email-template'] );

						if ( ! empty( $multiple_recipients ) )
						{
							foreach ( $multiple_recipients as $receiver_email )
							{
								wp_mail( $receiver_email, $subj, $body, $headers );
							}
						}
					}
					$result['status']  = true;
					$result['message'] = esc_html__( "Thanks for your booking.", 'puna' );
				}
			}
			else
			{
				$result['status']  = false;
				$result['message'] = esc_html__( "Please fill the required fields.", 'puna' );
			}
			echo json_encode( $result );
			die();
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Update Booking Table
		 * ------------------------------------------------------------------------------------------
		 */

		public function puna_plg_update_puna_booking_table( $post_id )
		{
			global $post, $wpdb;

			$post_type  = get_post_type( $post_id );
			$table_name = $wpdb->prefix . 'ravis_booking';
			if ( $post_type == 'booking' )
			{
				$wpdb->delete( $table_name, array( 'booking_id' => $post_id ), array( '%d' ) );
			}
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Get booking information by ajax ( used for booking overview )
		 * ------------------------------------------------------------------------------------------
		 */

		public function puna_plg_get_booking_info_fn()
		{
			global $wpdb, $post;

			$start_date = intval( $_POST['start'] );
			$end_date   = intval( $_POST['end'] );

			// Get the Booking items
			$table_name     = $wpdb->prefix . 'ravis_booking';
			$booking_result = $wpdb->get_results( $wpdb->prepare( "
									SELECT * FROM  $table_name 
									WHERE check_in_date >= %d
									AND check_in_date <= %d
									AND confirmed = %d 
									", array(
				$start_date,
				$end_date,
				1
			) ) );
			if ( ! empty( $booking_result ) )
			{
				foreach ( $booking_result as $booking_item )
				{

					$result[] = array(
						'title' => esc_html__( 'Booked for : ', 'puna' ) . $booking_item->check_in_time . ':00',
						'start' => date( "Y-m-d", $booking_item->check_in_date ) . 'T' . ($booking_item->check_in_time < 10 ? '0'.$booking_item->check_in_time : $booking_item->check_in_time) . ':00',
						'end'   => date( "Y-m-d", $booking_item->check_in_date ) . 'T' . ($booking_item->check_in_time < 10 ? '0'.($booking_item->check_in_time + 1) : ($booking_item->check_in_time + 1) ) . ':00'
					);
				}
			}

			// Return the result
			echo json_encode( $result );
			die();
		}

		/**
		 * ------------------------------------------------------------------------------------------
		 * Booking Confirmation Notification Function
		 * ------------------------------------------------------------------------------------------
		 */

		public function puna_plg_confirm_booking_notification( $ID, $post )
		{
			global $wpdb, $puna_opt;

			$table_name = $wpdb->prefix . 'ravis_booking';
			$post_id    = $post->ID;

			$get_booking_row = $wpdb->get_row( $wpdb->prepare( "
										SELECT * FROM  $table_name
										WHERE booking_id = %d
										", array(
					$post_id
				) ) );

			if ( empty( $get_booking_row ) )
			{
				$guest_name          = sanitize_text_field( $_POST['puna_booking_name'] );
				$guest_email         = sanitize_email( $_POST['puna_booking_email'] );
				$guest_phone         = sanitize_text_field( $_POST['puna_booking_phone'] );
				$guest_check_in_date = strtotime( sanitize_text_field( $_POST['puna_booking_check_in_date'] ) );
				$guest_check_in_time = sanitize_text_field( $_POST['puna_booking_check_in_time'] );
				$guest_message       = sanitize_text_field( $_POST['puna_booking_message'] );

				// insert booking items
				$booking_data        = array(
					'check_in_date' => $guest_check_in_date,
					'check_in_time' => $guest_check_in_time,
					'guest_name'    => $guest_name,
					'guest_email'   => $guest_email,
					'guest_phone'   => $guest_phone,
					'guest_message' => $guest_message,
					'booking_id'    => $post_id,
					'confirmed'     => 1
				);
				$booking_data_format = array(
					'%s',
					'%s',
					'%s',
					'%s',
					'%s',
					'%s',
					'%d',
					'%d'
				);
				$wpdb->insert( $table_name, $booking_data, $booking_data_format );
			}
			else
			{
				$guest_email = get_post_meta( $post_id, 'puna_booking_email', true );
				$guest_name  = get_post_meta( $post_id, 'puna_booking_name', true );
			}

			if ( isset( $puna_opt['puna-email-notification'] ) && $puna_opt['puna-email-notification'] == '1' )
			{
				$email_sender = ( ! empty( $puna_opt['puna-email-sender'] ) ? $puna_opt['puna-email-sender'] : get_option( 'admin_email' ) );
				$subj         = esc_html__( 'Your Booking is confirmed. Booking ID is : ', 'puna' ) . $post_id;
				$headers      = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: "' . get_bloginfo( 'name' ) . '" <' . $email_sender . '>';

				$mail_tmpl_shortcodes = array( '[guest-name]', '[user-booking-id]' );
				$mail_tmpl_replace    = array( $guest_name, $post_id );
				$body                 = str_replace( $mail_tmpl_shortcodes, $mail_tmpl_replace, $puna_opt['puna-users-email-template'] );

				wp_mail( $guest_email, $subj, $body, $headers );
			}

			// Update the status of booking in ravis_booking table
			$update_table = $wpdb->update( $table_name, array(
				'confirmed' => 1
			), array(
				'booking_id' => $post_id
			), array( '%d' ), array( '%d' ) );
		}


		/*
			public static function uninstall() {
				if ( __FILE__ != WP_UNINSTALL_PLUGIN )
					return;
			}
		*/
	}

	$puna_plg_obj = new Puna_plugin_main;


	/**
	 * ------------------------------------------------------------------------------------------
	 *  Newsletter Widget
	 * ------------------------------------------------------------------------------------------
	 */
	class Ravis_news_letter extends WP_Widget
	{

		function __construct()
		{
			parent::__construct( 'ravis_news_letter', // Base ID
				esc_html__( 'Ravis Newsletter', 'puna' ), // Name
				array( 'description' => esc_html__( 'Show newsletter subscription form.', 'puna' ), ) // Args
			);
		}

		/**
		 * Front-end display of widget
		 **/
		public function widget( $args, $instance )
		{

			echo balancetags( $args['before_widget'] );
			if ( ! empty( $instance['title'] ) )
			{
				echo balancetags( $args['before_title'] ) . apply_filters( 'widget_title', $instance['title'] ) . balancetags( $args['after_title'] );
			}
			echo '
			<div class="newletter-container widget-content">
				<div class="desc">' . wp_kses_post( $instance['user_description'] ) . '</div>
				<form class="news-letter-form">
					<input class="email_address email" placeholder="' . esc_attr( __( "Email", 'puna' ) ) . '" type="email"/>
					<div class="message-container"></div>
					<input type="submit" class="btn btn-default" value="' . esc_html__( "Sign Up Now", 'puna' ) . '">
				</form>
		';
			echo balancetags( $args['after_widget'] );

			echo '
			<script type="text/javascript">
				function IsEmail(email) {
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					return regex.test(email);
				}
				jQuery(document).ready(function(){
					"use strict"
					jQuery("#' . esc_js( $args['widget_id'] ) . '").find(".btn").on("click", function(e){
						e.preventDefault();
						var widgetContainer   = jQuery("#' . esc_js( $args['widget_id'] ) . '"),
							messageContainer  = widgetContainer.find(".message-container"),
							userEmail         = widgetContainer.find("input[type=email]").val();
						messageContainer.removeClass("active").html("");

						if( IsEmail(userEmail) == false ) {
							messageContainer.addClass("active").html("' . esc_js( __( "Please add a valid email", 'puna' ) ) . '");
							return false;
				        }
						var data = {
							action: "ravis_newsletter_add_email",
							email: userEmail
						};
						jQuery.post("' . esc_url( admin_url() ) . 'admin-ajax.php", data, function(data){
							var returnData = JSON.parse(jQuery.trim(data));
								messageContainer.addClass("active").html(returnData.message);
						});
					});
				});
			</script>
		</div>';
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance )
		{
			$title            = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'puna' );
			$user_description = ! empty( $instance['user_description'] ) ? $instance['user_description'] : 3;
			?>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'puna' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
				       value="<?php echo esc_attr( $title ); ?>">
			</p>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'user_description' ) ); ?>"><?php esc_html_e( 'Newsletter description:', 'puna' ); ?></label>
				<textarea class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'user_description' ) ); ?>"
				          id="<?php echo esc_attr( $this->get_field_id( 'user_description' ) ); ?>" cols="20"
				          rows="7"><?php echo esc_textarea( $user_description ); ?></textarea>
			</p>
			<p>
				<a href="<?php echo esc_url( PUNA_BASE_URL ) . '/newsletter_emails.csv' ?>"
				   target="_blank"><?php esc_html_e( 'Download the subscriber\'s email', 'puna' ); ?></a>
			</p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance )
		{
			$instance                     = array();
			$instance['title']            = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['user_description'] = ( ! empty( $new_instance['user_description'] ) ) ? strip_tags( $new_instance['user_description'] ) : '';

			return $instance;
		}
	}

	class Ravis_news_letter_init
	{

		public function __construct()
		{
			add_action( 'widgets_init', array( $this, 'puna_newsletter_register_widgets' ) );
			add_action( 'wp_ajax_nopriv_ravis_newsletter_add_email', array( $this, 'ravis_newsletter_add_email' ) );
			add_action( 'wp_ajax_ravis_newsletter_add_email', array( $this, 'ravis_newsletter_add_email' ) );
		}

		public function puna_newsletter_register_widgets()
		{
			register_widget( 'Ravis_news_letter' );
		}

		/**
		 * Create Ajax Function for adding email to the newsletter table
		 */

		public function ravis_newsletter_add_email()
		{
			global $wpdb;
			$user_email = $_POST['email'];
			$result     = array();

			// filter the variable
			if ( filter_var( $user_email, FILTER_VALIDATE_EMAIL ) )
			{
				$table_name  = $wpdb->prefix . 'ravis_newsletter';
				$check_query = $wpdb->get_results( $wpdb->prepare( "
								SELECT id FROM $table_name
								WHERE email = %s
								", array(
						$user_email
					) ) );

				if ( $check_query )
				{
					$result['message'] = esc_html__( "You have already subscribed.", 'puna' );
				}
				else
				{
					$wpdb->insert( $table_name, array(
							'email' => $user_email,
						), array( '%s' ) );
					if ( $wpdb->insert_id )
					{
						$result['message'] = esc_html__( "Thanks for your subscription.", 'puna' );

						/**
						 * Create the emails csv file
						 */
						$email_list = $wpdb->get_results( "SELECT email FROM $table_name" );
						foreach ( $email_list as $emails_item )
						{
							$new_email_list[] = $emails_item->email;
						}
						$fp = fopen( PUNA_THEMEROOT . '/newsletter_emails.csv', 'w' );
						fputcsv( $fp, $new_email_list );
						fclose( $fp );
					}
					else
					{
						$result['message'] = esc_html__( "Email was not added!", 'puna' );
					}
				}
			}
			else
			{
				$result['message'] = esc_html__( "Please add a valid email format", 'puna' );
			}
			echo json_encode( $result );
			die();
		}

	}

	$puna_plg_widget_obj = new Ravis_news_letter_init();