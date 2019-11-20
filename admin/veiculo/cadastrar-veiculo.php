<?php

require_once 'global.php';

try {
	// header("Location: form-cadastrar-veiculo.php");

	//criando objeto do tipo Veiculo()
	$carro = new Veiculo();

	$carro->setAnoVeiculo($_POST['ano']);
	$carro->setCorVeiculo($_POST['cor']);
	$carro->setModeloVeiculo($_POST['modelo']);
	$carro->setValorDiariaVeiculo($_POST['valorDiaria']);
	$carro->setIdMarca($_POST['idMarca']);

	$carro->cadastrar($carro);

	$carro->setIdVeiculo($carro->pegarIdVeiculo());

	$nomeImagem = $_FILES['img']['name'];

	$arquivoImagem = $_FILES['img']['tmp_name'];

	$caminho = "../../img/veiculos/";

	$array = explode(".", $nomeImagem);

	$extensao = $array[1];

	$nomeImagem = $caminho . $carro->getIdVeiculo() . "." . $extensao;

	move_uploaded_file($arquivoImagem, $nomeImagem);

	$carro->setImgVeiculo($nomeImagem);
	$carro->fotoVeiculo($carro);
	
} catch (Exception $erro) {
	echo '<pre>';
	print_r($erro);
	echo '</pre>';
	echo $erro->getMessage();
}
