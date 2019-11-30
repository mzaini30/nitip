$(function(){
	if (location.search.match(/\?bagian_.+_.+/)){
		arah = location.search.split('?')

		$('html, body').animate({
			scrollTop: $('.' + arah[1]).offset().top - 100
		}, 800)
	} else if (location.search == '?biasa'){
		console.log('biasa')
	} else if (location.href.match(/index\.html/)){
		console.log('biasa')
	} else {
		$('html, body').animate({
			scrollTop: localStorage.getItem('posisi')
		}, 800)
	}

	if (typeof beranda == 'undefined'){
		simpan_posisi = function(){
			localStorage.setItem('posisi', $(document).scrollTop())
			$('.navbar-brand').html(localStorage.getItem('posisi'))
			localStorage.setItem('file', location.href.substring(location.href.lastIndexOf('/') + 1).replace(/\?bagian_.+_.+/g, '').replace(/\?biasa/g, ''))
		}
		simpan_posisi()
		$(window).scroll(function(){
			simpan_posisi()
		})
	}

	if (localStorage.getItem('posisi')){
		$('.halaman-terakhir').attr('href', localStorage.getItem('file'))
	}
})