<?php
define('HOST', 'us-cdbr-east-03.cleardb.com');
define('USUARIO','b1fce8f81dff85');
define('SENHA', '88dd23cf');
define('DB','heroku_68f4d6bb6e111e1');


$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Erro ao conectar com o banco de dados');