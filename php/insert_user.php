<?php
include 'conexao.php';

//trazer os dados do formulario

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$Setor = $_POST ['setor'];
$Senha = $_POST ['senha'];

$sql = "INSERT INTO `tb_user` VALUES (NULL, '$nome', '$email', '$setor', '$senha');";


if ($conexao->query($sql) === TRUE) {
  echo "<script>alert('Usuario cadastrado com sucesso!');history.back();</script)";
} 


$conexao->close();
?>