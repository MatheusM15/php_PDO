<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastramento</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <script>
       function login(){
        window.location.href = 'index.php';
       }

    </script>
    <script src="js/verificar.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
        <div class="mt-xl-5 card w-75" id="cadastro">
            <div class="card-header text-center bg-warning">
                <img src="imagens/8964998576cfac440b3a14df748fc670.png" width="100" height="100">
            </div>
            <div class="card-body">
                <form method="POST" action="controle_cadastro.php">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input value="" type="nome" id="nome" placeholder="nome" name="nome" class="form-control">
                                <div class="invalid-feedback">
                                    O valor não foi inserido
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cnome">Confirmar Nome:</label>
                                <input value="" id="cnome" placeholder="Confirmar Nome:" class="form-control">
                                <div class="invalid-feedback">
                                    O valor não foi inserido
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" value="" placeholder="Senha">
                                <div class="invalid-feedback">
                                    O valor não foi inserido
                                </div>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="csenha">Confirmar Senha:</label>
                            <input type="password" class="form-control" id="csenha" value="" placeholder="Confirmar Senha">
                            <div class="invalid-feedback">
                                O valor não foi inserido
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button onclick="checkRegister()" type="submit" class="btn btn-warning btn-block">Cadastrar</button>
                    </div>
                    <div class="col-6">
                        <button onclick="login()" type="button" class="btn btn-danger btn-block">Voltar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> 
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
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
            document.getElementById('nome').className = 'form-control' + ' ' + 'is-invalid';
            document.getElementById('cnome').className = 'form-control' + ' ' + 'is-invalid';
            document.getElementById('senha').className = 'form-control' + ' ' + 'is-invalid';
            document.getElementById('csenha').className = 'form-control' + ' ' + 'is-invalid';
   
        </script>
    <?php
    }
    if(isset($_GET['nome'])){

        ?>
          <script language="javascript" type="text/javascript">
            document.getElementById('nome').className = 'form-control' + ' ' + 'is-invalid';
            document.getElementById('cnome').className = 'form-control' + ' ' + 'is-invalid';
            
            
   
        </script>
    <?php
    }
    if(isset($_GET['senha'])){
        ?>
         <script language="javascript" type="text/javascript">
            document.getElementById('senha').className = 'form-control' + ' ' + 'is-invalid';
            document.getElementById('csenha').className = 'form-control' + ' ' + 'is-invalid';
        </script>
        <?php
    }