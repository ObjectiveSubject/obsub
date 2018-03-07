/*
 * active-on-inview
 */

(function ($, window, undefined) {
	$(document).ready(function () {

		$('.cycle-each').each(function () {

			var node = $(this),
				children = node.children(),
				eachDuration = node.data("duration") || 4000, //in ms
				delay = node.data("delay") || 40,
				hold = node.data("hold") || 2000,
				i = 0,
				type = node.data("type") || "fadeInOut",
				functions = {
					fadeInOut: fadeInOut,
					fadeOutReveal: fadeOutReveal
				}

			//hide all elemnets to get started
			children.each(function (i, el) {

				$(this).css({
					"opacity": "0",
					"z-index": children.length - i + 1
				});
			});

			//loop through all children revieling the one below on fade
			function fadeOutReveal() {
				console.log(children.last())
				children.css("position", "absolute")

				children.each(function (i, el) {

					$(this).css({
						"opacity": "1",
					});
				});
				children.last().css({
					"position": "relative",
					"opacity": "1"
				})



				function loop() {
					var thisChild = $(children[i]),
						nextIndex = i >= children.length - 1 ? 0 : i + 1,
						nextChild = $(children[nextIndex])
					node.height(children.last().height());

					nextChild.animate({
						opacity: 1
					}, eachDuration / 2);

					thisChild.animate({
						opacity: 0
					}, eachDuration / 2, function () {

						setTimeout(function () {
							i >= children.length - 1 ? i = 0 : i++
								loop()
						}, hold);


					});
				}

				loop()
			}

			//loop through all the children
			function fadeInOut() {
				// setTimeout(function(){
				var thisChild = $(children[i])
				node.height(thisChild.height())
				node.empty()
				node.html(thisChild[0])
				node.height(thisChild.height())
				thisChild.animate({
					opacity: 1
				}, eachDuration / 2, function () {
					setTimeout(function () {

						thisChild.animate({
							opacity: 0
						}, eachDuration / 2, function () {
							i >= children.length - 1 ? i = 0 : i++
								fadeInOut()
						});
					}, hold)
				})
			}

			// run the function
			functions[type]()
		});
	});
})(jQuery, window);
