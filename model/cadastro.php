<?php 
include("conexao.php");
class Cadastro{
    private $titulo;
    private $genero;
    private $email;
    private $senha;
    private $tipo;
    private $conexao = Conexao::getConexao();

    public function __construct($titulo, $genero, $descricao, $imagem, $gostei, $naoGostei)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->gostei = $gostei;
        $this->naoGostei = $naoGostei;
    }

    public function verificarCadastro(){
        $verificar = $conexao -> prepare("select id from files where titulo = :titulo");
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
            $cadastro = $conexao -> prepare("insert into filmes (titulo, genero, descricao, imagem) values (:titulo, :genero, :descricao, :imagem)");
            $cadastro -> bindValue(':titulo', $this->titulo);
            $cadastro -> bindValue(':genero', $this->genero);
            $cadastro -> bindValue(':descricao', $this->descricao);
            $cadastro -> bindValue(':imagem', $this->imagem);
            $cadastro -> execute();
            $cadastro -> closeCursor();
            header('location: ../../view/html/index.php');
        }    
        else if($this->verificarCadastro() == false){
            echo "<link rel='stylesheet' type='text/css' href='../../view/style/erro.css'><body style='text-align: center; font-size: 6vmin; color: black; font-weight: bolder;' ><p id='msg' >Filme já existente: ". $this->titulo. "</p><br>
                  <a href='../../view/html/cadastro.php'><button style='padding: 10px; font-size:3vmin; border-radius: 8px; font-weight: bold; cursor: pointer;'>Voltar para o cadastro</button></a></body>";
        }
    }
}
?>