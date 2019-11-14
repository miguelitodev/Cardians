<?php
	require_once 'global.php';

	$usuario = new Usuario();
	$lista = $usuario->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro de usuário</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../../css/style-parte-admin.css" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
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
							<img src="../../img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros" />
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../contato.php">
							<img src="../../img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato" />
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../login.html">
							<img src="../../img/icons/login.svg" title="Login" />
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Cadastrar usuário</h4>
			<p class="card-text">Fazer o cadastro de novos usuários</p>
		</div>
		<div class="card-body">
			<form action="cadastrar-usuario.php" method="POST">
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
	</div>

	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Usuário Cadastrados</h4>
			<p class="card-text">Visualizar, editar ou apagar usuários.</p>
		</div>
		<div class="card-body">
			<form action="buscar-usuario.php">
				<input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar por um usuário">
			</form>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Login</th>
							<th class="acao">Editar</th>
							<th class="acao">Excluir</th>
						</tr>
					</thead>
					<tbody id="resultado">
						<?php foreach ($lista as $linha) { ?>
							<tr scope="row">
								<td><?php echo $linha['idUsuario'] ?></td>
								<td><?php echo $linha['nomeUsuario'] ?></td>
								<td><?php echo $linha['loginUsuario'] ?></td>								
								<td><a href="form-editar-usuario.php?id=<?php echo $linha['idUsuario'] ?>">Editar</a></td>
								<td><a href="excluir-usuario.php?id=<?php echo $linha['idUsuario'] ?>">Excluir</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
		</div>
	</div>
	<script type="text/javascript" src="../../js/jquery.slim.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/popper.min.js"></script>
	<script type="text/javascript" src="../../js/busca-aproximada-usuario.js"></script>
</body>

</html>