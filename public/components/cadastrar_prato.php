<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["formulario"]) === "prato") {

    $nome_prato =$_POST["nome_pratos"];
    $descricao =$_POST["descricao_pratos"];
    $preco = $_POST["preco_pratos"];
    $categoria = $_POST["categoria_pratos"];

    $sql = "INSERT INTO pratos (nome_pratos, descricao_pratos, preco_pratos, categoria_pratos) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar SQL: " . $conn->error);
    }

    $stmt->bind_param(
        "ssds",
        $nome_prato,
        $descricao,
        $preco,
        $categoria,
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
    <label for="User"> Id do usuário: </label>
    <input type="text" id="User" name="User" required>

    <br>
    <button type="submit">Cadastrar Prato</button>

</form>
<hr>