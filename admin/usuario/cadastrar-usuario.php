<?php
    require_once 'global.php';
    try {
    $usuario = new Usuario();
    $usuario->setNomeUsuario($_POST["txtNome"]);
    $usuario->setLoginUsuario($_POST["txtEmail"]);
    $usuario->setSenhaUsuario($_POST["txtSenha"]);
    
    if($usuario->cadastrar($usuario) != false)
        header("Location: sucesso-cadastro.html");
    }catch(Exception $erro) {
        echo '<pre>';
        print_r($erro);
        echo '</pre>';
        echo $erro->getMessage();
    }