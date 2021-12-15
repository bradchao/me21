<?php

 $a = 10; $b = 3;
 // && || => 智慧型判斷; & | => 二進位運算的判斷
 if(++$a<=10 & --$b >=3){
     echo"OK:a={$a};b={$b} " .rand(0,100);
 }else{
     echo"XX:a={$a};b={$b} " .rand(0,100);
 }
?>
<hr />
<?php
    $x = 1; $y = 2;
    echo $x | $y;
?>