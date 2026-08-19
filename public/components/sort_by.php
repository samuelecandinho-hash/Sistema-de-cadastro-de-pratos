
<form method="POST" action="index.php">
    <h1> Procurar pratos de um usuário: </h1>
    <label for="nameSort"> Usuário: </label>
    <select name="nameSort" id="nameSort">
        <option value = "Selecione"> Selecione </option>
        <?php 
            $sqlUsuarios = "SELECT * FROM users";
            $resultadoUsuarios = $conn->query($sqlUsuarios);
            while($linha = $resultadoUsuarios->fetch_assoc()){
            echo   "<option value=" . $linha['id_users'] . ">" . $linha['nome_users'] . "</option>";
            }
            echo "</select>"
        ?>
    </select>
    <button type="submit"> Procurar </button>
</form>