<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.main {
			width: 100%;
			height: 100%;
			text-align: center;
		}

		input{
			margin-bottom: 10px;
		}

		.card {
            width: 380px;
            margin: 0 auto;
            margin-top: 200px;
        }

		.form-login {
			background-color: #4287f5;
			color: white;
			margin: 25vh auto;
			width: 25vw;
			height: 50vh;
			background-color: aliceblue;
			border-radius: 20px;
			padding: 2%;
		}

		.form-login-title {
			margin-bottom: 20%;
			
		}
	</style>
</head>

<body>
	<div class="main">

		<div class="card">
			<div class="card-body">
				<h1>Cadastrar marcas</h1>
				<form method="POST" action="cadastrar-marca.php">
					<input type="text" name="marca" placeholder="Nome da marca">
					<br>
					<input type="submit" class="btn btn-primary" value="logar">
					<a href="parte-admin/cadastrar-usuario.php">
						<button class="btn btn-success" name="cadastrar">Cadastrar</button>
					</a>
				</form>
			</div>
		</div>
		<!-- <form class="form-login" action="Usuario.php" method="POST">
				<h2 class="form-login-title">Painel de login</h2>
				<div class="form-group">
					<input class="form-control" type="text" name="username" placeholder="Nome de usuário" required />
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Senha" required />
				</div>
				<button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
				<button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
			</form> -->

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>