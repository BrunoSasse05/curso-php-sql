<?php

//echo 'Inicio do arquivo.php';
//echo '<br>';
//echo 'pegando dados dos parametros da url';

// Verificando se o parametro esta setado

$nome_parametro = "NOME EM BRANCO!";
$idade_parametro = "IDADE EM BRANCO!";
$validaDados = true;
if(isset($_GET["nome"])){
    $nome_parametro = $_GET["nome"];
} else {
    $validaDados = false;
}

if(isset($_GET["idade"])){
    $idade_parametro = $_GET["idade"];
} else {
    $validaDados = false;
}

// se a variavel for 'true', entra nesta condicao...
if($validaDados){
    $frase = "Meu nome é " . $nome_parametro . ' 
    e tenho ' . $idade_parametro . ' anos de idade.';

    echo '<br><br>' . $frase;
} else {
   echo "Parâmetros invalidos!";
}























