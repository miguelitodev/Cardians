<?php

require_once 'global.php';

try {
    //header('Location: form-cadastrar-locacao.php');

    $locacao = new Locacao();

    $locacao->setIdUsuario($_POST['usuario']);
    $locacao->setIdVeiculo($_POST['veiculo']);
    $locacao->setDataInicial($_POST['dataInicial']);
    $locacao->setDataFinal($_POST['dataFinal']);
    $locacao->setValorTotal($_POST['valorDiaria']);

    $locacao->cadastrar($locacao);

} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
?>
