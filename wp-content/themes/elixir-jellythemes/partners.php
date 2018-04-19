<?php /* Template Name: Partenaire */ ?>
<style type="text/css">
	#partnersList .owl-item,
	#partnersList .owl-item a{
	    text-align: center;
	    color: #7b7b7b;
	}
	#partnersList.owl-carousel .owl-item img {
	    width: 150px;
	    max-width: 150px;
	    display: inline-block!important;
	    border-radius: 50%;
	    padding: 5px;
	    box-shadow: 0 0 3px #bdbdbd;
	    margin-bottom: 20px;
	}  
	.list-partners center{
		 max-width: 750px;
	    margin: 0 auto;
	    margin-bottom: 60px
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-12"> 
		 
			<div class="jt_col vc_column_container col-md-12">
	    		<div class="wpb_wrapper">
	    			<h2 class="heading font-smoothing">
						<p><?php the_title() ?></p> 
					</h2>
				</div>
			</div>  
			<?php 
				$partners = new WP_Query(array(
						'post_type' => 'partners',  
						'orderby' => 'menu_order', 
						'order' =>'DESC', 
						'posts_per_page' => -1
				)); 
			?> 
				
			<div class="list-partners">

					<center>
						<?php the_content() ?>
					</center>

					<div id="partnersList" class="owl-carousel">
						<?php while ($partners->have_posts() ) : $partners->the_post(); ?>

							<?php if(get_field('site_web')): ?>
								<div>
									<a href="<?= get_field('site_web') ?>" target='_blank'>
									  		<?= get_the_post_thumbnail(get_the_ID(), 'thumbnail') ?> 
									  		<h3><?php the_title() ?></h3>
									</a> 
								</div>
							<?php else: ?>
								<div>
									<?= get_the_post_thumbnail(get_the_ID(), 'thumbnail') ?> 
							   		<h3><?php the_title() ?></h3>
								</div>
							<?php endif; ?>


						 <?php endwhile; ?>
						 <?php wp_reset_query(); ?>
					</div>
			</div>

		</div>
	</div> 
</div>   
<script type="text/javascript">
	
	jQuery(document).ready(function($){
		var owl = $('#partnersList');
		owl.owlCarousel({  
		    autoPlay:true,
		    items : 5
		});
	});
</script>