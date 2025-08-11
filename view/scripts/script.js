getLikesDislikes();
var likes = document.getElementsByClassName('like'); 
$(likes).on('click', function(e){
    idfilme = e.target.id;
    idsplit = idfilme.split('gostei');
    id = idsplit[1];
    $.ajax({
        method: "POST",
        url: "../../controller/gostei.php",
        data: {id},
        success: function(retorno){
            quant = document.getElementById('quantLikes'+id);
            quant.innerHTML = retorno;
            getLikesDislikes();
        }
    });
});
var dislikes = document.getElementsByClassName('dislike');
$(dislikes).on('click', function(e){
    idfilme = e.target.id;
    idsplit = idfilme.split('naoGostei');
    id = idsplit[1];
    $.ajax({
        method: "POST",
        url: "../../controller/naoGostei.php",
        data: {id},
        success: function(retorno){
            quant = document.getElementById('quantDislikes'+id);
            quant.innerHTML = retorno;
            getLikesDislikes();
        }
    });
});
var total = document.getElementById("total");
function getLikesDislikes(){
    $.ajax({
        method: "POST",
        url: "../../controller/total.php",
        success: function(retorno){
            total.innerHTML = retorno;
        }
    });
}