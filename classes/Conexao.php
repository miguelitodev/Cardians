<?php

class Conexao {
    public static function pegarConexao() {
        
    define("HOST", "localhost");
    define("DBNAME", "bdlojacarros");
    define("USERNM", "root");
    define("PASSWD", "299792458");

    $conexao = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNM, PASSWD);
        
        
        
        
        
        // Login G4L1LE0
        
        // Login tabata
        /*
        $conexao = new PDO("mysql:host=localhost;
        dbname=bdlojacarros", "admin", "Msql_20191");
        */
        //Login miguel
        /*
        $conexao = new PDO(
            "mysql:host=localhost;
            dbname=bdlojacarros",
            "root",
            "");
        */  

        
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}