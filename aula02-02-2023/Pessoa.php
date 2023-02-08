<?php

class Pessoa {

    private $codigo;
    private $nome;

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     * @return Pessoa
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


}