<?php

require_once 'global.php';

try {
    //header('Location: form-cadastrar-marca.php');
    $alugar = new Marca();
    $alugar->set($_POST['marca']);
    $alugar->cadastrar($alugar);
    
} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
?>
