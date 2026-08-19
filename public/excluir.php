<?php
include("../infra/db/connect.php");

$id = $_GET['id'];
$sql = " DELETE FROM pratos WHERE id_pratos = ? ";
if ($stmt = $conn->prepare($sql)) {
$stmt ->bind_param("i",$id);
}
$stmt = execute();

if($conn->query($sql) === TRUE){
    header("Location: ../index.php");
    exit();
}
?>