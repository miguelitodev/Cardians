<?php

require_once 'global.php';

try {
    //header('Location: form-cadastrar-locacao.php');

    $locacao = new Locacao();

    $locacao->pegarVeiculo($_POST['veiculo']);
    $locacao->pegarCliente($_POST['cliente']);
    $locacao->pegarUsuario($_POST['usuario']);

    $locacao->setDataInicial($_POST['dataInicial']);
    $locacao->setDataFinal($_POST['dataFinal']);
    $locacao->setValorTotal($_POST['valorTotal']);

    $locacao->cadastrarLocacao($locacao);

} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
?>
