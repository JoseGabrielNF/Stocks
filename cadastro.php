<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<title>Cadastro - EXPSR</title>
</head>
<body >
	<nav id="nav" class="menu">
		<div class="container">
			<div class="logo">
				<a href="index.php">EXPSR</a>
			</div>
			<ul>
				<li class="alt align-right"><a href="login.php">Entrar</a></li>
			</ul>
		</div>
	</nav>
	<div class="body">
		<section class="backgroundCadastro">
			<div class="cadastro">
				<!--Metodo post é para enviar ao servidor-->
				<!--required: deve preencher o campo-->
			 <form method="post"> 
					<h1>Criar Conta</h1> 
					<p> 
						<h1 class="nomeInput">Usuário:</h1>
						<input required="required" type="text" name="usuario" placeholder="Insira seu nome de usuário" />
					</p>
					<p> 
						<h1 class="nomeInput">E-mail:</h1>
						<input required="required" type="email" name="email" placeholder="Insira seu e-mail"/> 
					</p>
					<p>
						<h1 class="nomeInput">Senha:</h1>
						<input required="required" type="password" name="senha" placeholder="Insira sua senha"/>
					</p>
					<p> 
						<h1 class="nomeInput">Repetir Senha:</h1>
						<input required="required" type="password" name="senha2" placeholder="Repita a senha inserida acima"/>
					</p>
					<p> 
						<input type="submit" value="Criar Conta"/> 
					</p>
					<?php
						echo "Usuário: " . $_POST["usuario"] . "<br>";
						echo "E-mail: " . $_POST["email"] . "<br>";
						echo "Senha: " . $_POST["senha"] . "<br>";
						echo "Repetir Senha: " . $_POST["senha2"] . "<br>";
					?>
					<p class="termo">  
					Ao criar uma conta você concorda com os termos e condições disponiveis
					<a href="terms.html">aqui</a>.
					</p>
				</form>   
			<div>
		</section>
	</div>
</body>
</html>