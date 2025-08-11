<?php
require_once("../model/listar.php");
$update = new Filmes();
echo $update->addLike($_POST['id']);
?>