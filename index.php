<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login - PHP + MySQL</title>
	<link rel="stylesheet" href="style.css">	
</head>
 
<body  bgcolor="#F3E2A9">
	<div class="tarjaSuperior">
	<table>
		<tr>
		<th height="500">
			<td>
			<th width="500">
				<div>
					<img src="img/logo.png" width=200 height=220>
				</div>    
				<div class="title" style="color: #000000;" align="center"> <h2>SGABinB</h2>
				</div>
			</td>
			<td>
				<div class="boxLogin" align="middle">
					<img src="img/usuarioLogin.png" width=64 height=55 >
						<form action="login.php" method="POST">
							<div>
								<br>
							</div>						  
				<div>
				<input name="email" name="text" class="aaaa" placeholder="Seu Email" autofocus="">
				</div>
				<div class="textarea">
				<input name="senha" class="input is-large" type="password" placeholder="Sua senha">
				<div>
				<br>
				</div>  
				</div>
					<button class="btn btn-black">Entrar</button>
						<br/>						   
						</form>				
				</td>
			</tr>
	</table>								  
	</div>
</html>