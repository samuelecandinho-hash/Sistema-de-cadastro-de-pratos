<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>descrição</th>
        <th>preço</th>
        <th>categoria</th>
        <th id="BotaoExcluir">Excluir</th>
        <th>Editar</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch assoc

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td> <a href='excluir.php?id=". $linha['id'] ."'> Excluir</td>

                    <td> <a href='editar.php?id=". $linha['id'] ."'> Editar</td>
                </tr>
        ";

    }
    
    ?>

    

<script src="../scripts/confirm.js"></script>
</table>