<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "PRATADEIRA";

$conn = new mysqli($host, $user, $password, $database);

if ($conn -> connect_error)
    {
        die("Erro de conexão com o servidor: " . $conn->connect_error);
    }

$conn -> set_charset("utf8mb4");

?>