<?php 

require_once 'global.php';

try{
    header("Location: form-cadastrar-marca.php");
    $marca = new Marca();
    $marca->setIdMarca($_GET['id']);
    echo $marca->excluir($marca);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>