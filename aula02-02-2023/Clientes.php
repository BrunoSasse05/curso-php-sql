<?php

class Clientes {

    public $nome;
    public $objeto;

    public function exibir(){
        return $this->$nome;
    }

}

$oCliente = new Clientes;
$oClientes->nome = "Aluno";
$oClientes->objeto = "Objeto";

echo 'Dados:' . $oCliente->exibir();