<?php

require_once 'global.php';

try {
    header('Location: form-cadastrar-marca.php');
    $cadastrar = new Marca();
    $cadastrar->setnomeMarca($_POST['marca']);
    $cadastrar->cadastrar($cadastrar);
    
} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
/*

Cadastrar (insert) FEITO
Listar (select) FEITO
editar (update) 
apagar (delete)

*/
?>

