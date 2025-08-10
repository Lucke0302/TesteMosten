<?php 
class Conexao{
    private static $pdo;

    public static function getConexao(){
        $username="root";
        $password="";
        try{
            if(is_null(self::$pdo)){    
            self::$pdo = new PDO('mysql:host = localhost; dbname=testeMosten', $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }     
        return self::$pdo;   
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}
?>