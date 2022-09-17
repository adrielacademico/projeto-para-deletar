<?php

namespace App\Models;

class CursoModel
{
    private $id;
    private $nome;
    private $horario;
    private $data_inicio;
    private $data_conclusao;
    private $descricao;
    private $ativo;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

 
    public function getData_inicio()
    {
        return $this->data_inicio;
    }

    public function setData_inicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function getData_conclusao()
    {
        return $this->data_conclusao;
    }

    public function setData_conclusao($data_conclusao)
    {
        $this->data_conclusao = $data_conclusao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }
}