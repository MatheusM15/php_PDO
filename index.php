<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/verificar.js"></script>
    <script>
        function cadastrar(){
            window.location.href = 'cadastramento.php'
        }
        function enviar(){
            let email = document.getElementById('login');
            let senha = document.getElementById('senha');
            if(email.value){
                alert('certo')
                email.className = "form-control" + " " + "is-valid";
                return;
            }
            alert('error');
            email.className = "form-control"+" " + "is-invalid";
        }
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Alerta!!</strong> Login não realizado.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
    <div class="card w-25" id="telaLogin">
        <div class="card-header text-center bg-warning">
            <img src="imagens/8964998576cfac440b3a14df748fc670.png" width="100" height="100">
        </div>
        <div class="card-body">
           <form method="POST" action="controle.php">
                <div class="form-group">
                        <label for="login">Login:</label>
                        <input class="form-control" id="login" name="nome" value="<?php if(isset($_GET['error'])) echo $_GET['error'] ?>" placeholder="Login">
                        <div class="invalid-feedback">
                            O valor não foi inserido
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" value="" placeholder="Senha">
                        <div class="invalid-feedback">
                            O valor não foi inserido
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" onclick="checkLogin()" class="btn btn-primary btn-block">Entar</button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="cadastrar()" type="button" class="btn btn-danger btn-block">Cadastrar</button>
                        </div>
                    </div>
           </form>
                  
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
    if(isset($_GET['error'])){
        ?>
        <script language="javascript" type="text/javascript">
            $('.alert').alert();
        </script>
        <?php
    }else{

        ?>
        <script language="javascript" type="text/javascript">
            $('.alert').alert('close');
        </script>
        <?php

    }

?>