<?php

require_once 'global.php';

function uploadImage($image, $path){
	if($image!==null) {
		$target_dir = $path;
		$check = @getimagesize($image["tmp_name"]);
		if($check !== false) {
			//echo "File is an image - " . $check["mime"] . ".";
			$target_file = uniqid().image_type_to_extension($check[2]);
			if (move_uploaded_file($image["tmp_name"], $target_dir.$target_file)) {
				return $target_file;
			} else {
				die("Ocorreu um erro ao enviar a foto do veículo (CHMOD).");
			}
		} else {
			die("A foto do veículo selecionada não é uma imagem.");
		}
	} else {
		die("A foto do veículo não foi encontrada.");
	}
}

try {
	header("Location: form-cadastrar-veiculo.php");

	//criando objeto do tipo Veiculo()
	$carro = new Veiculo();

	$carro->setAnoVeiculo($_POST['ano']);
	$carro->setCorVeiculo($_POST['cor']);
	$carro->setModeloVeiculo($_POST['modelo']);
	$carro->setValorDiariaVeiculo($_POST['valorDiaria']);
	$carro->setStatusVeiculo($_POST['statusVeiculo']);
	$carro->setIdMarca($_POST['idMarca']);

	$carro->cadastrar($carro);

	$carro->setIdVeiculo($carro->pegarIdVeiculo());

	$caminho_da_imagem = uploadImage($_FILES["img"], __DIR__."/../../img/veiculos/");

	$carro->setImgVeiculo($caminho_da_imagem);
	$carro->fotoVeiculo($carro);
	
} catch (Exception $erro) {
	echo '<pre>';
	print_r($erro);
	echo '</pre>';
	echo $erro->getMessage();
}
