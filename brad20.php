<?php
    // Loop 迴圈
    $i = 0;
    for ( init() ; $i < 10 ; drawLine() ){
        echo "{$i}<br />";
        $i++;
    }

    function init(){
        echo 'Brad<br />';
    }

    function drawLine(){
        echo '<hr />';
    }


?>