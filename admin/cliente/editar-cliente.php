<?php
    require_once 'global.php';

    try{

        header("Location: form-cadastrar-cliente.php");
        
        $cliente = new Cliente();

        $cliente->setIdCliente($_GET['id']);
        $cliente->setNomeCliente($_POST['nome']);
        $cliente->setCpfCliente($_POST['cpf']);
        $cliente->setCnhCliente($_POST['cnh']);
        $cliente->setCepCliente($_POST['cep']);
        $cliente->setEnderecoCliente($_POST['endereco']);
        $cliente->setNumeroCliente($_POST['numeroCasa']);
        $cliente->setComplementoCliente($_POST['complemento']);
        $cliente->setBairroCliente($_POST['bairro']);
        $cliente->setCidadeCliente($_POST["cidade"]);
        $cliente->setUfCliente($_POST["uf"]);

        echo $cliente->editar($cliente);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>