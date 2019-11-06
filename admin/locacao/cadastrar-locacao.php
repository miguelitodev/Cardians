<?php

require_once 'global.php';

try {
    $locacao = new Locacao();

    $locacao->setNomeCliente($_POST['nome']);
    $locacao->setCepCliente($_POST['cpf']);
    $locacao->setCnhCliente($_POST['cnh']);
    $locacao->setCepCliente($_POST['cep']);
    $locacao->setEnderecoCliente($_POST['endereco']);
    $locacao->setNumeroCliente($_POST['numeroCasa']);
    $locacao->setComplementoCliente($_POST['complemento']);
    $locacao->setBairroCliente($_POST['bairro']);
    $locacao->setCidadeCliente($_POST['cidade']);
    $locacao->setUfCliente($_POST['uf']);
    
    $locacao->pegarVeiculo($_POST['veiculo']);
    
    $locacao->set($_POST['dataInicial']);
    $locacao->set($_POST['dataFinal']);
    $locacao->set($_POST['valorTotal']);

    $locacao->pegarFuncionario($_POST['usuario']);

    $locacao->cadastrarLocacao($locacao);

} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
?>
