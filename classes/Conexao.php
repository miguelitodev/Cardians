<?php

class Conexao {
    public static function pegarConexao() {
        // Login tabata
        // $conexao = new PDO("mysql:host=localhost;
        // dbname=bdlojacarros", "admin", "Msql_20191"); 
        //Login miguel
        $conexao = new PDO(
            "mysql:host=localhost;
            dbname=bdlojacarros",
            "root",
            "");  
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}