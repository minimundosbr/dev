<?php
    $t = date("hour");
    
    echo "<p>Nesse exato momento, no servidor, são " . $t;
    echo ", e vai mandar a seguinte mensagem:</p>";

   switch ($t){
        
        case "04" :
        case "05" :
        case "06" :
        case "07" :
        case "08" :
        case "09" :
        
        case "10" :
        echo "Tenha um ótimo dia!";
        break;
        
        case "11" :
        case "12" :
        case "13" :
        case "14" :
        case "15" :
        case "16" :
        case "17" :

        case "18" :
            echo "Tenha uma ótima tarde!";
            break;
        
        case "19" :
        case "20" :
        case "21" :
        case "22" :
        
        case "23" :
            echo "Tenha uma ótima noite!";
            break;
        default :
                echo "Boa madrugada meu guerreiro!";
   }
   
    }
?>