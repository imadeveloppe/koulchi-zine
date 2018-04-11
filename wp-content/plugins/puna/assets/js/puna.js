"use strict";
jQuery(document).ready(function () {
	// Booking datepicker
	jQuery("#booking-form .datepicker-fields").datepicker({
		format:    "yyyy-mm-dd",
		autoclose: true,
		language:  puna.datePickerLang,
		startDate: puna.availFrom,
		endDate:   puna.availTo
	});

	//  Booking TimePicker
	jQuery('#booking-form .input-time').timepicker({
		'minTime':        puna.availTimeFrom + ':00',
		'maxTime':        puna.availTimeTo + ':00',
		'timeFormat':     'H:i',
		'forceRoundTime': true,
		'step':           60
	});

	// Booking form Ajax
	jQuery('#booking-form').on('submit', function (e) {
		e.preventDefault();
		var mainForm   = jQuery(this),
			nameVal    = mainForm.find('.name').val(),
			emailVal   = mainForm.find('.email').val(),
			phoneVal   = mainForm.find('.phone').val(),
			dateVal    = mainForm.find('.date').val(),
			timeVal    = mainForm.find('.time').val(),
			messageVal = mainForm.find('.message').val(),
			response   = mainForm.find('.response-message-box');
		response.hasClass('active') ? response.removeClass('active') : '';
		mainForm.addClass('loading');
		var data = {
			action:     "booking_form",
			nameVal:    nameVal,
			emailVal:   emailVal,
			phoneVal:   phoneVal,
			dateVal:    dateVal,
			timeVal:    timeVal,
			messageVal: messageVal
		};

		jQuery.post(puna.ajaxurl, data, function (data) {
			data = JSON.parse(data);
			response.addClass('active');
			mainForm.removeClass('loading');
			data.status == false ? response.removeClass('alert-danger alert-success').addClass('alert-danger') : response.removeClass('alert-danger alert-success').addClass('alert-success');
			response.text(data.message);
		});
	});

	if (jQuery('#overview-calendar').length > 0 || jQuery.isFunction(jQuery.fn.fullCalendar)) {

		jQuery('#overview-calendar').fullCalendar({
			businessHours:  {
				start: puna.availTimeFrom + ':00',
				end:   puna.availTimeTo + ':00'
			},
			header:         {
				left:   'prev,next today',
				center: 'title',
				right:  'month,agendaWeek,agendaDay'
			},
			lang: puna.themeLang,
			eventMouseover: function (event, jsEvent, view) {
				var eventURL   = event.url,
					eventTitle = event.title;

				jQuery('.fc-event').each(function (index, el) {
					var eventHref = jQuery(this).attr('href'),
						eventText = jQuery(this).find('.fc-title').text();

					if (eventHref == eventURL && eventText == eventTitle) {
						jQuery(this).addClass('hover-event');
					}
				});
			},
			eventMouseout:  function (event, jsEvent, view) {
				jQuery('.fc-event').removeClass('hover-event');
			},
			eventSources:   [
				{
					events: function (start, end, timezone, callback) {
						jQuery.ajax({
							url:      puna.ajaxurl,
							dataType: 'json',
							method:   'post',
							data:     {
								action: "puna_plg_get_booking_info",
								start:  start.unix(),
								end:    end.unix()
							}
						}).done(function (dataBooking) {
							var events = [];
							jQuery(dataBooking).each(function () {
								events.push({
									title:     jQuery(this).attr('title'),
									start:     jQuery(this).attr('start'),
									end:       jQuery(this).attr('end'),
									rendering: jQuery(this).attr('rendering'),
									color:     jQuery(this).attr('color')
								});
							});
							callback(events);
						});
					}
				}
			]
		});
	}
});