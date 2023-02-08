<?php

require_once ("Carro.php");

$oCarro =  new Carro('15000,00');
$oCarro->modelo = 'Fusca';
$oCarro->cor = 'Branco';
$oCarro->quantidadePortas = 2;

echo $oCarro->mostraModelo() . $oCarro->ligar();

echo $oCarro->mostrarPreco();

echo $oCarro->abrirPorta("direita");

echo '<br>######################################################<br>';

$oCarro2 =  new Carro();
$oCarro2->modelo = 'Civic';
$oCarro2->cor = 'Prata';
$oCarro2->quantidadePortas = 4;

echo $oCarro2->mostraModelo() . $oCarro2->ligar();

echo $oCarro2->mostrarPreco();

echo $oCarro2->abrirPorta("esquerda");

echo '<br>######################################################<br>';

require_once("Moto.php");
$oMoto =  new Moto();
$oMoto->modelo = 'Honda';
$oMoto->cor = 'Prata';
echo $oMoto->mostraModelo() . $oMoto->ligar();

echo $oMoto->empinar();