<?php
session_start();

include("infra/db/connect.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
  <?php
include("public/components/usuario.php");
?>
    <?php
    
    include("public/components/table.php")

    ?>
</body>
</html>