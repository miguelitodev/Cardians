<?php
    require_once 'global.php';

    try{
        header("Location: form-cadastrar-usuario.php");
        $usuario = new Usuario();
        $usuario->setIdUsuario($_GET['id']);
        $usuario->setNomeUsuario($_POST['nome']);
        $usuario->setLoginUsuario($_POST['login']);
        $usuario->setSenhaUsuario($_POST['senha']);
        echo $usuario->editar($usuario);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>