<?php
require_once ('../model/db.class.php');

// Query para consulta e comparaчуo no banco.
$sql = "SELECT * FROM `usuarios`";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// Condiчуo para tratar erros de consulta ou sintax.
if ($resultado_id) {
    $dados_usuario = array();
    //Recupera em formato de ARRAY o retorno da pesquisa do banco de dados
    while ($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC))
    {
        $dados_usuario[] = $linha;
    }
    foreach ($dados_usuario as $usuario) {
        echo ($usuario['nome']);
    }    
} else {
    echo 'Erro na execuчуo da consulta!';
}

?>