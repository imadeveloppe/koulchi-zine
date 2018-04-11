<?php 
/**
 * page.php
 * Default template of pages.
 */

get_header();

$puna_page_id    = ( get_post_meta( $post->ID, 'puna_page_id' ) != null ? get_post_meta( $post->ID, 'puna_page_id', true ) : '' );
$puna_page_class = ( get_post_meta( $post->ID, 'puna_page_class' ) != null ? get_post_meta( $post->ID, 'puna_page_class', true ) : '' );

	echo '<section '.(isset($puna_page_id) && $puna_page_id !='' ? ('id="'.esc_attr( $puna_page_id ).'"') : '').' class="main-bg-color main-page-container'.($puna_page_class !=='' ? esc_attr( $puna_page_class ) : '').'">
			<div class="inner-box container">';

		if (have_posts()) 
		{
			while (have_posts())
			{
				$post_id        = get_the_id();
				the_post();
				the_content();

				if(comments_open()) {
					echo '
					<div class="comments-container">
		            <h3>';

					comments_number( '', puna_tm_title_effect( esc_html__( '1 Comment', 'puna' ) ), puna_tm_title_effect( esc_html__( '% Comments', 'puna' ) ) );
					echo '</h3>';
					comments_template();
					$comment_form_fields = array(
						'author' => '<div></div>',
						'email'  => '',
						'url'    => '',
					);
					$comment_form_arg    = array(
						'title_reply'       => puna_tm_title_effect( esc_html__( 'Leave a Message', 'puna' ) ),
						'title_reply_to'    => puna_tm_title_effect( esc_html__( 'Leave a Reply to %s', 'puna' ) ),
						'cancel_reply_link' => esc_html__('Cancel', 'puna'),
						'logged_in_as'      => '',
						'comment_field'     => '
		                                        <div class="message-field field-row">
		                                            <textarea name="comment" id="message-field" placeholder="Message *" required="" data-parsley-id="2996"></textarea><ul class="parsley-errors-list" id="parsley-id-2996"></ul><!-- Main Message Field -->
		                                        </div>',
						'must_log_in'       => '<p class="must-log-in">' . sprintf(balancetags(esc_html__('You must be <a href="%s">logged in</a> to share your review.', 'puna')), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
						'fields'            => apply_filters('comment_form_default_fields', $comment_form_fields),
					);

					comment_form($comment_form_arg);
					echo '</div>';
				}
			}
		}


	echo "</div></section>";

get_footer();