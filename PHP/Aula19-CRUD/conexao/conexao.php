<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "faculdade";

// criando conexão
$conn = new mysqli($serverName, $username, $password, $dbName);

// validção da conexão
if ($conn->connect_error){
    echo "Conexão Falhou";
}


?>