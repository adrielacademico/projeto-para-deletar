<?php

namespace App\PDO;

use PDO;
use PDOException;

class ConexaoBD
{
    public static function criarConexao() : PDO
    {
        define('DB_SERVER'  ,'localhost');
        define('DB_NAME'    ,'db_curso');
        define('DB_USER'    ,'root');
        define('DB_PASSWORD','123456');

        try {
            
            $conexao = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexao;

        } catch (PDOException $e) {
            echo "A conexão deu pau... " . $e->getMessage();
        }
    }
}