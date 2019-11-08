<?php
    require_once 'global.php';

    try{
        header("Location: form-cadastrar-veiculo.php");
        $veiculo = new Veiculo();
        $veiculo->setIdVeiculo($_GET['id']);
        $veiculo->setAnoVeiculo($_POST['ano']);
        $veiculo->setModeloVeiculo($_POST['modelo']);
        $veiculo->setCorVeiculo($_POST['cor']);
        $veiculo->setIdMarca($_POST['idMarca']);
        $veiculo->setValorDiariaVeiculo($_POST['valorDiaria']);
        echo $veiculo->editar($veiculo);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>