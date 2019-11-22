<?php
require_once 'global.php';

try {
    header("Location: form-cadastrar-veiculo.php");
    $veiculo = new Veiculo();
    $veiculo->setIdVeiculo($_GET['id']);
    $veiculo->setAnoVeiculo($_POST['ano']);
    $veiculo->setModeloVeiculo($_POST['modelo']);
    $veiculo->setImgVeiculo($_POST['img']);
    $veiculo->setCorVeiculo($_POST['cor']);
    $veiculo->setStatusVeiculo($_POST['statusVeiculo']);
    $veiculo->setValorDiariaVeiculo($_POST['valorDiaria']);
    $veiculo->setIdMarca($_POST['idMarca']);
    echo $veiculo->editar($veiculo);

    $nomeImagem = $_FILES['img']['name'];

    $arquivoImagem = $_FILES['img']['tmp_name'];

    $caminho = "../../img/veiculos/";

    $ext = explode(".", $nomeImagem);

    $extensao = $ext[1];

    $nomeImagem = $caminho . $veiculo->getIdVeiculo() . "." . $extensao;

    move_uploaded_file($arquivoImagem, $nomeImagem);

    $veiculo->setImgVeiculo($nomeImagem);
    $veiculo->fotoVeiculo($veiculo);

} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
