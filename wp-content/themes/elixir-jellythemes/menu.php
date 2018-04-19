<?php /* Template Name: Menu */ ?>
<style type="text/css">
	 
	.list-menu center{
		max-width: 750px;
	    margin: 0 auto;
	    margin-bottom: 60px;
	    color: #fff;
	}
	section.menu .list-menu ul li .detail {
	    font-size: 13px;
	}
	section#menu  .list-menu ul li { 
	    min-height: 87px;
	}
	section#menu  .list-menu img{
	    float: left;
	    width: 75px;
	    border-radius: 45px;
	    margin-top: 7px;
	    margin-left: 9px;
	    margin-right: 10px;
	}
	section#menu .list-menu ul li {
	    border-left: 3px solid #cfa210;
	}

	body.green section.menu .list-menu span {
	    float: none;
	    position: absolute;
	    right: -1px;
	    bottom: 2px;
	    background: #6fab7d;
	    color: #fff;
	    padding: 2px 10px;
	    font-size: 13px;
	}
	body.green section.menu .list-menu .wpb_wrapper { 
		position: relative
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
						'post_type' => 'menu',  
						'orderby' => 'menu_order', 
						'order' =>'DESC', 
						'posts_per_page' => -1
				)); 
			?> 
				
			<div class="list-menu">

					<center>
						<?php the_content() ?>
					</center>
 
					<?php while ($partners->have_posts() ) : $partners->the_post(); ?>

						 
						<div class="jt_col vc_column_container col-md-6">
							<div class="wpb_wrapper">
								<?= get_the_post_thumbnail(get_the_ID(), 'thumbnail') ?> 
								 <ul>
								 	<li>
					                	<?php the_title() ?>
					                	<div class="detail"><?php the_content() ?>
					                	<span class="price"><?php the_field('price') ?> DH</span></div>
					            	</li>
					            </ul>
					        </div>
					   	</div>

					 <?php endwhile; ?>
					 <?php wp_reset_query(); ?> 
			</div>

		</div>
	</div> 
</div>
	  