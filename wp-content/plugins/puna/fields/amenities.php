<?php
	/**
	 * ------------------------------------------------------------------------------------------
	 * Extra Information of Amenities
	 * ------------------------------------------------------------------------------------------
	 */

	class Puna_plugin_amenities_meta_box
	{
		/**
		 * Array of meta data list for the block dates
		 * @var array
		 */
		public $amenities_meta_fields = array();

		function __construct()
		{
			Puna_plugin_main::puna_plg_load_plugin_text_domain();
			// Field Array
			$prefix = 'amenities_';
			$this->amenities_meta_fields = array(
				array(
					'label' => esc_html__( 'More Details', 'puna' ),
					'desc'  => esc_html__( 'Add the more details like : "2700 SqFt"', 'puna' ),
					'id'    => $prefix.'more_details',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Icon', 'puna' ),
					'desc'  => esc_html__( 'Add the title of icon in this field, like : "puna-ic-land-size"', 'puna' ),
					'id'    => $prefix.'icon',
					'type'  => 'text',
				)
			);

			add_action('add_meta_boxes', array($this,'add_amenities_meta_box'));
			add_action('save_post', array($this,'save_amenities_meta'));
		}
		// Add the Meta Box
		function add_amenities_meta_box() {
			add_meta_box(
				'amenities_meta_box', // $id
				esc_html__( 'Additional information', 'puna' ),
				array($this,'show_amenities_meta_box'), // $callback
				'amenities', // $page
				'normal', // $context
				'high'); // $priority
		}

		// Show the Fields in the Post Type section
		function show_amenities_meta_box()
		{
			global $post;

			// Use nonce for verification
			echo '<input type="hidden" name="amenities_meta_box_nonce" value="'.esc_attr( wp_create_nonce(basename(__FILE__)) ).'" />';

			// Begin the field table and loop
			echo '<table class="form-table">';
			foreach ($this->amenities_meta_fields as $field) {
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
				} //end switch
				echo '</td></tr>';
			} // end foreach
			echo '</table>'; // end table
		}

		// Save the Data
		function save_amenities_meta($post_id)
		{
			$security_code = '';

			if(isset($_POST['amenities_meta_box_nonce']) && $_POST['amenities_meta_box_nonce'] !='')
			{
				$security_code = sanitize_text_field( $_POST['amenities_meta_box_nonce'] );
			}

			// verify nonce
			if (!wp_verify_nonce($security_code, basename(__FILE__)))
				return $post_id;
			// check autosave
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
				return $post_id;
			// check permissions
			if ('amenities' == $_POST['post_type'])
			{
				if (!current_user_can('edit_page', $post_id))
					return $post_id;
			} elseif (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}

			// loop through fields and save the data
			foreach ($this->amenities_meta_fields as $field) {
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

	$amenities_meta_box_obj = new Puna_plugin_amenities_meta_box;