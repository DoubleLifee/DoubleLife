<?php
require "conexao.php";

// Leitura do Formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];

$hash = password_hash($senha, PASSWORD_BCRYPT);

// Criando o SQL - inserindo na tabela contato os campos em seguida
$sql = "INSERT INTO usuarios (nome, email, senha, cpf, cep, telefone, endereco) VALUES ('$nome', '$email', '$hash', '$cpf', '$cep', '$telefone', '$endereco')";

if ($conn->query($sql) === TRUE) {
  //echo "Cadastro feito com sucesso!";
  header("Location:/index.php");
  
  //include 'log.php';
} else{
    echo("Erro!");
}
$conn->close();  
?>