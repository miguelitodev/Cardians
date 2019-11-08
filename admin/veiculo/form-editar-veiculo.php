<!doctype html>
<html lang="pt-br">

<head>
    <title>Editar veiculo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css">
</head>
<?php

require_once 'global.php';

try {
    $marca = new Marca();
    $veiculo = new Veiculo();
    $lista = $marca->listar();
    $marca = Marca::pegarMarca($_GET['id']);
    $veiculo = Veiculo::pegarVeiculo($_GET['id']);
    
} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

?>

<body>
    <div class="card" style="height: 430px">
        <div class="card-body">
            <h1>Editar veiculo</h1>
            <form name="edicao" method="post" action="editar-veiculo.php?id=<?php echo $veiculo->getIdVeiculo(); ?>">
                <input type="text" name="modelo" value="<?php echo $veiculo->getModeloVeiculo(); ?>">
                <input type="text" name="cor" value="<?php echo $veiculo->getCorVeiculo(); ?>">
                <select name="idMarca" title="Marca do veiculo" value="<?php echo $marca->getIdMarca(); ?>">
				<?php
					foreach ($lista as $linha) {
					echo ("<option value=" . $linha[idMarca] . ">" . $linha[nomeMarca] . "</option>");
				}
				?>
			</select>
                <input type="text" name="ano" value="<?php echo $veiculo->getAnoVeiculo(); ?>">
                <input type="text" name="valorDiaria" value="<?php echo $veiculo->getValorDiariaVeiculo(); ?>">
                <br>
                <input type="submit" value="Salvar">
                
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>