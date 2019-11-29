$('form').on('submit', function(event){
	event.preventDefault()

	cari = $('.cari').val()
	cari = cari.replace(/(.+)\.(.+)/g, '$1.html?bagian_$1_$2')
	location.href = cari
})

$('.navbar-nav a').click(function(){
	$('.navbar-toggle').click()
}) 