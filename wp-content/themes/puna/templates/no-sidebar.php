<?php
	/**
	 *    no-sidebar.php
	 *    No Sidebar template of Puna
	 *  Template Name: Page interne
	 */

	get_header();

	// if ( have_posts() )
	// {
	// 	while ( have_posts() )
	// 	{
	// 		the_post();
	// 		the_content();
	// 	}
	// }
	if( have_rows('section') ): 
			while ( have_rows('section') ) : the_row(); ?> 
			<section>


				<!-- ********************************************************************************************************************* -->
			 	<?php  if( get_row_layout() == 'texte' ): ?>
			 		<?= do_shortcode('[puna-text-section type="simple" title="'.get_sub_field('titre').'" text="'.get_sub_field('text').'" ]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->





				<!-- ********************************************************************************************************************* -->
			 	<?php  if( get_row_layout() == 'sliders' ): ?> 
			 			<?= do_shortcode('[puna-main-slider]') ?> 
			 	<?php endif ?> 
				<!-- ********************************************************************************************************************* -->



				<!-- ********************************************************************************************************************* -->
			 	<?php  if( get_row_layout() == 'texte_avec_boutons' ): ?>
					
					<?php $shortcodeBTN1 = $shortcodeBTN2 = '' ?>
					
					<?php if( get_sub_field('texte_du_bouton_1') ): ?>

				 		<?php $texte1= get_sub_field('texte_du_bouton_1') ?>
				 		<?php if( get_sub_field('type_du_boutons_1') == 'url' ): ?> 
				 			<?php $link1= get_sub_field('lien_externe1') ?>
				 			<?php $targetBlunk = '1' ?>
						<?php else: ?>
							<?php $link1= get_sub_field('lien_interne1') ?>
							<?php $targetBlunk = '0' ?>
						<?php endif; ?>

						<?php $shortcodeBTN1 = 'btn_1_text="'.$texte1.'" btn_1_url="'.$link1.'" btn_1_targetBlunk="'.$targetBlunk.'" ' ?>

					<?php endif ?>
					

					<?php if( get_sub_field('texte_du_bouton_2') ): ?>

						<?php $texte2= get_sub_field('texte_du_bouton_2') ?>
				 		<?php if( get_sub_field('type_du_boutons_2') == 'url2' ): ?> 
				 			<?php $link2= get_sub_field('lien_externe2') ?>
				 			<?php $targetBlunk = '1' ?>
						<?php else: ?>
							<?php $link2= get_sub_field('lien_interne2') ?>
							<?php $targetBlunk = '0' ?>
						<?php endif; ?>

						<?php $shortcodeBTN2 = ' btn_2_text="'.$texte2.'" btn_2_url="'.$link2.'" btn_2_targetBlunk="'.$targetBlunk.'" ' ?>
 
					<?php endif ?> 
			 		<?= do_shortcode('[puna-text-section type="with-buttons" title="'.get_sub_field('titre').'" text="'.get_sub_field('texte').'" '.$shortcodeBTN1.' '.$shortcodeBTN2.' ]') ?> 
				<?php endif ?> 
				<!-- ********************************************************************************************************************* -->


				
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == '3_blocs_daccueil' ): ?>
			 		<?= do_shortcode('[puna-property-specs]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'galerie' ): ?>
			 		<?= do_shortcode('[puna-main-gallery title="'.get_sub_field('titre').'"]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'attractions' ): ?>
			 		<?= do_shortcode('[puna-attractions title="'.get_sub_field('titre').'" sub_title="'.get_sub_field('sous-titre').'" ]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->


				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'testimonials' ): ?>
			 		<?= do_shortcode('[puna-testimonials title="'.get_sub_field('titre').'"]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->

				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'texte_image' ): ?>
			 		<?= do_shortcode('[puna-text-section type="with-image" title="'.get_sub_field('titre').'" text="'.get_sub_field('texte').'" img_url="'.get_sub_field('image').'" ]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'image_texte' ): ?> 
					<div id="welcome-section" class="main-bg-color has-image">
					<div class="inner-box container">
				        <div class="header-sec">
							<?php if(get_sub_field('titre')) { ?>
								<h2><?php the_sub_field('titre') ?></h2>
							<?php } ?>
						</div>
						<div class="content clearfix">
								<div class="col-md-5 animated-box" data-animation="fadeInRight">
									<div class="img-container">
										<?php if(get_sub_field('image')) { ?>
											<img src="<?php the_sub_field('image') ?>" alt="">
										<?php } ?>
										
									</div>
								</div>
								<div class="col-md-7 animated-box" data-animation="fadeInLeft"><?php the_sub_field('texte') ?></div>
								
						</div> 
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == '2_colonnes_de_texte' ): ?>
			 		<div id="attraction-section" class="main-bg-color has-image">
						<div class="inner-box container">
					        <div class="header-sec">
								<?php if(get_sub_field('titre')) { ?>
									<h2><?php the_sub_field('titre') ?></h2>
								<?php } ?>
							</div>
							<div class="content clearfix">
									<div class="col-md-6 animated-box" data-animation="fadeInLeft">
										<?php if(get_sub_field('texte_colonne_1')) { ?>
										<?php the_sub_field('texte_colonne_1') ?> 
										<?php } ?> 
									</div>
									<div class="col-md-6 animated-box" data-animation="fadeInRight">
										<?php if(get_sub_field('texte_colonne_2')) { ?>
											<?php the_sub_field('texte_colonne_2') ?> 
										<?php } ?> 
									</div> 
							</div> 
							<div class="attraction-container boutons">
								<?php if( get_sub_field('texte_du_bouton_1') ): ?> 
									<?php $texte1= get_sub_field('texte_du_bouton_1') ?>
							 		<?php if( get_sub_field('type_du_boutons_1') == 'url' ): ?> 
							 			<a href="<?php the_sub_field('lien_externe1') ?>" class="btn more-attraction" target="_blank" ><?= $texte1 ?></a>
							 			
									<?php else: ?>
										<a href="<?php the_sub_field('lien_interne1') ?>" class="btn more-attraction" ><?= $texte1 ?></a>
										
									<?php endif; ?>
								<?php endif ?>
							</div>
						</div>
					</div>

				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'video' ): ?>
			 		<?= do_shortcode('[puna-video-tour title="'.get_sub_field('titre').'" url="'.get_sub_field('url').'" desc="'.get_sub_field('description', false, false).'" ]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->
				<!-- ********************************************************************************************************************* -->
				<?php  if( get_row_layout() == 'blocs_promos' ): ?>
			 		<?= do_shortcode('[puna-property-highlight title="'.get_sub_field('titre').'" subtitle="'.get_sub_field('sous-titre').'" ]') ?>
				<?php endif ?>
				<!-- ********************************************************************************************************************* -->


			</section>
			<?php endwhile ?>
	<?php endif ?> 
<?php	get_footer();