<?php

class Cliente {

    public $nome;
    public $email;
    public $telefone;

    public function exibir(){
        echo "Nome: " . $this->nome . "E-mail: " . $this->email . "Telefone: " . $this->telefone;
    }

}

$oCliente->nome = "Maria";