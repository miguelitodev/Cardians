<?php
    require_once 'global.php';

    try{
        header("Location: form-cadastrar-marca.php");
        $marca = new Marca();
        $marca->setIdMarca($_GET['id']);
        $marca->setNomeMarca($_POST['marca']);
        echo $marca->editar($marca);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>