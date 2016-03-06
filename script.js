$( document ).ready(function() {
	$( ".process" ).click(function() {
		$(".blue_animate1").addClass("animations22").delay(200).queue(function(next){
			$(".blue_animate2").addClass("animations22").delay(200).queue(function(next){
				$(".blue_animate3").addClass("animations22").delay(200).queue(function(next){
					$(".blue_animate4").addClass("animations22").delay(200).queue(function(next){
					next();
					});
				next();
				});
			next();
			});
		next();
		});
	});
});
