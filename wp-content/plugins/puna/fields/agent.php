<?php
	/**
	 * ------------------------------------------------------------------------------------------
	 * Extra Information of Agents
	 * ------------------------------------------------------------------------------------------
	 */

	class Puna_plugin_agent_meta_box
	{
		/**
		 * Array of meta data list for the block dates
		 * @var array
		 */
		public $agent_meta_fields = array();

		function __construct()
		{
			Puna_plugin_main::puna_plg_load_plugin_text_domain();
			// Field Array
			$prefix = 'agent_';
			$this->agent_meta_fields = array(
				array(
					'label' => esc_html__( 'Title', 'puna' ),
					'desc'  => esc_html__( 'Add the title of the agent like : "Manager", "Certificated Agent" and etc.', 'puna' ),
					'id'    => $prefix.'title',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Email', 'puna' ),
					'desc'  => esc_html__( 'Add the email of the agent', 'puna' ),
					'id'    => $prefix.'email',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Phone', 'puna' ),
					'desc'  => esc_html__( 'Add phone number of agent', 'puna' ),
					'id'    => $prefix.'phone',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Fax', 'puna' ),
					'desc'  => esc_html__( 'Add fax number of agent', 'puna' ),
					'id'    => $prefix.'fax',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Contact Form Shortcode', 'puna' ),
					'desc'  => esc_html__( 'Add the contact7 shortcode for the agent in this field.', 'puna' ),
					'id'    => $prefix.'shortcode',
					'type'  => 'text',
				),
				array(
					'label' => esc_html__( 'Alignment', 'puna' ),
					'desc'  => esc_html__( 'You can change the alignment of agent\'s box in your view. Change the alignment to "Right" by checking the checkbox', 'puna' ),
					'id'    => $prefix.'alignment',
					'type'  => 'checkbox',
				),
			);

			add_action('add_meta_boxes', array($this,'add_agent_meta_box'));
			add_action('save_post', array($this,'save_agent_meta'));
		}
		// Add the Meta Box
		function add_agent_meta_box() {
			add_meta_box(
				'agent_meta_box', // $id
				esc_html__( 'Additional information', 'puna' ),
				array($this,'show_agent_meta_box'), // $callback
				'agent', // $page
				'normal', // $context
				'high'); // $priority
		}

		// Show the Fields in the Post Type section
		function show_agent_meta_box()
		{
			global $post;

			// Use nonce for verification
			echo '<input type="hidden" name="agent_meta_box_nonce" value="'.esc_attr( wp_create_nonce(basename(__FILE__)) ).'" />';

			// Begin the field table and loop
			echo '<table class="form-table">';
			foreach ($this->agent_meta_fields as $field) {
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
					case 'checkbox':
						echo '<input type="checkbox" name="'.esc_attr( $field['id'] ).'" id="'.esc_attr( $field['id'] ).'" ',$meta ? esc_html( ' checked="checked"' ) : '','/>
                                    <label for="'.esc_attr( $field['id'] ).'">'.esc_html($field['desc']).'</label>';
						break;
				} //end switch
				echo '</td></tr>';
			} // end foreach
			echo '</table>'; // end table
		}

		// Save the Data
		function save_agent_meta($post_id)
		{
			$security_code = '';

			if(isset($_POST['agent_meta_box_nonce']) && $_POST['agent_meta_box_nonce'] !='')
			{
				$security_code = sanitize_text_field( $_POST['agent_meta_box_nonce'] );
			}

			// verify nonce
			if (!wp_verify_nonce($security_code, basename(__FILE__)))
				return $post_id;
			// check autosave
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
				return $post_id;
			// check permissions
			if ('agent' == $_POST['post_type'])
			{
				if (!current_user_can('edit_page', $post_id))
					return $post_id;
			} elseif (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}

			// loop through fields and save the data
			foreach ($this->agent_meta_fields as $field) {
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

	$agent_meta_box_obj = new Puna_plugin_agent_meta_box;
