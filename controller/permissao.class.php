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
        $dados_usuario[] = $linha;
    }
    //foreach ($dados_usuario as $usuario) {
    //    $_echo ($usuario['nome']);
    //}
    
    
} else {
    echo 'Erro na execu��o da consulta!';
}

class Permissao{
    //Atributos
    var $nome = array("Admin","Andrea");
    var $descricao;
    var $abas;
    
    
    //m�todos    
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getAbas()
    {
        return $this->abas;
    }
    public function setNome($nome_escolhido){
        $this->nome = $nome_escolhido;
    }    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setAbas($abas)
    {
        $this->abas = $abas;
    }
    
}




?>