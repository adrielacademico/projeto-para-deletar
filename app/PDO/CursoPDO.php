<?php

namespace App\PDO;

use App\Models\CursoModel;
use PDO;

class CursoPDO
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = ConexaoBD::criarConexao();
    }

    public function listar()
    {
        $resultado = $this->pdo->query(
            'SELECT * FROM curso'
        );

        $cursos = $resultado->fetchAll(
            PDO::FETCH_CLASS, CursoModel::class
        );

        return $cursos;
    }
}