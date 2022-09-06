<?php
    $especialidade = $_POST['especialidadeSelecionada'];
    
    require "conexao.php";
    
    $sql = "SELECT * FROM medico where especialidade='$especialidade'";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        
    } else{
        echo"Sem Resultados!";
    }
?>