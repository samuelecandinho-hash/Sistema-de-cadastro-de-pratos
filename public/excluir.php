<?php

session_start();

include("components/validacao.php");
include("../infra/db/connect.php");

include("components/GETID.php");

$sql = " DELETE FROM usuarios WHERE id = $id ";

if($conn->query($sql) === TRUE){
    header("Location: home.php");
    exit();
}

?>