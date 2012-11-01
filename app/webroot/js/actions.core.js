// Root namespace
var actions = actions || {};

(function($) {

	// Are we running as a standalone app?
	actions.isFullscreen = window.navigator.standalone || false;

	// Global page functionality on load
	actions.loadPage = function() {
		// Intercept links so that they don't open in external browser
		if(actions.isFullscreen) {
			$(window).click(function(e) {
				var target = $(e.target).closest('a');
				if(target && target.attr('target') !== 'blank') {
					e.preventDefault();
					window.location = target.attr('href');
				}
			});
		}
	};

	// Call the loadPage function when the page is done loading
	$(actions.loadPage);

})(jQuery);
