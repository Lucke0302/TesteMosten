<?php 

$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];

include('../model/cadastro.php');
$filme = new Cadastro($titulo, $genero, $descricao, $imagem);
$filme -> Cadastro();

?>