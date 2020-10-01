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
    <link rel = "stylesheet" href = "../../CSS/estilo.css">
  
   

</head>
<body>

   <div class = "jumbotron h-100 mt-5">  
        <div class="col-lg-12 text-center my-4">
            <h1 class = "display-3">BEM-VINDO AO NOSSO SITE</h1>
            <h1 class="display-4">SEMPRE UM PRAZER RECEBER VOCÊ</h1>
            </div>
                    <div class = "form-row">
                        <!--ml-auto deixa o alinhamento centralizado e proporcional-->
                        <div class="my-3 ml-auto"><!--ml-auto/mr-auto + my centraliza-->
                            <a class ="nav-link lead" href="../login/login.php">Já sou cadastrado</a>
                        </div>
                        <!--mr-auto : alinha automatico a margem a direita-->
                        <div class=" form-row my-3 mr-auto">
                            <a class ="nav-link lead" href="../cadastro/cadastro.php" >Preciso me cadastrar</a>
                        </div>
                </div>
            </div>
    </div>
    
    <!--IMPORTANDO NESSA ORDEM | JQUERY, POPPER, BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>