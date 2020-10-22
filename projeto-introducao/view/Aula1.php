<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" href = "node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel = "stylesheet" href = "CSS/estilo.css">

    <title>Revisão PHP</title>
</head>
<body>

    <h1>AULA REVISÃO PHP </h1>

    <!--POST não aparece no navegador, é um método mais seguro-->
    <form action="" method="post">
    <label for="valor1">Valor 1</label>
    <input type="text" name="valor1" id="valor1">
    <label for="valor2">Valor 2</label>
    <input type="text" name="valor2" id="valor2">
    <input type="submit" value="Enviar">
    </form>

    <?php

        /*echo "Olá mundo";
        echo = writeline
        //Váriaveis
        $A;
        $B;
        $A = "32";
        $B = "32";
        //Concatenação e soma | Pouco tipado, não necessário converter valores
        echo $A + $B; 
        $variavel1 = 10;
        $variavel2 = 10.0;
        $variavel3 = true;
        $variavel4 = "texto";*/

        $num1 = $_POST['valor1'];
        $num2 = $_POST['valor2'];

        echo "<br><br>";
        var_dump($num1);
        echo "<br><br>";
        var_dump($num2);// Mostra as informações das váriaveis,muito útil em vetores| Ex: string(2) "10"
        echo "<br><br>";
        echo "Sua soma é ". ($num1 + $num2);// . é uma concatenação do texto coma soma
    ?>
    

 <!--IMPORTANDO NESSA ORDEM | JQUERY, POPPER, BOOTSTRAP-->
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

