<?php

echo 'listando os candidatos inscritos nas vagas de emprego...';

$arquivo = "listacandidatos.json";
if(file_exists($arquivo)) {
    
    $lista_candidatos = file_get_contents($arquivo);

    
    $lista_candidatos = json_decode($lista_candidatos, true);

    echo 'Candidatos inscritos:<br>';
    echo '<pre>' . print_r($lista_candidatos, true) . '</pre>';
}