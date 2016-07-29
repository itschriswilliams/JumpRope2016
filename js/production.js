$(document).ready(function() {
  
	$('nav.navbar-custom').hover(function() {
		$(this).stop().toggleClass('hovered');
	});
	$('ul.nav li').hover(function() {
		$(this).children('.subNav').stop().toggleClass('hovered');
	});	

	$('ul.nav li').hover(function() {
		subNavVal = $(this).children('.subNav').length;
		// console.log(subNavVal);
		if ((subNavVal) > 0) {
			$(this).toggleClass('darrowed');
		}
	});		

});