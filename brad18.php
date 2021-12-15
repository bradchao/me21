<?php
    $a = '10';
    switch($a){
        case 1:
            echo 'A';
            break; 

        case 10:
            echo 'B1';
            // break; 

        default:
            echo 'D';
            //break;

        case 100:
            echo 'C';
            break;             

    }
    echo '<hr />' . rand(0,100);
?>