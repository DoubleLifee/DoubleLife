<?php
session_start();

if (isset($_POST['senha'])){
// Dados do Formulário
$campoemail = $_POST["email"];
$camposenha = $_POST["senha"];

//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuario where email='$campoemail'";

//Executa o SQL
$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
 
	//Se a consulta tiver resultados
	if ($result->num_rows > 0) {
		
			if($camposenha == $row["senha"]){
				$_SESSION['nome'] = $row["nome"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['senha'] = $row["senha"];
				$_SESSION['tipo'] = $row["tipo"];

                if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
                    if(isset($_SESSION["tipo"])){
                        if($_SESSION["tipo"]=="a"){
                            header("Location: /menu-admin/indexadmin.php");
                        } elseif($_SESSION["tipo"]=="c"){
                            header("Location: /index.php");
                        } else{
                            header("Location: /menu-med/indexmedico.php");
                        }
                   }
                }
				exit;
			}else{
				echo 'Senha Inválida'; 
				header( "refresh:5;url=/menu-cliente/cadastro-login.php" );
				exit;  
			}
	//Se a consulta não tiver resultados  			
	} else {
		header("'Location:/menu-cliente/cadastro-login.php'"); //Redireciona para o form
        
		exit; // Interrompe o Script
	}
//Se o usuário não usou o formulário
} else {
    header("Location:/menu-cliente/cadastro-login.php"); //Redireciona para o form
    exit; // Interrompe o Script
}

//Fecha a conexão.
$conn->close();
?>