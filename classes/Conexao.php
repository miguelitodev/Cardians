<?php

class Conexao {
    public static function pegarConexao() {
        $conexao = new PDO("mysql:host=localhost;
        dbname=bdlojacarros", "root", "299792458"); 
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