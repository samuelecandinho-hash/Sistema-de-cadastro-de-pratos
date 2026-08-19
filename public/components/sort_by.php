<form method="POST" action="index.php">
    <h1> Procurar pratos de um usuário: </h1>
    <label for="nameSort"> Usuário: </label>
    <select name="nameSort" id="123">
        <?php 
            $sqlUsuarios = "SELECT nome_users FROM users";
            $resultadoUsuarios = $conn->query($sqlUsuarios);
            echo "<select name=" . $nameSort . " id=" . $nameSort . ">";
            while($linha = $resultadoUsuarios->fetch_assoc()){
            echo   "<option value=" . $linha['nome_users'] . ">" . $linha['nome_users'] . "</option>";
            }
            echo "</select>"
        ?>
    </select>
    <button type="submit"> Procurar </button>
</form>