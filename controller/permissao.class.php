<?php
require_once ('../model/db.class.php');

// Query para consulta e compara��o no banco.
$sql = "SELECT * FROM `permissoes`";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// Condi��o para tratar erros de consulta ou sintax.
if ($resultado_id) {
    $dados_usuario = array();
    //Recupera em formato de ARRAY o retorno da pesquisa do banco de dados
    while ($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC))
    {
        $dados_usuario['nome'] = $linha;
    }
    foreach ($dados_usuario as $usuario) {
       $_echo ($usuario['nome']);
    }
    
    
} else {
    echo 'Erro na execu��o da consulta!';
}

function permissao(){
    //Atributos
    foreach ($dados_usuario as $usuario) {
        $nome[] = $dados_usuario['nome'];
    }
    
    return $nome;    
}




?>