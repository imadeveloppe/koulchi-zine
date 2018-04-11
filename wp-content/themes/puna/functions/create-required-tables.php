<?php
	// Create Required DB tables for theme
	if ( ! function_exists( 'puna_tm_create_widget_tables' ) )
	{
		function puna_tm_create_widget_tables()
		{
			global $wpdb;
			/**
			 * Create Booking Events table
			 * @var string table_name
			 */
			if ( is_active_widget( false, false, "ravis_news_letter" ) )
			{
				$table_newsletter_name = $wpdb->prefix . "ravis_newsletter";
				$charset_collate       = $wpdb->get_charset_collate();
				$sql2                  = "CREATE TABLE $table_newsletter_name (
				id INT NOT NULL AUTO_INCREMENT,
				email text NOT NULL,
				UNIQUE KEY id (id)
			) $charset_collate;";
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
				dbDelta( $sql2 );
			}
		}
	}
	add_action( 'init', 'puna_tm_create_widget_tables' );