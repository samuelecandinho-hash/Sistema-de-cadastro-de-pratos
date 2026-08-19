<?php

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    ($_POST["formulario"] ?? "") === "usuario"
) {

    $nome = trim($_POST['Nome'] ?? '');
    $email = trim($_POST['Email'] ?? '');

    if ($nome === '' || $email === '') {
        die("Nome e e-mail são obrigatórios.");
    }

    $sql = "INSERT INTO users (nome_users, email_users) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar SQL: " . $conn->error);
    }

    $stmt->bind_param("ss", $nome, $email);

    if (!$stmt->execute()) {
        die("Erro ao inserir usuário: " . $stmt->error);
    }

    $stmt->close();

    header("Location: index.php");
    exit;
}
?>

<h3>Bem-Vindo!</h3>

<hr>

<h4>Cadastro de Novo Usuário.</h4>

<form method="POST" action="index.php">

    <input type="hidden" name="formulario" value="usuario">

    <label for="Nome">Nome:</label>
    <input type="text" id="Nome" name="Nome" required>

    <br>

    <label for="Email">E-mail:</label>
    <input type="email" id="Email" name="Email" required>

    <br>

    <button type="submit">Cadastrar Usuário</button>

</form>


<hr>
