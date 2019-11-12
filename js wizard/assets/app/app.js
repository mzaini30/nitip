if (localStorage.getItem("kode")){
	$(".kode").val(localStorage.getItem("kode"))
	kode = "try {"
	kode += $(".kode").val()
	kode += "} catch (error) { $('.hasil').html('<em>' + error.message + '</em>') }"
	$(".skrip").html(kode)
}

$(".kode").on("keyup", function(){
	localStorage.setItem("kode", $(".kode").val())
})