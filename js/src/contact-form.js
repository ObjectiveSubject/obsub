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
	var settings = { 
			url: osAdmin.ajaxUrl,  // this is part of the JS object you pass in from wp_localize_scripts.
			type: 'post',        // 'get' or 'post', override for form's 'method' attribute 
			dataType: 'json',
			data: { nonce: osAdmin.nonce },
			success : function(responseText, statusText, xhr, $form) {
			    var animationSequence = [
					{ e: $('#contact-form'), p: { opacity: 0 } , o: { duration: 500 } },
					{ e: $('.contact-form-container .success'), p: "fadeIn", o: { duration: 500 } },
					{ e: $('#contact-form'), p: { height: 0 } , o: { duration: 500 } },
				];
				$.Velocity.RunSequence(animationSequence);
			},
			error : function(jqXHR, textstatus, error){
				$('.error p').append("Oops, looks like there was an error! See below:<br/><br/>" + textstatus + "<br/>" + error);
				$('.error').velocity("fadeIn", 500);
			}
		};

	$('#contact-form').submit(function(e){
		e.preventDefault();
		$.ajax(settings);
	});


})(jQuery, window);









