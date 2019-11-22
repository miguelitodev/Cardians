<?php
require_once "../../verifica-logado.php";
require_once 'global.php';

try{

    $cliente = new Cliente();

    if(!empty($_GET['campoPesquisa'])){

        $campoPesquisa = $_GET['campoPesquisa']."%";
        $lista = $cliente->pesquisar($campoPesquisa);
        
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idCliente'] ."</td>
                <td> ". $linha['nomeCliente'] ."</td>
                <td> ". $linha['cpfCliente'] ."</td>
                <td> ". $linha['ufCliente'] ."</td>
                <td> <a href='form-editar-cliente.php?id= ". $linha['idCliente'] ."'>Editar</a></td>
                <td> <a href='excluir-cliente.php?id= ". $linha['idCliente'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $lista = $cliente->listar();
        foreach ($lista as $linha){
            echo "<tr>
                    <td> ". $linha['idCliente'] ."</td>
                    <td> ". $linha['nomeCliente'] ."</td>
                    <td> ". $linha['cpfCliente'] ."</td>
                    <td> ". $linha['ufCliente'] ."</td>
                    <td> <a href='form-editar-cliente.php?id= ". $linha['idCliente'] ."'>Editar</a></td>
                    <td> <a href='excluir-cliente.php?id= ". $linha['idCliente'] ."'>Excluir</a></td>
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