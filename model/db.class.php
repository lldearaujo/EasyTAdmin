<?php 

class db {
    private $host = 'localhost';
    private $usuario = 'admin';
    private $senha = '6KOaNM8Jum4xbPj0';
    private $database = 'easyt';
    
    
    public function conecta_mysql(){
        //criar conexao
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
        
        //ajustar o charset de comunicacao entre a aplicacao e o banco de dados
        mysqli_set_charset($con,'utf8');
        
        //Verificar erros de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar conectar se com o Banco de Dados.'. mysqli_connect_error();
        }
        
        return $con;
    }
           
}

?>