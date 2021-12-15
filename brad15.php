<?php
    $a = null;  // 0, 100, 0.00123, '0', '', '00', ' ', '123', true, false
    if ($a){
        echo 'OK' . rand(0,100);
    }else{
        echo 'XX' . rand(0,100);
    }
?>