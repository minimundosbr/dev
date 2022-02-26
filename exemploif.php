<?php
    $t = date("hour");
    
    echo "<p>Nesse exato momento, no servidor, são " . $t;
    echo ", e vai mandar a seguinte mensagem:</p>";

    if ($t <= "11"){
        echo "Tenha um ótimo dia!";
    } 
    elseif ($t < "20") {
        echo "Tenha uma ótima tarde!";
    }
    elseif($t <= "23"){
        echo "Tenha uma ótima noite :)";
    }
    else {
        echo "Vai dormir doido, ja ta de madrugada >:(";
    }
?>