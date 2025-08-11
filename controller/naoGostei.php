<?php
require_once("../model/listar.php");
$update = new Filmes();
echo $update->addDislike($_POST['id']);

// ... (código para pegar novos valores e retornar o JSON)
?>