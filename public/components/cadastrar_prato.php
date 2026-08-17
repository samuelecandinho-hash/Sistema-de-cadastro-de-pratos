<?php
include("infra/db/connect.php");

$nome = $_POST["usuario"];
$descricao = $_POST["Email"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO livros (nome_pratos,descricao_pratos,preco_pratos,categoria_pratos,) VALUES (?, ?, ?, ?, ?)";
if($stmt = $conexao->prepare($sql))
{
    $stmt->bind_param("ssisi", $nome, $descricao, $preco, $categoria, $id);
    $stmt->execute();
}

header("Location: ../index.php");

?>