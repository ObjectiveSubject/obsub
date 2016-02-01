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
		.keyup(function(){
			var $input = $(this);
			clearTimeout(timeout);
			timeout = setTimeout(function(){
				if ( $input.val() !== "" ) {
					activateNextInput();
				}
			}, 600);
		})
		.keydown(function(){
			clearTimeout(timeout);
		})
		.focus(function(){
			$(this).parents(".input-row").addClass("current");
		})
		.blur(function(){
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
		$('.contact-form').addClass("loading");
		var postData = $(this).serialize();
		var settings = { 
			url: osAdmin.ajaxUrl,
			type: 'post',
			dataType: 'json',
			data: 'action=os_form_process&nonce='+osAdmin.nonce+'&'+postData,
			success : function(data, textstatus, jqXHR) {
				$success = $('.contact-form-container .success');

				if ( data.mail_sent ) {
					$success.append("Thank you! We'll be in touch shortly.");
				} else {
					$success.append("Thank you for contacting us!<br/><br/>Unfortunately an email notification wasn't sent. Please reach out directly: <a href='mailto:info@objectivesubject.com'>info@objectivesubject.com</a>");
				}

				var animationSequence = [
					{ e: $('#contact-form'), p: { opacity: 0 } , o: { duration: 500 } },
					{ e: $success, p: "fadeIn", o: { duration: 500 } },
					{ e: $('#contact-form'), p: { height: 0 } , o: { duration: 500, sequenceQueue: false } },
				];
				$.Velocity.RunSequence(animationSequence);
			},
			error : function(jqXHR, textstatus, error){
				$('.error p').append("Oops, looks like there was an error! See below:<br/><br/>" + textstatus + "<br/>" + error);
				$('.error').velocity("fadeIn", 500);
				throw textstatus + ": " + error;
			},
			complete : function(){
				$('.contact-form').removeClass("loading");
			}
		};
		$.ajax(settings);
	});


})(jQuery, window);









