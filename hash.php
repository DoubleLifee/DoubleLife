<?php
    $text = "123";
    
    $hash = password_hash($text, PASSWORD_BCRYPT);
    
    echo "Gerei isso: " . $hash;
    
    $resultado = password_verify($text, $hash);
    
    if($resultado){
        echo'<br><br>Senha Ok!';
    } else{
        echo '<br><br>Senha Errada!';
    }
?>