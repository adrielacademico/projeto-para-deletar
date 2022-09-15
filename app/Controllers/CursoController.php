<?php

namespace App\Controllers;

class CursoController
{
    public function listar()
    {
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