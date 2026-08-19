<?php

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    ($_POST["formulario"] ?? "") === "prato"
) {


    $nome_prato = trim($_POST["nome_pratos"] ?? "");
    $descricao = trim($_POST["descricao_pratos"] ?? "");
    $preco = $_POST["preco_pratos"] ?? "";
    $categoria = trim($_POST["categoria_pratos"] ?? "");
    $nome_usuario = trim($_POST["nome_users"] ?? "");

    if (
        $nome_prato === "" ||
        $descricao === "" ||
        $preco === "" ||
        $categoria === "" ||
        $nome_usuario === ""
    ) {
        die("Todos os campos são obrigatórios.");
    }

    $sql = "INSERT INTO pratos 
            (nome_pratos, descricao_pratos, preco_pratos, categoria_pratos, nome_users) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar SQL: " . $conn->error);
    }

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

    header("Location: index.php");
    exit;
}
?>

<h4>Cadastro de Novo Prato.</h4>

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

<hr>