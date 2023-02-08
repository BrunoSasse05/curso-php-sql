<?php

if(isset($_GET["palavra"])){
    $palavra = $_GET["palavra"];

    function testesString($palavra){
        echo 'Palavra:' . $palavra;
        //echo '<br>Iniciando com strings';
        echo '<br>';
        $tamanho = strlen($palavra);
        echo 'Tamanho:' . $tamanho;
        echo '<br>Percorrendo as letras da palavra';
        $aNovaPalavra = array();
        for($i = 0; $i < $tamanho; $i++) {
            $letra = $palavra[$i];
            echo '<br>Letra: ' . $letra . ' - posição:' . $i;

            $aNovaPalavra[] = $letra;
        }

        echo '<br>Nova Palavra:<br>';
        // Pega o tamanho do array
        $tamanho = count($aNovaPalavra);
        for($i = 0; $i < $tamanho; $i++) {
            $letra = $aNovaPalavra[$i];
            echo '<br>Letra Nova: ' . $letra . ' - posição:' . $i;
        }

        // Faça um algoritmo para verificar se uma palavra é
        // palindroma.
        // Palavra palindroma, da o mesmo nome de traz para
        // frente
    }

    function mostraPalavra($palavra){
        if(is_array($palavra)){
            $tamanho = count($palavra);
        } else if(is_string($palavra)){
            $tamanho = strlen($palavra);
        } else {
            throw new Exception("Palavra invalida!");
        }

        for($i = 0; $i < $tamanho; $i++) {
            $letra = $palavra[$i];
            echo '<br>Letra: ' . $letra . ' - posição:' . $i;
        }
    }

    function isPalindromo($palavra){
        if(is_array($palavra)){
            $tamanho = count($palavra);
        } else if(is_string($palavra)){
            $tamanho = strlen($palavra);
        } else {
            throw new Exception("Palavra invalida!");
        }

        // codigo verificando se e palindromo...
        $nova_palavra = "";
        for($i = 0; $i < $tamanho; $i++) {
            // VER POR QUE NAO PEGA A POSICAO ZERO COM STRLEN
            echo '<br>posicao: ' . $i. '<br>';

            $letra = $palavra[$i];

            echo '<br>Letra: ' . $letra . ' - posição:' . $i;

            $nova_letra   = $palavra[$tamanho - $i];
            $nova_palavra = $nova_palavra . $nova_letra;
        }

        $nova_letra   = $palavra[0];
        $nova_palavra = $nova_palavra . $nova_letra;

        $palindromo = false;
        if($palavra == $nova_palavra){
            $palindromo = true;
        }

        echo '<br><br>Nova Palavra=' . $nova_palavra . '<br><br>';

        if($palindromo){
            echo 'Palavra: ' . $palavra . ' é um Palindromo!';
        } else {
            echo 'Palavra: ' . $palavra . ' não é um Palindromo!';
        }
    }

    isPalindromo("pedro");

    isPalindromo("arara");

}  else {
    echo "Parâmetros invalidos!";
}