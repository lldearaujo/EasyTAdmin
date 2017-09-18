<?php
require_once ('../model/db.class.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$abas = $_POST['abas'];
$aba = "";
$num = count($abas);
$objDb = new db();
$link = $objDb->conecta_mysql();

//percorrer o vetor permissoes
for ($i=0; $i<$num; $i++)
    $aba = $aba. $abas[$i]. ",";

    echo $nome.'<br>';
echo $descricao.'<br>';
echo $aba.'<br>';

//Comoando sql que será inserido no banco
$sql = "INSERT INTO `permissoes`(`nome`, `descricao`, `abas`) VALUES ('$nome','$descricao','$aba')";

// executar a query
if (mysqli_query($link, $sql)) {
    //Verificar se há condições existentenes
    /*
    if (){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Cadastro realizado com sucesso!')
        window.location.href='../views/cadastra_usuario.php?'.$condicao;
        </SCRIPT>");
        
    } else {
        
    }*/
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Cadastro realizado com sucesso!')
    window.close();
    </SCRIPT>");
} else {
    echo 'Erro ao registrar a permissão!';
}

?>
    
    
    