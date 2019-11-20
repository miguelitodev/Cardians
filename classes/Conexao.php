<?php

class Conexao {
    public static function pegarConexao() {
    
        define("HOST", "localhost");
        define("DBNAME", "bdlojacarros");
        define("USERNM", "root");
        define("PASSWD", "");

        $conexao = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNM, PASSWD);    
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}