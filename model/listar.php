<?php
require_once('conexao.php');
class Publicacoes{
    private $id;
    private $conexao = Conexao::getConexao();
    public function getAllFilmes(){
        $select = $conexao->prepare("select * from filmes order by desc");
        $select -> execute();
        $quantidade = $select->rowCount();
        if($quantidade < 1){
            echo "<p id='erro'> Ainda não há nenhum filme </p>";
        }
        else{
            $filmes = $select->fetchAll();
            echo "<section id='filmes'>";
            foreach($publicacoes as $row){
                echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['titulo']."</p>
                    <p class='p1'>".$row['genero']."</p>
                    <p class='img'>".$row['descricao']."</p>
                    <label>".$row['gostei']."</label>
                    <label>".$row['naoGostei']."</label>
                </div>";
            } 
            echo "</section>";
        }
    }
    public function addLike($id){

    }
    public function addDislike($id){

    }
}
?>