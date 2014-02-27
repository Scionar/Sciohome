jQuery(document).ready(function(){
	function loop() {
		jQuery("#logo-five-bottom-tooth").css({borderWidth:50});
		jQuery("#logo-five-bottom-tooth").animate({
			borderWidth : "toggle"
		}, 800, function() {
			loop();
		});
	}
	loop();
});
