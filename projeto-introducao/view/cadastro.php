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
            <h1 class="display-4">Cadastro</h1>
       </div>

    <form action="../controller/validarCadastro.php" method="POST" id="cadastro">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="text" class="form-control text-center" id="inputEmail3" name ="nome" placeholder="Digite o seu nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="email" class="form-control text-center" name="email" placeholder="Digite seu email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="" class="form-control text-center" id="inputPassword3" name="cpf" placeholder="Digite o seu CPF">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="text" class="form-control text-center" id="inputEmail3" placeholder="Digite seu nome de usuário">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="password" class="form-control text-center" id="inputEmail3" placeholder="Digite a sua senha">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
            <input type="password" class="form-control text-center" id="inputEmail3" placeholder="Confirme a sua senha">
            </div>
        </div>

        <div class="form-row">
                <div class="col-md-4 my-3 mx-auto  ">
                    <button type="submit" class="form-control form-control btn btn-secondary btn-lg  ">Cadastrar</button>
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