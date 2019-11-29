$(function(){
	if (location.search.match(/\?bagian_.+_.+/)){
		arah = location.search.split('?')

		$('html, body').animate({
			scrollTop: $('.' + arah[1]).offset().top - 100
		}, 800)
	}

	if (location.search.match(/\?posisi_.+/)){
		posisi = location.search.replace('?posisi_', '')
		$('html, body').animate({
			scrollTop: Number(posisi)
		}, 800)	
	}

	if (typeof beranda == 'undefined'){
		simpan_posisi = function(){
			localStorage.setItem('posisi', $('html, body').scrollTop())
			localStorage.setItem('file', location.href.substring(location.href.lastIndexOf('/') + 1).replace(/\?bagian_.+_.+/g, '').replace(/\?posisi_.+/g, ''))
		}
		simpan_posisi()
		$(window).scroll(function(){
			simpan_posisi()
		})
	}

	if (localStorage.getItem('posisi')){
		$('.halaman-terakhir').attr('href', localStorage.getItem('file') + '?posisi_' + localStorage.getItem('posisi'))
	}
})