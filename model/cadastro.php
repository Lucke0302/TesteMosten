<?php 
include("connect.php");
class Cadastro{
    private $titulo;
    private $genero;
    private $descricao;
    private $imagem;

    public function __construct($titulo, $genero, $descricao, $imagem)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->conexao = Conexao::getConexao();
    }

    public function verificarCadastro(){
        $verificar = $this->conexao -> prepare("select id from filmes where titulo = :titulo");
        $verificar -> bindValue(':titulo', $this->titulo);
        $verificar -> execute();
        $qtlinhas = $verificar -> rowCount();
        if($qtlinhas != 0){
            return false;
        }
        else if($qtlinhas == 0){
            return true;
        }
    }

    public function Cadastro(){
        if($this->verificarCadastro() == true){
            $cadastro = $this->conexao -> prepare("insert into filmes (titulo, genero, descricao, imagem) values (:titulo, :genero, :descricao, :imagem)");
            $cadastro -> bindValue(':titulo', $this->titulo);
            $cadastro -> bindValue(':genero', $this->genero);
            $cadastro -> bindValue(':descricao', $this->descricao);
            $cadastro -> bindValue(':imagem', $this->imagem);
            $cadastro -> execute();
            $cadastro -> closeCursor();
            header('location: ../view/html/');
        }    
        else if($this->verificarCadastro() == false){
            echo "<link rel='stylesheet' type='text/css' href='../../view/style/erro.css'><body style='text-align: center; font-size: 6vmin; color: black; font-weight: bolder;' ><p id='msg' >Filme já existente: ". $this->titulo. "</p><br>
                  <a href='../view/html/cadastro.php'><button style='padding: 10px; font-size:3vmin; border-radius: 8px; font-weight: bold; cursor: pointer;'>Voltar para o cadastro</button></a></body>";
        }
    }
}
?>