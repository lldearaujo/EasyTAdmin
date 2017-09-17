<?php
require_once ('../model/db.class.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$permissoes = $_POST['permissoes'];
$permissao = "";
$num = count($permissoes);
$objDb = new db();
$link = $objDb->conecta_mysql();

//percorrer o vetor permissoes
for ($i=0; $i<$num; $i++)
    $permissao = $permissao. $permissoes[$i]. ",";

    echo $nome.'<br>';
echo $descricao.'<br>';
echo $permissao.'<br>';

//Comoando sql que será inserido no banco
$sql = "INSERT INTO `permissoes`(`nome`, `descricao`, `permissoes`) VALUES ('$nome','$descricao','$permissao')";

// executar a query
if (mysqli_query($link, $sql)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cadastro realizado com sucesso!')
    window.close();
    </SCRIPT>");
} else {
    echo 'Erro ao registrar a permissão!';
}

?>
    
    
    