<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_prato = $_POST["nome_pratos"];
    $descricao = $_POST["descricao_pratos"];
    $preco = $_POST["preco_pratos"];
    $categoria = $_POST["categoria_pratos"];
    $nome_usuario = $_POST["nome_users"];

    $sql = "INSERT INTO pratos (nome_pratos, descricao_pratos, preco_pratos, categoria_pratos, nome_users) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param(
            "ssdss",
            $nome_prato,
            $descricao,
            $preco,
            $categoria,
            $nome_usuario
        );

        if (!$stmt->execute()) {
            die("Erro ao inserir prato: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Erro ao preparar SQL: " . $conn->error);
    }
};
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>


    <h4>Cadastro de Novo Prato.</h4>
    <form method="POST">
        <label> Nome: </label>
        <input type="text" name="nome_pratos" required>
        <br>
        <label for="descricao"> Descrição:</label>
        <input type="text" name="descricao_pratos" required>
        <br>
        <label for="preco"> Preço:</label>
        <input type="number" name="preco_pratos" step="0.01" required>
        <br>
        <label for="categoria"> Categoria:</label>
        <input type="text" name="categoria_pratos" required>
        <br>
        <label for="nome_usuario"> Nome do Usuário:</label>
        <input type="text" name="nome_users" required>
        <?php

        if (isset($erro)) {
            echo $erro;
        };

        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
</body>

</html>