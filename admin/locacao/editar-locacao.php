<?php
    require_once 'global.php';

    try{
        header("Location: form-cadastrar-locacao.php");
        $locacao = new Locacao();
        $locacao->setIdLocacao($_GET['id']);
        $locacao->setStatusLocacao($_POST['status']);
        echo $locacao->editar($locacao);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
