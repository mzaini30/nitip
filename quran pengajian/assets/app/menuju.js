$(function(){
	arah = location.search.split('?')

	$('html, body').animate({
		scrollTop: $('.' + arah[1]).offset().top - 100
	}, 800)
})