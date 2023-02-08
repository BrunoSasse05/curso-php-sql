<?php

class Clientes {

    public $nome;
    public $email;
    public $telefone;

    public function exibir01(){
        return $this->nome;
        
    }


    public function exibir02(){
        return $this->email;
        
    }

    public function exibir03(){
        return $this->telefone;
        
    }
    
}

$cliente = new Clientes();
$cliente->nome = "Aluno";
$cliente->email = "aluno@gmail.com";
$cliente->telefone = 988115557;

echo 'Nome: ' . $cliente->exibir01() . '<br>';

echo 'E-mail: ' . $cliente->exibir02() . '<br>';

echo 'Telefone: ' . $cliente->exibir03() . '<br>';