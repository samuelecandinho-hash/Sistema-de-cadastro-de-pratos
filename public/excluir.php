<?php

include("../infra/db/connect.php");

$id = $_GET['id'];
$sql = " DELETE FROM pratos WHERE id_pratos = $id ";

if($conn->query($sql) === TRUE){
    header("Location: ../index.php");
    exit();
}

?>