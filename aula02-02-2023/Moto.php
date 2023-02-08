<?php

require_once ("Veiculo.php");
class Moto extends Veiculo {

    public $cilindrades;

    public function empinar(){
        echo '<br>empinando moto<br>';
    }

    public function mostrarCilindradas(){
        return $this->cilindradas;
    }
}