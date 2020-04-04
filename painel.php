<?php

session_start();


if (!$_SESSION['usuario']) {

    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Painel</title>

    </head>
<body>

    <a href="logout.php"><h2>Sair</h2></a>

</body>
</html>



