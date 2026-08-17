<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>descrição</th>
        <th>preço</th>
        <th>categoria</th>
        <th>ID do usuario</th>
        <th>nome do usuario</th>
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
                    <td>". $linha['nome'] . "</td>
                    <td>". $linha['descrição'] . "</td>
                    <td>". $linha['preco'] . "</td>
                    <td>". $linha['categoria'] . "</td>
                    <td>". $linha['id_usuario'] . "</td>
                    <td>". $linha['nome_usuario'] . "</td>
                    <td> <a href='excluir.php?id=". $linha['id'] ."'> Excluir</td>

                    <td> <a href='editar.php?id=". $linha['id'] ."'> Editar</td>
                </tr>
        ";

    }
    
    ?>

    

<script src="../scripts/.js"></script>
</table>