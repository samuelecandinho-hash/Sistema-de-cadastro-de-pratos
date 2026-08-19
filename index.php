<?php
session_start();
include("infra/db/connect.php");
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
    include("public/components/usuario.php");
    include("public/components/cadastrar_prato.php");
    include("public/components/sort_by.php");
    include("public/components/table.php");
    ?>
    <img src="Assets/profissao-de-chef-cartoon.webp" alt="Chef" class="chef">
</body>
</html>
