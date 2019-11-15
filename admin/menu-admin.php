<?php

?>
<!doctype html>
<html lang="pt-br">

<head>
	<title>Menu Administrativo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style-parte-admin.css" />
	<style>
		button {
			width: 100%;
			height: 40px;
			border: none;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
		<div class="container-fluid">
			<a href="index.php">
				<img src="../img/menu_pag/logoSite.png" width="45" title="Home">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="carros.php">
							<img src="../img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros" />
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contato.php">
							<img src="../img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato" />
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="locacao/form-cadastrar-locacao.php">Locação</a>
							<a class="dropdown-item" href="cliente/form-cadastrar-cliente.php">Cliente</a>
							<a class="dropdown-item" href="usuario/form-cadastrar-usuario.php">Usário</a>
							<a class="dropdown-item" href="veiculo/form-cadastrar-veiculo.php">Veiculo</a>
							<a class="dropdown-item" href="marca/form-cadastrar-marca.php">Marca</a>
							<a class="dropdown-item" href="menu-admin.php">Menu</a>												
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="card">
		<div class="card-body">
			<h1 class="card-title">Menu Administrativo</h1>

			<a href="locacao/form-cadastrar-locacao.php">
				<button>
					Fazer locação
				</button>
			</a>

			<a href="veiculo/form-cadastrar-veiculo.php">
				<button>
					Cadastro veiculo
				</button>
			</a>

			<a href="cliente/form-cadastrar-cliente.php">
				<button>
					Cadastro cliente
				</button>
			</a>

			<a href="marca/form-cadastrar-marca.php">
				<button>
					Cadastro marca
				</button>
			</a>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>