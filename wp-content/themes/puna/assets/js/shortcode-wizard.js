jQuery(document).ready(function($) {
	jQuery('title').text('Shortcode Wizard');
	jQuery('#shortcode-item').on('change', function(event) {
		event.preventDefault();
		var shortcodeVal = jQuery(this).val();
		if(jQuery('#'+shortcodeVal).length !== 0)
		{
			jQuery('#'+shortcodeVal).removeClass('hide').siblings().not('#shortcode-item-container').addClass('hide');
		}
		else
		{
			jQuery('.no-attributes').removeClass('hide').siblings().not('#shortcode-item-container').addClass('hide');
		}

	});
	jQuery('#agent-type').on('change', function(event) {
		event.preventDefault();
		/* Act on the event */
		var agetCountBox = jQuery('.agent-cont-box'),
			agetIDBox = jQuery('.agent-id-box');
		jQuery(this).val() == 'archive' ? (agetCountBox.removeClass('hide'), agetIDBox.addClass('hide')) : (agetIDBox.removeClass('hide'), agetCountBox.addClass('hide'));
	});

	jQuery('#text-section-type').on('change', function(event) {
		event.preventDefault();
		/* Act on the event */
		var textImgBox = jQuery('.text-sec-img-box'),
			textBtnBox = jQuery('.text-sec-btn-box');
		if(jQuery(this).val() == 'with-buttons'){
			textBtnBox.removeClass('hide');
			textImgBox.addClass('hide');
		} else if(jQuery(this).val() == 'with-image'){
			textImgBox.removeClass('hide');
			textBtnBox.addClass('hide');
		} else{
			 jQuery('.text-sec-img-box, .text-sec-btn-box').addClass('hide');
		}
	});

	jQuery('#shortcode-form').on('submit', function(event) {
		event.preventDefault();
		var newShortcode = '',
			shortCodeVal = jQuery('#shortcode-item').val();

		if( shortCodeVal !== '0'){
			newShortcode += '['+ shortCodeVal;

			jQuery('#' + shortCodeVal + ' .form-item').each(function(index, el) {
				if(jQuery(this).val() != ''){
					newShortcode += ' ' + jQuery(this).attr('name') +'="' + jQuery(this).val() + '" ';					
				}
			});
 			
 			newShortcode += ']';
		}

		// inserts the shortcode into the active editor
		tinyMCE.activeEditor.execCommand('mceInsertContent', 0, newShortcode);

		// closes Thickbox
		tinyMCEPopup.close();
	});	
});