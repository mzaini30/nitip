jalankan = function(){
  localStorage.setItem("kode", $(".kode").val())
  $(".jalankan").click(function(){
    kode = $(".kode").val()
    $(".skrip").html(kode)
  })
}

if (localStorage.getItem("kode")){
  $(".kode").val(localStorage.getItem("kode"))
  jalankan()
}

$(".kode").on("keyup", function(){
  jalankan()
})