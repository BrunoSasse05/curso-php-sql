<?php

require_once ("Veiculo.php");
class Carro extends Veiculo{

    public $quantidadePortas;
    
    public function abrirPorta($porta){
        echo 'Porta' . $porta . 'aberta.';
    }
}