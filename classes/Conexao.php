<?php

class Conexao {
    public static function pegarConexao() {
        $conexao = new PDO("mysql:host=localhost;
        dbname=bdlojacarros", "root", "299792458");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}