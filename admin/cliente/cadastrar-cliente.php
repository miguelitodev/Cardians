<?php

    require_once 'global.php';

    try {
        header('Location: form-cadastrar-cliente.php');

        $cadastrar = new Cliente();

        $cadastrar->setNomeCliente($_POST['nome']);
        $cadastrar->setCpfCliente($_POST['cpf']);
        $cadastrar->setCnhCliente($_POST['cnh']);
        $cadastrar->setCepCliente($_POST['cep']);
        $cadastrar->setEnderecoCliente($_POST['endereco']);
        $cadastrar->setNumeroCliente($_POST['numeroCasa']);
        $cadastrar->setComplementoCliente($_POST['complemento']);
        $cadastrar->setBairroCliente($_POST['bairro']);
        $cadastrar->setCidadeCliente($_POST["cidade"]);
        $cadastrar->setUfCliente($_POST["uf"]);

        $cadastrar->cadastrar($cadastrar);

    } catch (Exception $erro) {

        echo '<pre>';
        print_r($erro);
        echo '</pre>';
        echo $erro->getMessage();

    }
