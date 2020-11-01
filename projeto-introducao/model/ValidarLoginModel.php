<?php 
    // session_start();

    include_once 'conexão.php';

    $sql = $conn -> prepare('SELECT * FROM Usuario WHERE(email = ? OR userName = ?) AND senha = ? AND ativo = true ');

    $sql -> bind_param("sss", $emailLogin, $emailLogin,$senhaLogin);

    $sql -> execute();

    $resultado = $sql -> get_result();

    // resultado de cada linha da tabela
    $linha = $resultado -> fetch_assoc();

    $sql -> close();
    $conn -> close();

    // Se existe na base de dados
    if(empty($linha)){
        echo 'Falha Login';
        die();
    }
    else{

        $_SESSION['idUsuario'] = $linha['idUsuario'];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['CPF'] = $linha['CPF'];
        $_SESSION['tipo'] = $linha['tipo'];
        $_SESSION['ativo'] = $linha['ativo'];
   

    switch($linha['tipo']){
        case 'administrador':
            echo "SucessoADM";
        break;

        case 'funcionario':
            echo "SucessoFuncionario";
        break;

        case 'cliente':
            echo "SucessoCliente";
        break;

        default:
        echo 'Falha Login';
        break;


    }

    die();
}
?>