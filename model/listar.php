<?php
require_once('connect.php');
class Filmes{
    private $id;
    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }
    public function getAllFilmes(){
        $select = $this->conexao->prepare("select * from filmes order by id desc");
        $select -> execute();
        $quantidade = $select->rowCount();
        if($quantidade < 1){
            echo "<p id='erro'> Ainda não há nenhum filme </p>";
        }
        else{
            $filmes = $select->fetchAll();
            echo "<section id='filmes'>";
            foreach($filmes as $row){
                echo "<div class='card'>
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
        $update = $this->conexao->prepare("update filmes set gostei = :gostei WHERE id = :id");
        $update -> bindValue(':id', $id);
        $update -> bindValue(':gostei', $this->getLikes($id)+1);
        $update -> execute();
        return $this->getLikes($id)+1;
    }

    public function getLikes($id){
        $select = $this->conexao->prepare("select gostei from filmes where id = :id");
        $select -> bindValue(':id', $id);
        $select -> execute();
        $gostei = $select->fetchColumn(); 
        return $gostei;
    }

    public function addDislike($id){
        $update = $this->conexao->prepare("update filmes set naoGostei = :naoGostei WHERE id = :id");
        $update -> bindValue(':id', $id);
        $update -> bindValue(':naoGostei', $this->getDislikes($id)+1);
        $update -> execute();
        return $this->getLikes($id)+1;
    }

    public function getDislikes($id){
        $select = $this->conexao->prepare("select naoGostei from filmes where id = :id");
        $select -> bindValue(':id', $id);
        $select -> execute();
        $gostei = $select->fetchColumn(); 
        return $naoGostei;
    }

    public function getAllLikesDislikes(){
        $select = $this->conexao->prepare("select sum(gostei) AS total_gostei, sum(naoGostei) AS total_naoGostei FROM filmes");
        $select->execute();
        $somas = $select->fetch(PDO::FETCH_ASSOC);
        $total = $somas["total_gostei"] + $somas["total_naoGostei"];
        return $total;
    }
}
?>