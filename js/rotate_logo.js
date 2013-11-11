$(function() {

	var $rota = $(' img'),
	degree = 0,
	size = 0,
	timer;

	function rotate() {    
		$rota.css({ transform: 'rotate(' + degree + 'deg)'});
	        // timeout increase degrees:
	        timer = setTimeout(function() {
	        	degree+=5;
	        	size+=5;
	            rotate(); // loop it
	        },30);
	    }

	    rotate();    // run it!

	});