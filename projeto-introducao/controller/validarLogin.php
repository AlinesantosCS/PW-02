<?php 
/* Váriavel name : user. Pega a váriavel e guarda no POST */
$user = $_POST['user'];
$pass = $_POST['pass'];

/*var_dump($user);*/

if(empty($user)){
    echo "erro usuário";
    die();
}

if(empty($pass)){
    echo "erro senha";
    exit();
}

/*exit = die - interrompe o script do php */ 

echo "Sucesso";

?>