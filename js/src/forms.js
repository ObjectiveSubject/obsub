/* 
 * contact form
 */

(function( $, window, undefined ){

	var timeout,
		$rowInput = $('.input-row input');

	$('.contact-form .gateway').click(function(e){
		e.preventDefault();
		var target = $(this).attr('href'),
			value = $(this).data('value'),
			$formFields = $( $(this).data('fields') );

		$('.subject-select input[type="radio"]').not('[value="'+value+'"]').attr("checked", false);
		$('.subject-select input[value="'+value+'"]').attr("checked", "checked").change();

		$(target).velocity("scroll", {duration: 500});

		if ( $formFields.css("display") !== "block" ){
			$formFields.velocity("fadeIn", {duration: 400});
			$('.input-row').first()
				.velocity("fadeIn", {
					duration: 400, 
					complete: function(){
						$('#contact_name').focus();
					}
				});
		}
	});

	$('input[type="radio"]').on("change", function(){
		var value = $(this).val(),
			$relatedLink = $('a.gateway[data-value="'+value+'"]');

		$('.subject-select').addClass("has-selection");
		
		if ( ! $relatedLink.hasClass('selected') ){
			$('a.gateway').removeClass("selected");
			$relatedLink.addClass("selected");
		}
	});

	$rowInput
		.on("keyup", function(){
			var $input = $(this);
			clearTimeout(timeout);
			timeout = setTimeout(function(){
				if ( $input.val() !== "" ) {
					activateNextInput();
				}
			}, 600);
		})
		.on("keydown", function(){
			clearTimeout(timeout);
		})
		.on("focus", function(){
			$(this).parents(".input-row").addClass("current");
		})
		.on("blur", function(){
			$(this).parents(".input-row").removeClass("current");
		});

	$('.input-row textarea').keyup(function(){
		if ( $(this).val() !== "" ) {
			$('.form-nav span').last().addClass("complete").removeClass("active");
			$('.input-row input[type="submit"]').attr("disabled", false);
		} else {
			$('.form-nav span').last().removeClass("complete").addClass("active");
			$('.input-row input[type="submit"]').attr("disabled", true);
		}
	});

	function activateNextInput() {
		var $current = $('.input-row.current'),
			$next = $current.next(".input-row");
		if ( $current.length !== 0 ) {
			$current.removeClass("current").addClass("complete");
		}
		if ( $next.length !== 0 ) {
			$next.velocity("fadeIn", {duration: 400});
		}

		$('.form-nav span').each(function(n){
			var complete = $('.input-row.complete').length;
			if ( n < complete ) {
				$(this).addClass("complete").removeClass("active");
			}
			if ( n == complete ) {
				$(this).addClass("active");
			}
		});
	}

	/* Form submitting 
	----------------------------------------------- */

	$('#contact-form').submit(function(e){
		e.preventDefault();
		var $form = $(this),
			postData = $(this).serialize();
		
		$('.contact-form').addClass("loading");
		if ( !checkValidForm( $form ) ) {
			postError(false, "Invalid field", "Please make sure your fields are valid.");
			postAlways();
			return;
		}

		var settings = { 
			url: osAdmin.ajaxUrl,
			type: 'post',
			dataType: 'json',
			data: 'action=os_form_process&nonce='+osAdmin.nonce+'&'+postData,
			success : postSuccess,
			error : postError,
			complete : postAlways
		};
		$.ajax(settings);
	});

	/* From Validation
	-------------------------------------------------- */
	function checkValidForm( form ){
		var $form = (form.jquery) ? form : $(form),
			regExpMail = new RegExp( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/ ),
			formValid = true;

		$form.find('input[type="email"]').each(function(){
			var valid = regExpMail.test( $(this).val() );
			if ( !valid ) formValid = false;
			$('input[type="email"]').removeClass('error');
			$(this).addClass('error');
			$('.message.error').append('Please provide a valid email address');
		});

		$form.find('input[required], textarea[required]').each(function(){
			if ( !$(this).val() ) {
				formValid = false;
				$('input[required]').removeClass('error');
				$(this).addClass('error');
			}
			$('.message.error').append('Please make sure to give us your name, email, and a brief message.');
		});
	
		$form.find('input[type="hidden"]').each(function(){
			if ( $(this).val() ) {
				formValid = false;
			}
		});

		return formValid;
	}

	/* Submit Success
	-------------------------------------------------- */
	function postSuccess(data, textstatus, jqXHR) {
		var media = OS.getMediaSize(),
			offset = (media !== "default" && media !== "small") ? -180 : -100;

		$success = $('.contact-form-container .success');

		if ( data.recaptcha ) {
			$success.append("Thank you! We'll be in touch shortly.");
		} else {
			$success.append("Sorry, the verification process failed.<br/><br/>Please reach out directly: <a href='mailto:info@objectivesubject.com'>info@objectivesubject.com</a>");
		}

		var animationSequence = [
			{ e: $('#contact-form'), p: { opacity: 0 } , o: { duration: 500 } },
			{ e: $success, p: "fadeIn", o: { duration: 500 } },
			{ e: $('#contact-form'), p: { height: 0 } , o: { duration: 500, sequenceQueue: false } },
			{ e: $('.contact-form-container'), p: "scroll" , o: { duration: 500, sequenceQueue: false, offset: offset } },
		];
		$.Velocity.RunSequence(animationSequence);
	}

	/* Submit Error
	-------------------------------------------------- */
	function postError(jqXHR, textstatus, error){
		$('.message.error').html("Oops, looks like there was an error! See below:<br/><br/>" + textstatus + "<br/>" + error + "<br/>" + jqXHR.responseText);
		$('.message.error').velocity("fadeIn", 500);
	}

	/* Submit Always
	-------------------------------------------------- */
	function postAlways(){
		$('.contact-form').removeClass("loading");
	}


	/* Subscribe Form
	----------------------------------------------- */
	$('.subscribe-toggle').click(function(e){
		e.preventDefault();
		var target = $(this).attr("href");
		if ( !$(target).hasClass("open") ){
			$(target)
				.addClass("open")
				.velocity("slideDown", {duration: 300});
			$(this).addClass("active");
		}
	});

})(jQuery, window);









