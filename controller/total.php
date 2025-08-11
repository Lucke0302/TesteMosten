<?php
require_once("../model/listar.php");
$update = new Filmes();
echo $update->getAllLikesDislikes();

// ... (código para pegar novos valores e retornar o JSON)
?>