<?php

function iniciaAulaTiposDados(){

    // echo 'ola mundo';

    // Tipo Numerico - int - long

    // Tipo Texto(String) - Classe String

    // Tipo Logico(Verdadeiro/Falso ou False/True

    // Tipo Objeto

    $var = "1.2 teste gelvazio";

    var_dump($var);

    echo '<br>';

    $var2 = 1515;

    $calculaImposo = true;

    var_dump($calculaImposo);

    $objetoPessoa = new stdClass();
    $objetoPessoa->codigo = 1;
    $objetoPessoa->nome = "Joao";
    $objetoPessoa->idade = 36;

    echo ("<br>");
    echo ("<br>");
    echo '<pre>' . var_dump($objetoPessoa) . '</pre>';
}

// iniciaAulaTiposDados();

// chamando arquivos php e passar parametros



// Passando parametros para a url via GET

$nome = "Gelvazio";
$idade = 36;

$parametros = "?nome=" . $nome . "&idade=" . $idade;

// url base
$urlBase = "http://localhost/curso-php-mysql/aula-30-01-2023/arquivo.php";

// juntar os parametros na url base
$urlBase = $urlBase . $parametros;

echo '<a href="' . $urlBase . '">Chamando Arquivo PHP</a>';

//###########################STRINGS####################################
$urlBase = "http://localhost/curso-php-mysql/aula-30-01-2023/string.php";

$palavra = "arara";
$parametros = "?palavra=" . $palavra;

// juntar os parametros na url base
$urlBase = $urlBase . $parametros;

echo '<br><a href="' . $urlBase . '">Chamando Arquivo String</a>';



































