<?php

class Conexao {
    public static function pegarConexao() {
        $conexao = new PDO("mysql:host=localhost;
<<<<<<< HEAD
        dbname=bdlojacarros", "root", "299792458"); 
=======
        dbname=bdlojacarros", "admin", "Msql_20191"); 
>>>>>>> 43d49e28c7c2bd44457ffdfb5c5f9a0c4ce82faa
        /*new PDO(
            tipo:host=local;dbname=nome do banco
            , usuário de acesso ao banco
            , senha de acesso ao banco
            )
            */
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}