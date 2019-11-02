<?php

require_once 'global.php';

try{
    $marca = new Marca();
    if(!empty($_POST['campoPesquisa'])){
        $campoPesquisa = $_POST['campoPesquisa']."%";
        $marca = $marca->pesquisar($campoPesquisa);
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idMarca'] ."</td>
                <td> ". $linha['nomeMarca'] ."</td>
                <td> <a href='form-editar-marca.php?id= ". $linha['idMarca'] ."'>Editar</a></td>
                <td> <a href='excluir-marca.php?id= ". $linha['idMarca'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $marca = $marca->listar();
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idMarca'] ."</td>
                <td> ". $linha['nomeMarca'] ."</td>
                <td> <a href='#?id= ". $linha['idMarca'] ."'>Editar</a></td>
                <td> <a href='#id= ". $linha['idMarca'] ."'>Excluir</a></td>
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