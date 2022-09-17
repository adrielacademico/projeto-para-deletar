<?php

namespace App\Controllers;

use App\PDO\CursoPDO;

class CursoController
{
    public function listar()
    {
        $cursoPDO = new CursoPDO();
        $cursos = $cursoPDO->listar();

        include('views/cursos/listar.php');
    }

    public function formCadastrar()
    {
        include('views/cursos/form-cadastrar.php');
    }

    public function salvarCurso(array $post)
    {
        var_dump("cheguei no controlador", $post);
    }



}