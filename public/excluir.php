<?php

session_start();

include("../infra/db/connect.php");

$id = $_GET['id'];
$sql = " DELETE FROM users WHERE id_users = $id ";

if($conn->query($sql) === TRUE){
    header("Location: ../index.php");
    exit();
}

?>