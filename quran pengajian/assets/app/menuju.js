$(function(){
	if (location.search){
		arah = location.search.split('?')

		$('html, body').animate({
			scrollTop: $('.' + arah[1]).offset().top - 100
		}, 800)
	}

	if (typeof beranda == 'undefined'){
		simpan_posisi = function(){
			localStorage.setItem('posisi', $('html, body').scrollTop())
			localStorage.setItem('file', location.href.substring(location.href.lastIndexOf('/') + 1))
		}
		simpan_posisi()
		$(window).scroll(function(){
			simpan_posisi()
		})
	}
})