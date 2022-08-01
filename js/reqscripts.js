function nextthumb() {
    var elmnt = document.getElementById("indicador");
    elmnt.scrollLeft += 70;
}

function prevthumb() {
    var elmnt = document.getElementById("indicador");
    elmnt.scrollLeft -= 70;
}
$(document).ready(function(){
$("#opcionais").hide(100);
$("#btn-mostrar").click(function(){
    $("#opcionais").show(500);
    $("#btn-mostrar").remove();
  });
});