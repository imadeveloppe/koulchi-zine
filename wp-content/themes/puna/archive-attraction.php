<?php
	// archive-attraction.php
	// Puna Attraction archive Page

	global $post;
	get_header();
?>
	<div id="attraction-section" class="main-bg-color">
		<div class="attraction-container container clearfix">
			<?php
				if ( have_posts() )
				{
					while ( have_posts() )
					{
						the_post();
						$attractions_img = get_the_post_thumbnail( get_the_id(), '', '' );
						echo '
							<div class="attraction-box col-md-6 fadeInRight">
								<div class="inner-box">
									<a href="' . esc_url( get_the_permalink() ) . '" class="img-container">' . $attractions_img . '</a>
									<h3 class="title"><a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></h3>
									<div class="desc">' . balancetags( get_the_content() ) . '</div>
								</div>
							</div>						
						';
					}
				}
			?>
		</div>
	</div>
<?php
	puna_tm_pagination();
	get_footer();