<?php
    require "conexao2.php";
    
    $id_usuario = $_SESSION['id'];
    
    $sql = "SELECT * FROM consultas where id_usuario='$id_usuario'";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo"<div id=''></div>";
        }
    }
?>