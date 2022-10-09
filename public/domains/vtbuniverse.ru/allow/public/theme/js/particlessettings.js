$(document).ready(function() {
	
	//$('.block.position-hero ').wrap("<div id='particlee'></div>");
	
	$('.block.position-hero').attr('id', 'particlee');
	
	particlesJS.load('particlee', '/site/theme/js/json.js', function() {
	  	console.log('callback - particles.js config loaded');
	});
	
});