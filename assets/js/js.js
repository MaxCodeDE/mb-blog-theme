// When the page is fully loaded:

jQuery(window).load(function() {

	$ = jQuery;

	function stickyFooter(){

		var	footer = $(".footer-wrapper");

		footer.css("position","static");

		if ( $(document.body).height() < $(window).height()) {
			footer.css({
				"position":"absolute",
				"bottom":0,
				"width":"100%"
			});
		} else {
			footer.css("position","static");
		}
	}

	stickyFooter();

	$(window).resize(function() {
		stickyFooter();
	});
});

// When the dom is ready:

jQuery(document).ready(function() {

	$ = jQuery;

	$(".button-collapse").sideNav();
	
});
