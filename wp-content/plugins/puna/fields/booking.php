<?php
	/**
	 * ------------------------------------------------------------------------------------------
	 * Extra Information of Booking
	 * ------------------------------------------------------------------------------------------
	 */

	class Puna_plugin_booking_meta_box
	{
		/**
		 * Array of meta data list for the block dates
		 * @var array
		 */
		public $booking_meta_fields = array();
		function __construct()
		{
			Puna_plugin_main::puna_plg_load_plugin_text_domain();
			// Field Array
			$prefix = 'puna_booking_';
			$this->booking_meta_fields = array(
				array(
					'label' => esc_html__( 'Name', 'puna' ),
					'desc'  => esc_html__( 'Add the name of guest.', 'puna' ),
					'id'    => $prefix.'name',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Email', 'puna' ),
					'desc'  => esc_html__( 'Add the email of guest.', 'puna' ),
					'id'    => $prefix.'email',
					'type'  => 'email',
				),
				array(
					'label' => esc_html__( 'Phone', 'puna' ),
					'desc'  => esc_html__( 'Add the phone number of guest.', 'puna' ),
					'id'    => $prefix.'phone',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Check in Date', 'puna' ),
					'desc'  => esc_html__( 'Add the date that guest want to visit.', 'puna' ),
					'id'    => $prefix.'check_in_date',
					'type'  => 'date',
				),
				array(
					'label' => esc_html__( 'Check in Time', 'puna' ),
					'desc'  => esc_html__( 'Add the time that guest want to visit', 'puna' ),
					'id'    => $prefix.'check_in_time',
					'type'  => 'time',
				),
				array(
					'label' => esc_html__( 'Message', 'puna' ),
					'desc'  => esc_html__( 'Add the the message of guest', 'puna' ),
					'id'    => $prefix.'message',
					'type'  => 'textarea',
				)
			);

			add_action('add_meta_boxes', array($this,'add_booking_meta_box'));
			add_action('save_post', array($this,'save_booking_meta'));
		}
		// Add the Meta Box
		function add_booking_meta_box() {
			add_meta_box(
				'booking_meta_box', // $id
				esc_html__( 'Additional information', 'puna' ),
				array($this,'show_booking_meta_box'), // $callback
				'booking', // $page
				'normal', // $context
				'high'); // $priority
		}

		// Show the Fields in the Post Type section
		function show_booking_meta_box()
		{
			global $post, $puna_opt;

			// Use nonce for verification
			echo '<input type="hidden" name="booking_meta_box_nonce" value="'.esc_attr( wp_create_nonce(basename(__FILE__)) ).'" />';

			// Begin the field table and loop
			echo '<table class="form-table">';
			foreach ($this->booking_meta_fields as $field) {
				// get value of this field if it exists for this post
				$meta = get_post_meta($post->ID, $field['id'], true);
				// begin a table row with
				echo '<tr>
                        <th>'.esc_html($field['label']).'</th>
    	                <td>';
				switch($field['type']) {
					// text
					case 'text':
						echo '<input type="text" name="'.esc_attr( $field['id'] ).'" id="'.esc_attr( $field['id'] ).'" value="'.esc_attr( $meta ).'" size="40" />
                                    <br /><span class="description">'.esc_html($field['desc']).'</span>';
						break;
					// Email
					case 'email':
						echo '<input type="email" name="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" id="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" value="'. esc_attr( $meta ).'" size="40" '.  esc_attr( !empty($field['status']) ? $field['status'] : '' ) .'/>';
					break;
					// Time
					case 'time':
						echo '<input type="number" min="'.esc_attr(!empty($puna_opt['puna-available-time'][1]) ? $puna_opt['puna-available-time'][1] : '').'" max="'.esc_attr(!empty($puna_opt['puna-available-time'][2]) ? $puna_opt['puna-available-time'][2] : '').'" name="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" id="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" value="'. esc_attr( $meta ).'" size="40" '.  esc_attr( !empty($field['status']) ? $field['status'] : '' ) .'/>';
					break;
					// textarea
					case 'textarea':
						echo '<textarea name="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" id="'. esc_attr( !empty($field['id']) ? $field['id'] : '' ).'" cols="60" rows="4" '.  esc_attr( !empty($field['status']) ? $field['status'] : '' ) .' >'.esc_textarea( $meta ).'</textarea>';
					break;
					case 'date':
						echo '<input type="text" class="datepicker" name="'. esc_attr( $field['id'] ).'" id="'. esc_attr( $field['id'] ).'" value="'. esc_attr( $meta ).'" size="30" />
                                        <br /><span class="description">'.esc_html($field['desc']).'</span>';
					break;

				} //end switch
				echo '</td></tr>';
			} // end foreach
			echo '</table>'; // end table
		}

		// Save the Data
		function save_booking_meta($post_id)
		{
			$security_code = '';

			if(isset($_POST['booking_meta_box_nonce']) && $_POST['booking_meta_box_nonce'] !='')
			{
				$security_code = sanitize_text_field( $_POST['booking_meta_box_nonce'] );
			}

			// verify nonce
			if (!wp_verify_nonce($security_code, basename(__FILE__)))
				return $post_id;
			// check autosave
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
				return $post_id;
			// check permissions
			if ('booking' == $_POST['post_type'])
			{
				if (!current_user_can('edit_page', $post_id))
					return $post_id;
			} elseif (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}

			// loop through fields and save the data
			foreach ($this->booking_meta_fields as $field) {
				$old = get_post_meta($post_id, $field['id'], true);
				$new = $_POST[$field['id']];
				if ($new && $new != $old) {
					update_post_meta($post_id, $field['id'], $new);
				} elseif ('' == $new && $old) {
					delete_post_meta($post_id, $field['id'], $old);
				}
			} // end foreach
		}
	}

	$booking_meta_box_obj = new Puna_plugin_booking_meta_box;