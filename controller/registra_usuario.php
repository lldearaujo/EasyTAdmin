<?php
require_once ('../model/db.class.php');

$nome = $_POST['nome'];
$username = $_POST['username'];
$password = md5($_POST['password']); // Recebe informa��o de senha e criptografa
 

$objDb = new db();
$link = $objDb->conecta_mysql();

$usuario_existe = false;

// verifica se o usu�rio j� existe
$sql = "SELECT * FROM `usuarios` WHERE usuario = '$username' ";
if ($resultado = mysqli_query($link, $sql)) {
    $dados_usuario = mysqli_fetch_array($resultado);
    if (isset($dados_usuario['usuario'])) 
    {
        $usuario_existe = true;
    }
}else{
    echo 'Erro ao tentar localizar o registro de usu�rio';
}

if($usuario_existe){
    $retorno_get = '';
    
    if($usuario_existe){
        $retorno_get.="erro_usuario=1&";
    }
    
    header('Location: ../views/cadastra_usuario.php?'.$retorno_get);
    die();
}

$sql = "INSERT INTO `usuarios`(nome, usuario, senha) VALUES ('$nome','$username','$password')";

// executar a query
if (mysqli_query($link, $sql)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cadastro realizado com sucesso!')
    window.location.href='../views/cadastra_usuario.php';
    </SCRIPT>");
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Erro ao registrar o usu�rio!')
    window.location.href='../views/cadastra_usuario.php';
    </SCRIPT>");
}

?>
    
    
    