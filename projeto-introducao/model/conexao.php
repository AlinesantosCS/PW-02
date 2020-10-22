<?php 
    $DBservidor = '127.0.0.1';
    $DBusuario = 'root';
    $DBsenha = '56561997ae';
    $DBbanco = 'EAD_PWII';

    $conn = mysqli_connect($DBservidor,$DBusuario, $DBsenha, $DBbanco);

    $sql = "SET NAMES 'utf8'";// Variável | SET NAMES roda a query dentro do banco
    mysqli_query($conn, $sql);
    $slq = "SFT character_set_connection-utf8";
    mysqli_query($conn, $sql);
    $sql = 'SFT character_set_client-utf8';
    mysqli_query($conn, $sql);
    $sql = 'SFT character_set_results-utf8';

    if(mysqli_connect_error($conn))
    {
        echo(' Erro na conexão: ' . mysqli_connect_error());
        die();
    }

    
    



?>