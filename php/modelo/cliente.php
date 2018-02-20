<?php

class Cliente{
    private $idCliente;
    private $nome;
    private $empresa;
    private $telefone1;
    private $telefone2;
    private $email;

    public function __construct(){
    } 

    public function getNome(){
        return $this->nome;
    }

    public function getEmpresa(){
        return $this->empresa;
    }

    public function getTelefone1(){
        return $this->telefone1;
    }

    public function getTelefone2(){
        return $this->telefone2;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }

    public function setTelefone1($telefone1){
        $this->telefone1 = $telefone1;
    }

    public function setTelefone2($telefone2){
        $this->telefone2 = $telefone2;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}


?>