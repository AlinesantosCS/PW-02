<?php 

  include "conexao.php";
   
    //  INSTRUÇÕES PREPARADS SQL 
    $sql = $conn -> prepare('INSERT INTO Usuario (nome, email, userName,senha, tipo, CPF) VALUE(?,?,?,?,?,?)');
   // Validando cada campo da tabela que será inserida que no caso será "String"
    $sql -> bind_param("ssssss", $nomeCadastro, $emailCadastro, $usuarioCadastro, $senhaCadastro, $tipo, $cpfCadastro);
    
    $sql -> execute() or die('Erro Banco');

    echo "Sucesso";

    $sql -> close();
    $conn -> close();

    die();

  
?>