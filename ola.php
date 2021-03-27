<?php
session_start();
include('verifica_login.php');

?>
<h2><?php echo $_SESSION['login'];?></h2>
<a href= "sair.php">Sair</a>
