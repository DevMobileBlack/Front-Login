<?php
include ('conexao.php');
session_start();

if (empty($_POST['email']) && empty($_POST['senha'])){
    header('Location: index.php');
    exit;


}

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query =  "select id, email from users where email = '{$usuario}' and senha ='{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1){

    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();


}else{

    $_SESSION['msg'] = "Login ou Senha Incorreta";

    header('Location: index.php');
    exit();


}







