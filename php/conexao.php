<?php

class Conexao{
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "bek";
    private $connection;

    public function __construct(){
        $this->iniciarConexao();
    } 

    private function iniciarConexao(){
        $this->connection = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
        if (!$this->connection){
            die('Não foi possível conectar: ' . mysql_error());
        }        
    }

    public function fecharConexao(){
        mysqli_close($this->connection);
    }

    public function getConexao(){
        return $this->connection;
    }
}

?>