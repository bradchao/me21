<?php
    $a = 10; $b = 3;
    if (++$a <= 10 || $b-- >= 3){
        echo "OK: a={$a}; b={$b} : " . rand(0,100);
    }else{
        echo "XX: a={$a}; b={$b} : " . rand(0,100);
    }
?>

1. || => true => OK, false => true/false
2. ++$a <= 10 => 因為++在前, 所以先++, 11 <= 10
3. $b-- >= 3 => 因為--在後. 所以先比對或是運算, 之後再來進行--