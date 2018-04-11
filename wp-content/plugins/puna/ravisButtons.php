<?php 
if (!defined('ABSPATH')) {
	die( 'Your are in wrong place.' );
}
define('PUNA_SHORTCODE_WIZARD', true);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>	
</head>
<body>
	<form action="#" id="shortcode-form">
		<div class="button-container">
			<input type="submit" value="<?php esc_html_e('Insert', 'puna'); ?>">
		</div>
		<div class="inner-container">
			<div class="rows" id="shortcode-item-container">
				<label for="shortcode-item"><?php esc_html_e('ShortCode : ', 'puna' ); ?></label>
				<select name="shortcode-item" id="shortcode-item">
					<option value="0"><?php esc_html_e('Select a shortcode' , 'puna'); ?></option>
					<option value="puna-main-slider"><?php esc_html_e('Main Slider' , 'puna'); ?></option>
					<option value="puna-testimonials"><?php esc_html_e('Testimonials' , 'puna'); ?></option>
					<option value="puna-attractions"><?php esc_html_e('Attractions' , 'puna'); ?></option>
					<option value="puna-social-icons"><?php esc_html_e('Social Icons' , 'puna'); ?></option>
					<option value="puna-main-gallery"><?php esc_html_e('Main Gallery' , 'puna'); ?></option>
					<option value="puna-agent"><?php esc_html_e('Agent Boxes' , 'puna'); ?></option>
					<option value="puna-property-highlight"><?php esc_html_e('Property Highlight' , 'puna'); ?></option>
					<option value="puna-amenities"><?php esc_html_e('Amenities' , 'puna'); ?></option>
					<option value="puna-services"><?php esc_html_e('Services' , 'puna'); ?></option>
					<option value="puna-clients"><?php esc_html_e('Clients' , 'puna'); ?></option>
					<option value="puna-video-tour"><?php esc_html_e('Video Tour' , 'puna'); ?></option>
					<option value="puna-slide-show"><?php esc_html_e('Slide Show' , 'puna'); ?></option>
					<option value="puna-contact"><?php esc_html_e('Contact Section' , 'puna'); ?></option>
					<option value="puna-property-specs"><?php esc_html_e('Property Specs' , 'puna'); ?></option>
					<option value="puna-text-section"><?php esc_html_e('Text Section' , 'puna'); ?></option>
					<option value="puna-booking-overview"><?php esc_html_e('Booking Overview' , 'puna'); ?></option>
				</select>
				<div class="hint"><?php esc_html_e('Please select the shortcode you want to add.', 'puna') ?></div>
			</div>
			<div class="rows no-attributes hide"><?php esc_html_e( 'This shortcode doesn\'t have any attributes', 'puna' ); ?></div>
			<div id="puna-testimonials" class="hide">
				<div class="rows">
					<label for="testimonials-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="testimonials-title" placeholder="<?php esc_html_e('Testimonials', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of testimonial section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="testimonials-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="testimonials-count" placeholder="4">
					<div class="hint"><?php esc_html_e('Add how many testimonials you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-attractions" class="hide">
				<div class="rows">
					<label for="attractions-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="attractions-title" placeholder="<?php esc_html_e('Nearby Attractions', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of attractions section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="attractions-subtitle"><?php esc_html_e('Subtitle : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="subtitle" id="attractions-subtitle" placeholder="<?php esc_html_e('Check the attractions of city in nearby of home', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add subtitle of attractions section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="attractions-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="attractions-count" placeholder="4">
					<div class="hint"><?php esc_html_e('Add how many attractions you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-social-icons" class="hide">
				<div class="rows">
					<label for="social-icons-id"><?php esc_html_e('ID : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="id" id="social-icons-id" placeholder="social-icons">
					<div class="hint"><?php esc_html_e('Add the id attribute of the social icons container.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-main-gallery" class="hide">
				<div class="rows">
					<label for="main-gallery-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="main-gallery-title" placeholder="<?php esc_html_e('Our Gallery', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of main gallery section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="main-gallery-count"><?php esc_html_e('Image Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="img_count" id="main-gallery-count" placeholder="9">
					<div class="hint"><?php esc_html_e('Add how many images you want to show in main gallery.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-agent" class="hide">
				<div class="rows">
					<label for="agent-type"><?php esc_html_e('Type : ', 'puna' ); ?></label>
					<select class="form-item" name="type" id="agent-type">
						<option value="archive" selected="selected"><?php esc_html_e('archive' , 'puna'); ?></option>
						<option value="single"><?php esc_html_e('single' , 'puna'); ?></option>
					</select>
					<div class="hint"><?php esc_html_e('Select the type of agent box.', 'puna') ?></div>
				</div>
				<div class="rows agent-cont-box">
					<label for="agent-count"><?php esc_html_e('Agent Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="agent-count" placeholder="2">
					<div class="hint"><?php esc_html_e('Add how many agent box you want to show in your page.', 'puna') ?></div>
				</div>
				<div class="rows hide agent-id-box">
					<label for="agent-id"><?php esc_html_e('Agent ID : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="agent_id" id="agent-id">
					<div class="hint"><?php esc_html_e('Add ID of agent you want to show in your page.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-property-highlight" class="hide">
				<div class="rows">
					<label for="highlight-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="highlight-title" placeholder="<?php esc_html_e('Property Highlights', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of property highlights section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="highlight-subtitle"><?php esc_html_e('Subtitle : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="subtitle" id="highlight-subtitle" placeholder="<?php esc_html_e('List of great property highlights', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add subtitle of property highlights section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="highlight-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="highlight-count" placeholder="5">
					<div class="hint"><?php esc_html_e('Add how many property highlights you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-amenities" class="hide">
				<div class="rows">
					<label for="amenities-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="amenities-title" placeholder="<?php esc_html_e('Our Amenities', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of amenities section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="amenities-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="amenities-count" placeholder="9">
					<div class="hint"><?php esc_html_e('Add how many amenities you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-services" class="hide">
				<div class="rows">
					<label for="services-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="services-title" placeholder="<?php esc_html_e('Our Services', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of services section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="services-subtitle"><?php esc_html_e('Subtitle : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="subtitle" id="services-subtitle" placeholder="<?php esc_html_e('Our professional agents provide special services for you', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add subtitle of services section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="services-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="services-count" placeholder="3">
					<div class="hint"><?php esc_html_e('Add how many services you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-clients" class="hide">
				<div class="rows">
					<label for="clients-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="clients-title" placeholder="<?php esc_html_e('Our Clients', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of clients section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="clients-count"><?php esc_html_e('Count : ', 'puna' ); ?></label>
					<input type="number" class="form-item" name="count" id="clients-count" placeholder="8">
					<div class="hint"><?php esc_html_e('Add how many clients you want to show.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-video-tour" class="hide">
				<div class="rows">
					<label for="video-tour-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="video-tour-title" placeholder="<?php esc_html_e('Video Overview', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of video tour section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="video-tour-url"><?php esc_html_e('URL : ', 'puna' ); ?></label>
					<input type="url" class="form-item" name="url" id="video-tour-url" placeholder="http://">
					<div class="hint"><?php esc_html_e('Add the url of your video tour.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="video-tour-desc"><?php esc_html_e('Description : ', 'puna' ); ?></label>
					<textarea name="desc" class="form-item" id="video-tour-desc"></textarea>
					<div class="hint"><?php esc_html_e('Add your description you want to be shown above the video section.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-slide-show" class="hide">
				<div class="rows">
					<label for="slide-show-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="slide-show-title" placeholder="<?php esc_html_e('Property Slide Show', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of slide show section in this field.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-contact" class="hide">
				<div class="rows">
					<label for="contact-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="contact-title" placeholder="<?php esc_html_e('Our Location', 'puna') ?>">
					<div class="hint"><?php esc_html_e('Add title of contact section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="contact-subtitle"><?php esc_html_e('Subtitle : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="subtitle" id="contact-subtitle">
					<div class="hint"><?php esc_html_e('Add subtitle of contact section in this field.', 'puna') ?></div>
				</div>
			</div>
			<div id="puna-text-section" class="hide">
				<div class="rows">
					<label for="text-section-type"><?php esc_html_e('Type : ', 'puna' ); ?></label>
					<select class="form-item" name="type" id="text-section-type">
						<option value="simple" selected="selected"><?php esc_html_e('Simple' , 'puna'); ?></option>
						<option value="with-buttons"><?php esc_html_e('With Buttons' , 'puna'); ?></option>
						<option value="with-image"><?php esc_html_e('With Image' , 'puna'); ?></option>
						<option value="with-image-left"><?php esc_html_e('With Image Left' , 'puna'); ?></option>
					</select>
					<div class="hint"><?php esc_html_e('Select the type of Text Section.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="text-section-title"><?php esc_html_e('Title : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="title" id="text-section-title">
					<div class="hint"><?php esc_html_e('Add title of text section in this field.', 'puna') ?></div>
				</div>
				<div class="rows">
					<label for="text-section-text"><?php esc_html_e('Text : ', 'puna' ); ?></label>
					<textarea name="text" class="form-item" id="text-section-text"></textarea>
					<div class="hint"><?php esc_html_e('Add content you want to show in text section.', 'puna') ?></div>
				</div>
				<div class="rows text-sec-img-box hide">
					<label for="text-section-img"><?php esc_html_e('Image URL : ', 'puna' ); ?></label>
					<input type="url" class="form-item" name="img_url" id="text-section-img" placeholder="http://">
					<div class="hint"><?php esc_html_e('Add the url of image you want to show in text section.', 'puna') ?></div>
				</div>
				<div class="rows text-sec-btn-box hide">
					<label for="text-section-btn-1-text"><?php esc_html_e('Button 1 Text : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="btn_1_text" id="text-section-btn-1-text">
					<div class="hint"><?php esc_html_e('Add title of first button in text section.', 'puna') ?></div>
				</div>
				<div class="rows text-sec-btn-box hide">
					<label for="text-section-btn-1-url"><?php esc_html_e('Button 1 URL : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="btn_1_url" id="text-section-btn-1-url">
					<div class="hint"><?php esc_html_e('Add URL of first button in text section.', 'puna') ?></div>
				</div>
				<div class="rows text-sec-btn-box hide">
					<label for="text-section-btn-2-text"><?php esc_html_e('Button 2 Text : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="btn_2_text" id="text-section-btn-2-text">
					<div class="hint"><?php esc_html_e('Add title of second button in text section.', 'puna') ?></div>
				</div>
				<div class="rows text-sec-btn-box hide">
					<label for="text-section-btn-2-url"><?php esc_html_e('Button 2 URL : ', 'puna' ); ?></label>
					<input type="text" class="form-item" name="btn_2_url" id="text-section-btn-2-url">
					<div class="hint"><?php esc_html_e('Add URL of second button in text section.', 'puna') ?></div>
				</div>

			</div>
		</div>
	</form>	
	<?php wp_footer(); ?>	
	</body>
</html>