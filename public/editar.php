<?php
session_start();
include("../infra/db/connect.php");

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    die("ID do prato inválido.");
}

$id_pratos = $_GET["id"];

$sql = "SELECT * FROM pratos WHERE id_pratos = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$prato = $resultado->fetch_assoc();

if (!$prato) {
    die("Prato não encontrado.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome_pratos"];
    $descricao = $_POST["descricao_pratos"];
    $preco = $_POST["preco_pratos"];
    $categoria = $_POST["categoria_pratos"];

    $sqlUpdate = "UPDATE pratos SET nome_pratos = ?,descricao_pratos = ?,preco_pratos = ?,categoria_pratos = ? WHERE id_pratos = ?";

    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param(
        "ssdsi",
        $nome_prato,
        $descricao_prato,
        $preco_prato,
        $categoria_prato,
        $id_prato
    );

    if ($stmtUpdate->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao atualizar o prato: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prato</title>
</head>

<body>

    <h2>Editar Prato</h2>

    <form method="POST">

        <label>Nome do prato:</label>
        <input type="text" name="nome_pratos" value="<?php echo htmlspecialchars($prato['nome_pratos']); ?>"required>

        <br><br>

        <label>Descrição:</label>
        <input 
            type="text" name="descricao_pratos" value="<?php echo htmlspecialchars($prato['descricao_pratos']); ?>"required
        >

        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco_pratos" value="<?php echo htmlspecialchars($prato['preco_pratos']); ?>"required>

        <br><br>

        <label>Categoria:</label>
        <input type="text" name="categoria_pratos" value="<?php echo htmlspecialchars($prato['categoria_pratos']); ?>"required>

        <br>

        <button type="submit">Editar</button>

    </form>

</body>

</html>
