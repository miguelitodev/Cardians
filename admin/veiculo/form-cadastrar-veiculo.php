<?php

require_once '../global.php';

try {
	$marca = new Marca();
	$veiculo = new Veiculo();
	$lista = $marca->listar();
	$listaVeiculo = $veiculo->listar();

} catch (Exception $erro) {
	echo '<pre>';
	print_r($erro);
	echo '</pre>';
	echo $erro->getMessage();
}

?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Cadastrar Veiculo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		body {}

		div {
			margin-left: 30%;
			width: 40%;
			text-align: center;
		}

		input {
			margin-bottom: 10px;
			width: 100%;
		}

		button {
			width: 100%;
		}
		select{
			width: 100%;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>

	<div>
		<h1>Cadastrar veiculo</h1>
		<form action="cadastrar-veiculo.php" method="POST">
			<input type="text" placeholder="Modelo do veiculo" name="modelo">
			<br>
			<input type="text" placeholder="Ano do veiculo" name="ano">
			<br>
			<input type="text" placeholder="Cor do veiculo" name="cor">
			<br>
			<input type="money" placeholder="Valor da diaria" name="valorDiaria">
			<br>
			<select name="idMarca" title="Marca do veiculo">
				<?php
					foreach ($lista as $linha) {
					echo ("<option value=" . $linha[idMarca] . ">" . $linha[nomeMarca] . "</option>");
				}
				?>
			</select>
			<br>
			<input type="submit" value="Cadastrar" name="cadastrar">
		</form>
		<a href="menu-admin.php">
			<button>
				Voltar
			</button>
		</a>

	</div>
	
	<div>
		<h1>Veiculos cadastrados</h1>
		<form action="buscar-veiculo.php">
			<input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar veículo">

		</form>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Ano</th>
					<th>Cor</th>
					<th>Modelo</th>
					<th>Valor diária</th>
				</tr>
			</thead>
			<tbody id="resultado">
				<?php foreach($listaVeiculo as $linha){?>
					<tr>
						<td><?php echo $linha['idVeiculo']?></td>
						<td><?php echo $linha['anoVeiculo']?></td>
						<td><?php echo $linha['corVeiculo']?></td>
						<td><?php echo $linha['modeloVeiculo']?></td>
						<td><?php echo $linha['valorDiariaVeiculo']?></td>
					</tr>
				
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="card">
            <div class="card-body">
                <h1 class="card-title">Fazer locação</h1>
                <a href="../menu-admin.php">
                    <button style="
                    width:100%;
                    height: 40px;    
                    border: none;">
                        Voltar
                    </button>
                </a>
            </div>
        </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>