<?php 


$nomeCadastro = $_POST['nome'];
$emailCadastro= $_POST['email'];
$cpfCadastro = $_POST['cpf'];
$usuarioCadastro = $_POST['user'];
$senhaCadastro = $_POST['senha'];
$confirmarCadastro= $_POST['confirmeSenha'];

/*var_dump($user);*/

    if(empty($nomeCadastro)){
        echo 'Campo nome está vazio! <br><br> Digite novamente';
        exit();
    }

    if(empty($emailCadastro)){
        echo 'Campo email está vazio! <br><br> Digite novamente';
        exit();
    }

    if(empty($cpfCadastro)){
        echo 'Campo cpf está vazio! <br><br> Digite novamente';
        exit();
    }

   

    if(empty($usuarioCadastro)){
        echo 'Campo usuário está vazio! <br><br> Digite novamente';
        exit();
    }

    if(empty($senhaCadastro)){
        echo 'Campo confirmar senha está vazio! <br><br> Digite novamente';
        exit();
    }

    if(empty($confirmarCadastro)){
        echo 'Campo senha está vazio! <br><br> Digite novamente';
        exit();
    }

    echo 'Sucesso';
?>