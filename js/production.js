
$(document).ready(function() {
  
	$('nav.navbar-custom').hover(function() {
		$(this).stop().toggleClass('hovered');
	});
	$('ul.nav li').hover(function() {
		$(this).children('.subNav').stop().toggleClass('hovered');
	});	

});