<?php

require_once 'global.php';

try {
    //header('Location: form-cadastrar-locacao.php');

    $locacao = new Locacao();

    $locacao->setIdCliente($_POST['cliente']);
    $locacao->setIdUsuario($_POST['usuario']);
    $locacao->setIdVeiculo($_POST['veiculo']);
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
