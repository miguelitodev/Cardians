<?php

require_once 'global.php';

try {
	header("Location: form-cadastrar-veiculo.php");
	
	$carro = new Veiculo();
	
	$carro->setAnoVeiculo($_POST['ano']);
	$carro->setCorVeiculo($_POST['cor']);
	$carro->setModeloVeiculo($_POST['modelo']);
	$carro->setValorDiariaVeiculo($_POST['valorDiaria']);
	$carro->setImgVeiculo($_POST['caminho']);
	$carro->setIdMarca($_POST['idMarca']);
	
	$carro->cadastrar($carro);
	

} catch (Exception $erro) {
	echo '<pre>';
	print_r($erro);
	echo '</pre>';
	echo $erro->getMessage();
}

?>

