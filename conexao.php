<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'admin');
define('SENHA', '5rbvdQzFp2ARsZ51');
define('DB', 'bib_db');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>