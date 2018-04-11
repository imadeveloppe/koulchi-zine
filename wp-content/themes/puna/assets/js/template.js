"use strict";
function chosen_drop_down() {
	var winHeight = jQuery(window).height();
	jQuery('.chosen-container').each(function () {
		var a = ( winHeight - jQuery(this).offset().top) + jQuery(window).scrollTop();
		(a < 240 ) ? jQuery(this).addClass('top-dropdown') : jQuery(this).removeClass('top-dropdown');
	})
}

//Slide Show Functions
var main_image_slider = jQuery("#main-image-slider"),
	thumbnail_slider  = jQuery("#thumbnail-slider");
function syncPosition(el) {
	var current = this.currentItem;
	jQuery("#thumbnail-slider")
		.find(".owl-item")
		.removeClass("synced")
		.eq(current)
		.addClass("synced")
	if (jQuery("#thumbnail-slider").data("owlCarousel") !== undefined) {
		center(current)
	}
}
function center(number) {
	var thumbnail_slidervisible = thumbnail_slider.data("owlCarousel").owl.visibleItems;
	var num                     = number;
	var found                   = false;
	for (var i in thumbnail_slidervisible) {
		if (num === thumbnail_slidervisible[i]) {
			var found = true;
		}
	}

	if (found === false) {
		if (num > thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
			thumbnail_slider.trigger("owl.goTo", num - thumbnail_slidervisible.length + 2)
		} else {
			if (num - 1 === -1) {
				num = 0;
			}
			thumbnail_slider.trigger("owl.goTo", num);
		}
	} else if (num === thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
		thumbnail_slider.trigger("owl.goTo", thumbnail_slidervisible[1])
	} else if (num === thumbnail_slidervisible[0]) {
		thumbnail_slider.trigger("owl.goTo", num - 1)
	}

}


jQuery(document).ready(function () {

	var winWidth = jQuery(window).width(),
		body     = jQuery('body');

	jQuery('.animated-box').on('inview', function(event, isInView) {
		if (isInView) {
			var _this = jQuery(this),
				animationType = _this.data('animation');
			_this.addClass(animationType);
		}
	});

	if (jQuery.isFunction(jQuery.fn.owlCarousel)) {
		// Main Slider
		var mainSlider = jQuery("#main-slider");
		mainSlider.find('.items').each(function () {
			var imgContainer = jQuery(this).children('.img-container');
			imgContainer.css('background-image', 'url(' + imgContainer.data('bg-img') + ')');
		});
		mainSlider.owlCarousel({
			navigation:     !0,
			singleItem:     !0,
			addClassActive: !0,
			autoPlay:       !0,
			pagination:     !1,
		});

		// Testimonials slider
		jQuery("#testimonials-section .owl-carousel").owlCarousel({
			navigation:     !1,
			singleItem:     !0,
			addClassActive: !0,
			pagination:     !0,
			autoPlay:       8000
		});

		// Highlights slider
		jQuery("#property-highlights-section .owl-carousel").owlCarousel({
			items:        3,
			itemsDesktop: [1200, 4],
			itemsTablet:  [980, 2],
			itemsMobile:  [480, 1],
			navigation:   !1,
			pagination:   !0
		});


		// Enable Slide Show Section
		var main_image_slider = jQuery("#main-image-slider"),
			thumbnail_slider  = jQuery("#thumbnail-slider");

		main_image_slider.owlCarousel({
			singleItem:            true,
			slideSpeed:            1000,
			navigation:            true,
			pagination:            false,
			autoPlay:              true,
			afterAction:           syncPosition,
			responsiveRefreshRate: 200
		});

		thumbnail_slider.owlCarousel({
			items:                 5,
			itemsDesktop:          [1199, 6],
			itemsDesktopSmall:     [979, 4],
			itemsTablet:           [768, 3],
			itemsMobile:           [479, 2],
			pagination:            false,
			responsiveRefreshRate: 100,
			afterInit:             function (el) {
				el.find(".owl-item").eq(0).addClass("synced");
			}
		});

		jQuery("#thumbnail-slider").on("click", ".owl-item", function (e) {
			e.preventDefault();
			var number = jQuery(this).data("owlItem");
			main_image_slider.trigger("owl.goTo", number);
		});

	}

	// Feature Section
	var featureSection = jQuery('#feature-section'),
		featureBoxes   = featureSection.find('.section-box'),
		firstBg        = featureBoxes.first().data('id');

	featureBoxes.each(function (index, el) {
		featureBoxes.append('<div class="section-slide-' + jQuery(this).data('id') + '"></div>');
		jQuery(this).children('.content').clone().removeClass('content').addClass('hidden-sm hidden-md hidden-lg content-box-' + (index + 1)).appendTo('#feature-section');
	});

	featureBoxes.on('mouseover', function () {
		var currentSlide = featureSection.data('active-slide'),
			hoverSlide   = jQuery(this),
			hoverSlideId = hoverSlide.data('id');
		if (hoverSlideId != currentSlide) {
			featureSection.removeClass().addClass('active-slide-' + hoverSlideId).data('active-slide', hoverSlideId);
			featureBoxes.removeClass('active');
			hoverSlide.addClass('active');
			jQuery('[class*="content-box"]').removeClass('active');
			jQuery('.content-box-' + hoverSlideId).addClass('active');
		}
		;
	});

	featureSection.on('mouseleave', function () {
		featureBoxes.removeClass('active');
	});

	if (jQuery.isFunction(jQuery.fn.isotope)) {
		var mainContainer = jQuery(".image-main-box");
		mainContainer.isotope({
			transitionDuration: "0.7s"
		});
		mainContainer.imagesLoaded(function () {
			mainContainer.isotope("layout");
			jQuery(".sort-section-container").on("click", "a", function (e) {
				e.preventDefault();
				jQuery(".sort-section-container a").removeClass("active");
				jQuery(this).addClass("active");
				var filterValue = jQuery(this).attr("data-filter");
				mainContainer.isotope({filter: filterValue});
			});
		});
	}

	if (jQuery.isFunction(jQuery.fn.magnificPopup)) {
		jQuery('.image-main-box:not(.portfolio)').magnificPopup({
			delegate:     '.more-details',
			type:         'image',
			removalDelay: 600,
			mainClass:    'mfp-fade',
			gallery:      {
				enabled:            true,
				navigateByImgClick: true,
				preload:            [0, 1] // Will preload 0 - before current, and 1 after the current image
			},
			image:        {
				titleSrc: 'data-title',
				tError:   '<a href="%url%">The image #%curr%</a> could not be loaded.'
			}
		});

		jQuery('.agent-contact-form-url').magnificPopup({
			type:         'inline',
			removalDelay: 600,
			mainClass:    'mfp-fade'
		});
	}

	// Clone the main menu to the mobile menu
	jQuery('#main-menu').clone().appendTo('#mobile-menu-container');

	// Enable Manu menu toggling
	jQuery('#main-menu-handle').on('click', function () {
		jQuery(this).toggleClass('active');
		jQuery('#mobile-menu-container').slideToggle(function () {
			jQuery(window).trigger('scroll').trigger('resize');
		});
	});

	// Mobile Sort initialize
	jQuery('.sort-handle').on('click', function () {
		jQuery(this).next('ul').slideToggle();
	});

});