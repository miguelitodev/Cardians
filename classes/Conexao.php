<?php

class Conexao {
    public static function pegarConexao() {
    
        // define("HOST", "localhost");
        // define("DBNAME", "bdlojacarros");
        // define("USERNM", "admin");
        // define("PASSWD", "Msql_20191");

        $conexao = new PDO("mysql:host=localhost;
<<<<<<< HEAD
        dbname=bdlojacarros", "root", "299792458"); 
=======
        dbname=bdlojacarros", "admin", "Msql_20191"); 
>>>>>>> 462ac6694f7dbfd1acaed0f3273d9b388c42f91a
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        return $conexao;
    }
}