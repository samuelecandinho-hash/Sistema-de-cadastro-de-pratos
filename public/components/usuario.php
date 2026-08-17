<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];

    $sql = "INSERT INTO users (nome_users,email_users) VALUES (?,?)";

    if ($stmt = $conn->prepare($sql)) {

    $stmt->bind_param(
        "ss",
        $nome,
        $email
    );

    if (!$stmt->execute()) {
        die("Erro ao inserir prato: " . $stmt->error);
    }

    $stmt->close();
 header("Location: index.php");
    exit;
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
    <h3>Bem-Vindo!</h3>
    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label> Nome: </label>
        <input type="text" name="Nome" required>
        <br>
        <label for="Email"> E-mail:</label>
        <input type="email" name="Email" required>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
</body>
</html>