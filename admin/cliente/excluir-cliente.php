<?php 

require_once 'global.php';

try{
    header("Location: form-cadastrar-cliente.php");
    $cliente = new Cliente();
    $cliente->setIdCliente($_GET['id']);
    $cliente->excluir($cliente);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>