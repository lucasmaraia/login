<?php
session_start();
include ('conexao.php');
if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location:index.php');
    exit();
}

$login = mysqli_real_escape_string($conexao,$_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$consulta = "select usuario_id, login from usuario where login = '{$login}' and senha = '{$senha}'";


$resultado  = mysqli_query($conexao,$consulta);

$linha = mysqli_num_rows($resultado);

if($linha == 1) {
    $_SESSION['login'] = $login ;
    header('Location: ola.php');
    exit();

} else {
    $_SESSION['nao_logado'] = true;
    header('Location: index.php');
    exit();
}




