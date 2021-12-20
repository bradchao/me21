<?php
    $a = 7;

    function changA(){
        global $a;
        $a = 100;
    }
    changA();

    echo $a;
?>