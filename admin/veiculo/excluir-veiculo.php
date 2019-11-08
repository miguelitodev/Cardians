<?php 

require_once 'global.php';

try{
    header("Location: form-cadastrar-veiculo.php");
    $veiculo = new Veiculo();
    $veiculo->setIdVeiculo($_GET['id']);
    echo $veiculo->excluir($veiculo);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>