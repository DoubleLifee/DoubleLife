<?php
session_start();

//Cria variáveis com a sessão.
$logado = $_SESSION['nome'];

//Verifica o acesso.
if($_SESSION['tipo']=="a"){

//Faz a conexão com o BD.
require 'conexaoadmin.php';

//Lê a página que será exibida
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 5;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM usuario ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM usuario";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//Recupera o resultado da contagem
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

if($contagem%$total==0){
    $contagem=$contagem/$total;
}else{
    $contagem=$contagem/$total + 1;    
}

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
     <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <title>Controlar Usuários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/estilos/tabelausuarios.css">
    <link rel="stylesheet" href="/estilos/styleadmin.css">
    
    </head>
    <body>
        <div class = "header">
        <?php
        //Coloca o menu que está no arquivo
        include 'menu-admin.php';
        ?>
        </div>
      
        <div class="conteudo" style = "padding-top: 120px;">
                <form method="post" action="pesquisa.php" id="form-pesquisa" style = "float: right">
                    
                    <div class = "Pesquisa">
       
                            <input placeholder="Buscar Usuários..." name="pesquisa" type="text">
                            
                        <button type="submit">Pesquisar</button>
                    </div>
                </form>
        
        <table style = "text-align: center">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>CPF</th>
                <th>CEP</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Tipo</th>
                
                <!-- <th colspan="2">Ações</td></tr> -->
            				
            	<?php
            	  while($row = $result->fetch_assoc()) {
            		echo "<tr><td>" .
            		$row["id"] . "</td><td>" .
            		$row["nome"] . "</td><td>" .
            		$row["email"] . "</td><td>" .
            		$row["senha"] . "</td><td>" .
            		$row["cpf"] . "</td><td>" .
            		$row["cep"] . "</td><td>" .
            		$row["telefone"] . "</td><td>" .
            		$row["data_nascimento"] . "</td><td>" .
            		$row["tipo"] . "</td>";
            		
            		//echo "<td><a href='usuarioeditarform.php?id=" . $row["Id"] . "'><img src='./imagens/editar.png' alt='Editar Usuário'></a></td><td><a href='usuarioexcluir.php?id=" . $row["Id"] . "'><img src='./imagens/excluir.png' alt='Excluir Usuário'></a></td></tr>";
            	  }
            	?>
        				
        </table>
        </div>
            <div class="pagination">
                <?php for($i=1; $i <= $contagem; $i++) {
                        echo "<a href='controlarusuarios.php?pag=$i'>$i</a>";
                } 
            	?>   
            </div>  
                  <!-- <a href="usuariocadastrartela.php"><img src="./imagens/incluir.png" alt="Incluir Usuário"></a> -->
            </div> 
            <?php
                include "footer-admin.php";
            ?>
    </body>
</html>
<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	
//Fecha a conexão.	
	$conn->close();
	
//Se o usuário não usou o formulário
} else {
    header('Location: index.html'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 