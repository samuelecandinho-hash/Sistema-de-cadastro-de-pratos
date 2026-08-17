<?php

session_start();

include("../infra/db/connect.php");


$sql = " DELETE FROM usuarios WHERE id = $id ";

if($conn->query($sql) === TRUE){
    header("Location: home.php");
    exit();
}

?>