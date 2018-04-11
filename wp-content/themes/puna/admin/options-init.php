<?php

	/**
	 * ReduxFramework Barebones Sample Config File
	 * For full documentation, please visit: http://docs.reduxframework.com/
	 */

	if ( ! class_exists( 'Redux' ) ) {
		return;
	}

	// This is your option name where all the Redux data is stored.
	$opt_name = "puna_opt";

	/**
	 * ---> SET ARGUMENTS
	 * All the possible arguments for Redux.
	 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
	 * */

	$theme = wp_get_theme(); // For use with some settings. Not necessary.

	load_theme_textdomain( 'puna', get_template_directory() . '/languages' );

	$args = array(
		// TYPICAL -> Change these values as you need/desire
		'opt_name'             => $opt_name,
		// This is where your data is stored in the database and also becomes your global variable name.
		'display_name'         => 'Theme Options',
		// Name that appears at the top of your panel
		'display_version'      => $theme->get( 'Version' ),
		// Version that appears at the top of your panel
		'menu_type'            => 'menu',
		//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
		'allow_sub_menu'       => true,
		// Show the sections below the admin menu item or not
		'menu_title'           => esc_html__( 'Theme Options', 'puna' ),
		'page_title'           => esc_html__( 'Theme Options', 'puna' ),
		// You will need to generate a Google API key to use this feature.
		// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
		'google_api_key'       => '',
		// Set it you want google fonts to update weekly. A google_api_key value is required.
		'google_update_weekly' => false,
		// Must be defined to add google fonts to the typography module
		'async_typography'     => true,
		// Use a asynchronous font on the front end or font string
		//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
		'admin_bar'            => true,
		// Show the panel pages on the admin bar
		'admin_bar_icon'       => 'dashicons-portfolio',
		// Choose an icon for the admin bar menu
		'admin_bar_priority'   => 50,
		// Choose an priority for the admin bar menu
		'global_variable'      => '',
		// Set a different name for your global variable other than the opt_name
		'dev_mode'             => false,
		// Show the time the page took to load, etc
		// 'update_notice'        => true,
		// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
		'customizer'           => false,
		// Enable basic customizer support
		//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
		//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

		// OPTIONAL -> Give you extra features
		'page_priority'        => null,
		// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
		'page_parent'          => 'themes.php',
		// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
		'page_permissions'     => 'manage_options',
		// Permissions needed to access the options panel.
		'menu_icon'            => '',
		// Specify a custom URL to an icon
		'last_tab'             => '',
		// Force your panel to always open to a specific tab (by id)
		'page_icon'            => 'icon-themes',
		// Icon displayed in the admin panel next to your menu_title
		'page_slug'            => '_options',
		// Page slug used to denote the panel
		'save_defaults'        => true,
		// On load save the defaults to DB before user clicks save or not
		'default_show'         => false,
		// If true, shows the default value next to each field that is not the default value.
		'default_mark'         => '',
		// What to print by the field's title if the value shown is default. Suggested: *
		'show_import_export'   => true,
		// Shows the Import/Export panel when not used as a field.

		// CAREFUL -> These options are for advanced use only
		'transient_time'       => 60 * MINUTE_IN_SECONDS,
		'output'               => true,
		// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
		'output_tag'           => true,
		// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
		// 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

		// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
		'database'             => '',
		// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

		'use_cdn' => true,
		// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

		'compiler' => true,

		// HINTS
		'hints'    => array(
			'icon'          => 'el el-question-sign',
			'icon_position' => 'right',
			'icon_color'    => 'lightgray',
			'icon_size'     => 'normal',
			'tip_style'     => array(
				'color'   => 'light',
				'shadow'  => true,
				'rounded' => false,
				'style'   => '',
			),
			'tip_position'  => array(
				'my' => 'top left',
				'at' => 'bottom right',
			),
			'tip_effect'    => array(
				'show' => array(
					'effect'   => 'slide',
					'duration' => '500',
					'event'    => 'mouseover',
				),
				'hide' => array(
					'effect'   => 'slide',
					'duration' => '500',
					'event'    => 'click mouseleave',
				),
			),
		)
	);

	Redux::setArgs( $opt_name, $args );

	/*
	 * ---> END ARGUMENTS
	 */

	Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Main Settings', 'puna' ),
		'desc'   => esc_html__( 'Main setting of Puna theme is', 'puna' ),
		'icon'   => 'el-icon-home',
		// 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
		'fields' => array(
			array(
				'id'       => 'opt-theme',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Main Style of theme', 'puna' ),
				'subtitle' => esc_html__( 'Select the main style of theme.', 'puna' ),
				'options'  => array(
					'0' => array( 'title' => esc_html__( 'Light', 'puna' ), 'img' => PUNA_IMG_PATH . 'theme/1.png' ),
					'1' => array( 'title' => esc_html__( 'Dark', 'puna' ), 'img' => PUNA_IMG_PATH . 'theme/2.png' )
				),
				'default'  => '0'
			),
			array(
				'id'       => 'opt-layout',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Main Layout', 'puna' ),
				'subtitle' => esc_html__( 'Select the default layout of the theme.', 'puna' ),
				'options'  => array(
					'1' => array( 'title' => esc_html__( 'Wide', 'puna' ), 'img' => PUNA_IMG_PATH . 'layout/1.png' ),
					'2' => array( 'title' => esc_html__( 'Boxed', 'puna' ), 'img' => PUNA_IMG_PATH . 'layout/2.png' ),
				),
				'default'  => '1'
			),
			array(
				'id'       => 'opt-pattern',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Background Pattern', 'puna' ),
				'subtitle' => esc_html__( 'Select the background pattern. Note: it will be shown JUST in "Boxed" layout.', 'puna' ),
				'options'  => array(
					'1' => array(
						'title' => esc_html__( 'Pattern 1', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/1.png'
					),
					'2' => array(
						'title' => esc_html__( 'Pattern 2', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/2.png'
					),
					'3' => array(
						'title' => esc_html__( 'Pattern 3', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/3.png'
					),
					'4' => array(
						'title' => esc_html__( 'Pattern 4', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/4.png'
					),
					'5' => array(
						'title' => esc_html__( 'Pattern 5', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/5.png'
					),
					'6' => array(
						'title' => esc_html__( 'Pattern 6', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/6.png'
					),
					'7' => array(
						'title' => esc_html__( 'Pattern 7', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/7.png'
					),
					'8' => array(
						'title' => esc_html__( 'Pattern 8', 'puna' ),
						'img'   => PUNA_IMG_PATH . 'pattern/thumb/8.png'
					),
				),
				'default'  => '1'
			),
			array(
				'id'       => 'logo-image-normal',
				'type'     => 'media',
				'title'    => esc_html__( 'Your Logo', 'puna' ),
				'desc'     => esc_html__( 'Please provide ".png" or ".jpg" format of your logo and upload suitable size of it. Leave it blank if you want to use the default format of template\'s logo', 'puna' ),
				'subtitle' => esc_html__( 'Upload your Hotel\'s Logo. It will be replaced with the default logo of template.', 'puna' ),
			),
			array(
				'id'       => 'opt-footer-text',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Footer Text', 'puna' ),
				'subtitle' => esc_html__( 'Putt the text you want to be shown in footer in this field.', 'puna' ),
				'desc'     => esc_html__( 'Do not use HTML tags.', 'puna' ),
				'validate' => 'no_html',
				'default'  => esc_html__( '© 2016 Puna. All Rights Reserved.', 'puna' )
			),
			array(
				'id'       => 'opt-sticky-header',
				'type'     => 'switch',
				'title'    => esc_html__( 'Sticky Header', 'puna' ),
				'subtitle' => esc_html__( 'Enable / Disable the sticky header in all pages.', 'puna' ),
				'default'  => true,
			),
			array(
				'id'       => 'opt-language-switcher',
				'type'     => 'switch',
				'title'    => esc_html__( 'Language Switcher', 'puna' ),
				'subtitle' => esc_html__( 'Enable / Disable default language switcher.', 'puna' ),
				'default'  => false,
			),
			array(
				'id'    => 'opt-breadcrumb-bg',
				'type'  => 'media',
				'title' => esc_html__( 'Default Breadcrumb Background', 'puna' ),
				'desc'  => esc_html__( 'Please provide ".png" or ".jpg" format as background of breadcrumb in all pages.', 'puna' ),
			),
			array(
				'id'       => 'opt-testimonial-bg',
				'type'     => 'media',
				'title'    => esc_html__( 'Testimonial Background Image', 'puna' ),
				'desc'     => esc_html__( 'Please provide ".png" or ".jpg" format as background of testimonial section.', 'puna' ),
				'subtitle' => esc_html__( 'It will be shown if you use the [puna-testimonials] shortcode in your pages/files.', 'puna' ),
			),
			array(
				'id'       => 'opt-search-in-pages',
				'type'     => 'switch',
				'title'    => esc_html__( 'Include Pages in search result', 'puna' ),
				'subtitle' => esc_html__( 'By enabling or disabling this option you can include/exclude the pages from the search result', 'puna' ),
				'default'  => false,
			),
			array(
				'id'       => 'opt-smooth-scroll',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable Smooth Scrolling', 'puna' ),
				'subtitle' => esc_html__( 'Enable/Disable smooth scrolling on your website.', 'puna' ),
				'default'  => false,
			),
			array(
				'id'       => 'opt-custom-css',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'CSS Code', 'puna' ),
				'subtitle' => esc_html__( 'Paste your CSS code here.', 'puna' ),
				'mode'     => 'css',
				'theme'    => 'monokai',
				'desc'     => esc_html__( 'These codes will be added to all pages before </head>', 'puna' ),
			)
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Social Icons', 'puna' ),
		'desc'   => esc_html__( 'Manage the website social links. The empty field will not be shown in frontend.', 'puna' ),
		'icon'   => 'el-icon-facebook',
		'fields' => array(
			array(
				'id'       => 'opt-social-twitter',
				'type'     => 'text',
				'title'    => esc_html__( 'Twitter', 'puna' ),
				'subtitle' => esc_html__( 'Add twitter google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-facebook',
				'type'     => 'text',
				'title'    => esc_html__( 'Facebook', 'puna' ),
				'subtitle' => esc_html__( 'Add the facebook plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-gplus',
				'type'     => 'text',
				'title'    => esc_html__( 'Google Plus', 'puna' ),
				'subtitle' => esc_html__( 'Add gplus google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-flickr',
				'type'     => 'text',
				'title'    => esc_html__( 'Flickr', 'puna' ),
				'subtitle' => esc_html__( 'Add flickr google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-vimeo',
				'type'     => 'text',
				'title'    => esc_html__( 'Vimeo', 'puna' ),
				'subtitle' => esc_html__( 'Add vimeo google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-youtube',
				'type'     => 'text',
				'title'    => esc_html__( 'Youtube', 'puna' ),
				'subtitle' => esc_html__( 'Add youtube google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-pinterest',
				'type'     => 'text',
				'title'    => esc_html__( 'Pinterest', 'puna' ),
				'subtitle' => esc_html__( 'Add the pinterest plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-tumblr',
				'type'     => 'text',
				'title'    => esc_html__( 'Tumblr', 'puna' ),
				'subtitle' => esc_html__( 'Add tumblr google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-dribbble',
				'type'     => 'text',
				'title'    => esc_html__( 'Dribbble', 'puna' ),
				'subtitle' => esc_html__( 'Add the dribbble plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-digg',
				'type'     => 'text',
				'title'    => esc_html__( 'Digg', 'puna' ),
				'subtitle' => esc_html__( 'Add digg google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-linkedin',
				'type'     => 'text',
				'title'    => esc_html__( 'Linkedin', 'puna' ),
				'subtitle' => esc_html__( 'Add the linkedin plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-blogger',
				'type'     => 'text',
				'title'    => esc_html__( 'Blogger', 'puna' ),
				'subtitle' => esc_html__( 'Add blogger google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-skype',
				'type'     => 'text',
				'title'    => esc_html__( 'Skype', 'puna' ),
				'subtitle' => esc_html__( 'Add skype google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-forrst',
				'type'     => 'text',
				'title'    => esc_html__( 'Forrst', 'puna' ),
				'subtitle' => esc_html__( 'Add forrst google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-deviantart',
				'type'     => 'text',
				'title'    => esc_html__( 'Deviantart', 'puna' ),
				'subtitle' => esc_html__( 'Add the deviantart plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-yahoo',
				'type'     => 'text',
				'title'    => esc_html__( 'Yahoo', 'puna' ),
				'subtitle' => esc_html__( 'Add yahoo google plus link in this field.', 'puna' )
			),
			array(
				'id'       => 'opt-social-reddit',
				'type'     => 'text',
				'title'    => esc_html__( 'Reddit', 'puna' ),
				'subtitle' => esc_html__( 'Add reddit google plus link in this field.', 'puna' )
			),
		),

	) );

	Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Contact Information', 'puna' ),
		'desc'   => esc_html__( 'Manage the contact information of Hotel', 'puna' ),
		'icon'   => 'el-icon-envelope',
		'fields' => array(
			array(
				'id'       => 'opt-contact-text',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Contact page text', 'puna' ),
				'subtitle' => esc_html__( 'This text will be shown in the contact page ( above all the text )', 'puna' ),
			),
			array(
				'id'       => 'opt-web-site-address',
				'type'     => 'text',
				'title'    => esc_html__( 'Address', 'puna' ),
				'subtitle' => esc_html__( 'Put the address of Hotel in this field', 'puna' ),
			),
			array(
				'id'       => 'opt-web-site-email',
				'type'     => 'text',
				'title'    => esc_html__( 'Email', 'puna' ),
				'subtitle' => esc_html__( 'Put the email of the website in this field.', 'puna' ),
				'validate' => 'email'
			),
			array(
				'id'       => 'opt-web-site-phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Phone', 'puna' ),
				'subtitle' => esc_html__( 'Add the phone number of your website.', 'puna' ),
			),
			array(
				'id'    => 'opt-map-marker',
				'type'  => 'media',
				'title' => esc_html__( 'Map Marker', 'puna' ),
				'desc'  => esc_html__( 'Please provide ".png" format for showing your location on Map.', 'puna' ),
			),
			array(
				'id'       => 'opt-map-lat',
				'type'     => 'text',
				'title'    => esc_html__( 'Location Latitude', 'puna' ),
				'subtitle' => esc_html__( 'Add the latitude of your website in this field.', 'puna' ),
				'default'  => 40.6700
			),
			array(
				'id'       => 'opt-map-lng',
				'type'     => 'text',
				'title'    => esc_html__( 'Location Longitude', 'puna' ),
				'subtitle' => esc_html__( 'Add the latitude of your website in this field.', 'puna' ),
				'default'  => - 73.9400
			),
			array(
                'id'        => 'opt-map-api',
                'type'      => 'text',
                'title'     => esc_html__('Google Map API Key', 'puna'),
                'subtitle'  => esc_html__('Please add your Google map API key in this field.', 'puna'),
                'desc'      => esc_html__('You can create your own API key from https://developers.google.com/maps/documentation/javascript/get-api-key', 'puna'),
            ),
		),
	) );
	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Booking Setting', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage some setting of Booking system of template', 'puna' ),
	// 	'icon'   => 'el-icon-file-edit',
	// 	'fields' => array(
	// 		array(
	// 			'id'       => 'puna-booking-button',
	// 			'type'     => 'switch',
	// 			'title'    => esc_html__( 'Booking Button in header', 'puna' ),
	// 			'subtitle' => esc_html__( 'Enable/Disable the booking button in header.', 'puna' ),
	// 			'default'  => true,
	// 		),
	// 		array(
	// 			'id'       => 'puna-available-date-start',
	// 			'type'     => 'date',
	// 			'title'    => esc_html__( 'Start Date of Visit', 'puna' ),
	// 			'subtitle' => esc_html__( 'Insert the start date that the property is available for visit. Date format "mm/dd/yy".', 'puna' ),
	// 		),
	// 		array(
	// 			'id'       => 'puna-available-date-end',
	// 			'type'     => 'date',
	// 			'title'    => esc_html__( 'End Date of Visit', 'puna' ),
	// 			'subtitle' => esc_html__( 'Insert the end date that the property is available for visit. Date format "mm/dd/yy".', 'puna' ),
	// 		),
	// 		array(
	// 			'id'            => 'puna-available-time',
	// 			'type'          => 'slider',
	// 			'title'         => esc_html__( 'Property Available Time', 'puna' ),
	// 			'subtitle'      => esc_html__( 'Select the time range from 0:00 to 24:00 that property is available for visit', 'puna' ),
	// 			'default'       => array(
	// 				1 => '0',
	// 				2 => '24',
	// 			),
	// 			'min'           => '0',
	// 			'step'          => '1',
	// 			'max'           => '24',
	// 			'display_value' => 'label',
	// 			'handles'       => 2,
	// 		),
	// 		array(
	// 			'id'       => 'puna-booking-autoconfirm',
	// 			'type'     => 'switch',
	// 			'title'    => esc_html__( 'Booking Auto Confirm', 'puna' ),
	// 			'subtitle' => esc_html__( 'Enable this option if you want that all of booking being confirmed automatically', 'puna' ),
	// 			'default'  => true,
	// 		),
	// 		array(
	// 			'id'       => 'puna-email-notification',
	// 			'type'     => 'switch',
	// 			'title'    => esc_html__( 'Email Notification', 'puna' ),
	// 			'subtitle' => esc_html__( 'Enable / Disable email notification system of booking process', 'puna' ),
	// 			'default'  => true,
	// 		),
	// 		array(
	// 			'id'       => 'puna-email-sender',
	// 			'type'     => 'text',
	// 			'title'    => esc_html__( 'Email Sender', 'puna' ),
	// 			'subtitle' => esc_html__( 'Add an email that you want all email will be sent by it.', 'puna' ),
	// 			'desc'     => esc_html__( 'Please create an email in your host and add it here. Example : "noreply@example.com"', 'puna' ),
	// 			'validate' => 'email',
	// 		),
	// 		array(
	// 			'id'       => 'puna-email-receiver',
	// 			'type'     => 'multi_text',
	// 			'title'    => esc_html__( 'Email Receiver', 'puna' ),
	// 			'desc'     => esc_html__( 'Add the emails you want to receive the notifications.', 'puna' ),
	// 			'validate' => 'email',
	// 		),
	// 		array(
	// 			'id'         => 'puna-admin-email-template',
	// 			'type'       => 'editor',
	// 			'title'      => esc_html__( 'Email template of admins', 'puna' ),
	// 			'subtitle'   => esc_html__( 'This template will be used for emails which will be sent for admin of website.', 'puna' ),
	// 			'desc'       => esc_html__( 'For putting the booking url with the text please use this shortcode in the above editor.[booking-item-url]YOUR TEXT[/booking-item-url], here is the list of shortcode that you can use in this field : [guest-name], [guest-email], [guest-phone], [guest-message], [guest-check-in-date], [guest-check-in-time]', 'puna' ),
	// 			'default'    => esc_html__( 'Please check the new booking information and confirmed it if it was OK, here is the edit link : [booking-item-url]link[/booking-item-url]', 'puna' ),
	// 			'full_width' => true
	// 		),
	// 		array(
	// 			'id'         => 'puna-users-email-template',
	// 			'type'       => 'editor',
	// 			'title'      => esc_html__( 'Email template of users', 'puna' ),
	// 			'subtitle'   => esc_html__( 'This template will be used for users who booked on your website.', 'puna' ),
	// 			'desc'       => esc_html__( 'For using the booking ID in your message, please use this shortcode( [user-booking-id] ). Also you can use [guest-name] in your message', 'puna' ),
	// 			'default'    => esc_html__( 'Congratulations, [guest-name],<br> Your booking information with the ID of [user-booking-id] is confirmed now and we are glad to be your host in our Hotel.', 'puna' ),
	// 			'full_width' => true
	// 		)
	// 	)
	// ) );

	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Blog Setting', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage the setting of Blog page.', 'puna' ),
	// 	'icon'   => 'el el-list-alt',
	// 	// 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
	// 	'fields' => array(
	// 		array(
	// 			'id'       => 'puna-blog-type',
	// 			'type'     => 'button_set',
	// 			'title'    => esc_html__( 'Excerpt Or Full Blog Content', 'puna' ),
	// 			'subtitle' => esc_html__( 'Show excerpt or Full Blog Content On Blog Pages.', 'puna' ),
	// 			'options'  => array(
	// 				'1' => esc_html__( 'Excerpt', 'puna' ),
	// 				'2' => esc_html__( 'Full', 'puna' )
	// 			),
	// 			'default'  => '1'
	// 		),
	// 		array(
	// 			'id'       => 'opt-excerpt-length',
	// 			'type'     => 'text',
	// 			'title'    => esc_html__( 'Excerpt Length', 'puna' ),
	// 			'subtitle' => esc_html__( 'Set how many character do you want to show in excerpts.', 'puna' ),
	// 			'default'  => '65',
	// 		),
	// 		array(
	// 			'id'       => 'opt-read-more-text',
	// 			'type'     => 'text',
	// 			'title'    => esc_html__( 'Read More Text', 'puna' ),
	// 			'subtitle' => esc_html__( 'Change the "Read More" text of Post archive.', 'puna' ),
	// 			'default'  => esc_html__( 'Continue Reading', 'puna' )
	// 		),
	// 		array(
	// 			'id'    => 'opt-blog-breadcrumb-bg',
	// 			'type'  => 'media',
	// 			'title' => esc_html__( 'Blog Breadcrumb Background', 'puna' ),
	// 			'desc'  => esc_html__( 'Please provide ".png" or ".jpg" format as background of breadcrumb in all pages.', 'puna' ),
	// 		),
	// 	),
	// ) );

	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Sliders', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage the slider images which is generated by [puna-main-slider] shortcode', 'puna' ),
	// 	'icon'   => 'el-icon-photo',
	// 	'fields' => array(
	// 		array(
	// 			'id'          => 'puna-main-slider',
	// 			'type'        => 'slides',
	// 			'title'       => esc_html__( 'Manage The Main Slider', 'puna' ),
	// 			'subtitle'    => esc_html__( 'Create a new Slider by selecting existing or uploading new images using the WordPress native uploader.', 'puna' ),
	// 			'placeholder' => array(
	// 				'title'       => esc_html__( 'Title', 'puna' ),
	// 				'description' => esc_html__( 'Description', 'puna' )
	// 			),
	// 		),
	// 	),

	// ) );

	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Property Highlights', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage your property highlights by adding a slide for each highlight', 'puna' ),
	// 	'icon'   => 'el-icon-star',
	// 	'fields' => array(
	// 		array(
	// 			'id'          => 'puna-property-highlights',
	// 			'type'        => 'slides',
	// 			'title'       => esc_html__( 'Manage The Property Highlights', 'puna' ),
	// 			'subtitle'    => esc_html__( 'Add your property\'s highlights by adding new slide for each of theme', 'puna' ),
	// 			'placeholder' => array(
	// 				'title'       => esc_html__( 'Title', 'puna' ),
	// 				'description' => esc_html__( 'Description', 'puna' )
	// 			),
	// 		),
	// 	),
	// ) );

	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Gallery', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage the images which are shown in the Gallery page and the Gallery shortcode', 'puna' ),
	// 	'icon'   => 'el-icon-picture',
	// 	'fields' => array(
	// 		array(
	// 			'id'       => 'puna-gallery-sort',
	// 			'type'     => 'text',
	// 			'title'    => esc_html__( 'Sort Options', 'puna' ),
	// 			'subtitle' => esc_html__( 'Add the sort option and separate them with "," like "All,Cloth,Room,Lobby,Bedroom"', 'puna' ),
	// 			'default'  => 'All,Lobby,Bedroom,Office,Sitting Room'
	// 		),
	// 		array(
	// 			'id'       => 'puna-main-gallery',
	// 			'type'     => 'gallery',
	// 			'title'    => esc_html__( 'Manage The Main Gallery', 'puna' ),
	// 			'subtitle' => esc_html__( 'Manage the image you want to show in Gallery Page and Gallery shortcode.', 'puna' ),
	// 		)
	// 	),

	// ) );

	// Redux::setSection( $opt_name, array(
	// 	'title'  => esc_html__( 'Clients', 'puna' ),
	// 	'desc'   => esc_html__( 'Manage your clients by uploading their logos and adding their website\'s url in each slides', 'puna' ),
	// 	'icon'   => 'el-icon-user',
	// 	'fields' => array(
	// 		array(
	// 			'id'          => 'puna-clients',
	// 			'type'        => 'slides',
	// 			'title'       => esc_html__( 'Manage Clients', 'puna' ),
	// 			'subtitle'    => esc_html__( 'Add your client\'s logo and url in each slides', 'puna' ),
	// 			'placeholder' => array(
	// 				'title'       => esc_html__( 'Title', 'puna' ),
	// 				'description' => esc_html__( 'Description', 'puna' )
	// 			),
	// 		),
	// 	),
	// ) );

	Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Slide Show', 'puna' ),
		'desc'   => esc_html__( 'Manage the images which you want to be shown in "Slide Show" section', 'puna' ),
		'icon'   => 'el-icon-camera',
		'fields' => array(
			array(
				'id'       => 'puna-slide-show-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Slide Show Description', 'puna' ),
				'subtitle' => esc_html__( 'Add the text you want to be shown in Slide Show section.', 'puna' ),
				'desc'     => esc_html__( 'Do not use HTML tags.', 'puna' ),
				'validate' => 'no_html',
			),
			array(
				'id'       => 'puna-slide-show',
				'type'     => 'gallery',
				'title'    => esc_html__( 'Manage The Slide Show images', 'puna' ),
				'subtitle' => esc_html__( 'Manage the image you want to show in "Slide Show" section.', 'puna' ),
			)
		),
	) );

	Redux::setSection( $opt_name, array(
		'title' => esc_html__( 'Property Specs', 'puna' ),
		'desc'  => esc_html__( 'Manage the features of your property', 'puna' ),
		'icon'  => 'el-icon-flag'
	) );

	Redux::setSection( $opt_name, array(
		'title'      => esc_html__( 'Exterior Details', 'puna' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'puna-spec-ext-bg',
				'type'  => 'media',
				'title' => esc_html__( 'Background Image', 'puna' ),
				'desc'  => esc_html__( 'Please upload an image you want to be shown as background of this section', 'puna' )
			),
			array(
				'id'       => 'puna-spec-ext-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'puna' ),
				'subtitle' => esc_html__( 'Add the title of this section in this field', 'puna' ),
			),
			array(
				'id'    => 'puna-spec-ext-items',
				'type'  => 'multi_text',
				'title' => esc_html__( 'Property Specs', 'puna' ),
				'desc'  => esc_html__( 'Separate the title and value with "---" for example "Land Size---2700 SqFt"', 'puna' )
			),
		),
	) );
	Redux::setSection( $opt_name, array(
		'title'      => esc_html__( 'Interior Details', 'puna' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'puna-spec-int-bg',
				'type'  => 'media',
				'title' => esc_html__( 'Background Image', 'puna' ),
				'desc'  => esc_html__( 'Please upload an image you want to be shown as background of this section', 'puna' )
			),
			array(
				'id'       => 'puna-spec-int-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'puna' ),
				'subtitle' => esc_html__( 'Add the title of this section in this field', 'puna' ),
			),
			array(
				'id'    => 'puna-spec-int-items',
				'type'  => 'multi_text',
				'title' => esc_html__( 'Property Specs', 'puna' ),
				'desc'  => esc_html__( 'Separate the title and value with "---" for example "Land Size---2700 SqFt"', 'puna' )
			),
		),
	) );
	Redux::setSection( $opt_name, array(
		'title'      => esc_html__( 'Bedroom Details', 'puna' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'puna-spec-bed-bg',
				'type'  => 'media',
				'title' => esc_html__( 'Background Image', 'puna' ),
				'desc'  => esc_html__( 'Please upload an image you want to be shown as background of this section', 'puna' )
			),
			array(
				'id'       => 'puna-spec-bed-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'puna' ),
				'subtitle' => esc_html__( 'Add the title of this section in this field', 'puna' ),
			),
			array(
				'id'    => 'puna-spec-bed-items',
				'type'  => 'multi_text',
				'title' => esc_html__( 'Property Specs', 'puna' ),
				'desc'  => esc_html__( 'Separate the title and value with "---" for example "Land Size---2700 SqFt"', 'puna' )
			),
		),
	) );