$(document).ready(function() {

	$(".main_mnu_button").click(function() {
		if ($(".nav").is(":visible")) {
			$(".nav").fadeOut(600);

		} else {
			$(".nav").fadeIn(600);
		};
	});

	$(".carousel").swipe({
	  	swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
	    	if (direction == 'left') $(this).carousel('next');
	    	if (direction == 'right') $(this).carousel('prev');
	  	},
	  	allowPageScroll:"vertical"
	});

	$(".carousel-inner .item:first").addClass("active");
  	$(".carousel-indicators li:first").addClass("active");

  	$("#myCarousel-t .carousel-inner .item:first").addClass("active");
  	$("#myCarousel-t .carousel-indicators li:first").addClass("active");

  	if (document.getElementById("textareaofform")) {
  		document.getElementById("textareaofform").placeholder = "Message"; 
  	}
});

