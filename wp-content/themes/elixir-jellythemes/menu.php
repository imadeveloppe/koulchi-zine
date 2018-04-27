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
	    bottom: -1px;
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
				$terms = get_terms( array( 
				    'taxonomy' => 'categories_menu'
				) );
			?> 
			<?php foreach ($terms as $key => $term): ?>

			<div class="block-categorie">
				<h2><?= $term->name ?></h2>
				<?php 
					$partners = new WP_Query(array(
							'post_type' => 'menu',  
							'orderby' => 'menu_order', 
							'order' =>'DESC', 
							'posts_per_page' => -1,
							'tax_query' => array(
							    array(
								    'taxonomy' => 'categories_menu',
								    'field' => 'term_id',
								    'terms' => array($term->term_id)
							    )
							)
					)); 
				?> 
					
				<div class="list-menu">
 
	 
						<?php while ($partners->have_posts() ) : $partners->the_post(); ?>

							 
							<div class="jt_col vc_column_container" style="position: relative;">  
								<strong><?php the_title() ?></strong>
								<p>
									<?php the_content() ?>
									<?php if( get_field('price') ): ?>
										<span class="price"><?php the_field('price') ?> MAD</span>
									<?php endif ?>
								</p> 
						   	</div>

						 <?php endwhile; ?>
						 <?php wp_reset_query(); ?> 
				</div>
			</div>
				
			<?php endforeach ?>
				

		</div>
	</div> 
</div>
	  