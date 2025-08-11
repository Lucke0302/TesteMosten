<?php
require_once("../model/listar.php");
$update = new Filmes();
echo $update->addLike($_POST['id']);

// ... (código para pegar novos valores e retornar o JSON)
?>