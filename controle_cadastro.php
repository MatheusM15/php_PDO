<?php
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cnome = $_POST['cnome'];
    $csenha = $_POST['csenha'];
    $cmperror = '';
    $error = '';
    $same = false;

    print_r($_POST);

    require_once('bd.php');

    
    if(!empty($nome) && !empty($senha) && !empty($cnome) && !empty($csenha)){
        
        if(strcmp($nome,$cnome) == 0 && strcmp($csenha,$senha) == 0){
            $con = new Database();
            $db = $con->conectar();
            $stmt = $db->prepare('SELECT * FROM users WHERE nome = :nome');
            $stmt->bindParam(':nome',$nome);
            $stmt->execute();
            if($stmt->rowCount() > 0){
               $same = true;
            }else{
                $stmt = $db->prepare('INSERT INTO users(nome,senha) VALUES (:nome,:senha)');
                $stmt->bindParam(':nome',$nome);
                $stmt->bindParam(':senha',$senha);
                $stmt->execute();
                header('location: index.php?cad='.true);
                exit();
            }
        }
            elseif(strcmp($senha,$csenha) == 0 && strcmp($nome,$cnome) != 0){
                $cmperror = 'nome';
               
            }elseif(strcmp($nome,$cnome) == 0 && strcmp($senha,$csenha) != 0){
                $cmperror = 'senha';
                }else{
                    $cmperror = 'both';
                }

    }elseif(empty($nome) && !empty($senha)){
        $error = 'nome';
    }elseif(!empty($nome) && empty($senha)){
        $error = 'senha';
    }else{
        $error = 'both';
    }

    

    header('location: cadastramento.php?error='.$error.'&same='.$same.'&cmperror='.$cmperror.'&nome='.$nome.'&senha='.$senha);       
   
?>
    
  

 


