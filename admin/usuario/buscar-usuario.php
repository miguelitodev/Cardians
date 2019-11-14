<?php

require_once 'global.php';

try{

    $usuario = new Usuario();

    if(!empty($_GET['campoPesquisa'])){

        $campoPesquisa = $_GET['campoPesquisa']."%";
        $lista = $usuario->pesquisar($campoPesquisa);
        
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idUsuario'] ."</td>
                <td> ". $linha['nomeUsuario'] ."</td>
                <td> ". $linha['loginUsuario'] ."</td>
                <td> <a href='form-editar-usuario.php?id= ". $linha['idUsuario'] ."'>Editar</a></td>
                <td> <a href='excluir-usuario.php?id= ". $linha['idUsuario'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $lista = $usuario->listar();
        foreach ($lista as $linha){
            echo "<tr>
                    <td> ". $linha['idUsuario'] ."</td>
                    <td> ". $linha['nomeUsuario'] ."</td>
                    <td> ". $linha['loginUsuario'] ."</td>
                    <td> <a href='form-editar-usuario.php?id= ". $linha['idUsuario'] ."'>Editar</a></td>
                    <td> <a href='excluir-usuario.php?id= ". $linha['idUsuario'] ."'>Excluir</a></td>
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