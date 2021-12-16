<?php
    $p = array(1 => 0, 0, 0, 0, 0, 0);

    for($i = 0; $i < 100000 ; $i++){
        $point = rand(1,9);
        $p[ $point>6? $point-6 : $point ]++;
    }

    for ($i = 1; $i <= 6; $i++){
        echo "{$i}點出現{$p[$i]}次<br />";
    }

    echo '<br />';

    foreach($p as $k => $v){
        echo "{$k}點出現{$v}次<br />";
    }

?>