<?php
class Database{
    private $host = 'localhost';
    private $dbname = 'projeto_pdo';
    private $user = 'root';
    private $password = '';


    public function conectar(){
        try{
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
            return $conexao;

        }catch(PDOException $e){
            echo 'não foi possivel conectar ao banco';
        }
    }
}


?>