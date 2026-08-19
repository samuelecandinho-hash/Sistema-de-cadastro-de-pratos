<?php
include("../infra/db/connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM pratos WHERE id_pratos = ?";

if ($stmt = $conn->prepare($sql)) {

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao excluir prato: " . $stmt->error;
    }

    $stmt->close();

} else {
    echo "Erro ao preparar a consulta: " . $conn->error;
}

$conn->close();
?>
