<?php
require "conexao.php";

// Leitura do Formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$dt_nasci = $_POST["dt_nasci"];

// Criando o SQL - inserindo na tabela contato os campos em seguida
$sql = "INSERT INTO usuario (nome, email, senha, cpf, cep, telefone, data_nascimento) VALUES ('$nome', '$email', '$senha', '$cpf', '$cep', '$telefone', '$dt_nasci')";

if ($conn->query($sql) === TRUE) {
  //echo "Cadastro feito com sucesso!";
  header("Location:/index.php");
}
$conn->close();  
?>