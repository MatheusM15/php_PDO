<?php
session_start();
$_SESSION['admin'] = false;
$_SESSION['logado'] = false;

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$_SESSION['user'] =  '';
$adm = 1;
require_once('bd.php');
$con = new Database();
$db = $con->conectar();
$stmt = $db->prepare('SELECT * FROM users WHERE nome = :nome AND senha=:senha');
$stmt->bindParam(':nome',$_POST['nome']);
$stmt->bindParam(':senha',$_POST['senha']);


$stmt->execute();

$lista = $stmt->fetch(PDO::FETCH_ASSOC);



if($stmt->rowCount() > 0){
    $_SESSION['user'] =  $lista['nome'];
    $_SESSION['logado'] = true;
   if($lista['id'] == 1){
      $_SESSION['admin'] = true;
      header('location: admin.php');
   }else{
        header('location: inicio.php');
   }
   
  
    

}else{
    if(empty($senha) && empty($nome)){
        header('location: index.php?error='.$nome.'&both=true');
    }
    elseif(empty($senha)){
        header('location: index.php?error='.$nome.'&senha=error');
    }else{
        $_SESSION['logado'] = false;
        header('location: index.php?error='.$nome);
    }
}



?>