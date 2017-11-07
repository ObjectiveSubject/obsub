/*
 * active-on-inview
 */

(function( $, window, undefined ){
	$(document).ready(function(){

		$('.cycle-each').each(function(){

				var node = $(this),
						children = node.children(),
						eachDuration = 4000, //in ms
						delay= 40,
						hold= 2000,
						i = 0

						//hide all elemnets to get started
						children.each(function(){
							$(this).css("opacity", "0");
						});

						//loop through all the children
						function fadeInOut(){
							// setTimeout(function(){
								var thisChild = $(children[i])

								node.empty()
								node.html(children[i])

								thisChild.animate({opacity: 1},eachDuration/2, function(){
									setTimeout(function(){

										thisChild.animate({opacity: 0},eachDuration/2, function(){
											i >= children.length-1 ? i=0 : i++
											fadeInOut()
										});
									},hold)
								})


							// },eachDuration+delay+hold)
						}
					fadeInOut()
		});
	});
})(jQuery, window);
