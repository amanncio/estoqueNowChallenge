<?php   
    //BANCO DE DADOS
    //Criando variáveis do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db_estoque_now";

    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checando conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // $conn->close();
?>