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

jQuery(window).on('scroll',function() {
    console.log('TEST');
    $ = jQuery;
    // Runden
    var stop = Math.round($(window).scrollTop());
    if (stop > 0) {
        $('#side-menu-button').removeClass('mobile-view');
    } else {
        $('#side-menu-button').addClass('mobile-view');
    }

});
