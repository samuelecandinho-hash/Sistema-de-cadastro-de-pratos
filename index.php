<?php
session_start();

include("infra/db/connect.php");

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
        <input type="text" name="usuario">
        <br>
        <label for="Email"> E-mail:</label>
        <input type="email" name="Email">
        <br>
        <label>preço:</label>
        <input type="text" name="preco">
        <br>
        <label>categoria:</label>
        <input type="text" name="categoria">
        <br>
        <label>nome do usuario:</label>
        <input type="text" name="nome_usuario">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    include("public/components/table.php")

    ?>
</body>
</html>