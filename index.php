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
    <?php
    include("public/components/usuario.php");
    include("public/components/cadastrar_prato.php");
    ?>
    <h4>Pratos Cadastrados</h4>

    <table border="1" cellpadding="3">

        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>descrição</th>
            <th>preço</th>
            <th>categoria</th>
            <th>nome do usuario</th>
            <th id="BotaoExcluir">Excluir</th>
            <th>Editar</th>
        </tr>

        <?php
        include("infra/db/connect.php");
        $sqlTodosPratos = "SELECT * FROM pratos";

        $resultadoTodosPratos = $conn->query($sqlTodosPratos);

        while ($linha = $resultadoTodosPratos->fetch_assoc()) {

            echo "  <tr>
                    <td>" . $linha['id_pratos'] . "</td>
                    <td>" . $linha['nome_pratos'] . "</td>
                    <td>" . $linha['descricao_pratos'] . "</td>
                    <td>" . $linha['preco_pratos'] . "</td>
                    <td>" . $linha['categoria_pratos'] . "</td>
                    <td>" . $linha['nome_users'] . "</td>
                    <td> <a href='public/excluir.php?id=" . $linha['id_pratos'] . "'> Excluir</a></td>
                    <td> <a href='public/editar.php?id=" . $linha['id_pratos'] . "'> Editar</a></td>
                </tr>
        ";
        }

        ?>



    </table>
</body>

</html>