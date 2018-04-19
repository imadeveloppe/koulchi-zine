<?php /* Template Name: Equipe */ ?>
<style type="text/css">
	#equipeList .owl-item,
	#equipeList .owl-item a{
	    text-align: center;
	    color: #7b7b7b;
	}
	#equipeList.owl-carousel .owl-item img { 
	    display: inline-block!important; 
	    padding: 5px; 
	    margin-bottom: 20px;
	}  
	.equipe-partners center{
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
						'post_type' => 'team',  
						'orderby' => 'menu_order', 
						'order' =>'DESC', 
						'posts_per_page' => -1
				)); 
			?> 
				
			<div class="equipe-partners">

					<center>
						<?php the_content() ?>
					</center>

					<div id="equipeList" class="owl-carousel">
						<?php while ($partners->have_posts() ) : $partners->the_post(); ?>
	 
							<div>
								<?= get_the_post_thumbnail(get_the_ID(), 'large') ?> 
						   		<h3><?php the_title() ?></h3>
							</div> 


						 <?php endwhile; ?>
						 <?php wp_reset_query(); ?>
					</div>
			</div>

		</div>
	</div> 
</div>  
<script type="text/javascript">
	
	jQuery(document).ready(function($){
		var owl = $('#equipeList');
		owl.owlCarousel({  
		    autoPlay:true,
		    items : 4
		});
	});
</script>