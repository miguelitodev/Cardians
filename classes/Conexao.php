<?php

class Conexao {
    public static function pegarConexao() {
    
        // define("HOST", "localhost");
        // define("DBNAME", "bdlojacarros");
        // define("USERNM", "admin");
        // define("PASSWD", "Msql_20191");

        $conexao = new PDO("mysql:host=fdb16.awardspace.net;
        dbname=3234198_bdlojacarros", "3234198_bdlojacarros", "c299792458"); 
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}