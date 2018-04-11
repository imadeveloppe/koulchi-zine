<?php
	/**
	 *    no-sidebar-no-breadcrumb.php
	 *    No Sidebar template of Puna
	 *  Template Name: Accueil 
	 */

	get_header(); 
	
	


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


		<div id="contact-section">
					<div class="contact-container container"> 
						<div class="map-container col-xs-4 col-md-7">
							<div id="map" data-marker="assets/img/marker.png" style="height: 500px"></div>
						</div>
					</div>
				</div>
	

<?php	get_footer(); ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,geometry,geocoder&key=AIzaSyBeQzg0JQbYmapoySNogo2YMjE10qS8xBo&language=fr"></script> 
<script type="text/javascript">
	"use strict";
	function initialize() {
		var myLatLng = new google.maps.LatLng(31.6219554, -7.9907871);
		var mapOptions = {
			zoom: 16,
			center: myLatLng,		
			// This is where you would paste any style found on Snazzy Maps.
			// styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}],

			styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],

			// Extra options
			scrollwheel: false,
			mapTypeControl: false,
			panControl: false,
			zoomControlOptions: {
				style   : google.maps.ZoomControlStyle.SMALL,
				position: google.maps.ControlPosition.LEFT_BOTTOM
			}
		};
		var map = new google.maps.Map(document.getElementById("map"),mapOptions);

		var image = '<?= PUNA_IMG_PATH ?>marker.png';

		var beachMarker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: image
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	
	jQuery("#map").height(jQuery("#contact-section .contact-box").outerHeight());
	jQuery( window ).resize(function() {
		jQuery("#map").height(jQuery("#contact-section .contact-box").outerHeight());
	});
</script>