<?php

    $a = [11,22,33,44,55,66,77];
    var_dump($a);
    foreach($a as $k => $v){
        echo '$a[' . "{$k}" . "] = {$v}<br>";
    }

?>