<?php

require_once 'conexao.php';
function getDados() {
    
    /**@var PDO $pdo */

    $pdo = getConexao();

    $query = "SELECT * FROM `contato`";

    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $aDados = array(); 
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $aDados[] = $result;
    }

    return $aDados;
}

function getColunasTabela(){
    $html_colunas_tabela = '';

    $aDados = getDados();

if(count($aDados)) {
    foreach ($aDados as $aContato){

        $html_colunas_tabela .= "<tr>";

        $contato_id = $aContato["contato_id"];
        $nome       =       $aContato["nome"];
        $sobrenome  =  $aContato["sobrenome"];
        $endereco   =   $aContato["endereco"];
        $telefone   =   $aContato["telefone"];
        $email      =      $aContato["email"];
        $nascimento = $aContato["nascimento"];

        $html_colunas_tabela .= "<td>$contato_id</td>";
        $html_colunas_tabela .= "<td>$nome</td>";
        $html_colunas_tabela .= "<td>$sobrenome</td>";
        $html_colunas_tabela .= "<td>$endereco</td>";
        $html_colunas_tabela .= "<td>$telefone</td>";
        $html_colunas_tabela .= "<td>$email</td>";
        $html_colunas_tabela .= "<td>$nascimento</td>";

        $html_colunas_tabela .= "</tr>";
    }
} else {
    $html_colunas_tabela .= "<tr><td colspan=\"7\" align='center'>Sem dados para exibir</td></tr>";
}

    return $html_colunas_tabela;

}

function carregaContatos(){

$html_tabela = "<table border='1'>";

$html_tabela .= "<thead>";

$html_tabela .= "<tr>";

$html_tabela .= "<th>Id</th>";
$html_tabela .= "<th>Nome</th>";
$html_tabela .= "<th>Sobrenome</th>";
$html_tabela .= "<th>Endereco</th>";
$html_tabela .= "<th>Telefone</th>";
$html_tabela .= "<th>E-mail</th>";
$html_tabela .= "<th>Nascimento</th>";

$html_tabela .= "</tr>";

$html_tabela .= "</thead>";


$html_tabela .= "<tbody>";


$html_tabela .= getColunasTabela();


$html_tabela .= "</tbody>";

$html_tabela .= "</table>";


echo $html_tabela;

}

carregaContatos();