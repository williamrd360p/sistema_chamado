<?php
//vaariaves que receberam os dados para inserir na função de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodados = "bd_sistema_chamado";

//função de conexão como  banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $bancodados);

if ($conexao->connect_error) {
die("error:".$conexao->connect_error); 
} 



?>