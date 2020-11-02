<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "projeto_banco_dados";

    //criando conexão
    $connect = mysqli_connect($servername, $username, $password, $database);
    
    //verificando a conexão

    if(!$connect){
        die("Não foi possível conectar" .mysqli_connect_error());
    }

?>

<!--adicionando-->