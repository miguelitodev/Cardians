
<!DOCTYPE html>
<html lang="pt-br">
  	<head>
		<title>Cadastro de usuário</title>
   		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
		<style>
			.form-cadastrar {
				background-color: #2DC874;
				color: aliceblue;
				width: 30vw;
				height: 70vh;
				margin: 0 auto;
				margin-top: 130px;
				margin-bottom: 0;
				padding: 50px;
				padding-top: 70px;
				border-radius: 10px;
				box-shadow: -10px 20px 60px rgba(0, 50, 30, 0.2);
			}
			.form-cadastrar-title {
				text-align: center;
				font-family: sans-serif;
				font-size: 40pt;
				font-weight: bold;
				letter-spacing: 5px;
				margin-bottom: 80px;
			}
		</style>
	</head>
  	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
			<div class="container-fluid">
				<a href="index.php">
					<img src="../../img/menu_pag/logoSite.png" width="45" title="Home">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="../../carros.php">
								<img src="../../img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros"/>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../contato.php">
								<img src="../../img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato"/>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../login.html">
								<img src="../../img/icons/login.svg" title="Login"/>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
      
		<div class="container">
			<form class="form-cadastrar" action="form-cadastrar-usuario.php" method="POST">
				<h2 class="form-cadastrar-title">Cadastrar</h2>
				<div class="form-group">
					<input type="text" class="form-control" name="txtNome" placeholder="Nome Completo" required />
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="txtEmail" placeholder="E-mail" required />
				</div>
				<div class="form-group">
						<input type="password" class="form-control" name="txtSenha" placeholder="Senha" required />
					</div>
				<button type="submit" class="btn btn-secondary btn-lg btn-block">Cadastrar</button>
			</form>
		</div>

		<?php

	include_once("../../classes/Usuario.php");
	$usuario = new Usuario();

	if(isset($_POST["txtNome"]))
		$usuario->setNomeUsuario($_POST["txtNome"]);
	
	
	if(isset($_POST["txtEmail"]))
		$usuario->setLoginUsuario($_POST["txtEmail"]);

	
	if(isset($_POST["txtSenha"]))
		$usuario->setSenhaUsuario($_POST["txtSenha"]);

	if($usuario->cadastrar($usuario) != false)
		header("Location: sucesso-cadastro.html");
?>

    	<script type="text/javascript" src="../../js/jquery.slim.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/popper.min.js"></script>
  	</body>
</html>