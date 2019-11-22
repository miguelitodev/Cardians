<?php

class Conexao {
    public static function pegarConexao() {
    
        // define("HOST", "localhost");
        // define("DBNAME", "bdlojacarros");
        // define("USERNM", "admin");
        // define("PASSWD", "Msql_20191");

        $conexao = new PDO("mysql:host=localhost;
        dbname=bdlojacarros", "admin", "Msql_20191"); 
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}