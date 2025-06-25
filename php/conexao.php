<?php
//vaariaves que receberam os dados para inserir na função de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$database = "bd_chamado_database";

//função de conexão como  banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $database);

//checar conexao
if ($conexao->connect_error) {
die("Connection failed: " .$conexao->connect_error);                                                                                                                                                   
} 

?>