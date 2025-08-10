<?php 
static class Conexao{
    private $pdo;

    public static function getConexao(){
        $username="root";
        // $password="";
        try{
            if(is_null($this->pdo)){    
            $this->pdo = new PDO('mysql:host = localhost; dbname=testeMosten', $username/*, $password*/);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }     
        return $this->pdo;   
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}
?>