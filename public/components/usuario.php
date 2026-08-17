<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novonome = $_POST['Nome'];
    $novoemail = $_POST['Email'];

    $sql = "INSERT INTO users (nome_users,email_users) VALUES ('$novonome','$novoemail')";  

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
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