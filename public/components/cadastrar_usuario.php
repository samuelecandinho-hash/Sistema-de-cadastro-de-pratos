<?php
include("infra/db/connect.php");

$nome = $_POST["usuario"];
$email = $_POST["Email"];

$sql = "INSERT INTO livros (nome,email) VALUES (?, ?)";
if($stmt = $conexao->prepare($sql))
{
    $stmt->bind_param("ss", $nome, $email);
    $stmt->execute();
}

header("Location: ../index.php");

?>