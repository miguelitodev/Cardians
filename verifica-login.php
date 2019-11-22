<?php
    
    $login = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    
    if($login == "admin@admin.com" && $senha == "admin") {
        header("Location: admin/menu-admin.php");
        session_start();
        $_SESSION["login"] = $_POST["txtEmail"];
        $_SESSION["senha"] = $_POST["txtSenha"];
        $_SESSION["logged"] = true;
    }
    else {
        echo(" <script> alert('Usuário ou senha incorreto(s)') </script> ");
        echo(" <script> window.location.href = 'login.html'; </script> ");
    }