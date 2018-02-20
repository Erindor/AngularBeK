<?php

class ClienteDAO{
    private $conexao;

    public function __construct($conexao){
        $this->conexao = $conexao;
    }

    public function cadastrarCliente($cliente){
        try{
            $sql = "INSERT INTO `cliente`(`NOMECLIENTE`, `EMPRESA`, `TELEFONE1`, `TELEFONE2`, `EMAIL`) 
            VALUES (?,?,?,?,?)";

            $nome = $cliente->getNome();
            $empresa = $cliente->getEmpresa();
            $telefone1 = $cliente->getTelefone1();
            $telefone2 = $cliente->getTelefone2();
            $email = $cliente->getEmail();

            $stmt = $this->conexao->prepare($sql);
            $stmt->bind_param("sssss", $nome, $empresa, $telefone1, $telefone2, $email);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e){
            echo 'Erro ao cadastrar clienteDAO: ' . $e->getMessage();
            return false;
        }
        
    }
}
?>