<?php 
/* Váriavel name : user. Pega a váriavel e guarda no POST 
váriaveis - 
Post - variável super global
Cookie*/

// exit = die
session_start();


$senhaLogin = $_POST['pass'];
$emailLogin = $_POST['user'];

/*var_dump($user);*/

    if(empty($emailLogin)){
        echo "ErroUser";
        die();
    }

    if(empty($senhaLogin)){
        echo "ErroPass";
        exit();
    }

   include_once '../model/ValidarLoginModel.php';
?>