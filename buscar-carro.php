<?php

require_once 'global.php';

try{

    $veiculo = new Veiculo();

    if(!empty($_GET['campoPesquisa'])){
        
        $campoPesquisa = $_GET['campoPesquisa']."%";
        $lista = $veiculo->pesquisar($campoPesquisa);
        
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idVeiculo'] ."</td>
                <td> ". $linha['modeloVeiculo'] ."</td>
                <td> ". $linha['corVeiculo'] ."</td>
                <td> ". $linha['idMarca'] ."</td>
                <td> ". $linha['anoVeiculo'] ."</td>
                <td> ". $linha['valorDiariaVeiculo'] ."</td>
                <td> <a href='form-editar-veiculo.php?id= ". $linha['idVeiculo'] ."'>Editar</a></td>
                <td> <a href='excluir-veiculo.php?id= ". $linha['idVeiculo'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $lista = $veiculo->listar();
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idVeiculo'] ."</td>
                <td> ". $linha['modeloVeiculo'] ."</td>
                <td> ". $linha['corVeiculo'] ."</td>
                <td> ". $linha['idMarca'] ."</td>
                <td> ". $linha['anoVeiculo'] ."</td>
                <td> ". $linha['valorDiariaVeiculo'] ."</td>
                <td> <a href='#?id= ". $linha['idVeiculo'] ."'>Editar</a></td>
                <td> <a href='#id= ". $linha['idVeiculo'] ."'>Excluir</a></td>
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