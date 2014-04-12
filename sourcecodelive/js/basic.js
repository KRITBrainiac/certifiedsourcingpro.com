/*
 * SimpleModal Basic Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */
 
 /*This basic.js file i have used for Popup window on training.structure.html */

jQuery(function ($) {
	
	// Load dialog on click for BasicPRO
	$('#basic-modal_basic .basic').click(function (e) {
		$('#basic-modal-content_basic').modal();
		$('#simplemodal-container').css('height','auto');

			
		return false;
	});
	
	// Load dialog on click for SocialPRO
	$('#basic-modal_social .basic').click(function (e) {
		$('#basic-modal-content_social').modal();
		$('#simplemodal-container').css('height','auto');
		return false;
	});
	
	
	// Load dialog on click for Headhunt
	$('#basic-modal_headhunt .basic').click(function (e) {
		$('#basic-modal-content_headhunt').modal();
		$('#simplemodal-container').css('height','auto');
		return false;
	});


	// Load dialog on click for Research PRO
	$('#basic-modal_research .basic').click(function (e) {
		$('#basic-modal-content_research').modal();
		$('#simplemodal-container').css('height','auto');
		return false;
	});
	
	// Load dialog on click for Onsite
	$('#basic-modal_onsite .basic').click(function (e) {
		$('#basic-modal-content_onsite').modal();
		$('#simplemodal-container').css('height','auto');
		return false;
	});
	
});//End of jQuery Function