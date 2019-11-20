<?php

require_once 'global.php';

try {

    $veiculo = new Veiculo();

    if (!empty($_GET['campoPesquisa'])) {

        $campoPesquisa = $_GET['campoPesquisa'] . "%";
        $lista = $veiculo->pesquisar($campoPesquisa);

        foreach ($lista as $linha) {
            echo "<div class='card'>
                <img class='veiculos' src='" . $linha['imgVeiculo'] . "' alt=''>
                <h1 class='modelo'>" . $linha['modeloVeiculo'] . "</h1>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><b>Modelo: </b>" . $linha['modeloVeiculo'] . "</li>
                    <li class='list-group-item'><b>Cor: </b>" . $linha['corVeiculo'] . "</li>
                    <li class='list-group-item'><b>Marca: </b>" . $linha['nomeMarca'] . "</li>
                    <li class='list-group-item'><b>Ano: </b>" . $linha['anoVeiculo'] . "</li>
                    <li class='list-group-item'><b>Valor da diária: </b>" . $linha['valorDiariaVeiculo'] . "</li>
                    <button type='button' class='btn' onclick=" . "window.location.href=" . 'admin/locacao/form-cadastrar-locacao.php' . ">Fazer locação</button>
                </ul>
            </div>";
        }
    } else {
        $lista = $veiculo->listar();
        foreach ($lista as $linha) {
            echo "<div class='card'>
        <img class='veiculos' src='" . $linha['imgVeiculo'] . "' alt=''>
        <h1 class='modelo'>" . $linha['modeloVeiculo'] . "</h1>
        <ul class='list-group list-group-flush'>
            <li class='list-group-item'><b>Modelo: </b>" . $linha['modeloVeiculo'] . "</li>
            <li class='list-group-item'><b>Cor: </b>" . $linha['corVeiculo'] . "</li>
            <li class='list-group-item'><b>Marca: </b>" . $linha['nomeMarca'] . "</li>
            <li class='list-group-item'><b>Ano: </b>" . $linha['anoVeiculo'] . "</li>
            <li class='list-group-item'><b>Valor da diária: </b>" . $linha['valorDiariaVeiculo'] . "</li>
            <button type='button' class='btn' onclick=" . "window.location.href=" . 'admin/locacao/form-cadastrar-locacao.php' . ">Fazer locação</button>
        </ul>
    </div>";
        }
    }

    if(empty($lista)){
        echo "<div class='alert alert-success' role='alert'>
        <h2 class='alert-heading' id='alert'>Ooops! :(</h4>
        <p>Infelizmente nós não conseguimos encontrar o veículo que você está procurando.</p>
        <hr>
        <p class='mb-10'>Aqui estão alguns passos que podem resolver isso:</p>
        <p class='mb-0'>1 - Certifique-se de que digitou o modelo do veículo corretamente;</p>
        <p class='mb-0'>2 - Recarregue a página e tente novamente;</p>
        <p class='mb-0'>3 - Caso nao resolva, envie-nos um feedback relatando o problema por <a href='contato.php'>aqui</a>.</p>
      </div>";
    }

    

} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
    
}
