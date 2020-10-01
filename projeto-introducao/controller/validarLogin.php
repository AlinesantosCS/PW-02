<?php 
/* Váriavel name : user. Pega a váriavel e guarda no POST 
váriaveis - 
Post - variável super global
Cookie*/

// exit = die

$senhaLogin = $_POST['pass'];
$emailLogin = $_POST['user'];

/*var_dump($user);*/

    if($emailLogin === ' '){
        echo 'Campo email ou usuário está vazio! <br><br> Digite novamente';
        die();
    }

    if(empty($senhaLogin)){
        echo 'Campo senha está vazio! <br><br> Digite novamente';
        exit();
    }

    echo 'Sucesso';
?>