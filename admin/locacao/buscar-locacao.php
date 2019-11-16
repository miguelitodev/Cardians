<?php

require_once 'global.php';

try{
    $locacao = new Locacao();
    if(!empty($_GET['campoPesquisa'])){
        $campoPesquisa = $_GET['campoPesquisa']."%";
        $lista = $locacao->pesquisar($campoPesquisa);
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idLocacao'] ."</td>
                <td> ". $linha['nomeCliente'] ."</td>
                <td> ". $linha['modeloVeiculo'] ."</td>
                <td> ". $linha['dataInicial'] ."</td>
                <td> ". $linha['dataFinal'] ."</td>
                <td> ". $linha['valorTotal'] ."</td>
                <td> <a href='form-editar-locacao.php?id= ". $linha['idLocacao'] ."'>Editar</a></td>
                <td> <a href='excluir-locacao.php?id= ". $linha['idLocacao'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $lista = $locacao->listar();
        foreach ($lista as $linha){
            echo "<tr>
                    <td> ". $linha['idLocacao'] ."</td>
                    <td> ". $linha['nomeCliente'] ."</td>
                    <td> ". $linha['modeloVeiculo'] ."</td>
                    <td> ". $linha['dataInicial'] ."</td>
                    <td> ". $linha['dataFinal'] ."</td>
                    <td> ". $linha['valorTotal'] ."</td>
                    <td> <a href='form-editar-locacao.php?id= ". $linha['idLocacao'] ."'>Editar</a></td>
                    <td> <a href='excluir-locacao.php?id= ". $linha['idLocacao'] ."'>Excluir</a></td>
                </tr>";
            }
    }
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>