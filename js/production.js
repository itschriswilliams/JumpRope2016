$(document).ready(function() {
  
	$('nav.navbar-custom').hover(function() {
		$(this).toggleClass('hovered');
	});
	$('ul.nav li').hover(function() {
		$(this).children('.subNav').toggleClass('hovered');
	});	

});

