<?php

//Inicia a Sessуo
session_start();

require_once ('../model/db.class.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']); //Criptografar senha antes de comparar


// Query para consulta e comparaчуo no banco.
$sql = "SELECT usuario, id FROM `usuarios` WHERE usuario='$usuario' AND senha='$senha' ";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// Condiчуo para tratar erros de consulta ou sintax.
if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id); //Recupera em formato de ARRAY o retorno da pesquisa do banco de dados
    if(isset($dados_usuario['usuario'])){
        //Caso o usuсrio exista
        //cria as variсveis de sessуo
        $_SESSION['id'] = $dados_usuario['id'];
        $_SESSION['usuario'] = $dados_usuario['usuario'];
        $_SESSION['nome'] = $dados_usuario['nome'];
        header('Location: ../index.php');
    }else {
        header('Location: ../views/login.php?erro=1');
    }
} else {
    echo 'Erro na execuчуo da consulta!';
}

?>