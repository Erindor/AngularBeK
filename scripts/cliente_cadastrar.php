<?php
include_once ("cliente_principal.php");
$conexao = new Conexao();

$dados = file_get_contents("php://input");
$request = json_decode($dados);

$cliente = new Cliente();
$cliente->setNome($request->nome);
$cliente->setEmpresa($request->empresa);
$cliente->setTelefone1($request->telefone1);
$cliente->setTelefone2($request->telefone2);
$cliente->setEmail($request->email);

$clienteDAO = new ClienteDAO($conexao->getConexao());
$response = $clienteDAO->cadastrarCliente($cliente);

$conexao->fecharConexao();
echo $response;

?>