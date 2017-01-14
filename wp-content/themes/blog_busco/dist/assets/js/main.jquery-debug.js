$(document).ready(function(){
	$window = $(window),
	$navbar = $('.navbar'),
	$collapseNavbar = $('.navbar-collapse');
	
	$window.resize(function(event) {
		$window.on('scroll', function(event) {
			event.preventDefault();
			var $scroll = $window.scrollTop();
			if ($scroll>=50  && $window.width()>=971) {
				$navbar.css({
					'background-color': '#343434'
				});
			} else if ($scroll<50 && $window.width()>=971){
				$navbar.css({
					'background-color': 'transparent'
				});
			} else if ($window.width()<=970) {
				$navbar.css({
					'background-color': '#343434'
				});			
			}
		});
		$window.trigger('scroll');
	});
	$window.trigger('resize');

});