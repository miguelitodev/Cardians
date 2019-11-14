<?php
require_once 'global.php';
try {
    header('Location: form-cadastrar-usuario.php');

    $usuario = new Usuario();
    $usuario->setNomeUsuario($_POST["txtNome"]);
    $usuario->setLoginUsuario($_POST["txtEmail"]);
    $usuario->setSenhaUsuario($_POST["txtSenha"]);
    $usuario->cadastrar($usuario);

} catch (Exception $erro) {
    echo '<pre>';
    print_r($erro);
    echo '</pre>';
    echo $erro->getMessage();
}
