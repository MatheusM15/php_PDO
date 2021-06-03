<?php
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cnome = $_POST['cnome'];
    $csenha = $_POST['csenha'];

    require_once('bd.php');

    if(!empty($nome) && !empty($senha)){

        $con = new Database();
        $db = $con->conectar();
        $stmt = $db->prepare('SELECT * FROM users WHERE nome = :nome');
        $stmt->bindParam(':nome',$nome);
        $stmt->execute();

        if($stmt->rowCount() == 0){
            $stmt = $db->prepare('INSERT INTO users(nome,senha) VALUES (:nome,:senha)');
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':senha',$senha);
            $stmt->execute();

            header('location: index.php');
        }else{
            header('location: cadastramento.php?error='.$error);
        }

    }elseif(empty($nome) && !empty($senha)){
        $error = 'nome';
        header('location: cadastramento.php?nome='.$senha);
    }elseif(!empty($nome) && empty($senha)){
        $error = 'senha';
        header('location: cadastramento.php?senha='.$error);

    }else{
        $error = 'error';
       header('location: cadastramento.php?error='.$error);
     
    }
?>
    
  

 


