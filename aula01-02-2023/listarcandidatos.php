<?php

function getCursosInteresse($oDados){
    $cursos_interesse = "";
    for($i = 1; $i <= 11; $i++){
        $chave = "opcao_curso_" . $i;
        $opcao = $oDados[$chave];

        if(intval($opcao) > 0){
            $codigo_curso = $i;
            if($cursos_interesse == ""){
                $cursos_interesse .= getDescricaoCursoInteresse($codigo_curso);
            } else {
                $cursos_interesse .= ",<br>" . getDescricaoCursoInteresse($codigo_curso);
            }
        }
    }

    return $cursos_interesse;

}

function listar_inscritos() {

    echo "<h4>Candidatos inscritos:</h4>";

    $arquivo = "listainscritos.json";
    if (file_exists($arquivo)) {
        
        $lista_candidatos = file_get_contents($arquivo);

        $lista_candidatos = json_decode($lista_candidatos, true);

        $html_tabela = getCabecalhoTabela();

        $html_linhas_tabela = "";

        foreach ($lista_candidatos as $oDados) {
            $email_inscrito = $oDados["email"];
            $nome_inscrito = $oDados["nome"];
            $cidade_inscrito = $oDados["cidade"];
            $telefone_inscrito = $oDados["telefone"];

            $cursos_interesse_inscrito = getCursosInteresse($oDados);

            $outros_cursos_solicitados_inscrito = $oDados["opcao_curso_outros"];

            $html_linhas_tabela .= "<tr>
                                        <td>$email_inscrito</td>
                                        <td>$nome_inscrito</td>
                                        <td>$cidade_inscrito</td>
                                        <td>$telefone_inscrito</td>
                                        <td>$cursos_interesse_inscrito</td>
                                        <td>$outros_cursos_solicitados_inscrito</td>
                                    </tr>";
        }

        $html_tabela .= $html_linhas_tabela;

        $html_tabela .= "</tbody>
    </table>";
        echo $html_tabela;
    } else {
        echo "Nao existem candidatos inscritos";
    }
}

function getCabecalhoTabela(){
    return "
    <style>
         * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap:10px;
                margin-top: 15px;
            }
    </style>
    <table border='1'>
        <thead>
            <th>E-mail</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Telefone</th>
            <th>Cursos de Interesse</th>
            <th>Outros Cursos solicitados</th>
        </thead>
        <tbody>";
}

function getDescricaoCursoInteresse($opcao){
    $descricao = "DESCRICAO EM BRANCO!";
    switch ($opcao){
        case 1:
            $descricao = "T??cnico em Agropecu??ria Integrado ao Ensino M??dio";
            break;

        case 2:
            $descricao = "T??cnico em Agroecologia Integrado ao Ensino M??dio";
            break;

        case 3:
            $descricao = "T??cnico em Inform??tica Integrado ao Ensino M??dio";
            break;

        case 4:
            $descricao = "T??cnico em Agropecu??ria Subsequente ao Ensino M??dio";
            break;

        case 5:
            $descricao = "T??cnico em Agrimensura Subsequente ao Ensino M??dio";
            break;

        case 6:
            $descricao = "Agronomia";
            break;

        case 7:
            $descricao = "Ci??ncia da Computa????o";
            break;

        case 8:
            $descricao = "Licenciatura em Pedagogia";
            break;

        case 9:
            $descricao = "Licenciatura em Matem??tica";
            break;

        case 10:
            $descricao = "Licenciatura em F??sica";
            break;
            
        case 11:
            $descricao = "P??s-Gradua????o em Agronomia: Sistemas Agr??colas Regionais";
            break;
    }

    return $descricao;
}

listar_inscritos();