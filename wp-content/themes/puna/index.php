<?php
	// Index.php
	// Puna Index Page

	global $post;
	get_header();
?>
	<!-- Main Container -->
	<div class="main-content blog-main-container main-bg-color">
		<div class="inner-box container">
			<!-- Page Content -->
			<div class="page-content col-md-9">
				<!-- Post Container -->
				<div class="post-container">
					<?php
						if ( have_posts() )
						{
							global $puna_opt;
							while ( have_posts() )
							{
								the_post();
								$post_id        = get_the_id();
								$post_class_arr = get_post_class();
								$post_classes   = '';
								foreach ( $post_class_arr as $post_class )
								{
									$post_classes .= $post_class . ' ';
								}
								$post_format = get_post_format( $post_id ) !== false ? get_post_format( $post_id ) : '';

								if ( $post_format == 'link' || $post_format == 'quote' )
								{
									$link = puna_tm_get_link_url();
								}
								else
								{
									$link = get_permalink();
								}

								echo '
							<div class="post-box ' . esc_attr( $post_classes ) . ' ' . esc_attr( $post_format ) . '">';
								if ( get_the_post_thumbnail( $post_id ) !== '' )
								{
									echo '<a href="' . esc_url( $link ) . '" class="post-img-box">
			                        ' . get_the_post_thumbnail( $post_id ) . '
			                    </a>';
								}
								if ( get_the_title() !== '' )
								{
									echo '<div class="post-title-box">
										<a href="' . esc_url( $link ) . '" class="post-title">' . get_the_title() . '</a>
									</div>';
								}
								echo '<div class="post-meta clearfix">';
								puna_tm_entry_meta();
								echo '</div>
								<div class="post-desc">';
								if ( isset( $puna_opt['puna-blog-type'] ) && $puna_opt['puna-blog-type'] == '2' )
								{
									echo( $post_format == 'quote' ? '<blockquote>' : '' );
									the_content();
									echo( $post_format == 'quote' ? '</blockquote>' : '' );
								}
								elseif ( $post_format == 'image' || $post_format == 'gallery' )
								{
									the_content();
								}
								else
								{
									echo( $post_format == 'quote' ? '<blockquote>' : '' );
									the_excerpt();
									echo( $post_format == 'quote' ? '</blockquote>' : '' );
								}
								wp_link_pages( array(
									'before'      => '<div class="post-pagination-box clearfix">',
									'after'       => '</div>',
									'link_before' => '',
									'link_after'  => '',
									'pagelink'    => '<span>%</span>',
									'separator'   => '',
								) );
								echo '</div>
						</div>';
							}
						}
						else
						{
							if ( is_search() )
							{
								echo '<div id="search-no-result">';
								echo '<h3><b>' . esc_html__( 'Sorry, but nothing matched your search terms.', 'puna' ) . '</b></h3>';
								echo '<h5>' . esc_html__( 'Please try again with some different keywords.', 'puna' ) . '</h5>';
								get_search_form();
								echo '</div>';
							}
						}
						puna_tm_pagination();
					?>
				</div>
			</div>
			<?php
				get_sidebar();
			?>
		</div>
	</div>

<?php
	get_footer();