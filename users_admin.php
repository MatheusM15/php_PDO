<?php
include("isadmin.php");
require_once("bd.php");

$con =  new Database();
$db = $con->conectar();
$stmt = $db->prepare('SELECT * FROM users');
$stmt->execute();

$lista = $stmt->fetchAll(PDO::FETCH_OBJ);





?>
<!doctype html>
<html lang="en">
  <head>
    <title>Lista de usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/54dfa9ca00.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-info">
      <div class="container">
          <a class="navbar-brand" href="#">
          Teste
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-admin">
              <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="menu-admin">
            <ul class="ml-auto navbar-nav">
              <li class="nav-item "style="margin-top: 7px;"><a href="admin.php" class="nav-link">Home</a></li>
              <li class="nav-item active" style="margin-top: 7px;"><a href="users_admin.php" class="nav-link">Usuarios</a></li>
              <li class="nav-item" style="width: 1px;background-color: white; margin: 8px 10px;"></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= $_SESSION['user'] ?><img style="margin-left: 5px ;" width="40" height="40" src="imagens/8964998576cfac440b3a14df748fc670.png">
                  <div class="dropdown-menu bg-info" aria-labelledby="usertoggle">

                    <a href="#" class="dropdown-item">Teste</a>
                    <a href="#" class="dropdown-item">Teste</a>
                    <a href="exit.php" class="dropdown-item">Sair</a>
                  </div>
            
            </a></li>
            </ul>
        </div>
      </div>
   </nav>

   <div class="container">
    <?php
        foreach($lista as $key => $value){
          echo '
          <div class="card mt-3">
        <div class="card-body">
           <div class="row">
                <div class="col-sm-8">
                  <img src="imagens/8964998576cfac440b3a14df748fc670.png" height="75" width="75">
                '.$value->nome.'
                </div>
                <div style="padding-top: 17px;" class="text-right col-sm-4 ml-auto">
                <i   onclick="alert()" class="fas fa-trash fa-2x text-danger"></i>
                <i style="margin-left: 5px;" onclick="alert()" class="fas fa-edit fa-2x" ></i>
                </div>
                
            </div>
        </div>
     </div>';

          
        }

    ?>
    

   </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>