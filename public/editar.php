<?php

session_start();

include("../infra/db/connect.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pratos WHERE id_pratos = $id";
$resultado = $conn -> query($sql);
$Pratos = $resultado -> fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoNome = $_POST["prato"];
    $novaDescricao = $_POST["senha"];
    $novoPreco = 0;

    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id";

    if($conn -> query($sqlUpdate) === TRUE){
        header("Location: home.php");
        exit();
    }


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>
<form method="POST" action="index.php">

    <input type="hidden" name="formulario" value="prato">

    <label for="nome_pratos">Nome:</label>
    <input type="text" id="nome_pratos" name="nome_pratos" required>

    <br>

    <label for="descricao_pratos">Descrição:</label>
    <input type="text" id="descricao_pratos" name="descricao_pratos" required>

    <br>

    <label for="preco_pratos">Preço:</label>
    <input type="number" id="preco_pratos" name="preco_pratos" step="0.01" required>

    <br>

    <label for="categoria_pratos">Categoria:</label>
    <input type="text" id="categoria_pratos" name="categoria_pratos" required>

    <br>

    <label for="nome_users">Nome do Usuário:</label>
    <input type="text" id="nome_users" name="nome_users" required>

    <br>

    <button type="submit">Cadastrar Prato</button>

</form>    
</body>
</html>