<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>PHP - HOME</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "CSS/estilo.css">
   

</head>
<body>

   <div class = "jumbotron h-100 mt-5"> 

        <div class="col-lg-12 text-center my-4">
            <h1 class="display-4">Já sou cadastrado!</h1>
       </div>

        <form action="../controller/validarLogin.php" method="POST" id="login" >

            <div class="form-row">
                <div class="form-group col-lg-6 my-3 mx-auto">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" placeholder="Digite seu email ou nome de usuário" name="user">
                </div>
            </div>

            <div class="form-row">
              <div class="form-group col-lg-6 my-3 mx-auto">
                 <label for="inputPassword4">Senha</label>
                 <input type="password" class="form-control" placeholder="Digite a sua senha" name="pass">
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-5 my-3 mx-auto  ">
                    <button type="submit" class="form-control form-control btn btn-success btn-lg  ">Entrar</button>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-12 my-3 mr-auto">
                <a class ="nav-link lead text-center" href="cadastro.php" >Esqueci a minha senha</a>
                </div>
            </div>
      </form>      
   </div>

    <!--IMPORTANDO NESSA ORDEM | JQUERY, POPPER, BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>